
  const commentInput = document.getElementById('comment');
  const submitBtn = document.getElementById('submit-btn');
  const commentList = document.getElementById('comments');

  submitBtn.addEventListener('click', () => {
    const commentText = commentInput.value;
    const date = new Date();

    // Format waktu komentar
    const dateTimeString = `${date.toLocaleDateString()} ${date.toLocaleTimeString()}`;

    // Buat elemen baru untuk komentar
    const newComment = document.createElement('li');
    newComment.innerHTML = `
      <div class="comment-box">
        <div class="comment-text">${commentText}</div>
        <div class="comment-date">${dateTimeString}</div>
      </div>
    `;

    // Tambahkan komentar ke daftar komentar
    commentList.appendChild(newComment);

    // Reset input komentar
    commentInput.value = '';

    // Perbarui hasil komentar
    updateCommentResult();
  });

  function updateCommentResult() {
    const commentTextElements = Array.from(commentList.getElementsByClassName('comment-text'));
    const comments = commentTextElements.map(element => element.textContent);
    const commentResult = document.getElementById('comment-result');
    commentResult.textContent = comments.join('\n');
  }
