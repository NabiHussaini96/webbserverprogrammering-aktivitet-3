# Aktivitet 3 – Sessioner och Filer

## Projektbeskrivning

Projektet demonstrerar hur PHP-sessioner och filhantering kan användas i en webbapplikation.

Funktioner:

- Inloggningssystem
- Sessionhantering
- Skyddade sidor
- Spara meddelanden till textfil
- Visa sparade meddelanden
- Logout-funktion

---

## Inloggningsuppgifter

Användarnamn:

```text
admin
```

Lösenord:

```text
1234
```

---

## Projektstruktur

```text
aktivitet3/
│
├── index.php
├── login.php
├── dashboard.php
├── save_message.php
├── messages.php
├── logout.php
├── style.css
├── messages.txt
└── README.md
```

---

## Tekniker

- PHP
- HTML5
- CSS3
- Apache
- XAMPP

---

## Starta projektet

1. Starta Apache i XAMPP
2. Placera projektet i:

```text
C:\xampp\htdocs\aktivitet3
```

3. Öppna:

```text
http://localhost/aktivitet3
```

---

## Funktioner som demonstreras

### Sessioner

```php
$_SESSION["loggedin"] = true;
```

### Skriva till fil

```php
file_put_contents()
```

### Läsa från fil

```php
file_get_contents()
```

### Logout

```php
session_destroy();
```

---

## Författare

Ghulam Nabi Hussaini

Webbserverprogrammering 1