<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Page</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #212121;
        }


        #home,
        #Contact {
            padding-top: 69px;
            background: rgb(96, 165, 250);
            background: radial-gradient(circle, rgba(96, 165, 250, 1) 0%, rgba(37, 99, 235, 1) 19%, rgba(31, 41, 55, 1) 96%);
        }

        /* #Features,
        #About {
            background: rgb(61, 59, 97);
            background: linear-gradient(90deg, rgba(61, 59, 97, 1) 9%, rgba(49, 93, 189, 1) 24%, rgba(49, 73, 116, 1) 76%, rgba(49, 65, 88, 1) 96%);
        } */

        #Contact {
            padding-top: 69px;
        }

        .height {
            min-height: 100vh;
        }

        #home,
        #Features,
        #Contact,
        #About {
            transition: ease 1s;
        }

        #Features {
            padding: 69px 10px 69px 10px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        @media (max-width: 768px) {
            #Features {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                /* On medium screens, two features per row */
            }
        }

        @media (max-width: 425px) {
            #Features {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                /* On small screens, one feature per row */
            }
        }
    </style>
</head>

<body>
    <?php
    @include "navbar.html";
    $home = @include "Home.html";
    @include "Features.html";
    @include "Contact.html";
    @include "footer.html";
    ?>
    <script>


        // Smooth scroll to section when clicking on the logo
        $(document).ready(function () {
            $("a[href^='#']").on("click", function (e) {
                e.preventDefault();
                const target = this.hash;
                $("html, body").animate(
                    {
                        scrollTop: $(target).offset().top,
                    },
                    800,
                    "swing"
                );
            });
        });

    </script>
</body>

</html>