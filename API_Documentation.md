# API Documentation

## Overview
This document provides comprehensive API documentation for the Azhary Academy system. All endpoints are RESTful and return JSON responses.

## Authentication
Most endpoints require authentication using Laravel Sanctum. Include the Bearer token in the Authorization header:
```
Authorization: Bearer {your_token}
```

## Base URL
Replace `{domain}` with your actual domain:
```
https://{domain}/api
```

---

## 1. Users API

### 1.1 Get All Users
**GET** `/users`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": [
    {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com",
      "email_verified_at": "2024-01-15T10:30:00.000000Z",
      "created_at": "2024-01-15T10:30:00.000000Z",
      "updated_at": "2024-01-15T10:30:00.000000Z"
    }
  ],
  "links": {
    "first": "https://{domain}/api/users?page=1",
    "last": "https://{domain}/api/users?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 15,
    "to": 1,
    "total": 1
  }
}
```

### 1.2 Get Single User
**GET** `/users/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "email_verified_at": "2024-01-15T10:30:00.000000Z",
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  }
}
```

### 1.3 Create User
**POST** `/users`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Request Payload:**
```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "password_confirmation": "password123"
}
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "email_verified_at": null,
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  },
  "message": "User created successfully"
}
```

### 1.4 Update User
**PUT** `/users/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Request Payload:**
```json
{
  "name": "John Smith",
  "email": "johnsmith@example.com"
}
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "John Smith",
    "email": "johnsmith@example.com",
    "email_verified_at": "2024-01-15T10:30:00.000000Z",
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:35:00.000000Z"
  },
  "message": "User updated successfully"
}
```

### 1.5 Delete User
**DELETE** `/users/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "message": "User deleted successfully"
}
```

---

## 2. Teachers API

### 2.1 Get All Teachers
**GET** `/teachers`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": [
    {
      "id": 1,
      "name": "Ahmed Hassan",
      "name_fr": "Ahmed Hassan",
      "photo": "storage/teachers/1234567890_teacher1.jpg",
      "short_description": "Experienced Arabic teacher with 10+ years of experience",
      "short_description_fr": "Enseignant d'arabe expérimenté avec plus de 10 ans d'expérience",
      "full_bio": "Detailed biography of the teacher...",
      "full_bio_fr": "Biographie détaillée de l'enseignant...",
      "languages": "Arabic, English, French",
      "languages_fr": "Arabe, Anglais, Français",
      "certifications": "Quran teaching certification, Arabic language diploma",
      "certifications_fr": "Certification d'enseignement du Coran, diplôme de langue arabe",
      "teaching_methods": "Interactive learning, one-on-one sessions",
      "teaching_methods_fr": "Apprentissage interactif, sessions individuelles",
      "materials_used": "Quran, textbooks, multimedia resources",
      "materials_used_fr": "Coran, manuels, ressources multimédias",
      "rating": 4.85,
      "total_reviews": 25,
      "total_teaching_hours": 1200,
      "years_experience": 10,
      "is_active": true,
      "created_at": "2024-01-15T10:30:00.000000Z",
      "updated_at": "2024-01-15T10:30:00.000000Z"
    }
  ],
  "links": {
    "first": "https://{domain}/api/teachers?page=1",
    "last": "https://{domain}/api/teachers?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 15,
    "to": 1,
    "total": 1
  }
}
```

### 2.2 Get Single Teacher
**GET** `/teachers/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "Ahmed Hassan",
    "name_fr": "Ahmed Hassan",
    "photo": "storage/teachers/1234567890_teacher1.jpg",
    "short_description": "Experienced Arabic teacher with 10+ years of experience",
    "short_description_fr": "Enseignant d'arabe expérimenté avec plus de 10 ans d'expérience",
    "full_bio": "Detailed biography of the teacher...",
    "full_bio_fr": "Biographie détaillée de l'enseignant...",
    "languages": "Arabic, English, French",
    "languages_fr": "Arabe, Anglais, Français",
    "certifications": "Quran teaching certification, Arabic language diploma",
    "certifications_fr": "Certification d'enseignement du Coran, diplôme de langue arabe",
    "teaching_methods": "Interactive learning, one-on-one sessions",
    "teaching_methods_fr": "Apprentissage interactif, sessions individuelles",
    "materials_used": "Quran, textbooks, multimedia resources",
    "materials_used_fr": "Coran, manuels, ressources multimédias",
    "rating": 4.85,
    "total_reviews": 25,
    "total_teaching_hours": 1200,
    "years_experience": 10,
    "is_active": true,
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  }
}
```

### 2.3 Create Teacher
**POST** `/teachers`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: multipart/form-data
```

