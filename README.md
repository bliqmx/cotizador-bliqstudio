# 🧾 Cotizador Bliq Studio

Sistema de cotizaciones en PHP y MySQL con backend seguro y catálogo dinámico.

---

## 🚀 Instalación en tu servidor (cPanel o local con XAMPP)

1. Crea una base de datos llamada **bliqstudio_cotizador**.
2. Importa el archivo **migrate.sql** desde phpMyAdmin.
3. Sube todo el contenido del repositorio al directorio `/public_html/cotizador/`.
4. Verifica que PHP esté en versión **8.0 o superior**.
5. Abre el navegador y entra a:
   - **Catálogo público:** `/index.php`
   - **Portal de clientes:** `/portal.php`
   - **Panel admin:** `/admin/login.php`

---

## 🔐 Credenciales por defecto
**Usuario:** `admin@bliqstudio.mx`  
**Contraseña:** `admin123`  
> (Puedes cambiar la contraseña desde phpMyAdmin actualizando el campo `password_hash`).

---

## ⚙️ Estructura del proyecto

