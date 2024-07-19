
# Teknikal Test 🤩

Ini adalah repositori yang diperuntukkan untuk tes teknikal dengan `case` nya adalah `perusahaan tambang nikel`.


## Teknologi yang digunakan 🛠️
| Laravel 10 | PHP 8.1.28     | MySQL | TailwindCSS |
| :-------- | :------- | :------------------------- |  :------------------------- |
| <img src="https://avatars.githubusercontent.com/u/958072?s=200&v=4" width="150"> | <img src="https://avatars.githubusercontent.com/u/25158?s=200&v=4" width="150"> | <img src="https://avatars.githubusercontent.com/u/2452804?s=200&v=4" width="150"> | <img src="https://avatars.githubusercontent.com/u/67109815?s=200&v=4" width="150">


## Partial Screenshots 📄
### 1. `Admin` Dashboard
![App Screenshot](https://github.com/altamisatmaja/sistem-manajemen-kendaraan-backend/blob/main/public/admin/main.png?raw=true)

### 2. `Admin` Dashboard Pemesanan
![App Screenshot](https://github.com/altamisatmaja/sistem-manajemen-kendaraan-backend/blob/main/public/admin/list.png?raw=true)

### 3. `Admin` Dashboard Form
![App Screenshot](https://github.com/altamisatmaja/sistem-manajemen-kendaraan-backend/blob/main/public/admin/form.png?raw=true)

### 4. `Admin` Dashboard Responsive
![App Screenshot](https://github.com/altamisatmaja/sistem-manajemen-kendaraan-backend/blob/main/public/admin/responsive.png?raw=true)

### 5. `Approver` Dashboard
![App Screenshot](https://github.com/altamisatmaja/sistem-manajemen-kendaraan-backend/blob/main/public/approver/list.png?raw=true)



## Installation 🗳

Clone repo github ini

```bash
git clone https://github.com/altamisatmaja/sistem-manajemen-kendaraan-backend.git
```

Masuk ke folder project

```bash
cd sistem-manajemen-kendaraan-backend
```

Install dependencies

```bash
composer i && npm i
```

Copy .env.example menjadi .env

```bash
cp .env.example .env
```


Sesuaikan database environment,
contoh

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<nama_database>
DB_USERNAME=<username>
DB_PASSWORD=<password jika ada>
```


Tambahkan key di .env

```bash
API_URL = http://127.0.0.1:8000
atau
API_URL = <YOUR_BASE_URL>
```

Buka terminal dan jalankan

```bash
php artisan key:generate && php artisan migrate:fresh --seed
```

Jalankan sistem

```bash
php artisan serve
```
    
## Akun untuk autentikasi 🔐

### 1. Admin


| username | password  |
| :-------- | :------- |
| `admin` | `admin` |

### 2. Approver


| username | password  |
| :-------- | :------- |
| `approver2` | `approver` |
| `approver3` | `approver` |
| `approver4` | `approver` |
| `approver5` | `approver` |
| `approver6` | `approver` |
| `approver7` | `approver` |
| `approver8` | `approver` |
| `approver9` | `approver` |