**Request Payload:**
```json
{
  "name": "Ahmed Hassan",
  "name_fr": "Ahmed Hassan",
  "photo": "[file upload]",
  "short_description": "Experienced Arabic teacher with 10+ years of experience",
  "short_description_fr": "Enseignant d'arabe expérimenté avec plus de 10 ans d'expérience",
  "full_bio": "Detailed biography of the teacher...",
  "full_bio_fr": "Biographie détaillée de l'enseignant...",
  "languages": "Arabic, English, French",
  "languages_fr": "Arabe, Anglais, Français",
  "certifications": "Quran teaching certification, Arabic language diploma",
  "certifications_fr": "Certification d'enseignement du Coran, diplôme de langue arabe",
  "teaching_methods": "Interactive learning, one-on-one sessions",
  "teaching_methods_fr": "Apprentissage interactif, sessions individuelles",
  "materials_used": "Quran, textbooks, multimedia resources",
  "materials_used_fr": "Coran, manuels, ressources multimédias",
  "years_experience": 10,
  "total_teaching_hours": 1200,
  "is_active": true
}
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "Ahmed Hassan",
    "name_fr": "Ahmed Hassan",
    "photo": "storage/teachers/1234567890_teacher1.jpg",
    "short_description": "Experienced Arabic teacher with 10+ years of experience",
    "short_description_fr": "Enseignant d'arabe expérimenté avec plus de 10 ans d'expérience",
    "full_bio": "Detailed biography of the teacher...",
    "full_bio_fr": "Biographie détaillée de l'enseignant...",
    "languages": "Arabic, English, French",
    "languages_fr": "Arabe, Anglais, Français",
    "certifications": "Quran teaching certification, Arabic language diploma",
    "certifications_fr": "Certification d'enseignement du Coran, diplôme de langue arabe",
    "teaching_methods": "Interactive learning, one-on-one sessions",
    "teaching_methods_fr": "Apprentissage interactif, sessions individuelles",
    "materials_used": "Quran, textbooks, multimedia resources",
    "materials_used_fr": "Coran, manuels, ressources multimédias",
    "rating": 0,
    "total_reviews": 0,
    "total_teaching_hours": 1200,
    "years_experience": 10,
    "is_active": true,
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  },
  "message": "Teacher created successfully"
}
```

### 2.4 Update Teacher
**PUT** `/teachers/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: multipart/form-data
```

**Request Payload:**
```json
{
  "name": "Ahmed Hassan Updated",
  "name_fr": "Ahmed Hassan Mis à jour",
  "photo": "[file upload]",
  "short_description": "Updated description",
  "short_description_fr": "Description mise à jour",
  "full_bio": "Updated biography",
  "full_bio_fr": "Biographie mise à jour",
  "languages": "Arabic, English, French, Spanish",
  "languages_fr": "Arabe, Anglais, Français, Espagnol",
  "certifications": "Updated certifications",
  "certifications_fr": "Certifications mises à jour",
  "teaching_methods": "Updated teaching methods",
  "teaching_methods_fr": "Méthodes d'enseignement mises à jour",
  "materials_used": "Updated materials",
  "materials_used_fr": "Matériaux mis à jour",
  "years_experience": 12,
  "total_teaching_hours": 1500,
  "is_active": true
}
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "Ahmed Hassan Updated",
    "name_fr": "Ahmed Hassan Mis à jour",
    "photo": "storage/teachers/1234567890_teacher1_updated.jpg",
    "short_description": "Updated description",
    "short_description_fr": "Description mise à jour",
    "full_bio": "Updated biography",
    "full_bio_fr": "Biographie mise à jour",
    "languages": "Arabic, English, French, Spanish",
    "languages_fr": "Arabe, Anglais, Français, Espagnol",
    "certifications": "Updated certifications",
    "certifications_fr": "Certifications mises à jour",
    "teaching_methods": "Updated teaching methods",
    "teaching_methods_fr": "Méthodes d'enseignement mises à jour",
    "materials_used": "Updated materials",
    "materials_used_fr": "Matériaux mis à jour",
    "rating": 4.85,
    "total_reviews": 25,
    "total_teaching_hours": 1500,
    "years_experience": 12,
    "is_active": true,
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:35:00.000000Z"
  },
  "message": "Teacher updated successfully"
}
```

