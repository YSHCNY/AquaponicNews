#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <OneWire.h>
#include <DallasTemperature.h>

#define ONE_WIRE_BUS 4//D2 pin of nodemcu

OneWire oneWire(ONE_WIRE_BUS);
DallasTemperature sensors(&oneWire);// Pass the oneWire reference to Dallas Temperature.

const char *ssid = "VirusConnector"; // Wifi Name
const char *password = "Br@14344"; // Wifi Password

const char *host = "http://192.168.1.17"; // IP Address

void setup() {
  pinMode(LED_BUILTIN, OUTPUT);   
  pinMode(D0, OUTPUT); 
  pinMode(D1, OUTPUT); 
  pinMode(D2, OUTPUT); 
  sensors.begin();

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
  
  String postData, Link, path;
  path = "/AquaponicNews/php/post.php";  
  float ph = random(0.00, 15.00);
  postData = "watertemp=" + WTsensorValue() + "&phvalue=" + String(ph);
  Link = host + path;
  
  http.begin(client, Link);
  http.addHeader("Content-Type", "application/x-www-form-urlencoded"); 
  
  int httpCode = http.POST(postData);
  String payload = http.getString();
  
  Serial.println(httpCode);
  Serial.println(payload);
  Serial.println(WTsensorValue());
  http.end();
  delay(5000);
}

String WTsensorValue() {
  sensors.requestTemperatures();    
  float temp = sensors.getTempCByIndex(0);
  delay(500);
  String tempSend = String(temp);
  return tempSend;
}
