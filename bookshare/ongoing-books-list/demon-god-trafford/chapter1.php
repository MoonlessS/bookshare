<?php
set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

    include_once("common/database.php");

    include_once("apresentacao/header.php");
    include_once("apresentacao/nav.php");
    include_once("apresentacao/banner.php");
    include_once("apresentacao/sidebar.php");
    include_once("apresentacao/footer.php");
?>

    <html>
    <?php display_header("BookShare - Read Our Amazing Collection Or Write And Share Your Own Books On The Internet"); ?>

    <body>
        <?php display_nav(); ?>
        <?php display_banner(); ?>

        <main>
            <section class="main">
                <div class="book-title">
                    <div id="title" width=40%>Demon God Trafford</div>
                    <div id="author" width=40%>By: Ghost Writer</div>
                    <div id="stars" width=10%>*****</div>
                </div>
                <div>
                    <div class="title" id="dark-black">Chapter 1 - Desperate Teenager</div>
                    <div id="black">
                        <p>“So, I wasn’t wrong. Looks like you do recognize him. Brat, if you quietly let us arrest you the two of us can give you some leeway, and you might even survive after being judged. However, if you decide to make a move now, we will kill you without fail.” The man dressed in blue said after he finished reloading his crossbow.</p>
                        <p>“The two of you already know so much about me which means you two are probably from the Ministry of Justice. What level are you two? Using such empty promises to deceive me; are you lying to me because I’m young? The Imperial law cannot be defied. With the number of Black Tiger Guards I’ve killed, I’m afraid that even if the king himself was in my defense, I’d still be hacked into pieces.” Liu Ming blinked his eyes and did not for a second believe the man in blue.</p>
                        <p>The man snorted at this answer, neither denying nor confirming anything.</p>
                        <p>The red woman to the side laughed and said, “It’s unbelievable that this child is so young and still understands the Imperial laws so well; the people from Savage Island are extraordinary. Even if they are young, you cannot underestimate them. You are right that he, my husband, and I, the wife, serve the Ministry of Justice. Specifically, we’re at the Silver Scale level. Little brother, when you die and reach the Soul River, don’t blame us for bullying the weak. Husband, do it!”</p>
                        <div class="title" id="dark-black"><a href="ongoing-books-list/demon-god-trafford/chapter2.php">Next Chapter</a></div>
                    </div>
                </div>

            </section>

            <?php display_sidebar(); ?>
        </main>

        <?php display_footer(); ?>


    </body>

    </html>
