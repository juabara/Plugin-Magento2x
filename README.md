# Módulo de pagamento para Magento 2
Testado na versão 2.3.1 e superior. 

## Métodos:
Cartão de crédito, Débito, Boleto Registrado e transferências bancárias (Itaú e Bradesco)

## Bandeiras:
Visa, Mastercard, American Express, Hipercard, JCB, Hiper, Elo entre outras.

## Adquirentes:
Cielo, Rede, Getnet, Elavon, Global Payments, Granito, Stone, First Data, Getnet, Adiq e Zoop. Bancos: Itau, Banco do Brasil e Bradesco

## Antifraudes:
FControl, ClearSale e Konduto


## Instalação
 
    composer require kesterpay/plugin-magento2x
    bin/magento cache:clean
    bin/magento setup:upgrade
    bin/magento setup:di:compile
    
## Configuração

Stores -> Configuration -> Sales -> Payments Methods

- Alterar a chave para o ambiente correto
- Ativar os métodos de pagamentos desejados
- Pronto! 