<div id="wrapper">
			<h1>Topic of the <?= $prev?> day: <?=$titlek ?></h1>
			<section class="topic-main-card">
                <img class="topic-card-avatar" src ="<?= $img_url ?>" width="600" height="400" style="border-radius: 25px;" alt="">
                <div class="topic-overview">
                    <h2 class="topic-info" style="margin-top: 20px; margin-buttom: 20px;"><?= $question?></h2>
                    <p class="text-of-overview" style="padding: 20px 0; margin: 40px 40px 20px 40px;"><br><?= $datek ?><?php ?></p>
                    <a class="topic-quit" href="intropage.php">Quit topic</a>
                </div>
            </section>
			<div id="msgsDialog" class="block">
				<section class="comment-feed">
					<form  class="comments-form" action="" method="post" id="sendForm">
						<img class="user-avatar" src="img/avatar.png" width="76" height="76">
						<div id="sendDialog" class="block2">
							<input  class="name-field" type="text" name="name" value="Lennyf1" maxlength="" placeholder="Имя" readonly/>
							<textarea class="comments-field" name="text" placeholder="Текст"></textarea>
							<input type="submit" value="отправить" class="comments-button" title="ctrl + enter" id="submit"/>
							<div class="ad"></div>
						</div>
					</form>
				</section>
				<br />
				<br />
				<div class="comments-item" id="msgsContent">
				</div>

				<label class="options first"><input id="autoScroll" type="checkbox" checked="checked" /> прокручивать вниз</label>
				<label class="options"><input id="autoHeight" type="checkbox" checked="checked" /> авторазмер ввода</label>

				<div class="ct"></div>
				<div class="cb"></div>
			</div>
		</div>