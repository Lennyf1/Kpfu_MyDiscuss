<?php
session_start();
?>
<?php require ('header.php'); ?>

<main class="page-main">
    <section class="search-wrapper">
        <div class ="account-label">
            <p class="personal-account">
                Main page
            </p>
        </div>
    </section>
    <section class="post-feed">
        <div>
            <a class="link-main-item hottest" href="#" style="display: inline-block;">Hottest Topics</a>
            <a class="link-main-item mliked" href="#" style="display: inline-block;">Most liked</a>
            <a class="link-main-item mdisliked" href="#" style="display: inline-block;">Most Disliked</a>
        </div>
    </section>
    <section class="posts">
        <div class="posts-item">
            <a class="post-button" href ="#">d/Tarantino's films</a>
            <div class="posts-string">
                <p class="posts-name">Tarantino's films</p>
                <p class="posts-commentcount first">56 789 messages</p>
            </div>
            <p class="posts-lastmessage">
                last message:

            </p>
            <div class="string-string">
                <p class="posts-message">
                    BlsJake: Come on, he is overrated as hell <span class="time-comment film">(23:56)</span>
                </p>
                <div class="post-ui-list">
                    <p class="ui-list-item">
                        <button class="likes" type="button"><span class="likes-number"></span></button>
                    </p>
                    <p class="ui-list-item">
                        <button class="dislikes" type="button"><span class="dislikes-number"></span></button>
                    </p>
                </div>
            </div>
        </div>
        <div class="posts-item">
            <a class="post-button" href ="#">d/NBA</a>
            <div class="posts-string">
                <p class="posts-name">NBA</p>
                <p class="posts-commentcount second">23 761 messages</p>
            </div>
            <p class="posts-lastmessage">
                last message:
            </p>
            <div class="string-string">
                <p class="posts-message">
                    JackSparrow: Bron is an old trashbag lol <span class="time-comment sport">(21:16)</span>
                </p>
                <div class="post-ui-list">
                    <p class="ui-list-item">
                        <button class="likes" type="button"><span class="likes-number"></span></button>
                    </p>
                    <p class="ui-list-item">
                        <button class="dislikes" type="button"><span class="dislikes-number"></span></button>
                    </p>
                </div>
            </div>
        </div>
        <div class="posts-item">
            <div>
                <a class="post-button" href ="#">d/Ethereum_Shanghai</a>
                <div class="posts-string">
                    <p class="posts-name">Ethereum_Shanghai</p>
                    <p class="posts-commentcount third">9 913 messages</p>
                </div>
                <p class="posts-lastmessage">
                    last message:
                </p>
                <div class="string-string">
                    <p class="posts-message">
                        Vitalik_eth: can’t wait to see it <span class="time-comment crypto">(23:56)</span>
                    </p>
                    <div class="post-ui-list">
                        <p class="ui-list-item">
                            <button class="likes" type="button"><span class="likes-number"></span></button>
                        </p>
                        <p class="ui-list-item">
                            <button class="dislikes" type="button"><span class="dislikes-number"></span></button>
                        </p>
                    </div>
                </div>
            </div>
    </section>
</main>
<?php require ('footer.php'); ?>