### 2.5 Delete Teacher
**DELETE** `/teachers/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "message": "Teacher deleted successfully"
}
```

---

## 3. Articles API

### 3.1 Get All Articles
**GET** `/articles`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": [
    {
      "id": 1,
      "title": {
        "en": "Introduction to Arabic Grammar",
        "fr": "Introduction à la grammaire arabe"
      },
      "content": {
        "en": "Arabic grammar is a complex and beautiful system...",
        "fr": "La grammaire arabe est un système complexe et beau..."
      },
      "slug": "introduction-to-arabic-grammar",
      "image": "storage/articles/1234567890_article1.jpg",
      "status": true,
      "meta_description": {
        "en": "Learn the basics of Arabic grammar",
        "fr": "Apprenez les bases de la grammaire arabe"
      },
      "meta_keywords": {
        "en": "Arabic, grammar, learning",
        "fr": "Arabe, grammaire, apprentissage"
      },
      "created_at": "2024-01-15T10:30:00.000000Z",
      "updated_at": "2024-01-15T10:30:00.000000Z"
    }
  ],
  "links": {
    "first": "https://{domain}/api/articles?page=1",
    "last": "https://{domain}/api/articles?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 15,
    "to": 1,
    "total": 1
  }
}
```

### 3.2 Get Single Article
**GET** `/articles/{slug}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "title": {
      "en": "Introduction to Arabic Grammar",
      "fr": "Introduction à la grammaire arabe"
    },
    "content": {
      "en": "Arabic grammar is a complex and beautiful system...",
      "fr": "La grammaire arabe est un système complexe et beau..."
    },
    "slug": "introduction-to-arabic-grammar",
    "image": "storage/articles/1234567890_article1.jpg",
    "status": true,
    "meta_description": {
      "en": "Learn the basics of Arabic grammar",
      "fr": "Apprenez les bases de la grammaire arabe"
    },
    "meta_keywords": {
      "en": "Arabic, grammar, learning",
      "fr": "Arabe, grammaire, apprentissage"
    },
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  }
}
```

### 3.3 Create Article
**POST** `/articles`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: multipart/form-data
```

**Request Payload:**
```json
{
  "title": {
    "en": "Introduction to Arabic Grammar",
    "fr": "Introduction à la grammaire arabe"
  },
  "content": {
    "en": "Arabic grammar is a complex and beautiful system...",
    "fr": "La grammaire arabe est un système complexe et beau..."
  },
  "image": "[file upload]",
  "status": true,
  "meta_description": {
    "en": "Learn the basics of Arabic grammar",
    "fr": "Apprenez les bases de la grammaire arabe"
  },
  "meta_keywords": {
    "en": "Arabic, grammar, learning",
    "fr": "Arabe, grammaire, apprentissage"
  }
}
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "title": {
      "en": "Introduction to Arabic Grammar",
      "fr": "Introduction à la grammaire arabe"
    },
    "content": {
      "en": "Arabic grammar is a complex and beautiful system...",
      "fr": "La grammaire arabe est un système complexe et beau..."
    },
    "slug": "introduction-to-arabic-grammar",
    "image": "storage/articles/1234567890_article1.jpg",
    "status": true,
    "meta_description": {
      "en": "Learn the basics of Arabic grammar",
      "fr": "Apprenez les bases de la grammaire arabe"
    },
    "meta_keywords": {
      "en": "Arabic, grammar, learning",
      "fr": "Arabe, grammaire, apprentissage"
    },
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  },
  "message": "Article created successfully"
}
```

### 3.4 Update Article
**PUT** `/articles/{slug}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: multipart/form-data
```

