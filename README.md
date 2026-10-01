<div align="center">

<img src="https://ppdb.infinityfree.io/img/logo_smk.jpg" alt="SMK Al-Ghazaly Bogor" width="180">

# PPDB Online SMK Al-Ghazaly Bogor

### Web-Based Student Admission Information System

<p>
  <a href="https://ppdb.infinityfree.io/">
    <img src="https://img.shields.io/badge/Live%20Demo-PPDB%20Online-success?style=for-the-badge" alt="Live Demo">
  </a>
  <img src="https://img.shields.io/badge/CodeIgniter%203-orange?style=for-the-badge&logo=codeigniter&logoColor=white" alt="CodeIgniter 3">
  <img src="https://img.shields.io/badge/PHP-7%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

</div>


---

## 📌 About the Project

**PPDB Online SMK Al-Ghazaly Bogor** is a web-based student admission system designed to support the process of registering new students online.

This project was developed as part of the **Research Methodology** course. The project focuses on analyzing the existing student admission process and designing an improved web-based registration system that is more informative, structured, responsive, and user-friendly.

The analysis is based on secondary data and indirect observation of publicly available web forms and interfaces. The project does not involve direct visits to the school.

---

## 🎓 Project Information

| Information              | Details                            |
| ------------------------ | ---------------------------------- |
| **Project**              | PPDB Online SMK Al-Ghazaly Bogor   |
| **Course**               | Research Methodology               |
| **Project Type**         | Web-Based Student Admission System |
| **Development Approach** | Prototype Method                   |
| **Institution**          | SMK Al-Ghazaly Bogor               |
| **Location**             | Bogor, West Java, Indonesia        |

### Project Title

> **Analysis of a Web-Based Student Admission Information System for SMK Al-Ghazaly Bogor**

---

## 👥 Project Team

### Team Leader

* **Nico Alfianto**

### Team Members

* **Iqlima Mustalimatun Nada**
* **Cindy Sasi Kirana**
* **Abu Ridzal Akhyary**
* **Azzahra Revani Agnistia**

---

## 🎯 Project Objectives

The project aims to design a student admission system that can:

* Provide clearer information about the school.
* Present available study programs and admission information.
* Simplify the student registration process.
* Provide a clear registration flow for prospective students.
* Improve the overall user experience.
* Provide confirmation or feedback after registration.
* Support responsive access on different devices.

---

## ⚠️ Problems Identified

Several problems were identified in the existing student admission process:

1. The registration interface is still less attractive and informative.
2. Information about the school, study programs, and registration procedures is not presented comprehensively.
3. The registration flow is not clearly explained to prospective students.
4. There is no clear notification or confirmation after the registration form is submitted.
5. The interface is not fully designed based on responsive and user-friendly design principles.

---

## 💡 Proposed Solutions

To address the identified problems, the proposed system includes:

* A more informative school profile page.
* Information about available study programs and facilities.
* A clear and structured online registration form.
* A more understandable registration flow.
* A registration confirmation page.
* Responsive and user-friendly interface design.
* An interactive prototype developed using the **Prototype Method**.

---

## ✨ Main Features

### 👨‍🎓 Student / Applicant

* Online student registration.
* Student registration form.
* Submission of applicant information.
* Registration information.
* Registration confirmation.
* Access to student-related information.

### 👨‍💼 Administrator

* Administrator login.
* Management of student registration data.
* Access to submitted applicant information.
* Administrative monitoring of registration data.

---

## 🛠️ Technology Stack

| Technology        | Usage                   |
| ----------------- | ----------------------- |
| **PHP**           | Backend programming     |
| **CodeIgniter 3** | PHP Framework           |
| **MySQL**         | Database management     |
| **HTML5**         | Website structure       |
| **CSS3**          | Website styling         |
| **JavaScript**    | Client-side interaction |
| **Apache**        | Web server              |
| **InfinityFree**  | Web hosting             |

---

## 📂 Project Structure

```text
ppdb/
├── application/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── ...
│
├── assets/
│   ├── css/
│   ├── js/
│   └── ...
│
├── db/
│   └── ppdbonline.sql
│
├── files/
│
├── img/
│   └── logo_smk.jpg
│
├── system/
│
├── .htaccess
├── index.php
└── README.md
```

---

## 🚀 Live Demo

You can access the deployed PPDB system through the following link:

**https://ppdb.infinityfree.io/**

---

## 🔐 Demo Account

The following accounts can be used to test the system.

### Administrator

```text
Role     : Admin
Username : admin
Password : admin
```

### Student Account 1

```text
Role     : Student
Username : 2025-1761480835
Password : 2738495029
```

### Student Account 2

```text
Role     : Student
Username : 2025-1747590183
Password : 123
```

> **Note:** These credentials are provided for demonstration and testing purposes.

---

## 💻 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/nico-alfianto/ppdb.git
```

### 2. Move the Project

Place the project inside your local web server directory.

For example, using XAMPP:

```text
C:/xampp/htdocs/ppdb
```

### 3. Create the Database

Create a MySQL database, then import:

```text
db/ppdbonline.sql
```

### 4. Configure the Database

Open:

```text
application/config/database.php
```

Configure the database connection according to your local environment:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'ppdbonline',
    'dbdriver' => 'mysqli'
);
```

### 5. Configure Base URL

Open:

```text
application/config/config.php
```

Set the base URL according to your local environment:

```php
$config['base_url'] = 'http://localhost/ppdb/';
```

### 6. Run the Application

Start Apache and MySQL through XAMPP, then open:

```text
http://localhost/ppdb/
```

---

## 🔄 Development Method

This project uses the **Prototype Method**.

The development process consists of several stages:

```text
Requirement Identification
        ↓
Initial System Design
        ↓
Prototype Development
        ↓
Prototype Evaluation
        ↓
System Improvement
        ↓
Final Prototype
```

The prototype approach allows the system design and user interface to be evaluated and improved based on identified user needs.

---

## 📊 Expected Benefits

The proposed system is expected to provide:

* Easier access to student admission information.
* A clearer registration process.
* Better presentation of school and study program information.
* Improved user experience for prospective students.
* A more organized student admission process.
* Responsive access through computers and mobile devices.

---

## 📚 Research Scope

The research focuses on:

* Student admission information.
* Registration flow.
* Website interface.
* User experience.
* Information presentation.
* Online registration forms.
* Prototype design.

The project is primarily focused on **system analysis and prototype design** and does not focus on implementing a complete production-level database system.

---

## 👨‍💻 Author

**Nico Alfianto**

Information Systems Student
Universitas Bina Sarana Informatika

---

## 📄 License

This project was created for academic purposes as part of the **Research Methodology** course.

---

<div align="center">

### PPDB Online — SMK Al-Ghazaly Bogor

**Research Methodology Project**

</div>
