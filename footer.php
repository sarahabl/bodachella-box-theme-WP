<?php wp_footer(); ?>
<footer class="footer">

  <div class="footer__contact">
    <div class="footer__contact-form">
      <h3>RESTONS EN CONTACT</h3>
      <form action="#">
        <div class="form-group">
          <label for="contact-name">Votre prénom et nom:</label>
          <input type="text" id="contact-name" name="contact-name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="contact-email">Votre adresse e-mail:</label>
          <input type="email" id="contact-email" name="contact-email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="contact-message">Votre message:</label>
          <textarea id="contact-message" name="contact-message" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
    <div class="footer__social-media">
      <ul>
        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i> Suivez nous sur Facebook</a></li>
        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i> Suivez nous sur Instagram</a></li>
        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i> Suivez nous sur Linkedin</a></li>
      </ul>
    </div>
  </div>
  <div class="footer__background">
    <div class="footer__background-image"></div>
    <div class="footer__logo">
      <img src="logo.png" alt="BODACHELLA - Pour des EVJF d'exception" class="img-fluid">
    </div>
  </div>
  <div class="footer__copyright">
    <p>&copy; 2024 BODACHELLA - Pour des EVJF d'exception. Tous droits réservés.</p>
  </div>

</footer>
</body>
</html>