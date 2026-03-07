<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dash.css">    
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">         
</head>
<body>
    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Relatório</a></li>
                <li><a href="#">Configurações</a></li>             
            </ul>
        <div class="perfil-usuario">
            <img src="https://ui-avatars.com/api/?name=Vitor+Martins" alt="Avatar">
            <span>Vitor Martins</span>
        </nav>
           
        <main>
            <section class="container-cards">
                <article>
                    <h2>Módulo de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Estatísticas da Página</h2>
                    <p>Confira os Dados de acessos dos ultimos 30 dias.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>          
                
                <article>
                    <h2>Cadastro de Banco de Dados</h2>
                    <p>Configurações de DB.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>                  
            </section>
        </main>
    </div>    

    <footer>
        <p>&copy; <?php echo date('2026'); ?> Desenvolvido na Aula Web I</p>

    </footer>
</body>
</html>