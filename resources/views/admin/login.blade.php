<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Fondation PHM</title>
    <meta name="description" content="Interface d'administration de la Fondation PHM">
    
    @vite(['resources/css/admin.css', 'resources/js/admin_app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div id="login-page" class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="admin-logo">
                    <div class="logo-placeholder">PHM</div>
                    <h1>Administration</h1>
                </div>
                <p class="login-subtitle">Connectez-vous pour accéder au tableau de bord</p>
            </div>
            
            <form id="login-form" class="login-form" >
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" required placeholder="Entrez votre nom d'utilisateur">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" required placeholder="Entrez votre mot de passe">
                        <button type="button" class="toggle-password" onclick="togglePassword()">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="checkbox-label">
                        <input type="checkbox" id="remember-me">
                        <span class="checkmark"></span>
                        Se souvenir de moi
                    </label>
                </div>
                <a href="{{ url('/authLogin') }}" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i>
                    Se connecter</a>
                
                <div class="login-footer">
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>