**Request Payload:**
```json
{
  "title": {
    "en": "Updated Introduction to Arabic Grammar",
    "fr": "Introduction mise à jour à la grammaire arabe"
  },
  "content": {
    "en": "Updated content about Arabic grammar...",
    "fr": "Contenu mis à jour sur la grammaire arabe..."
  },
  "image": "[file upload]",
  "status": true,
  "meta_description": {
    "en": "Updated description",
    "fr": "Description mise à jour"
  },
  "meta_keywords": {
    "en": "Updated keywords",
    "fr": "Mots-clés mis à jour"
  }
}
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "title": {
      "en": "Updated Introduction to Arabic Grammar",
      "fr": "Introduction mise à jour à la grammaire arabe"
    },
    "content": {
      "en": "Updated content about Arabic grammar...",
      "fr": "Contenu mis à jour sur la grammaire arabe..."
    },
    "slug": "updated-introduction-to-arabic-grammar",
    "image": "storage/articles/1234567890_article1_updated.jpg",
    "status": true,
    "meta_description": {
      "en": "Updated description",
      "fr": "Description mise à jour"
    },
    "meta_keywords": {
      "en": "Updated keywords",
      "fr": "Mots-clés mis à jour"
    },
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:35:00.000000Z"
  },
  "message": "Article updated successfully"
}
```

### 3.5 Delete Article
**DELETE** `/articles/{slug}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "message": "Article deleted successfully"
}
```

---

## 4. Enrollments API

### 4.1 Get All Enrollments
**GET** `/enrollments`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": [
    {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com",
      "mobile": "+1234567890",
      "age": 25,
      "gender": "male",
      "arabic_level": "beginner",
      "arabic_level_text": "I have some notions",
      "package": "quran_recitation",
      "course_interest_text": "Recitation of the Quran",
      "course_details": "I would like to learn Quran recitation with proper tajweed",
      "preferred_days": ["2024-02-01", "2024-02-03"],
      "preferred_times": ["10:00", "14:00"],
      "status": "pending",
      "notes": "Student prefers morning sessions",
      "created_at": "2024-01-15T10:30:00.000000Z",
      "updated_at": "2024-01-15T10:30:00.000000Z"
    }
  ],
  "links": {
    "first": "https://{domain}/api/enrollments?page=1",
    "last": "https://{domain}/api/enrollments?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 15,
    "to": 1,
    "total": 1
  }
}
```

### 4.2 Get Single Enrollment
**GET** `/enrollments/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "mobile": "+1234567890",
    "age": 25,
    "gender": "male",
    "arabic_level": "beginner",
    "arabic_level_text": "I have some notions",
    "package": "quran_recitation",
    "course_interest_text": "Recitation of the Quran",
    "course_details": "I would like to learn Quran recitation with proper tajweed",
    "preferred_days": ["2024-02-01", "2024-02-03"],
    "preferred_times": ["10:00", "14:00"],
    "status": "pending",
    "notes": "Student prefers morning sessions",
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  }
}
```

### 4.3 Create Enrollment (Public)
**POST** `/enrollments`

**Headers:**
```
Content-Type: application/json
```

**Request Payload:**
```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "phone": "+1234567890",
  "date": "2024-02-01",
  "time": "10:00",
  "arabic_level": "beginner",
  "course_interest": "quran_recitation",
  "message": "I would like to learn Quran recitation with proper tajweed"
}
```

**Response:**
```json
{
  "success": true,
  "message": "Your enrollment has been submitted successfully! We will contact you soon.",
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "mobile": "+1234567890",
    "age": null,
    "gender": null,
    "arabic_level": "beginner",
    "arabic_level_text": "I have some notions",
    "package": "quran_recitation",
    "course_interest_text": "Recitation of the Quran",
    "course_details": "I would like to learn Quran recitation with proper tajweed",
    "preferred_days": ["2024-02-01"],
    "preferred_times": ["10:00"],
    "status": "pending",
    "notes": null,
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:30:00.000000Z"
  }
}
```

### 4.4 Update Enrollment
**PUT** `/enrollments/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Request Payload:**
```json
{
  "name": "John Smith",
  "email": "johnsmith@example.com",
  "mobile": "+1234567890",
  "age": 26,
  "gender": "male",
  "arabic_level": "intermediate",
  "package": "tajweed",
  "course_details": "Updated course details",
  "preferred_days": ["2024-02-01", "2024-02-03", "2024-02-05"],
  "preferred_times": ["10:00", "14:00", "16:00"],
  "status": "approved",
  "notes": "Updated notes about the student"
}
```

