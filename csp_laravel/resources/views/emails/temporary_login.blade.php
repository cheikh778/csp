<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
  <meta name="x-apple-disable-message-reformatting">
  <meta name="color-scheme" content="light dark">
  <meta name="supported-color-schemes" content="light dark">
  <link rel="icon" href="logo.png" type="image/x-icon">
  <style>
    body {
      height: 100% !important;
      margin: 0 auto !important;
      padding: 0 !important;
      width: 100% !important;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }
    table, td { border-collapse: collapse !important; }
    img { border: 0; line-height: 100%; outline: none; display: block; }
    p, h1, h2, h3 { padding: 0; margin: 0; }
    a { color: inherit; text-decoration: none; }
    @media screen and (max-width:600px) {
      .mobile { display: block !important; }
    }
    @media (prefers-color-scheme: dark) {
      body { background-color: #100E11 !important; }
      h1, p, a { color: #fdfdfd !important; }
    }
  </style>
  <title>CSP - Informations temporaires</title>
</head>

<body>
  <table cellpadding="0" cellspacing="0" border="0" role="presentation" style="width:100%;">
    <tr>
      <td align="center" style="padding: 0 15px;">
        <table cellpadding="0" cellspacing="0" border="0" role="presentation" style="width:100%;">
          <tr>
            <td align="left" style="padding: 60px 5px 45px 5px;">
              <a href="#"><img src="logo.png" width="100" alt="CSP - Complexe Scolaire la Persévérance"></a>
            </td>
          </tr>
          <tr>
            <td align="center">
              <p style="font-size:16px; line-height:22px; color:#0a080b;">Bonjour {{ $name }} ,</p>

              <p style="font-size:16px; line-height:22px; color:#0a080b;">Votre compte a été vérifié avec succès.</p>
              <p style="font-size:16px; line-height:22px; color:#0a080b;">Voici vos informations de connexion temporaires :</p>
              <ul>
                <li>Email : {{ $email }}</li>
                <li>Mot de passe : {{ $password }}</li>
              </ul>
              <p style="font-size:16px; line-height:22px; color:#0a080b;">Veuillez changer votre mot de passe après votre première connexion.</p>
            </td>
          </tr>
          <tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td align="left" style="padding-right: 20px;">
                    <img src="logo.png" alt="Logo CSP" width="50" height="50" />
                  </td>
                  <td align="left">
                    <p style="font-size:16px; line-height:20px; color:#0a080b;">CSP - Complexe Scolaire la Persévérance<br />Éthique, Excellence, Équité</p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding: 5px;">
              <p>&copy; 2024 CSP - Complexe Scolaire la Persévérance</p>
              <p style="font-size:16px; line-height:22px;">
                <span style="font-weight: bold;">33 837 12 09 / 77 829 45 56 / 77 748 65 86</span>
                <a href="https://www.facebook.com/csperseverance.152" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/csperseverance152/" class="social-icon"><i class="fab fa-instagram"></i></a>
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
