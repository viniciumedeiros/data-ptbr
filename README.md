# Converter datas para formato brasileiro (pt-br)
<p>Funções que facilitam a conversão de datas para o formato brasileiro
Uma dúvida recorrente é a conversão de data de EN para PT-BR, uma tarefa corriqueira em nosso dia a dia.
Comumente trabalhamos no formato EN para armazenar a informação no banco de dados, porém em determinados casos temos a necessidade de converter a data para PT_BR.</p>

## Formatos de saída

### Formatando data "AAAA-MM-DD" para "DD/MM/AAAA"
<pre>
databr(2009-12-31) // 31/12/2009
</pre>

### Formatando data "AAAA-MM-DD HH:MM:SS" para "DD/MM/AAAA HH:MM"
<pre>
datahorabr(2009-12-31 07:30:59) // 31/12/2009 07:30:59
</pre>

### Formatando data "AAAA-MM-DD HH:MM:SS" para "DD/MM/AAAA HH:MM:SS"
<pre>
datahorafullbr(2009-12-31 07:30:59) // 31/12/2009 07:30:59
</pre>

### Formatando data "AAAA-MM-DD" para "DD"
<pre>
databr_dia(2009-12-31) // 31
</pre>

### Formatando data "AAAA-MM-DD" para "DD/MM"
<pre>
databr_diames(2009-12-31) // 31/12
</pre>

### Formatando data "AAAA-MM-DD" para "MM/AAAA"
<pre>
databr_mesano(2009-12-31) // 12/2009
</pre>

### Formatando data "AAAA-MM-DD HH:MM:SS" para "HH:MM"
<pre>
hora(2009-12-31 07:30:59) // 07:30
</pre>

## Siglas para utilizar na formatação
<pre>
dd -> dia com dois dígitos
mm -> mes com dois dígitos
aaaa -> ano com quatro dígitos
aa -> ano com dois últimos dígitos
hh -> hora
ii ou :mm -> minutos ou dois pontos + minutos
ss -> segundos
</pre>
