// Função para adicionar e remover +1, incrementando o contador
function togglePlusOne(button) {
    const countSpan = button.nextElementSibling;
    let currentCount = parseInt(countSpan.innerText) || 0;

    if (button.classList.contains('active')) {
        // Se já estava ativo, remove o voto
        button.classList.remove('active');
        currentCount--;
    } else {
        // Se não estava ativo, adiciona o voto
        button.classList.add('active');
        currentCount++;
    }

    // Atualiza o texto, se for 0, deixa vazio para simular o comportamento real
    countSpan.innerText = currentCount > 0 ? currentCount : '';
}

// Função de Novo Post atualizada com IDs únicos para comentários
function handleNewPost(event) {
    if (event.key === 'Enter') {
        const input = document.getElementById('new-post-input');
        const content = input.value.trim();
        const uniqueId = 'post-' + Date.now();

        if (content !== '' || selectedImageBase64 !== null) {
            const feedContainer = document.getElementById('feed-container');
            const newPost = document.createElement('div');
            newPost.className = 'card post';
            newPost.id = uniqueId;


		// HTML da imagem (só aparece se houver uma selecionada)
            const imageHtml = selectedImageBase64 
                ? `<img src="${selectedImageBase64}" class="post-media">` 
                : '';
				
            newPost.innerHTML = `
                <div class="post-header">
                    <img src="pfp/tiapandinha.png" class="avatar-small">
                    <div class="post-info">
                        <div class="author-line"><strong>Tia Pandinha 💕</strong></div>
                    </div>
                    <span class="timestamp">Agora</span>
                </div>
				${imageHtml}
                <div class="post-content">${content.replace(/\n/g, '<br>')}</div>
                <div class="post-actions">
                    <div class="action-left">
                        <button class="btn-plusone" onclick="togglePlusOne(this)">+1</button>
                        <span class="plusone-count"></span>
                    </div>
                    <div class="action-right">
                        <button class="icon-btn-gray" onclick="toggleComments('${uniqueId}')"><i class="fas fa-comment-alt"></i></button>
                    </div>
                </div>
                <div class="comments-section">
                    <div class="comments-list"></div>
                    <div class="add-comment-row">
                        <img src="pfp/tiapandinha.png" class="avatar-comment">
                        <input type="text" class="comment-input" placeholder="Adicionar comentário..." onkeypress="handleComment(event, '${uniqueId}')">
                    </div>
                </div>
            `;

            const shareBox = document.querySelector('.share-box');
            shareBox.insertAdjacentElement('afterend', newPost);
            input.value = '';
			cancelImage();
        }
    }
}

// Alternar visibilidade da caixa de comentários
function toggleComments(postId) {
    const post = document.getElementById(postId);
    const section = post.querySelector('.comments-section');
    section.classList.toggle('active');
    
    // Foca no input se abrir a seção
    if (section.classList.contains('active')) {
        section.querySelector('.comment-input').focus();
    }
}

// Adicionar comentário apenas no post selecionado
function handleComment(event, postId) {
    if (event.key === 'Enter') {
        const input = event.target;
        const text = input.value.trim();

        if (text !== '') {
            const post = document.getElementById(postId);
            const list = post.querySelector('.comments-list');
            
            const commentDiv = document.createElement('div');
            commentDiv.className = 'comment-item';
            commentDiv.innerHTML = `
                <img src="pfp/tiapandinha.png" class="avatar-comment">
                <div><strong>Tia Pandinha 💕</strong> ${text}</div>
            `;
            
            list.appendChild(commentDiv);
            input.value = '';
        }
    }
}

let selectedImageBase64 = null;

// Função para ler a imagem do PC e mostrar um preview
function previewImage(input) {
    const previewContainer = document.getElementById('image-preview-container');
    const previewImg = document.getElementById('image-preview');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            selectedImageBase64 = e.target.result;
            previewImg.src = selectedImageBase64;
            previewContainer.style.display = 'block';
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}

// Função para cancelar a imagem antes de postar
function cancelImage() {
    selectedImageBase64 = null;
    document.getElementById('image-upload').value = "";
    document.getElementById('image-preview-container').style.display = 'none';
}





