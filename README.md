
<hr>

<h1 align="left">Hey there, I'm <a href="https://volunteer-tech.com/Aklilu">Aklilu </a><img src="https://media.giphy.com/media/hvRJCLFzcasrR4ia7z/giphy.gif" width="28"> 
 <a href="https://volunteer-tech.com/Aklilu"><img align="right" src="https://volunteer-tech.com/Aklilu/uploads/gallery/202205/image_500x_6273d3aaa57de.jpg" alt="Developer's Profile" width="200"/></a> - A Tech Enthusiast </h1> 


#### I love coding and most of my time goes into learning the best ways to write clean code. When I am not at my desk, I can be seen helping out tech geeks and writing software engineering contents. I am always open to help others.

#### I am passionate about creating an impact. Helping others and seeing their happiness and success because of me is what makes me eternally grateful.
<hr>

<h2 align="left">🌐 Stay Connected</h2>
<p align="left">
  <a href="https://www.linkedin.com/in/aklilu-mandefro-messele-8a3681194/"><img title="Follow on LinkedIn" src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"/></a>
  <a href="https://twitter.com/AkliluMandefro"><img title="Follow on Twitter" src="https://img.shields.io/badge/Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white"/></a>
  <a href="mailto:aklilu.mandefro@volunteer-tech.com"><img title="Email" src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white"/></a>
  <a href="https://github.com/Aklilu-Mandefro"><img title="Follow on GitHub" src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"/></a>
  <a href="https://www.instagram.com/aklilumandefro/"><img title="Follow on Instagram" src="https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white"/></a>
</p>


### Let's get started!

# Book Rest API in PHP-MVC

This project is for searching books with rest API in PHP. It is an API for book library system that has the following features:
1. Find books by title, author name or ISBN
2. Find authors by name
3. Pagination



## Setup

### Step 1 - Clone or Download

```
git clone https://github.com/afgprogrammer/php-books-library.git

```

### Step 2 - Change Config File

Please open config.php file and find this code section.
```PHP
  // Config Database
define('DATABASE', [
    'Port'   => '3306',
    'Host'   => 'localhost',
    'Driver' => 'PDO',
    'Name'   => '',
    'User'   => '',
    'Pass'   => '',
    'Prefix' => ''
]);

// DB_PREFIX
define('DB_PREFIX', '');
```
update it with your database credentials. you can choose a prefix and the prefix is optional.

#### Example
 My config.php file is like this

```PHP
  // Config Database
define('DATABASE', [
    'Port'   => '3306',
    'Host'   => 'localhost',
    'Driver' => 'PDO',
    'Name'   => 'library',
    'User'   => 'root',
    'Pass'   => '',
    'Prefix' => 'l_'
]);

// DB_PREFIX
define('DB_PREFIX', 'l_');
```

### Step 3 - Installation 

After your updated config.php file. please open this path in your browser.
```
yourdomain.com/install 
```

If you see bellow message:
```
Your System Is Installed. Please remove SQL file in ...
```
It's Done.

## Usage

You can see all the books and authors with bellow URL
```
yourdomain.com/all
```
For getting all books
```
yourdomain.com/books
```

For getting all authors
```
yourdomain.com/authors
```
You can search books with title, ISBN and author name
```
yourdomain.com/books/title/your-book-title
yourdomain.com/books/isbn/your-book-isbn
yourdomain.com/books/author/your-book-author
```
And you can see results in other pages
```
yourdomain.com/books/your-page-number
yourdomain.com/authors/your-page-number

yourdomain.com/books/title/your-book-title/your-page-number
yourdomain.com/books/author/your-book-author/your-page-number
```

and ...
