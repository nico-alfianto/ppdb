<div align="center">

<img src="https://ppdb.infinityfree.io/img/logo_smk.jpg" alt="SMK Al-Ghazaly Bogor" width="180">

# PPDB Online SMK Al-Ghazaly Bogor

### Web-Based Student Admission Information System

<p>
  <a href="https://ppdb.infinityfree.io/">
    <img src="https://img.shields.io/badge/Live%20Demo-PPDB%20Online-success?style=for-the-badge" alt="Live Demo">
  </a>
  <img src="https://img.shields.io/badge/CodeIgniter%203-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white" alt="CodeIgniter 3">
  <img src="https://img.shields.io/badge/PHP-7%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

</div>

---

## About the Project

**PPDB Online SMK Al-Ghazaly Bogor** is a web-based student admission information system designed to support the new student registration process.

This project was developed as part of the **Research Methodology** course. The project focuses on analyzing the existing student admission process and designing a more informative, structured, responsive, and user-friendly web-based registration system.

The analysis is based on secondary data and indirect observation of publicly available registration interfaces. The research does not involve a direct visit to the school and focuses on the system interface, registration flow, information presentation, and user experience.

---

## Project Information

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

## Research Report

The complete research report and project documentation are available in the following document:

**[View Research Report](https://docs.google.com/document/d/1JFp2pfLk1bVE-RBw69EbyVU2DlTajkmr/edit?usp=sharing)**

The document contains the research discussion, system analysis, identified problems, proposed solutions, and other project-related materials.

---

## Project Team

### Team Leader

* **Nico Alfianto**

### Team Members

* **Iqlima Mustalimatun Nada**
* **Cindy Sasi Kirana**
* **Abu Ridzal Akhyary**
* **Azzahra Revani Agnistia**

---

## Project Objectives

The project aims to design a student admission system that can:

* Provide clearer information about the school.
* Present information about study programs and admission procedures.
* Simplify the online student registration process.
* Provide a clear and understandable registration flow.
* Improve the overall user experience.
* Provide confirmation and feedback after registration.
* Support responsive access across different devices.

---

## Problems Identified

Based on the analysis, several problems were identified in the existing student admission process:

1. The registration interface is still less attractive and informative.
2. Information about the school, study programs, and registration procedures is not presented comprehensively.
3. The registration flow is not clearly explained to prospective students.
4. There is no clear notification or confirmation after the registration form is submitted.
5. The interface has not been fully designed based on responsive and user-friendly design principles.

---

## Proposed Solutions

The proposed system addresses these problems through the following improvements:

1. Provide a more informative school profile.
2. Present study programs, facilities, and admission information clearly.
3. Provide a structured and easy-to-understand registration form.
4. Create a clearer registration flow for prospective students.
5. Provide a confirmation page after successful registration.
6. Apply responsive and user-friendly interface design.
7. Develop the system as an interactive prototype using the **Prototype Method**.

---

## Main Features

### Student / Applicant

* Online student registration.
* Student registration form.
* Applicant information submission.
* Registration information.
* Registration confirmation.
* Access to student-related information.

### Administrator

* Administrator login.
* Student registration data management.
* Access to submitted applicant information.
* Registration data monitoring.

---

## Technology Stack

| Technology        | Purpose                 |
| ----------------- | ----------------------- |
| **PHP**           | Backend programming     |
| **CodeIgniter 3** | PHP framework           |
| **MySQL**         | Database management     |
| **HTML5**         | Website structure       |
| **CSS3**          | Website styling         |
| **JavaScript**    | Client-side interaction |
| **Apache**        | Web server              |
| **InfinityFree**  | Web hosting             |

---

## Project Structure

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

## Live Demo

The deployed system can be accessed through the following link:

**https://ppdb.infinityfree.io/**

---

## Demo Accounts

The following accounts are available for testing the system.

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

> **Note:** These accounts are provided for demonstration and testing purposes.

---

## Installation

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

Create a MySQL database and import the following SQL file:

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

### 5. Configure the Base URL

Open:

```text
application/config/config.php
```

Set the base URL according to your local environment:

```php
$config['base_url'] = 'http://localhost/ppdb/';
```

### 6. Run the Application

Start **Apache** and **MySQL** through XAMPP.

Then open the application in your browser:

```text
http://localhost/ppdb/
```

---

## Development Method

This project uses the **Prototype Method** to develop and refine the proposed student admission system.

The development process consists of the following stages:

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

The prototype approach allows the proposed interface and registration flow to be evaluated and improved according to the identified requirements.

---

## Expected Benefits

The proposed system is expected to provide the following benefits:

* Easier access to student admission information.
* A clearer and more structured registration process.
* Better presentation of school and study program information.
* Improved user experience for prospective students.
* More organized student admission data.
* Responsive access through desktop and mobile devices.

---

## Research Scope

The research focuses on the following aspects:

* Student admission information.
* Online registration flow.
* Website interface.
* User experience.
* Information presentation.
* Online registration forms.
* Prototype design.

The project focuses primarily on **system analysis and prototype design** rather than developing a complete production-level admission system.

---

## Author

**Nico Alfianto**

Information Systems Student
Universitas Bina Sarana Informatika

---

## License

This project was developed for academic purposes as part of the **Research Methodology** course.

---

<div align="center">

### PPDB Online — SMK Al-Ghazaly Bogor

**Research Methodology Project**

</div>
