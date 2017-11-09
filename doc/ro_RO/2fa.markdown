Autentificare în doi factori
=========================

Each user can enable the [autentificarea în doi factori](https://en.wikipedia.org/wiki/Two-factor_authentication).
După o conectare reușită, un cod de unică folosință (6 caractere) este cerut utilizatorului pentru a permite accesul în Kanboard.

Codul trebuie să fie furnizat de un program compatibil, instalat de obicei în smartphone-ul tău.

Kanboard folosește [Algoritmul de Parole Unice bazate pe timp](http://en.wikipedia.org/wiki/Time-based_One-time_Password_Algorithm) definit de [RFC 6238](http://tools.ietf.org/html/rfc6238).

Există multe programe compatibile cu sistemul standard TOTP.
De exemplu, poți folosi aceste aplicații:

- [Google Authenticator](https://github.com/google/google-authenticator/) (Android, iOS, Blackberry)
- [FreeOTP](https://fedorahosted.org/freeotp/) (Android, iOS)
- [OATH Toolkit](http://www.nongnu.org/oath-toolkit/) (Utilitar de consolă în Unix/Linux)

Acest sistem poate funcționa offline și nu ai nevoie neapărat de un telefon mobil.

Configurare
--------------

1. Accesează-ți profilul de utilizator
2. Pe stânga, apasă pe **Autentificare în doi factori ** și bifează căsuța
3. O cheie secretă se generează pentru tine

![2FA](screenshots/2fa.png)

- Trebuie să salvezi cheia secretă în programul tău TOTP. Dacă folosești un smartphone, cea mai ușoară soluție este să scanezi codul QR folosind FreeOTP sau Google Authenticator.
- De fiecare dată când deschizi o sesiune nouă, un cod nou va fi cerut
- Nu uita să-ți testezi dispozitivul înainte să închizi sesiunea

O nouă cheie secretă este generată de fiecare dată când activezi/dezactivezi această funcție.
