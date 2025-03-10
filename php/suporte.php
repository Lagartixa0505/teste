<?php
include('protect.php'); // Inclua seu arquivo de proteção

if (!isset($_SESSION['nome'])) {
    header('Location: index.php'); // Redirecione se o usuário não estiver logado
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NG treinamentos</title>
    <link rel="icon" href="logo1.jpeg" type="image/png">
    <link rel="stylesheet" href="global.css">
    <style>
    /*Botao Home*/
    .voltar button {
        background: #16223d;
        color: #ffffff;
        margin-right: 30px; /* Adicione a quantidade de margem que deseja */
        padding: 8px 16px;
        width: 90px;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        transition: background-position 1s ease; /* Adicionando transição de posição do gradiente */
        background-size: 200% 100%; /* Adicionando tamanho do gradiente */
        background-position: 90% 50%; /* Movendo o gradiente para a direita */
    }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h2>Opa Suite</h2>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Buscar</button>
        </div>
        <div class="voltar">
            <button type="button" class="add-to-cart-button" onclick="redirectToSupport()">Home</button>
        </div>
        
        <script>
            function redirectToSupport() {
                window.location.href = 'index.php'; // Redireciona para index.php na mesma janela
            }
        </script>
    </header>
    <main>
    
        <div class="containerM">
            <section class="video-player">
                <div class="info1">
                    <video controls>
                        <source src="media/ppp.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
            
                </div>
            </section>
            
            <!-- Outros vídeos aqui -->
            <section class="video">
            
                <div class="info">
                    <h2>Primeiro Contato com o Opa Suite</h2>
                </div>
                <div class="buttons">
                    <div class="recuar">
                        <button>Recuar</button>
                    </div>
                    <div class="proximo">
                        <button>Proximo</button>
                    </div>
                </div>
            
            </section>

            <section class="descricao" id="description">
                <h3>23 de Maio de 2024</h3>
                <p>
                    Bem-vindo ao nosso vídeo sobre suporte ao cliente! Neste guia abrangente, exploramos as melhores práticas e técnicas para oferecer um atendimento excepcional e garantir a satisfação do cliente. Este vídeo é ideal para novos membros da equipe de suporte, bem como para profissionais experientes que desejam aprimorar suas habilidades.
                </p>
                <h3>Quem deve assistir:</h3>
                <p>
                    Este vídeo é perfeito para profissionais de suporte ao cliente de todos os níveis, incluindo novos contratados que estão se familiarizando com suas funções e veteranos que buscam aprimorar suas técnicas. Gestores de equipes de suporte também podem se beneficiar das dicas e estratégias apresentadas, ajudando a liderar suas equipes de maneira mais eficaz.
                </p>
                <h3>Conclusão:</h3>
                <p>
                    Nosso objetivo é capacitar você a fornecer um atendimento ao cliente que não apenas resolve problemas, mas também cria experiências positivas que fidelizam os clientes. Assista ao vídeo até o final para obter insights valiosos e dicas práticas que você pode aplicar imediatamente no seu dia a dia.
                </p>
                <span id="state" onclick="toggleVisibility()">...mostrar mais</span>
            </section>
            <!--Continue para adicionar comentarios/descricao em baixo-->
        </div>

        <!-- Repeat the above section for more videos -->
    </main>
    
    <script src="script.js"></script>
</body>
</html>
