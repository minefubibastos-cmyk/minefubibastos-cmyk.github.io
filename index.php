<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google+</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="top-bar">
        <div class="left-header">
            <button class="icon-btn"><i class="fas fa-bars"></i></button>
            <div class="logo">Google+</div>
            <div class="page-title">Início</div>
        </div>
        <div class="right-header">
            <button class="icon-btn"><i class="fas fa-search"></i></button>
            <button class="icon-btn"><i class="fas fa-th"></i></button>
            <button class="icon-btn"><i class="fas fa-bell"></i></button>
            <img src="pfp/tiapandinha.png" alt="Perfil" class="avatar">
        </div>
    </header>

    <div id="image-preview-container">
        <img id="image-preview" src="">
        <button onclick="cancelImage()" title="Remover imagem">&times;</button>
    </div>

    <div class="main-container">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li class="active"><i class="fas fa-home"></i> Início</li>
                    <li><i class="fas fa-layer-group"></i><a href="https://criadordecruzadinhas.com.br/crossword/cw_1772908611220_f8bmlcmtp" target="_blank" style="text-decoration:none"> Cruzadinha ✨</a></li>
                    <li><i class="fas fa-users-cog"><a href="https://pt.quizur.com/trivia/voce-sabe-tudo-1rmAJ" target="_blank_" style="text-decoration:none"></i> Quiz✨	</a></li>
                    <li><i class="fas fa-user-circle"></i> Profile</li>
                    <li><i class="fas fa-user-friends"></i> People</li>
                    <div class="divider"></div>
                    <li><i class="fas fa-cog"></i> Settings</li>
                    <li><i class="fas fa-exclamation-circle"></i> Send Feedback</li>
                    <li><i class="fas fa-question-circle"></i> Help</li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                Privacy Policy | Terms of Service | Maps Terms<br>
				Nenhum desses botões funcionam de vdd, perdao. <br>
				Aliás eu nunca usei g+ eu n faço ideia <br>
				de como era o site. <br>dei o meu melhor.<br>
                ©2015 Google
            </div>
        </aside>

        <main class="feed" id="feed-container">
  
	  <div class="card share-box">
		<img src="pfp/tiapandinha.png" alt="Tia Pandinha 💕" class="avatar-small">
		<input type="text" id="new-post-input" placeholder="O que há de novo com você?" onkeypress="handleNewPost(event)">
		<input type="file" id="image-upload" accept="image/*" style="display: none;" onchange="previewImage(this)">
		<i class="fas fa-camera text-muted" style="cursor:pointer;" onclick="document.getElementById('image-upload').click()"></i>
	  </div>
  
		<div id="image-preview-container">
			<img id="image-preview" src="">
			<button onclick="cancelImage()" title="Remover imagem">&times;</button>
		</div>
	
	
	
	<!--  INICIO DOS POSTS   -->
	
	<div class="card post" id="post-furbi">
    <div class="post-header">
        <img src="pfp/literalmenteeu.png" class="avatar-small">
        <div class="post-info">
            <div class="author-line"><strong>x_FURB1_x</strong></div>
        </div>
        <span class="timestamp">1min</span>
    </div>
    <div class="post-content">eae minha princesa paraebens ein uhuull caraca 30 anos ja te conheci quando vc nem era um conceito ainda slk parabens amigona espero q vc
	se divirta eternamente e seja mt feliz e mt alegre nesta nova era da sua #life neh gloria e seje minha amiga pra todo o sempre neh kkkk n vai me esquecer
	pelos seus novos amigos da faculodade kkkkk ....... n vai... ne..<br>
	divirtasse aqui mano tem umas parada p faze
	e se vc n gostar sinto muito eh o que tem!!! <br>
	apenas uma breve forma de tentar te trazer memorias um dia distantes. mas q ainda estao todas com vc.<br>
	parabens minha flor ^3^  te amamos imensamente.</div>
    <div class="post-actions">
        <div class="action-left">
            <button class="btn-plusone" onclick="togglePlusOne(this)">+1</button>
            <span class="plusone-count">1</span>
        </div>
        <div class="action-right">
            <button class="icon-btn-gray" onclick="toggleComments('post-furbi')">
                <i class="fas fa-comment-alt"></i>
            </button>
        </div>
    </div>
    <div class="comments-section">
        <div class="comments-list"></div>
        <div class="add-comment-row">
            <img src="pfp/tiapandinha.png" class="avatar-comment">
            <input type="text" class="comment-input" placeholder="Adicionar comentário..." onkeypress="handleComment(event, 'post-furbi')">
        </div>
    </div>
	</div>

	<div class="card post" id="post-pedro">
		<div class="post-header">
			<img src="pfp/pedro.png" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>pedro</strong></div>
				<span class="timestamp">2h</span>
			</div>
		</div>
		<img src="posts/image0.gif" class="post-media">
		<div class="post-content">ta legal falar sósia de mim jajajajajajajaja<br>
		pedro<br>
		menos clon mais é homem msm<br>
		pedro<br>
		<strong>sorri travado podrida era +1 pro camufle</strong>
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">12</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-pedro')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			<div class="comment-item">
                <img src="pfp/literalmenteeu.png" class="avatar-comment">
                <div>
                    <strong>x_FURB1_x.</strong> eu amo tanto você.
                </div>
            </div>
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-pedro')">
			</div>
		</div>
	</div>
	
	<div class="card post" id="post-alejandro">
		<div class="post-header">
			<img src="pfp/alejandro.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>Alejandro Wiebe</strong></div>
				<span class="timestamp">49min</span>
			</div>
		</div>
		<img src="posts/alejandro.png" class="post-media">
		<div class="post-content">Felicitaciones a mi grande amiga Nathália feliz cumpleaños!! 💕 🎊 🥳 <br>
		<span class="fake-hashtag">#Cumpleaños</span><br>
		<span class="fake-hashtag">#Nathália</span><br>
		<span class="fake-hashtag">#Feliz</span><br>
		<span class="fake-hashtag">#España</span>
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">41</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-alejandro')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			<div class="comment-item">
                <img src="pfp/pedro.png" class="avatar-comment">
                <div>
                    <strong>pedro</strong> parabens pra ela da natalia agora toa legal mesmo *dá um tapinha na la pela foto da natalia*
                </div>
            </div>
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-alejandro')">
			</div>
		</div>
	</div>
	
	<div class="card post" id="post-aline">
		<div class="post-header">
			<img src="pfp/aline.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>GoogleUser0413</strong></div>
				<span class="timestamp">4min</span>
			</div>
		</div>
		<div class="post-content">Feliz aniversário<br>
		Mika<br>
		Está de paraboins<br>
		Eh isso?<br>
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">7</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-aline')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			<div class="comment-item">
                <img src="pfp/literalmenteeu.png" class="avatar-comment">
                <div>
                    <strong>x_FURB1_x.</strong> mermao tu ainda n criou uma conta .
                </div>
            </div>
			<div class="comment-item">
                <img src="pfp/aline.jpg" class="avatar-comment">
                <div>
                    <strong>GoogleUser0413</strong> VC N ME ENSINA
                </div>
            </div>
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-aline')">
			</div>
		</div>
	</div>

	<div class="card post" id="post-boiled">
		<div class="post-header">
			<img src="pfp/boiledone.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>𒌷̡̓̂񾌷̹͌͝𒌸̮͇̔̂񾌷̺̽͒𒜶̘͠𗬶̪̄͝</strong>
				<i class="fas fa-caret-right"></i> 
            <span class="target-community">O Submundo</span></div>
				<span class="timestamp">12d</span>
			</div>
		</div>
		<img src="posts/analog.jpg" class="post-media">
		<div class="post-content">felt cute... might delete later...</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">8</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-boiled')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			<div class="comment-item">
                <img src="pfp/aline.jpg" class="avatar-comment">
                <div>
                    <strong>GoogleUser0413</strong> Tá repreendido.
                </div>
            </div></div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-boiled')">
			</div>
		</div>
	</div>
	
	<div class="card post" id="post-depressao">
        <div class="post-header">
            <img src="pfp/literalmenteeu.png" class="avatar-small">
            <div class="post-info">
                <div class="author-line"><strong>x_FURB1_x</strong></div>
                <span class="timestamp">3min</span>
            </div>
        </div>
		<img src="posts/depressao.jpg" class="post-media">
        <div class="post-content">
            te lembrando aq de momentos incriveis da sua vida tal como essa cena de humilhaçao... ou exaltaçao, n lembro.
			ta lembrando man ta triste ja? fica mais triste 🔥 parabens querida
        </div>
        <div class="post-actions">
            <div class="action-left">
                <button class="btn-plusone" onclick="togglePlusOne(this)">+1</button>
                <span class="plusone-count">2</span>
            </div>
            <div class="action-right">
                <button class="icon-btn-gray" onclick="toggleComments('post-depressao')">
                    <i class="fas fa-comment-alt"></i>
                </button>
            </div>
        </div>
        <div class="comments-section">
            <div class="comments-list">
			<div class="comment-item">
                <img src="pfp/nick.jpg" class="avatar-comment">
                <div>
                    <strong>Nic_olas004@hotmail.com</strong> :)
                </div>
            </div>
			<div class="comment-item">
                <img src="pfp/pedro.png" class="avatar-comment">
                <div>
                    <strong>pedro</strong> q q eh isso 
											parece q tamo jogando msm<br>
											faz uma cara de confusa olhando a foto<br>
											vc eh o q ali<br>
											eu eh a terceira pessoa ali<br>
											a mina de casaco preto e franja<br>
											e vc eh um dos outros tres neh irmao<br>
											e a da capa bege eh a natalia eh<br>
											mds td mundo igual
                </div>
            </div>
            </div>
            <div class="add-comment-row">
                <img src="pfp/tiapandinha.png" class="avatar-comment">
                <input type="text" class="comment-input" placeholder="Comentar..." 
                       onkeypress="handleComment(event, 'post-depressao')">
            </div>
        </div>
    </div>
	
	<div class="card post" id="post-castiel">
		<div class="post-header">
			<img src="pfp/castiel.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>Castiel 💀</strong></div>
				<span class="timestamp">4d</span>
			</div>
		</div>
		<div class="post-content">boa noite minha doce princesa aqui eh o castiel 🩸 de amor doce muito feliz aniversario grr querida gatinha rs rs 
								que vc gaste muitos pontos de açao nos meus jogos ⛔ alimentando seus sonhos esquisitos hunf grrr 💀
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">45</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-castiel')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-castiel')">
			</div>
		</div>
	</div>
	
	<div class="card post" id="post-cringes">
		<div class="post-header">
			<img src="pfp/tiofredy.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>Tio Fredy 🐻</strong>
				<i class="fas fa-caret-right"></i> 
            <span class="target-community">Fámilia FNAF</span></div>
				<span class="timestamp">1d</span>
			</div>
		</div>
		<img src="posts/cringes.jpg" class="post-media">
		<div class="post-content">feliz aniversario pandinha!!! um abracao dos seus amigos sim ainda estamos todos aqui no seu coraçao e nas suas memorias, no seu jeito de ser
								e nas suas escolhas. que vc seje continue sendo feliz, mesmo em diversas familias.<br>
								<span class="fake-hashtag">#FNAF</span><br>
								<span class="fake-hashtag">#FAMILIA</span><br>
								<span class="fake-hashtag">#PANDAS</span><br>
								</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">6</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-cringes')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-cringes')">
			</div>
		</div>
	</div>
	
	<div class="card post" id="post-nick">
		<div class="post-header">
			<img src="pfp/nick.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>Nic_olas004@hotmail.com</strong></div>
				<span class="timestamp">1min</span>
			</div>
		</div>
		<div class="post-content">Oi bro :3 aqui eh seu irmao Nicolas :) que Deus te abençoe todos os dias de sua vida =)))))feliz 28 anos !!! :0 Parabéns >:) seje feliz !!!
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">5</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-nick')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-nick')">
			</div>
		</div>
	</div>
	
	<div class="card post" id="post-twilight">
		<div class="post-header">
			<img src="pfp/twilight.png" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>Twilight Sparkle 🦄</strong></div>
				<span class="timestamp">53min</span>
			</div>
		</div>
		<div class="post-content"><strong>*relincho*</strong> Parabéns minha querida amiga Nathália que vc seja feliz neste dia incrível! 
										lembre-se a amizade é mágica nunca pare de sonhar! <strong>*relincho</strong>
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">30</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-twilight')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-twilight')">
			</div>
		</div>
	</div>
	
	<div class="card post" id="post-gartic">
        <div class="post-header">
            <img src="pfp/literalmenteeu.png" class="avatar-small">
            <div class="post-info">
                <div class="author-line"><strong>x_FURB1_x</strong></div>
                <span class="timestamp">9min</span>
            </div>
        </div>
		<img src="posts/gartic.gif" class="post-media">
        <div class="post-content">
			kkkkkk esse eh mt bom. tu nem lembrava disso ne falaai.
        </div>
        <div class="post-actions">
            <div class="action-left">
                <button class="btn-plusone" onclick="togglePlusOne(this)">+1</button>
                <span class="plusone-count">4</span>
            </div>
            <div class="action-right">
                <button class="icon-btn-gray" onclick="toggleComments('post-gartic')">
                    <i class="fas fa-comment-alt"></i>
                </button>
            </div>
        </div>
        <div class="comments-section">
            <div class="comments-list">
            </div>
            <div class="add-comment-row">
                <img src="pfp/tiapandinha.png" class="avatar-comment">
                <input type="text" class="comment-input" placeholder="Comentar..." 
                       onkeypress="handleComment(event, 'post-gartic')">
            </div>
        </div>
    </div>

    <div class="card post" id="post-literalmente">
        <div class="post-header">
            <img src="pfp/literalmenteeu.png" class="avatar-small">
            <div class="post-info">
                <div class="author-line"><strong>literalmente eu</strong></div>
                <span class="timestamp">1d</span>
            </div>
        </div>
        <div class="post-content">
            eh mano feliz aniversário se eh que da pra chamar o tempo que ele escravo porque das nossas relações.Script(work.flow).start eh存在
        </div>
        <div class="post-actions">
            <div class="action-left">
                <button class="btn-plusone" onclick="togglePlusOne(this)">+1</button>
                <span class="plusone-count">8</span>
            </div>
            <div class="action-right">
                <button class="icon-btn-gray" onclick="toggleComments('post-literalmente')">
                    <i class="fas fa-comment-alt"></i>
                </button>
            </div>
        </div>
        <div class="comments-section">
            <div class="comments-list">
			<div class="comment-item">
                <img src="pfp/pedro.png" class="avatar-comment">
                <div>
                    <strong>pedro</strong> quer jogar Identity V?
                </div>
            </div>
			<div class="comment-item">
                <img src="pfp/literalmenteeu.png" class="avatar-comment">
                <div>
                    <strong>literalmente eu</strong> ou isso ou a visaoándoriana do delírio puro e abstrato da lua no céu noturno. ou um grito supremo.Responder
                </div>
            </div>
            </div>
            <div class="add-comment-row">
                <img src="pfp/tiapandinha.png" class="avatar-comment">
                <input type="text" class="comment-input" placeholder="Comentar..." 
                       onkeypress="handleComment(event, 'post-literalmente')">
            </div>
        </div>
    </div>
	
	
	<div class="card post" id="post-russos">
        <div class="post-header">
            <img src="pfp/russo1.jpg" class="avatar-small">
            <div class="post-info">
                <div class="author-line"><strong>Askaroviktzenin</strong></div>
                <span class="timestamp">8h</span>
            </div>
        </div>
		<img src="posts/postrusso.jpg" class="post-media">
        <div class="post-content">
            Поздравляю, моя племянница Наталья! Приезжай как-нибудь к нам на барбекю...
        </div>
        <div class="post-actions">
            <div class="action-left">
                <button class="btn-plusone" onclick="togglePlusOne(this)">+1</button>
                <span class="plusone-count">38</span>
            </div>
            <div class="action-right">
                <button class="icon-btn-gray" onclick="toggleComments('post-russos')">
                    <i class="fas fa-comment-alt"></i>
                </button>
            </div>
        </div>
        <div class="comments-section">
            <div class="comments-list">
			<div class="comment-item">
                <img src="pfp/russo2.jpg" class="avatar-comment">
                <div>
                    <strong>Joshua</strong> Разве это не та девушка, которая украла наш уголь в прошлом году??
                </div>
            </div>
			<div class="comment-item">
                <img src="pfp/russo3.png" class="avatar-comment">
                <div>
                    <strong>Viktor</strong> Это было в 2022 году, Виктор.
                </div>
            </div>
            </div>
            <div class="add-comment-row">
                <img src="pfp/tiapandinha.png" class="avatar-comment">
                <input type="text" class="comment-input" placeholder="Comentar..." 
                       onkeypress="handleComment(event, 'post-russos')">
            </div>
        </div>
    </div>
	
	<div class="card post" id="post-bonnie">
		<div class="post-header">
			<img src="pfp/bonnie.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>Toy Bonnie</strong></div>
				<span class="timestamp">39a</span>
			</div>
		</div>
		<div class="post-content"><strong>har har har har</strong>
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">210</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-bonnie')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-bonnie')">
			</div>
		</div>
	</div>
	
	
	<div class="card post" id="post-aline2">
		<div class="post-header">
			<img src="pfp/aline.jpg" class="avatar-small">
			<div class="post-info">
				<div class="author-line"><strong>GoogleUser0413</strong></div>
				<span class="timestamp">14min</span>
			</div>
		</div>
		<div class="post-content">Pabens Feliz 🔥🔥🔥
		</div>
		<div class="post-actions">
			<div class="action-left"><button class="btn-plusone" onclick="togglePlusOne(this)">+1</button><span class="plusone-count">11</span></div>
			<div class="action-right">
				<button class="icon-btn-gray" onclick="toggleComments('post-aline2')"><i class="fas fa-comment-alt"></i></button>
			</div>
		</div>
		<div class="comments-section">
			<div class="comments-list">
			<div class="comment-item">
                <img src="pfp/literalmenteeu.png" class="avatar-comment">
                <div>
                    <strong>x_FURB1_x.</strong> PQ VC POSTOU DUAS VEZES
                </div>
            </div>
			</div>
			<div class="add-comment-row">
				<img src="pfp/tiapandinha.png" class="avatar-comment">
				<input type="text" class="comment-input" placeholder="Comentar..." onkeypress="handleComment(event, 'post-aline2')">
			</div>
		</div>
	</div>
	
</main>
				
				<div class="comments-section">
    <div class="comments-list" id="comments-list-1">
        </div>
    <div class="add-comment-row">
        <img src="pfp/tiapandinha.png" alt="Tia Pandinha 💕" class="avatar-comment">
        <input type="text" 
               class="comment-input" 
               placeholder="Adicionar um comentário..." 
               onkeypress="handleComment(event, 'comments-list-1')">
    </div>
</div>
            </div>
        </main>
    </div>

    <button class="fab" onclick="document.getElementById('new-post-input').focus()">
        <i class="fas fa-pencil-alt"></i>
    </button>

    <script src="script.js"></script>
</body>
</html>