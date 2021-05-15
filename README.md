# validated-cpf
Classe e teste para validar cpf.

## Aplicando testes em um estudo de caso real

Os grandes motivadores da utilização de testes automatizados são:
- Evitar quebras em produção que podem gerar projuízos financeiros.
- Aumentar a qualidade do desenvolvedor.
- Possuir menos limitações durante o processo de desenvolvimento.

Os testes manuais são mais lentos, não exploram muitos cenários, nem tanto confiavel e são caros. Contudo, os testes manuais são úteis, porém eles têm maior valor quando utilizados para avaliar a usabilidade e qualidade do produto.

__META: Prevenir que os bug aconteçam.__

Em contrapartida, os testes automatizados são:
- Mais rápidos.
- Entrega uma aplicação mais estável.
- Aumenta confiança do time.
- Melhora o levantamento de requisitos.
- Documenta as regras de negócio.
- Tem menor custo.

"Quanto  mais testes de possibilidades, menos preocupação de bugs."

### Como começar um teste?

#### Identificar os cenários.
- -> O que quero testar?
- -> Qual é a ação/entrada?
- -> O que é esperado no retorno?

### **Estudo de caso: Validar CPF**

#### Cenário: Validar sistema que recebe apenas o numero de CPF com 11 digitos, retornando true ou false

##### Casos:
- 1. Caso o CPF possua menos do que 11 dígitos o seu retorno é 'false'.
- 2. Caso o CPF possua mais do que 11 dígitos o seu retorno é 'false'.
- 3. Caso o CPF possua 11 dígitos e o seu penúltimo digito seja inválido o seu retorno é 'false'.
- 4. Caso o CPF possua 11 dígitos e o seu último dígito seja inválido o seu retorno é 'false'.
- 5. Caso o CPF possua 11 dígitos e os dois últimos dígitos sejam validos o seu retorno é 'true'.
