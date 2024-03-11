<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.jpg" type="image/jpg">
    <title>Website Layout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Welcome to My Website!</h2>
    </header>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="#">Contact Us</a>
        <a href="#">Gallery</a>
        <a href="#">Blog</a>
    </nav>
    <main>
        <aside>
            <h2>This is Aside</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error placeat illum culpa consectetur possimus quas in autem amet, architecto itaque officia omnis distinctio enim?</p>

        </aside>
        <section>
            <h2>This is a Section</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi quos officia placeat dolore quibusdam nobis ut magnam odit adipisci. Assumenda impedit et delectus itaque.</p>
            <p>Lorem ipsum eaque a deserunt adipisci velit labore amet maxime nesciunt consequatur molestias voluptatibus similique veritatis repellendus.</p>




        </section>

        <article>
            <h2>This is an Article</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat eum modi totam officiis deleniti ipsaonsectetur autem animi facere est commodi.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab expedita magnam praesentium! consequatur iste? Dolore, ipsam.</p>
        </article>
    </main>
    <footer>
        <hr>
        &copy; <?php echo date('Y'); ?> My Website Copyright Reserved <br>
        <small>
            website designed by: <a href="https://www.lakip.co.id/" target="_blank">Masrianto</a>
            | Email : <a href="mailto:admin@lakip.co.id">Mazrie</a>
        </small>



    </footer>
</body>

</html>