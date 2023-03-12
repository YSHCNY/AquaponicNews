#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

const char *ssid = "wifi ni lydia"; // Wifi Name
const char *password = "salvador12345"; // Wifi Password

const char *host = "http://192.168.12.111"; // IP Address

void setup() {
  pinMode(LED_BUILTIN, OUTPUT); 
  pinMode(D0, OUTPUT); 
  pinMode(D1, OUTPUT); 
  pinMode(D2, OUTPUT); 

  delay(1000);
  Serial.begin(115200);
  WiFi.mode(WIFI_OFF);
  delay(1000);
  WiFi.mode(WIFI_STA);
  
  WiFi.begin(ssid, password);
  Serial.println("");

  Serial.print("Connecting");

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  HTTPClient http;
  WiFiClient client;
  String getData, Link, path;
  path = "/AquaponicNews/php/get.php";  
  getData = "?sensor=PH";
  Link = host + path + getData;
  
  http.begin(client, Link);
  
  int httpCode = http.GET();
  String payload = http.getString();

  Serial.println(httpCode);
  Serial.println(payload);

  if (payload == "ACIDIC") {
    digitalWrite(D0, HIGH);
    Serial.println("LED1: ON ;");
  } else 
  if (payload == "NEUTRAL") {
    digitalWrite(D1, HIGH);
    Serial.println("LED2: ON ;");
  } else
  if (payload == "ALKALINE") {
    digitalWrite(D2, HIGH);
    Serial.println("LED3: ON ;");
  }
  
  http.end();
  delay(1000);
}
