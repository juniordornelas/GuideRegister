<header id="header-menu" class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
            <a class="brand" href="#"><span class="fa-home3"></span> <span class="hidden-phone">Guide Register</span></a>

            <ul class="nav">
                <li><a class="brand"  href="?pg=listaAvisos"><span class="fa-bell"></span></a></li>
            </ul>
            <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
            <div class="nav-collapse pull-right">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
                <ul class="nav">
                    <div class="btn-group ">
                        <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                            Telas de Login
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Links de menu dropdown -->
                            <li ><a href="?pg=login&opcao=loginInicial"><span class="fa-key"></span> Login Inicial</a> </li>
                            <li ><a href="?pg=login&opcao=esqueciMinhaSenha"><span class="fa-key2"></span> Esqueci minha senha</a> </li>
                            <li ><a href="?pg=login&opcao=novasenha"><span class="fa-key3"></span> Nova senha</a> </li>
                        </ul>
                    </div>
                </ul> 
                <ul class="nav">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                            <i class="fa-user"></i> Aluno
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Links de menu dropdown -->
                            <li ><a href="?pg=cadastrarAluno"><span class="fa-user-add"></span> Cadastrar</a> </li>
                            <li ><a href="?pg=pesquisarAluno"><span class="fa-search3"></span> Pesquisar</a> </li>
                        </ul>
                    </div>  
                </ul> 

                <ul class="nav">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                            <span class="fa-users4"></span> Professores
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Links de menu dropdown -->

                            <li ><a href="?pg=cadastrarprofessor"><span class="fa-user-add"></span> Cadastrar</a> </li>
                            <li><a href="?pg=pesquisarprofessor"><span class="fa-search3"></span> Pesquisar</a></li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#"><span class="fa-list2"></span> Listar</a>
                                <ul class="dropdown-menu">
                                    <li><a href="?pg=listasdeprofessor">Listas</a></li>
                                    <li><a href="">Pesquisa do Professor</a></li>
                                    <li><a href="">Resultados</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>  
                </ul>  
                <ul class="nav">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                            <i class="fa-folder-open"></i> Turmas
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Links de menu dropdown -->

                            <li ><a href="?pg=turmaCadastrar"> <i class="fa-plus"></i> Cadastrar</a> </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#"><i class="fa-list2"></i> Listar</a>
                                <ul class="dropdown-menu">

                                    <li><a href="?pg=pesquisaTurma">Pesquisa da Turma</a></li>
                                    <li><a href="?pg=resultadoDados">Resultados</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>  
                </ul> 
                <ul class="nav">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                            <i class="fa-file-powerpoint"></i> Relatórios
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Links de menu dropdown -->

                            <!------------------------------- Relatorios - Taynara ------------------------------------> 

                            <li ><a href="?pg=relPesquisarAluno">Pesquisar por aluno</a> </li>
                            <li ><a href="?pg=relAtaAluno">Ata por turmas</a> </li>
                            <li ><a href="?pg=relDisciplina">Pesquisar por disciplinas</a> </li>
                        </ul>
                    </div>  
                </ul>  
                <ul class="nav">

                    <div class="btn-group">
                        <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="?pg=listaAvisos">
                            <i class="fa-help"></i> Aviso
                            <span class="caret"></span>
                        </a>

                    </div>  
                </ul>  
            </div>

        </div>
    </div>
</header>
