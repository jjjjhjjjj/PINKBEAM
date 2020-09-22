//Viral Science
//RFID
#include "ESP8266.h"
#include <SoftwareSerial.h>
#include <SPI.h>
#include <MFRC522.h>

#define SSID        "Kwon"
#define PASSWORD    "qwe123123"
#define SS_PIN 10
#define RST_PIN 9
#define LED_R 5 //define red LED
#define RST 8 
#define BUZZER 4 //buzzer pin

SoftwareSerial mySerial(3, 2); 
MFRC522 mfrc522(SS_PIN, RST_PIN);   // Create MFRC522 instance.

ESP8266 wifi(mySerial);


void swi() {
  uint8_t buffer[128] = {0};
  uint8_t mux_id;
  uint32_t len = wifi.recv(&mux_id, buffer, sizeof(buffer), 100);

  if (len > 0) {
      Serial.print("Status:[");
      Serial.print(wifi.getIPStatus().c_str());
      Serial.println("]");

      Serial.print("Received from :");
      Serial.print(mux_id);
      Serial.print("[");


      Serial.print("Received:[");
      for(uint32_t i = 0; i < len; i++) {
          Serial.print((char)buffer[i]);
      }
      Serial.print("]\r\n");


      char command = buffer[0];
      int ledStatus = digitalRead(LED_BUILTIN);
 

      switch (command){

          case '1':
{
              digitalWrite(LED_BUILTIN, HIGH);
              sprintf(buffer, "NFC태그가 가능합니다.\n");
              wifi.send(mux_id, buffer, strlen(buffer));
              delay(500);
              pinMode(RST, OUTPUT);
              delay(500);
              digitalWrite(RST, HIGH);
    }


      }

  }
  
}


void printUsage(uint8_t mux_id)
{
    char buf[]="사용가능한 명령어\n1 : NFC리더기 켜기\n";
    wifi.send(mux_id, buf, strlen(buf));
}


void nfc() {
if ( ! mfrc522.PICC_IsNewCardPresent())
  {
    return;
  }
  // Select one of the cards
  if ( ! mfrc522.PICC_ReadCardSerial())
  {
    return;
  }
  //Show UID on serial monitor
  Serial.print("UID tag :");
  String content= "";
  byte letter;
  for (byte i = 0; i < mfrc522.uid.size; i++)
  {
     Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
     Serial.print(mfrc522.uid.uidByte[i], HEX);
   content.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " "));
     content.concat(String(mfrc522.uid.uidByte[i], HEX));
  }
  Serial.println();
  Serial.print("Message : ");
  content.toUpperCase();

    Serial.println("임산부가 맞습니다.");
    Serial.println();
    delay(500);
    digitalWrite(LED_R, HIGH);
    tone(BUZZER, 500);
    delay(300);
    noTone(BUZZER);
    delay(5000);
    digitalWrite(LED_R, LOW);
    delay(100);
    pinMode(13, OUTPUT); pinMode(12, OUTPUT); pinMode(11, OUTPUT); pinMode(10, OUTPUT); pinMode(9, OUTPUT);
    delay(500);
    digitalWrite(13, LOW); digitalWrite(12, LOW); digitalWrite(11, LOW); digitalWrite(10, LOW); digitalWrite(9, LOW);
    
      
   
}
void setup()
{

  Serial.begin(9600);   // Initiate a serial communication
   SPI.begin();      // Initiate  SPI bus
   mfrc522.PCD_Init();   // Initiate MFRC522
   pinMode(LED_R, OUTPUT);
   pinMode(BUZZER, OUTPUT);
   noTone(BUZZER);
   Serial.println("Put your card to the reader...");
   Serial.println();


    Serial.print("setup begin\r\n");

    Serial.print("FW Version:");
    Serial.println(wifi.getVersion().c_str());

    if (wifi.setOprToStationSoftAP()) {
        Serial.print("to station + softap ok\r\n");
    } else {
        Serial.print("to station + softap err\r\n");
    }

    if (wifi.joinAP(SSID, PASSWORD)) {
        Serial.print("Join AP success\r\n");
        Serial.print("IP: ");
        Serial.println(wifi.getLocalIP().c_str());
    } else {
        Serial.print("Join AP failure\r\n");
    }

    if (wifi.enableMUX()) {
        Serial.print("multiple ok\r\n");
    } else {
        Serial.print("multiple err\r\n");
    }

    if (wifi.startTCPServer(8090)) {
        Serial.print("start tcp server ok\r\n");
    } else {
        Serial.print("start tcp server err\r\n");
    }

    if (wifi.setTCPServerTimeout(360)) {
        Serial.print("set tcp server timout 360 seconds\r\n");
    } else {
        Serial.print("set tcp server timout err\r\n");
    }

    Serial.print("setup end\r\n");

  pinMode(LED_BUILTIN, OUTPUT);

  

}
void loop()
{
  
  nfc();
  swi();

}
