#include <ESP8266WiFi.h>
#include <PubSubClient.h> // Biblioteca usada, baixe e instale se não a tiver, link abaixo

#define D0    16
#define D1    5
#define D2    4
#define D3    0
#define D4    2
#define D6    12
#define D7    13
#define D8    15
#define D9    3
#define D10   1

int porta_rele1 = 12;

int hora1;
int min1;
int seg1;
int quant1;
int hora2;
int min2;
int seg2;
int quant2;
int hora3;
int min3;
int seg3;
int quant3;


const char* ssid = " "; //Aqui o nome da sua rede local wi fi
const char* password =  " "; // Aqui a senha da sua rede local wi fi
const char* mqttServer = "postman.cloudmqtt.com"; // Aqui o endereço do seu servidor fornecido pelo site
const int mqttPort = 16980; // Aqui mude para sua porta fornecida pelo site
const char* mqttUser = " "; //  Aqui o nome de usuario fornecido pelo site
const char* mqttPassword = " "; //  Aqui sua senha fornecida pelo site
char EstadoSaida = '0';
WiFiClient espClient;
PubSubClient client(espClient);

void mqtt_callback(char* topic, byte* payload, unsigned int length);


#include <Wire.h>
#include "RTClib.h"

char daysOfTheWeek[7][8] = { "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado" };

RTC_DS3231 rtc;

int segundo = 00;
int minuto = 00;
int hora = 00;
String dia = "";
int data = 12;
int mes = 11;
int ano = 2019;

//Padrão
int vezes = 1;

void setup() {

   pinMode(porta_rele1, OUTPUT); 

  Serial.begin(115200);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.println("Connecting to WiFi..");
  }
  Serial.println("Connected to the WiFi network");

  client.setServer(mqttServer, mqttPort);
  client.setCallback(callback);

  while (!client.connected()) {
    Serial.println("Connecting to MQTT...");

    if (client.connect("ESP8266Client", mqttUser, mqttPassword )) {

      Serial.println("connected");

    } else {

      Serial.print("failed with state ");
      Serial.print(client.state());
      delay(2000);

    }
  }

  client.publish("liga", "desliga");
  client.subscribe("hora1");
  client.subscribe("min1");
  client.subscribe("seg1");
  client.subscribe("hora2");
  client.subscribe("seg2");
  client.subscribe("min3");
  client.subscribe("hora3");
  client.subscribe("min3");
  client.subscribe("seg3");
  client.subscribe("quant1");
  client.subscribe("quant2");
  client.subscribe("quant3");


  Wire.begin(D1, D2);
  Serial.begin(115200);
  if (rtc.begin())
  {
    rtc.adjust(DateTime(ano, mes, data, hora, minuto, segundo));
  }
  else Serial.print("Erro ao iniciar!");

  pinMode(13, OUTPUT);
}
void callback(char *topic, byte *payload, unsigned int length)
{
  if (strcmp(topic, "hora1") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    hora1 = msg_p.toFloat(); //to float
    hora1 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "min1") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    min1 = msg_p.toFloat(); //to float
    min1 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "seg1") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    seg1 = msg_p.toFloat(); //to float
    seg1 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "hora2") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    hora2 = msg_p.toFloat(); //to float
    hora2 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "min2") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    min2 = msg_p.toFloat(); //to float
    min2 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "seg2") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    seg2 = msg_p.toFloat(); //to float
    seg2 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "hora3") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    hora3 = msg_p.toFloat(); //to float
    hora3 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "min3") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    min3 = msg_p.toFloat(); //to float
    min3 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "seg3") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    seg3 = msg_p.toFloat(); //to float
    seg3 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "quant1") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    quant1 = msg_p.toFloat(); //to float
    quant1 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "quant2") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    quant2 = msg_p.toFloat(); //to float
    quant2 = msg_p.toInt(); // to Int
  }
  if (strcmp(topic, "quant3") == 0) {
    char buff_p[length];
    for (int i = 0; i < length; i++)
    {
      buff_p[i] = (char)payload[i];
    }
    buff_p[length] = '\0';
    String msg_p = String(buff_p);
    quant3 = msg_p.toFloat(); //to float
    quant3 = msg_p.toInt(); // to Int
  }
}
void loop() {
  DateTime now = rtc.now();
  segundo = now.second();
  minuto = now.minute();
  hora = now.hour();
  dia = daysOfTheWeek[now.dayOfTheWeek()];
  data = now.day();
  mes = now.month();
  ano = now.year();
  
  Serial.print(ano);
  Serial.print('/');
  Serial.print(mes);
  Serial.print('/');
  Serial.print(data);
  Serial.print(" (");
  Serial.print(dia);
  Serial.print(") ");
  Serial.print(hora);
  Serial.print(':');
  Serial.print(minuto);
  Serial.print(':');
  Serial.print(segundo);
  Serial.println();
  delay(1000); 

  if ((hora1 == hora) && (min1 == minuto) && (seg1 == segundo))
    racao1(quant1);

  if ((hora2 == hora) && (min2 == minuto) && (seg2 == segundo))
    racao2(quant2);

  if ((hora3 == hora) && (min3 == minuto) && (seg3 == segundo))
    racao3(quant3);

  client.loop();
}
void racao1(int quant1) {
  switch (quant1) {
    case 30:
      quantidade(4);
      break;
    case 60:
      quantidade(3);
      break;
    case 90:
      quantidade(2);
      break;
    case 120:
      quantidade(1);
      break;
  }
}
void racao2(int quant2) {
  switch (quant2) {
    case 30:
      quantidade(4);
      break;
    case 60:
      quantidade(3);
      break;
    case 90:
      quantidade(2);
      break;
    case 120:
      quantidade(1);
      break;
  }
}
void racao3(int quant3) {
  switch (quant3) {
    case 30:
      quantidade(4);
      break;
    case 60:
      quantidade(3);
      break;
    case 90:
      quantidade(2);
      break;
    case 120:
      quantidade(1);
      break;
  }
}
void quantidade(int vezes) {
  do {
    digitalWrite(13, HIGH);
    digitalWrite(porta_rele1, HIGH);
    delay(1000);
    Serial.println("Girando Motor!");
    digitalWrite(13, LOW);
    digitalWrite(porta_rele1, LOW);
    delay(1000);
    vezes = vezes + 1;
  } while (vezes <= 4);
}
