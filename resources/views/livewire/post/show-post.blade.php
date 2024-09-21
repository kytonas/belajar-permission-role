<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* stylelint-disable selector-list-comma-newline-after */

        .blog-header {
            border-bottom: 1px solid #e5e5e5;
        }

        .blog-header-logo {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif
                /*rtl:Amiri, Georgia, "Times New Roman", serif*/
            ;
            font-size: 2.25rem;
        }

        .blog-header-logo:hover {
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif
                /*rtl:Amiri, Georgia, "Times New Roman", serif*/
            ;
        }

        .display-4 {
            font-size: 2.5rem;
        }

        @media (min-width: 768px) {
            .display-4 {
                font-size: 3rem;
            }
        }

        .flex-auto {
            flex: 0 0 auto;
        }

        .h-250 {
            height: 250px;
        }

        @media (min-width: 768px) {
            .h-md-250 {
                height: 250px;
            }
        }

        /* Pagination */
        .blog-pagination {
            margin-bottom: 4rem;
        }

        /*
 * Blog posts
 */
        .blog-post {
            margin-bottom: 4rem;
        }

        .blog-post-title {
            font-size: 2.5rem;
        }

        .blog-post-meta {
            margin-bottom: 1.25rem;
            color: #727272;
        }

        /*
 * Footer
 */
        .blog-footer {
            padding: 2.5rem 0;
            color: #727272;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }

        .blog-footer p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <x-navigation-menu></x-navigation-menu>
    <div class="container">
        <h1 class="blog-post-title mb-1">{{ $post->title }}</h1>

       <article class="blog-post">
        <p class="blog-post-meta">{{ $post->content}}</p>

       
        <a href="{{ route('penulis.dashboard') }}" class="btn btn-warning"><< Kembali</a>
      </article>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>