**Response:**
```json
{
  "data": {
    "id": 1,
    "name": "John Smith",
    "email": "johnsmith@example.com",
    "mobile": "+1234567890",
    "age": 26,
    "gender": "male",
    "arabic_level": "intermediate",
    "arabic_level_text": "Intermediate",
    "package": "tajweed",
    "course_interest_text": "Tajweed Rules",
    "course_details": "Updated course details",
    "preferred_days": ["2024-02-01", "2024-02-03", "2024-02-05"],
    "preferred_times": ["10:00", "14:00", "16:00"],
    "status": "approved",
    "notes": "Updated notes about the student",
    "created_at": "2024-01-15T10:30:00.000000Z",
    "updated_at": "2024-01-15T10:35:00.000000Z"
  },
  "message": "Enrollment updated successfully"
}
```

### 4.5 Delete Enrollment
**DELETE** `/enrollments/{id}`

**Headers:**
```
Authorization: Bearer {token}
Content-Type: application/json
```

**Response:**
```json
{
  "message": "Enrollment deleted successfully"
}
```

---

## Error Responses

### Validation Error (422)
```json
{
  "message": "The given data was invalid.",
  "errors": {
    "email": [
      "The email field is required."
    ],
    "name": [
      "The name field is required."
    ]
  }
}
```

### Unauthorized (401)
```json
{
  "message": "Unauthenticated."
}
```

### Not Found (404)
```json
{
  "message": "Resource not found."
}
```

### Server Error (500)
```json
{
  "message": "Internal server error."
}
```

---

## Data Types and Validation Rules

### User Fields
- `name`: string, required, max:255
- `email`: string, required, unique, email format
- `password`: string, required, min:8, confirmed

### Teacher Fields
- `name`: string, required, max:255
- `name_fr`: string, nullable, max:255
- `photo`: image file, nullable, max:2048KB
- `short_description`: string, required
- `short_description_fr`: string, nullable
- `full_bio`: string, required
- `full_bio_fr`: string, nullable
- `languages`: string, nullable
- `languages_fr`: string, nullable
- `certifications`: string, nullable
- `certifications_fr`: string, nullable
- `teaching_methods`: string, required
- `teaching_methods_fr`: string, nullable
- `materials_used`: string, required
- `materials_used_fr`: string, nullable
- `years_experience`: integer, required, min:0
- `total_teaching_hours`: integer, required, min:0
- `is_active`: boolean

### Article Fields
- `title`: object with 'en' and 'fr' keys, required
- `content`: object with 'en' and 'fr' keys, required
- `image`: image file, nullable, max:2048KB
- `status`: boolean
- `meta_description`: object with 'en' and 'fr' keys, nullable
- `meta_keywords`: object with 'en' and 'fr' keys, nullable

### Enrollment Fields
- `name`: string, required, max:255, min:2
- `email`: string, required, email format
- `phone`: string, required, max:20, min:8
- `date`: date, nullable, after_or_equal:today
- `time`: string, nullable
- `arabic_level`: string, required, in:beginner,intermediate,advanced,native
- `course_interest`: string, required, in:quran_recitation,tajweed,arabic_grammar,islamic_studies,quran_memorization
- `message`: string, nullable, max:1000

### Arabic Level Options
- `beginner`: "I have some notions"
- `intermediate`: "Intermediate"
- `advanced`: "Advanced"
- `native`: "Native speaker"

### Course Interest Options
- `quran_recitation`: "Recitation of the Quran"
- `tajweed`: "Tajweed Rules"
- `arabic_grammar`: "Arabic Grammar"
- `islamic_studies`: "Islamic Studies"
- `quran_memorization`: "Quran Memorization"

### Enrollment Status Options
- `pending`: "Pending"
- `approved`: "Approved"
- `rejected`: "Rejected"

---

## Rate Limiting
API requests are limited to 60 requests per minute per user/IP address.

## File Uploads
- Supported image formats: JPEG, PNG, JPG, GIF
- Maximum file size: 2MB (2048KB)
- Files are stored in the `storage` directory and served via public URLs 