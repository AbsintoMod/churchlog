Sistema para Igreja.

OBS. em casa

Tentado mas só lembra que tem que ser como ADM.

http://vikku.info/programming/geodata/geonames-get-country-state-city-hierarchy.htm
https://www.pngwing.com/pt/search?q=perfil+de+usu%C3%A1rio
https://www.imagensempng.com.br/tag/vetor/page/2/

Criar Menu do Perfil Pessoal
    Perfil {Informações + Contato,Documentos,Endereço,Foto .ABAS}
    Certificados{Cartão de Membro,Cargo .CARD}
    Pedidos de Oração {.CARD}
    Configuração de Theme {.FORMULARIO}

Criar Aba para {DEPARTAMENTO[
Menu GRUPOS 
    Lista{para Acessar GRUPOS}
    GRUPO.Membros+GRUPO.Cadastro{Membros,Funções.botão}
    GRUPO.Reunioes //pages/forms/editors.html || DataMask || ColorPick
    GRUPO.Mensagens //pages/forms/general.html || General Elements
    GRUPO.Requisição de Materiais 
Menu SETORES
    Lista{para Visualizar SETORES}
    SETORES.Pessoas {Membros{Funções}}
    SETORES.Voluntarios
]}

{INSTITUIÇÃO[
Menu SECRETARIA
    Membros {Cadastrar, Pesquisar{Busca{Nome,Congregação,Cartão,Cargo,Inform. Pessoais},Atualização,Impressão{Carteira,Carta de Recomendação,Certificados}}}
    DEPARTAMENTO.Cadastro Novo{Nome,(Lider-Responsavel),Tipo{SETOR,GRUPO{Musical,Dança,etc}}}
    Carteirinha {Tipos,Confecção,Renovação}
    Agendamento para Eventos {Agendamento,Aprovados,À Aprovar,Relatório{Mensal,BuscaPorData}}
    Patrimônio {Bens{Valor,DataCompra,Setor Responsavel},Categorias,Registro de  Movimentação{Origem-Destino,Descarte,Doação}}
Menu FINANCEIRO
    Dizimos
    Ofertas
    Despesas {Contas Fixas,Fornecedores,Pessoal,Comprar,Eventos}
    Solicitações de Compra {Solicitação por Setor{CompraDireta,},Almoxarifado}    
    Relatório {Caixa,Despesas a Pagar,Dados por Culto,Despesa de Pessoal,Informação Bancária}
Menu COORDENAÇÃO
    Gabinete (Acesso Exclusivo - Pastor)
    Pastores
    Lideres {Grupo,Setores}
Menu AÇÃO SOCIAL
    Voluntarios
    Doações
    Campanhas
    Trabalhos de Rua
Menu ENSINO
    EBD{Sala{Qtde. Alunos,Frequencia},Horario,Professores,Alunos{Matriculados,Sala},Relatório{Visitantes,Convidados,Oferta}}
    Musica
    Estudos
    Biblioteca{Biblias,Livros,Hinarios}
    Discipulado
]}

{FILIAÇÃO(aba exclusiva para Sede)[
Menu SETOR{Pesquisa de Igrejas por: Pastores e Locais}
    Cadastro{Nome,Localidade,Responsavel}
    Lista
    Localidade
    SubCongregações
Menu CONGREGAÇÃO (CARD: (Dirigente,Endereço))
    Reuniões
    Departamentos {Coordenadores,Reuniões,Docs{Arquivos,Midia}}
    Insumos
    Pedidos de Oração
    Relatório
]}

{CALENDARIO[
    Calendario com Cultos do Mês{Data e Horario}
]}
{GALERIA[
    Foto {Cultos,Eventos}
    Videos {Link}
    Docs {Ex:Certificados}
]}

{CULTOS[
    Cadastro de Visitantes
    Agendamento de Preletores
    Escalas
    Eventos(Dentro do Mês)
    Relatório{Qtde. Visitantes,Horario(Inicio,Fim),Músicas,Dirigente,Programação}
]}

{EVENTOS[
    Galeria de Eventos {Descrição,Midia}
    Mensagens {Apoios,Patrocinio,Dúvidas}
]}

{ANIVERSARIANTES[
    Galeria com Aniversariantes do Mês
]}

{RELATORIO SEMANAL[
    GAleria com Datas,horarios e Descrição Semanais 
]}

{MENSAGEMS(Aba Pessoal)[
Menu Caixa de E-mail
    Entrada
    Ler
    Criar
Menu Comunidade
    Receber Mensagens de Setores
]}
{RAMAIS[
    Exibição de Telefones por Setor
]}

PAGINA

404 OK
500 OK
