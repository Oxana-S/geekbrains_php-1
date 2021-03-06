<!doctype html>
<html lang="RU">
<head>
    <title>{{TITLE}}</title>
    <style>
        html{
            height: 100%;
        }
        body{
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        header{
           /* 0 flex-grow, 0 flex-shrink, auto flex-basis */
           flex: 0 0 auto;
        }
        .main-content{
           /* 1 flex-grow, 0 flex-shrink, auto flex-basis */
           flex: 1 0 auto;
        }
        footer{
           /* 0 flex-grow, 0 flex-shrink, auto flex-basis */
           flex: 0 0 auto;
        }

        label {
          width: 110px;
          display: inline-block;
          vertical-align: top;
          margin: 6px;
        }
        em {
          font-weight: bold;
          font-style: normal;
          color: #f00;
        }

        input:focus {
          background: #eaeaea;
        }

        input, textarea {
          width: 249px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="menu">
            <ul>
                <a href="index.php"><li>Главная</li></a>
                <a href="gallery.php"><li>Галерея</li></a>
                <a href="contacts.php"><li>Контакты</li></a>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div>
            <h1>{{H1}}</h1>
            <div>{{CONTENT}}</div>
        </div>
    </section>
    <footer>
    <hr>
        <p>{{DATA}}</p>
    </footer>
</body>
</html>

