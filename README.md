# musictown
Database System Project
Web Application for sell K-pop albums.

## Document & Interface
[CS251_Project_phase3_ 6309680095.pdf](https://github.com/FahsaiPS/musictown/files/13772818/CS251_Project_phase3_.6309680095.pdf)

## Preview Interface
![homepage](https://github.com/FahsaiPS/musictown/assets/115086617/84f7216b-ba25-4824-b121-861afe0a34dd)
![homepage(2)](https://github.com/FahsaiPS/musictown/assets/115086617/258da605-197f-474c-a2dd-c862bed0c536)
![detail](https://github.com/FahsaiPS/musictown/assets/115086617/dcc983b3-f52d-4cb6-9e7b-4f1cfee82b0d)
![bag](https://github.com/FahsaiPS/musictown/assets/115086617/6968e7a9-290c-4764-9883-c806eacc606c)

วิธีการใช้งาน web application
1. ติดตั้งโปรแกรม Xampp
2. ดาวน์โหลดไฟล์ zip musictown เมื่อทำการแตกไฟล์จะได้เป็นโฟลเดอร์ musictown นำโฟลเดอร์นี้เข้าไปไว้ในโฟลเดอร์ xampp\htdocs
3. ทำการกด Actions Start ที่ Apache และ MySQL จากนั้นกด Actions Admin ที่ MySQL เพื่อไปที่ phpMyAdmin บน browser
4. จากนั้น Import musictown.sql ที่อยู่ในโฟลเดอร์ musictown\darabase ลงในฐานข้อมูล phpMyAdmin
5. ทำการรัน web application ได้โดยพิมพ์ http://localhost/musictown/musictown/ บน browser

username และ password ที่ใช้สำหรับทดสอบระบบ
1. Buyer
    username: pipo
    password: 12345678
2. Admin
    username: admin
    passsword: musictown
