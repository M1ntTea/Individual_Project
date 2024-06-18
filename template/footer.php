<main class="portfolio" id='portfolio'>

<footer>
  <div class="wrapper">
    <div class="footer__text-container" id='contact'>
      <h2>Контакты</h2>
      <p>Давайте сделаем новый продукт!</p>
    </div>
    <div class="footer__text-container1">
      <p><span class='phone'>Phone</span> <strong><a href="tel:faraonjake@gmail.com">+7 (995) 135-2932</a></strong></p>
      <p><span class='email'>Email</span> <strong><a href="mailto:faraonjake@gmail.com">faraonjake@gmail.com</a></strong></p>
    </div>
  </div>
  <div>
    <form action="sent.php" method="POST">
      <div class="form__group">
        <label for="">Ваше имя</label> <input type="text" id="userName" name="username" placeholder="Имя" require>
      </div>
      <div class="form__group">
        <label for="">Номер телефона</label> <input type="tel" id="userTel" name="usertel" placeholder="+7 999 999 99-99" require>
      </div>
      <div class="form__group">
        <label for="">Вид услуги
        <select name="userText" id="usertext">
          <option value="" select>Вид услуги</option>
          <option value="disigner">Дизайн</option>
          <option value="site">Создание сайтов</option>
          <option value="crm">CRM-системы</option>
          <option value="verst">Верстка</option>
          <option value="Algoritmia">Алгоритмика</option>
          <option value="Other">Другое</option>
        </select></label>
      </div>
      <button type="submit">Отправить</button>
    </form>
  </div>
 <hr class='footer__nav-hr'>
  <nav class="footer__nav">
      <h2 class='name'><a href="/index.html">Svyatoslav Kolisnyk</a></h2>
    <ul class='footer__nav-links'>
      <li class='link'><a href="/index.php">Home</a></li>
      <li class='link'><a href="/projects.php">Projects</a></li>
      <li class='link'><a href="/skills.php">Skills</a></li>
      <li class='link'><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</footer>
</main>
</div>
</body>
</html>