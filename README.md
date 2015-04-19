# MD-Crawler
Atividade relacionada a disciplina Matemática Discreta-2015-1 - CEULP/ULBRA

Site: http://ego.globo.com/

Um grafo permite representar relações entre entidades de um contexto. Considerando o contexto como este "mundo das celebridades" apresentado pelo "Ego", um grafo pode representar as relações entre as pessoas (famosos).

Para criar este grafo automaticamente a partir das páginas do site, é necessário criar um software para:

Interpretar o conteúdo HTML da página de famosos: extrair as informações dos famosos (nome, link). 
Interpretar o conteúdo HTML da página do famoso: para cada famoso, extrair mais informações da página do famoso (foto, signo, data de nascimento, cônjuge, biografia)
No caso do famoso estar casado (ou estar presente informação de relacionamento) extrair informações da página do cônjuge
Interpretar o conteúdo HTML da página do famoso: para cada famoso, extrair informações da página do famoso, descobrindo os famosos relacionados, montando relações
Interpretar o conteúdo HTML da página do famoso: extrair da página (e das páginas da paginação) a lista das notícias relacionadas ao famoso
Interpretar o conteúdo HTML da página da notícia: extrair da página indicações sobre famosos citados na notícia (considerar título e conteúdo). Neste caso, armazenar relação entre notícia e famoso.
