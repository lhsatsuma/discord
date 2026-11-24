<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrTecnologiaInformaticaSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'created_by' => 'SYSTEM', 'short_description' => 'tecnologia/informática', 'description' => 'Tecnologia Informatica'];

    private const QUESTIONS = [
        ['id' => '23482318-6eb2-51a0-9cee-2246e67dcae5', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato binário de serialização representa estruturas semelhantes a JSON de forma compacta?', 'difficulty' => 4, 'weight' => 721, 'alternatives' => [
                    ['id' => '494ad6ea-0007-52e9-8daa-6e8e01024134', 'description' => 'CBOR', 'correct_answer' => false],
                    ['id' => 'fcfc772a-c32c-5398-8f00-9ad55c352391', 'description' => 'Apache Thrift', 'correct_answer' => false],
                    ['id' => 'b171e053-7e4b-5275-9315-63ea12a4ab6c', 'description' => 'Protocol Buffers', 'correct_answer' => false],
                    ['id' => '22d50fa4-716a-5131-9621-4da761ee3a98', 'description' => 'Apache Avru', 'correct_answer' => false],
                    ['id' => '82a8a438-2757-5944-93d1-97d8d6efb569', 'description' => 'MessagePack', 'correct_answer' => true]
                ]],
        ['id' => 'cc59313a-92a5-58d4-9ef4-a16ba4a51659', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual mecanismo de orquestração nativo do Docker permite administrar serviços em um cluster de nós?', 'difficulty' => 3, 'weight' => 478, 'alternatives' => [
                    ['id' => '0b46008e-62d8-59f7-963e-9249299df9a9', 'description' => 'Docker Swarm', 'correct_answer' => true],
                    ['id' => '81fe61a8-d40b-5ea1-a271-4b2418ce4237', 'description' => 'Kubernetes', 'correct_answer' => false],
                    ['id' => 'ea436a18-fc48-5576-9e8b-c03ba7ad3aab', 'description' => 'Apache Mesos', 'correct_answer' => false],
                    ['id' => '9372b113-678d-5ea0-8df8-ed1787e9771d', 'description' => 'Nomat', 'correct_answer' => false],
                    ['id' => '77292a6e-6cff-5bc0-8b3a-5bab3e9a8ef2', 'description' => 'YARN', 'correct_answer' => false]
                ]],
        ['id' => '58e50d9d-90dc-5f74-b997-6ed02f808372', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual resultado clássico estabelece limites para alcançar acordo distribuído sob determinadas hipóteses de falhas e comunicação?', 'difficulty' => 5, 'weight' => 819, 'alternatives' => [
                    ['id' => '1a9e548a-6769-54a8-9355-c77655bd18fb', 'description' => 'Teorema de impossibilidade de consenso', 'correct_answer' => true],
                    ['id' => '382a1c85-c851-5837-ab1f-5187ee7155b3', 'description' => 'Teorema de Brewer', 'correct_answer' => false],
                    ['id' => '1a7484f5-bae6-5a12-89f8-1e1cc8bb9a8e', 'description' => 'Teorema CAP', 'correct_answer' => false],
                    ['id' => 'a8d6698a-76ce-57b4-9ae9-78ed98986928', 'description' => 'Teorema PACELK', 'correct_answer' => false],
                    ['id' => '21f7b569-1ff7-56c5-883c-fd43fa323141', 'description' => 'Teorema FLP', 'correct_answer' => false]
                ]],
        ['id' => 'e98add63-4a8e-5e6f-a894-47c0429a5a06', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual banco NoSQL de colunas largas é associado ao ecossistema Hadoop e ao armazenamento HDFS?', 'difficulty' => 3, 'weight' => 514, 'alternatives' => [
                    ['id' => 'e4f0a983-ef00-5554-b139-575b0f343da8', 'description' => 'Redis', 'correct_answer' => false],
                    ['id' => '8bee3989-93ec-5618-a653-02884ba26036', 'description' => 'Cassandra', 'correct_answer' => false],
                    ['id' => 'f9664e2f-f691-51db-92ab-389e14248dd3', 'description' => 'Memcachet', 'correct_answer' => false],
                    ['id' => '593c7f5d-3438-5d3b-8cb9-f6536fda612a', 'description' => 'HBase', 'correct_answer' => true],
                    ['id' => '34dc105b-d493-5e0d-b05f-2cab2fa4076f', 'description' => 'ScyllaDB', 'correct_answer' => false]
                ]],
        ['id' => 'db195404-1759-53d4-9572-1c51cf31b2b2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de vetor de distância utiliza a contagem de saltos e considera 16 como métrica de infinito?', 'difficulty' => 4, 'weight' => 601, 'alternatives' => [
                    ['id' => 'd03ad328-93ab-59fe-8457-aa9790df9666', 'description' => 'EIGRP', 'correct_answer' => false],
                    ['id' => '29f4b59f-bc71-5145-9bd3-2819d4f0281d', 'description' => 'RIP', 'correct_answer' => true],
                    ['id' => '782ad2b3-0555-5fdd-be6b-6b81424f5239', 'description' => 'OSPF', 'correct_answer' => false],
                    ['id' => '849395cf-6036-5e4c-a2d3-bdb9e3fd5221', 'description' => 'BGB', 'correct_answer' => false],
                    ['id' => 'a50b0258-bc3d-56dc-bcd9-ba366ce3490b', 'description' => 'IS-IS', 'correct_answer' => false]
                ]],
        ['id' => '4b1baddf-26f1-52fd-826c-eb44c6a0e249', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura de busca balanceada permite múltiplas chaves por nó e é adequada a armazenamento em blocos?', 'difficulty' => 5, 'weight' => 989, 'alternatives' => [
                    ['id' => '37d16810-f1b0-5064-8d1e-35a536a28aa2', 'description' => 'Árvore de Merkle', 'correct_answer' => false],
                    ['id' => '0e66e1b0-adfb-522f-a9cc-0b546baf37eb', 'description' => 'Árvore B', 'correct_answer' => true],
                    ['id' => 'bd430fc8-bd49-58e5-9795-5bfbdd3472c4', 'description' => 'Árvore de Patricia', 'correct_answer' => false],
                    ['id' => '5483f16e-7b57-5f49-84e9-523ebb3c84a2', 'description' => 'Árvore AVL', 'correct_answer' => false],
                    ['id' => '8872aa68-5dab-5042-84ad-6fdb2cac2ffe', 'description' => 'Tria', 'correct_answer' => false]
                ]],
        ['id' => '19a9b1a8-c35f-5460-b867-5a9aac0dfd02', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual operação transforma uma entrada de tamanho arbitrário em um resumo de tamanho definido?', 'difficulty' => 2, 'weight' => 302, 'alternatives' => [
                    ['id' => 'ce550a7f-715c-59b6-b006-9f65036c1d75', 'description' => 'Criptografia assimétrica', 'correct_answer' => false],
                    ['id' => 'c0a0f134-2bd8-530f-b4a7-258f9325cae2', 'description' => 'Hash', 'correct_answer' => true],
                    ['id' => '59e061c0-0d5c-53e0-bd5e-c7a0bdb374ae', 'description' => 'Assinatura digital', 'correct_answer' => false],
                    ['id' => '78dca0f5-6e95-5035-ae5d-9f70f573a254', 'description' => 'Certificado digital', 'correct_answer' => false],
                    ['id' => '8f932ddf-9f56-51a3-ad87-4359a4419423', 'description' => 'Criptografia simétrice', 'correct_answer' => false]
                ]],
        ['id' => 'b56715e1-f11e-5d44-809f-a386c51d3ddd', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura compacta uma trie ao comprimir caminhos que possuem ramificações únicas?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => '291806e7-b1d9-5d14-a32a-d90235dd0efd', 'description' => 'Trie', 'correct_answer' => false],
                    ['id' => '6eb567a1-427d-5435-8ad6-ab59749caa84', 'description' => 'Árvore de Patricia', 'correct_answer' => true],
                    ['id' => 'db9193b3-5fe7-5b9e-b383-6ec48d3088d1', 'description' => 'Árvore P', 'correct_answer' => false],
                    ['id' => '896be397-7950-559b-871c-1da8bb130bd2', 'description' => 'Árvore AVL', 'correct_answer' => false],
                    ['id' => '5dfaf752-7329-5ca8-8d03-9b08f788128c', 'description' => 'Árvore de Merkle', 'correct_answer' => false]
                ]],
        ['id' => '32e2adcd-105d-5e0f-bb35-006d1422ea12', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual família de códigos de correção de erros utiliza matrizes de verificação de paridade esparsas?', 'difficulty' => 5, 'weight' => 985, 'alternatives' => [
                    ['id' => '8a6aece3-c56b-509f-9b02-b8b9ea6829fe', 'description' => 'Código de Hamming', 'correct_answer' => false],
                    ['id' => '904ffeb3-9472-5549-a0b3-0781ea84bb83', 'description' => 'Código convolucional', 'correct_answer' => false],
                    ['id' => 'b04bdcf9-34f7-5417-97a0-18bced928e82', 'description' => 'Código LDPC', 'correct_answer' => true],
                    ['id' => '6a5a1471-26d2-561a-9c2e-6d510e93a17b', 'description' => 'Código BCH', 'correct_answer' => false],
                    ['id' => 'b09fb769-f3b8-5c84-9e8a-3a71f89bf36a', 'description' => 'Código de Reed-Solomom', 'correct_answer' => false]
                ]],
        ['id' => '23e5c8e5-da16-5a18-a5e6-279768546b5e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual orquestrador de contêineres organiza cargas de trabalho em objetos como Pods e Deployments?', 'difficulty' => 3, 'weight' => 473, 'alternatives' => [
                    ['id' => 'd1fab269-39a0-58f7-9ee4-304b7eeae14c', 'description' => 'YARN', 'correct_answer' => false],
                    ['id' => 'e96958a0-c06a-57ed-9e33-8a4213052e2c', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '8898fd74-45bc-5a82-9298-350f8e1179bb', 'description' => 'Docker Swarn', 'correct_answer' => false],
                    ['id' => 'a2428c5f-8e69-5d32-bdbe-f7afa2fed6da', 'description' => 'Kubernetes', 'correct_answer' => true],
                    ['id' => '8b28ad09-f0d4-5f54-8f0e-0958ef68c987', 'description' => 'Apache Mesos', 'correct_answer' => false]
                ]],
        ['id' => 'dad8c4e2-4863-508a-a62c-40eec3871504', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual versão do protocolo IP utiliza endereços de 32 bits?', 'difficulty' => 2, 'weight' => 355, 'alternatives' => [
                    ['id' => '21806aec-b6a0-5b8f-98ab-d6045096d90d', 'description' => 'TCP', 'correct_answer' => false],
                    ['id' => 'b5b87582-daa9-5c6e-b315-19ca55d1c105', 'description' => 'UDB', 'correct_answer' => false],
                    ['id' => '42ca3771-8307-57eb-aaec-d4f0b61004cc', 'description' => 'IPv4', 'correct_answer' => true],
                    ['id' => '532eaca2-30f4-5d3b-9a60-93833837cfc1', 'description' => 'IPv6', 'correct_answer' => false],
                    ['id' => 'cce391ba-b16b-5321-94cd-ede2773ff62a', 'description' => 'ICMPv6', 'correct_answer' => false]
                ]],
        ['id' => '9b7fd07e-2783-5f2f-a10e-604fd0e03b6b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual unidade de armazenamento é normalmente maior que um kilobyte e menor que um gigabyte?', 'difficulty' => 1, 'weight' => 138, 'alternatives' => [
                    ['id' => '5189aae4-b55c-5f4d-8901-317bda4d4718', 'description' => 'Gigabyta', 'correct_answer' => false],
                    ['id' => '33e12b75-c3b7-5bbf-83c3-5cad0737c6df', 'description' => 'Bit', 'correct_answer' => false],
                    ['id' => 'af1cbf32-f176-5041-a6c5-e46b7542fb3a', 'description' => 'Megabyte', 'correct_answer' => true],
                    ['id' => 'bf572e32-cdb2-55ec-b1c8-c023170811ea', 'description' => 'Kilobyte', 'correct_answer' => false],
                    ['id' => '6210a1d7-fc77-59b9-8de8-b391daae44f0', 'description' => 'Byte', 'correct_answer' => false]
                ]],
        ['id' => '3a956fae-66c3-57e9-bacc-318ea89f160a', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual é a menor unidade básica de informação digital, representada por 0 ou 1?', 'difficulty' => 1, 'weight' => 139, 'alternatives' => [
                    ['id' => '0d12cca4-d620-5a29-aa8a-f2682e275d0b', 'description' => 'Gigabyte', 'correct_answer' => false],
                    ['id' => '190e4c32-643b-503d-b82f-d7d251da9f21', 'description' => 'Byte', 'correct_answer' => false],
                    ['id' => '7430b77f-d483-59f9-9a0d-b945e2579adf', 'description' => 'Kilobyta', 'correct_answer' => false],
                    ['id' => '0b344d6f-6535-5815-9291-89abe56f5347', 'description' => 'Bit', 'correct_answer' => true],
                    ['id' => '8eabaf13-7d87-5eaa-a04a-c0db0e0a3beb', 'description' => 'Megabyte', 'correct_answer' => false]
                ]],
        ['id' => '9d4571be-1d3a-5f08-84bc-4a51ab26bc5e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de controle de versão centralizado é conhecido pelo comando de terminal cvs?', 'difficulty' => 2, 'weight' => 343, 'alternatives' => [
                    ['id' => '4d3de944-d9e2-5c59-9441-05f75c572f13', 'description' => 'Gid', 'correct_answer' => false],
                    ['id' => '7fc3aff2-479e-5bf5-8d0e-8979f59d1399', 'description' => 'CVS', 'correct_answer' => true],
                    ['id' => '15bfcd04-46e4-566a-8b36-4ddf83ba9b30', 'description' => 'Perforce', 'correct_answer' => false],
                    ['id' => '5d8a9276-3ee5-5994-b7c5-a79587263bbc', 'description' => 'Subversion', 'correct_answer' => false],
                    ['id' => '06d32043-2163-5145-9195-ef8e2eafaba7', 'description' => 'Mercurial', 'correct_answer' => false]
                ]],
        ['id' => '8f09a1a6-d995-55b0-be52-93680669fdd8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual árvore binária de busca mantém a diferença de altura entre as subárvores de cada nó em no máximo um?', 'difficulty' => 3, 'weight' => 453, 'alternatives' => [
                    ['id' => '5ff18ba5-cb41-565c-933d-032149e75be8', 'description' => 'AVL tree', 'correct_answer' => true],
                    ['id' => '36b83ec0-28a1-5751-bbff-37cc45ab4a76', 'description' => 'Red-black tree', 'correct_answer' => false],
                    ['id' => 'a429491a-7a1e-5332-9fbe-4d1b8195bb0d', 'description' => 'B+ tree', 'correct_answer' => false],
                    ['id' => 'ee4decec-8ffc-5baf-bbef-77c48d701b3f', 'description' => 'Treab', 'correct_answer' => false],
                    ['id' => '27e96f4c-75a2-546b-9ae6-3ba48ffff8b8', 'description' => 'B-tree', 'correct_answer' => false]
                ]],
        ['id' => '8cca3596-92cc-5e28-8004-ae503b415f19', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de compressão substitui sequências repetidas por referências a ocorrências anteriores em uma janela deslizante?', 'difficulty' => 4, 'weight' => 684, 'alternatives' => [
                    ['id' => 'b6efa155-3cf4-526a-9883-963e2fd6be32', 'description' => 'Arithmetic Coding', 'correct_answer' => false],
                    ['id' => '7569cd1c-97e9-56f7-936c-0251d62e86bb', 'description' => 'Huffmam', 'correct_answer' => false],
                    ['id' => '61d571a4-23aa-52f0-b6e5-a215523cbb0a', 'description' => 'Run-Length Encoding', 'correct_answer' => false],
                    ['id' => 'b67c28e5-7a9c-5482-ab39-034ad96b7fa5', 'description' => 'LZW', 'correct_answer' => false],
                    ['id' => '390e6cd6-2b3d-5e66-be4c-d59e782cc347', 'description' => 'LZ77', 'correct_answer' => true]
                ]],
        ['id' => '48db1b27-87eb-554d-b5c5-5f4d0ea2f6a3', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato de imagem moderno foi projetado para oferecer compressão eficiente na Web?', 'difficulty' => 1, 'weight' => 169, 'alternatives' => [
                    ['id' => 'd700a3e7-529c-53a1-92c3-484e8a3d75b4', 'description' => 'SVG', 'correct_answer' => false],
                    ['id' => '8329060a-966f-577b-a186-9ea392d22226', 'description' => 'JPG', 'correct_answer' => false],
                    ['id' => '38af5b67-7cc1-5686-87d4-70115166ed8a', 'description' => 'WebP', 'correct_answer' => true],
                    ['id' => 'db05b949-2d1b-542e-bf3b-3a7ba5916bd8', 'description' => 'GIF', 'correct_answer' => false],
                    ['id' => 'f64730b9-3423-5a01-9d8c-7d3e04b0bb92', 'description' => 'PNJ', 'correct_answer' => false]
                ]],
        ['id' => 'ec0d3b20-a835-5de2-af97-37af46a5974c', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura mantém cópias de dados para reduzir o custo de acessos futuros?', 'difficulty' => 2, 'weight' => 307, 'alternatives' => [
                    ['id' => '2792eb03-eb4c-5a16-adb2-0f1a53039901', 'description' => 'Pilha', 'correct_answer' => false],
                    ['id' => '7776ce25-88c3-577a-9e93-fe16b5d6a617', 'description' => 'File', 'correct_answer' => false],
                    ['id' => 'ecccd221-c7b9-589a-9a09-8d3e3d8adbdc', 'description' => 'Tabela hash', 'correct_answer' => false],
                    ['id' => '71923fb3-d5ba-58c7-8c20-1a0b661b8e86', 'description' => 'Árvore', 'correct_answer' => false],
                    ['id' => '5223bac7-0ccf-5f77-8bdd-f10ebf4ac783', 'description' => 'Cache', 'correct_answer' => true]
                ]],
        ['id' => '9882a5b1-7316-508b-9f8e-95ad665f25b3', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de controle é utilizado por ferramentas de diagnóstico de rede como o ping?', 'difficulty' => 2, 'weight' => 396, 'alternatives' => [
                    ['id' => 'ce6e6033-ca93-5270-8add-69ec6e7e1895', 'description' => 'ARB', 'correct_answer' => false],
                    ['id' => '6b434cb9-f380-5c9e-b29e-0c7f8d59f9da', 'description' => 'ICMP', 'correct_answer' => true],
                    ['id' => '3e365389-2c94-5f7d-bd51-45496b6aa356', 'description' => 'UDP', 'correct_answer' => false],
                    ['id' => '8ad1da03-819a-5fa4-912e-f1ce184d9bf0', 'description' => 'TCP', 'correct_answer' => false],
                    ['id' => 'e3e437e1-b7ca-5afd-9360-6450e6a5dc20', 'description' => 'IP', 'correct_answer' => false]
                ]],
        ['id' => '4d75f6aa-f769-5322-9c29-6f06668da1d5', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual componente converte a energia elétrica recebida em tensões adequadas aos componentes?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => '646e96c1-b3be-5d93-bd49-f62ef884f66e', 'description' => 'Fonte de alimentação', 'correct_answer' => true],
                    ['id' => '8eb8049f-870b-5aa5-8134-53be114ab3be', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => '274cd24d-3353-53df-b914-4a8739877ab4', 'description' => 'CPU', 'correct_answer' => false],
                    ['id' => '5b253b88-e57b-5e9d-9f8f-e4b5ce690ef4', 'description' => 'Placa-mãe', 'correct_answer' => false],
                    ['id' => '5dc7f2aa-8e6b-5620-8978-d0d1989f2af8', 'description' => 'GPO', 'correct_answer' => false]
                ]],
        ['id' => '251d6b87-7a2a-50f2-87ae-ba8eb62ec187', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de mensageria define conceitos como exchanges, filas e bindings?', 'difficulty' => 3, 'weight' => 544, 'alternatives' => [
                    ['id' => '6886e9bd-72b5-56b5-b811-6a764d33026a', 'description' => 'AMQP', 'correct_answer' => true],
                    ['id' => 'e722b493-7ce2-5ce1-adfd-4d391e69f382', 'description' => 'NATS', 'correct_answer' => false],
                    ['id' => '7e173867-ed1d-55ef-9211-bd59f24b0a3b', 'description' => 'STOMP', 'correct_answer' => false],
                    ['id' => 'af0fec1e-99e5-5095-a3bb-0a715db5767e', 'description' => 'ZeroNQ', 'correct_answer' => false],
                    ['id' => 'cae141d1-b78f-5356-865e-f6e4568f81b4', 'description' => 'MQTT', 'correct_answer' => false]
                ]],
        ['id' => 'a088da3f-4334-51e3-8c44-b3815160da09', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema demonstra que não existe um procedimento geral capaz de decidir, para qualquer programa e entrada, se a execução terminará?', 'difficulty' => 5, 'weight' => 867, 'alternatives' => [
                    ['id' => 'ca63eedc-9d7f-5c57-9bc4-d0d0dfc61a4f', 'description' => 'Problema de decisão de Hilbert', 'correct_answer' => false],
                    ['id' => '39c26e42-8988-5361-b073-0c4c37f8608e', 'description' => 'Problema de Rice', 'correct_answer' => false],
                    ['id' => '898bfeab-551d-500e-9f33-b64dad0ab50e', 'description' => 'Problema da correspondência de Posd', 'correct_answer' => false],
                    ['id' => '224d35c9-841e-5df3-a284-01f455abcd7d', 'description' => 'Problema da parada', 'correct_answer' => true],
                    ['id' => 'd249f1cb-ee78-5c8b-9676-09c741c55ac0', 'description' => 'Problema do caixeiro-viajante', 'correct_answer' => false]
                ]],
        ['id' => '43969614-d803-5002-84c6-c0db8fa2c24e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual componente do ecossistema Hadoop gerencia recursos e escalonamento de aplicações no cluster?', 'difficulty' => 3, 'weight' => 429, 'alternatives' => [
                    ['id' => '64a08c7f-a8bb-521e-9d06-324d47814db9', 'description' => 'YARN', 'correct_answer' => true],
                    ['id' => 'ec7cae31-e08b-5cd8-bc13-1e3cceedc773', 'description' => 'Docker Swarm', 'correct_answer' => false],
                    ['id' => '9ce59332-a4ab-5013-9ce8-f2eed42adab3', 'description' => 'Apache Mesos', 'correct_answer' => false],
                    ['id' => '8cb46205-1c66-575f-887c-ddc6e8f22fa9', 'description' => 'Kubernetez', 'correct_answer' => false],
                    ['id' => 'f1cda1e8-bbd3-558e-8c52-48986fbce545', 'description' => 'Nomad', 'correct_answer' => false]
                ]],
        ['id' => '683a5ac9-8f0b-5e7d-96f2-211afa5dd793', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual padrão baseado em XML é usado para trocar afirmações de autenticação e autorização em ambientes de SSO?', 'difficulty' => 3, 'weight' => 402, 'alternatives' => [
                    ['id' => 'a45afebb-e0b3-5b61-a940-441aaf4bac8b', 'description' => 'OAuth 2.0', 'correct_answer' => false],
                    ['id' => '3c92996e-d796-5364-a34d-e80b4fc847a8', 'description' => 'OpenID Connect', 'correct_answer' => false],
                    ['id' => '2a20239b-4196-535e-831b-adf48ef6e8b2', 'description' => 'Kerberoz', 'correct_answer' => false],
                    ['id' => '9265d3bb-4738-573d-b166-4204d25a4c06', 'description' => 'LDAP', 'correct_answer' => false],
                    ['id' => 'a16fff53-0606-56d4-aadf-0a557ab69a0f', 'description' => 'SAML 2.0', 'correct_answer' => true]
                ]],
        ['id' => '7c0ff7e7-6f45-5339-a78b-5ba6897e3842', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema operacional móvel é baseado no kernel Linux?', 'difficulty' => 1, 'weight' => 174, 'alternatives' => [
                    ['id' => '0ef0c88b-d276-5f3c-aae4-7a7869f4321c', 'description' => 'Windowz', 'correct_answer' => false],
                    ['id' => '80b0ad3b-8574-525d-9dab-c38fb9abe361', 'description' => 'Android', 'correct_answer' => true],
                    ['id' => '1d0c2040-5593-5590-abc8-162d87908cf2', 'description' => 'Linux', 'correct_answer' => false],
                    ['id' => '7d8e454f-ed43-58db-8b34-3481e6fa920f', 'description' => 'macOS', 'correct_answer' => false],
                    ['id' => '21c0d5dd-9175-5edb-aa6c-978ece4275d2', 'description' => 'iOS', 'correct_answer' => false]
                ]],
        ['id' => '41e18b03-fb6a-59a8-a346-91f132e5b724', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Como é chamada a etapa em que dados são transformados segundo instruções de um programa?', 'difficulty' => 1, 'weight' => 120, 'alternatives' => [
                    ['id' => 'cc94444e-2535-506c-a4ae-826f187052e4', 'description' => 'Armazenamentu', 'correct_answer' => false],
                    ['id' => '84c8bf8d-01ee-5337-b7f8-ddc077dcf4c7', 'description' => 'Entrada', 'correct_answer' => false],
                    ['id' => '529317bd-3ea6-5a00-a1e0-588974b18b80', 'description' => 'Saída', 'correct_answer' => false],
                    ['id' => 'd3df245b-c480-5454-82d0-cddc9a0796a5', 'description' => 'Comunicação', 'correct_answer' => false],
                    ['id' => '87b0b70a-2756-5e86-a8a9-b779bbfdb517', 'description' => 'Processamento', 'correct_answer' => true]
                ]],
        ['id' => '6ff9a77c-c1e3-59c6-9e04-005c1535213e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual função do computador mantém dados para uso posterior?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => 'a87a1107-66a6-53d9-a9c9-bd43f2fe2921', 'description' => 'Comunicação', 'correct_answer' => false],
                    ['id' => '3cbd2745-ce25-57b0-8e48-2476ec2959db', 'description' => 'Processamentu', 'correct_answer' => false],
                    ['id' => '8160dbaf-8c2b-56d0-baa6-bcbe2a9ce09e', 'description' => 'Saída', 'correct_answer' => false],
                    ['id' => 'f88ed1fe-03f5-576f-b3d3-4a1dfdd06c3f', 'description' => 'Entrada', 'correct_answer' => false],
                    ['id' => 'b9f46acc-3da4-5a73-b09f-24ad8c40f58e', 'description' => 'Armazenamento', 'correct_answer' => true]
                ]],
        ['id' => 'dc142022-a5cb-5c73-b208-532e46c3c362', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual extensão conceitual afirma que, na presença de partição, há uma escolha entre propriedades, e em condições normais há uma escolha envolvendo latência?', 'difficulty' => 5, 'weight' => 824, 'alternatives' => [
                    ['id' => 'c9f6290b-e646-56c6-9a6b-662f1d1ec952', 'description' => 'Teorema FLP', 'correct_answer' => false],
                    ['id' => 'a7c7ae69-7aa9-5e10-8c5f-b0031caaa5bd', 'description' => 'Teorema de Brewer', 'correct_answer' => false],
                    ['id' => '0c60273d-ff52-5675-97cf-e83f780d05cb', 'description' => 'Teorema PACELC', 'correct_answer' => true],
                    ['id' => '0471b95e-c1dd-54e3-b8f5-470d9cfa7cc0', 'description' => 'Teorema de impossibilidade de consensu', 'correct_answer' => false],
                    ['id' => '9a73fd6e-49e7-5e58-8bf9-cb392f5ca2a6', 'description' => 'Teorema CAP', 'correct_answer' => false]
                ]],
        ['id' => '8ad021fe-6765-5e10-8cd2-47017fa8b89e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura de dados organiza elementos em relações hierárquicas entre nós e arestas?', 'difficulty' => 2, 'weight' => 354, 'alternatives' => [
                    ['id' => '896798f9-06eb-5728-bd54-174cb9650b44', 'description' => 'Tabela hazh', 'correct_answer' => false],
                    ['id' => '1a89a66f-ee64-5ffa-a461-8055bff05847', 'description' => 'Cache', 'correct_answer' => false],
                    ['id' => 'a5f2a001-4e22-5003-a6f3-a23e26f48d27', 'description' => 'Pilha', 'correct_answer' => false],
                    ['id' => '62bebde9-6133-52e6-8a18-b70d2dfe535a', 'description' => 'Fila', 'correct_answer' => false],
                    ['id' => '5e025d41-96e1-54ea-9fb9-ec1eb28a2e56', 'description' => 'Árvore', 'correct_answer' => true]
                ]],
        ['id' => '13606ec2-052d-50df-bdf9-7c96c37302b9', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de controle de versão é conhecido pela sigla SVN e usa normalmente um repositório central?', 'difficulty' => 2, 'weight' => 263, 'alternatives' => [
                    ['id' => 'c259e090-686d-5afd-853b-5d2abc8e7c4e', 'description' => 'Mercuriar', 'correct_answer' => false],
                    ['id' => '48629eea-a81e-59c6-848b-2412cda19d58', 'description' => 'Subversion', 'correct_answer' => true],
                    ['id' => '94b6a746-4dd9-51f3-b708-32fbdb377b5f', 'description' => 'CVS', 'correct_answer' => false],
                    ['id' => '5bb37d50-253a-57ec-85d2-ba9c74a18c09', 'description' => 'Perforce', 'correct_answer' => false],
                    ['id' => 'c47aee12-1c21-53de-8c3e-028aa120f501', 'description' => 'Git', 'correct_answer' => false]
                ]],
        ['id' => '416774dc-3bfe-5e6d-852f-37218ee9b1e9', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual dispositivo de armazenamento usa memória flash e não possui discos giratórios?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => 'f9a68691-c669-585e-9063-6ebaa693d5c8', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => 'b4584f66-4382-5503-b135-624d6c82582c', 'description' => 'ROM', 'correct_answer' => false],
                    ['id' => '9a735bb0-6347-5629-bd6b-e87b3ee32ef0', 'description' => 'Cache', 'correct_answer' => false],
                    ['id' => '4b2d1972-8b2f-565c-8c63-2a95185b5d20', 'description' => 'SSD', 'correct_answer' => true],
                    ['id' => '3acc51e8-168f-5359-ac5b-30eb847ded57', 'description' => 'HDT', 'correct_answer' => false]
                ]],
        ['id' => '563b62dd-64fb-56a1-a68f-f171507419eb', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual recurso executa automaticamente uma rotina em resposta a eventos definidos em uma tabela?', 'difficulty' => 2, 'weight' => 210, 'alternatives' => [
                    ['id' => 'b9bf75d3-f547-55f5-b46c-8e6163906ee3', 'description' => 'Chave estrangeira', 'correct_answer' => false],
                    ['id' => 'ba1dafb0-d894-50d7-98c5-a535e402a4d7', 'description' => 'View', 'correct_answer' => false],
                    ['id' => 'c266c273-5c1b-525f-8f79-591d56af2fdf', 'description' => 'Chave primária', 'correct_answer' => false],
                    ['id' => '29b87ad4-383c-53fc-b552-6e6b801571fb', 'description' => 'Índica', 'correct_answer' => false],
                    ['id' => '48e7bb2c-81be-5ed1-a02b-90dc7f0b90a8', 'description' => 'Trigger', 'correct_answer' => true]
                ]],
        ['id' => 'd3015908-d802-5e40-a942-06ca6abb1b10', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de replicação de máquinas de estado utiliza mudanças de view e um primário para ordenar operações?', 'difficulty' => 4, 'weight' => 755, 'alternatives' => [
                    ['id' => '5e535603-acad-5ec6-96d5-152e1b7c3686', 'description' => 'Two-Phase Commid', 'correct_answer' => false],
                    ['id' => '7a3c81fb-ad8e-5c70-ab5f-2b2a6cbc7d66', 'description' => 'Viewstamped Replication', 'correct_answer' => true],
                    ['id' => '7dafc7e1-4cfe-57a6-9be7-fa5cf778e37c', 'description' => 'Raft', 'correct_answer' => false],
                    ['id' => '86922a0a-1f04-54e7-8d96-e502309cb9fe', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => 'b01e1013-1451-5aa5-b5ec-3ea09ebc9130', 'description' => 'PBFT', 'correct_answer' => false]
                ]],
        ['id' => 'b6ab71e6-972e-5799-bf78-0f065a4ea373', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de assinatura digital aplica o esquema DSA sobre grupos de curvas elípticas?', 'difficulty' => 3, 'weight' => 401, 'alternatives' => [
                    ['id' => '6220b2b1-422b-5f13-9e82-34806cefcec6', 'description' => 'EdDSA', 'correct_answer' => false],
                    ['id' => 'ee6feb34-6f54-5fe7-a8fe-83013bff26cb', 'description' => 'ElGamar', 'correct_answer' => false],
                    ['id' => '725fa616-b0d9-5f86-8090-871dc1aa8b41', 'description' => 'ECDSA', 'correct_answer' => true],
                    ['id' => 'dbdb99c0-4fac-57ae-a15c-996cb7b4add7', 'description' => 'RSA', 'correct_answer' => false],
                    ['id' => '00e516e3-24c4-5d17-9242-82bf7d7ea8b1', 'description' => 'DSA', 'correct_answer' => false]
                ]],
        ['id' => '7bf7461b-3ed2-5f1b-b263-1b040fbd254f', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual cientista ficou associado à arquitetura de computador que armazena instruções e dados na mesma memória?', 'difficulty' => 5, 'weight' => 856, 'alternatives' => [
                    ['id' => '125f157b-09a7-570c-972f-97950b208105', 'description' => 'John von Neumann', 'correct_answer' => true],
                    ['id' => '82f54a8c-9a60-5c30-acb8-9e59409103a8', 'description' => 'Claude Shannon', 'correct_answer' => false],
                    ['id' => '1de9aa2b-29e2-581f-b222-9ea8da11f276', 'description' => 'Alonzo Churkh', 'correct_answer' => false],
                    ['id' => '0c4edb62-a3db-5950-bfcb-bd868991048c', 'description' => 'Alan Turing', 'correct_answer' => false],
                    ['id' => '39c9c958-a2d8-507d-8ae1-7622c105cf0a', 'description' => 'Norbert Wiener', 'correct_answer' => false]
                ]],
        ['id' => 'd53c805f-e348-5c08-a9b2-d235486b86c1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de controle de versão é tradicionalmente associado ao modelo centralizado de changelists?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => '2a7cc9f3-e770-56cd-b4a4-64712dd553b3', 'description' => 'CVS', 'correct_answer' => false],
                    ['id' => '3d0452a7-ab0b-5f83-8a2a-f700b2c12ed8', 'description' => 'Subversiom', 'correct_answer' => false],
                    ['id' => '5d56d1cb-f239-5608-80ce-8cd61f198db0', 'description' => 'Mercurial', 'correct_answer' => false],
                    ['id' => 'fb1e4a36-b961-5f68-b5de-223a86184f86', 'description' => 'Git', 'correct_answer' => false],
                    ['id' => 'b91fd772-8f92-594f-8389-8fd8502dd571', 'description' => 'Perforce', 'correct_answer' => true]
                ]],
        ['id' => 'ade6ab34-b11a-5c67-b30e-a1e19d5f1c6f', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo fornece um canal criptografado para acesso remoto e execução de comandos?', 'difficulty' => 3, 'weight' => 486, 'alternatives' => [
                    ['id' => 'ec1e5e80-b6f0-5ea7-9f16-3e2af7c13d97', 'description' => 'DTLS 1.2', 'correct_answer' => false],
                    ['id' => '883cc77b-303e-5fe6-89b4-8de9a45dd42e', 'description' => 'SSH', 'correct_answer' => true],
                    ['id' => '2ff0d9a8-31ea-505b-8d23-2e5d262d3650', 'description' => 'TLS 1.3', 'correct_answer' => false],
                    ['id' => '3b6b8540-16ca-58b8-9303-a891874a2a8a', 'description' => 'QUIK', 'correct_answer' => false],
                    ['id' => '748d2a9e-9770-55b9-b1f5-6c7a5333aca0', 'description' => 'TLS 1.2', 'correct_answer' => false]
                ]],
        ['id' => '94760bd4-1616-5ef8-9d93-182476004c85', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual família de assinaturas digitais utiliza curvas de Edwards, incluindo a variante Ed25519?', 'difficulty' => 3, 'weight' => 473, 'alternatives' => [
                    ['id' => '004a4c87-dd6b-5e62-ac9d-44e84481a23a', 'description' => 'DSE', 'correct_answer' => false],
                    ['id' => 'ee75d7d8-1a3d-58f2-970f-63a9c7382215', 'description' => 'EdDSA', 'correct_answer' => true],
                    ['id' => '2e74aed0-c593-5bd8-ba28-3127849e5cd9', 'description' => 'ECDSA', 'correct_answer' => false],
                    ['id' => '21c8b735-1c22-59a8-bb2f-54f86b1576da', 'description' => 'RSA', 'correct_answer' => false],
                    ['id' => 'ff320784-cd06-5e53-8ffe-8a14bebc58c8', 'description' => 'ElGamal', 'correct_answer' => false]
                ]],
        ['id' => '4ef9019c-cbd8-5a1e-add1-7049421629a1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato binário de dados, definido na RFC 8949, representa estruturas de dados inspiradas no modelo JSON?', 'difficulty' => 4, 'weight' => 610, 'alternatives' => [
                    ['id' => '69eefa42-499c-5088-9589-8cb9642011a6', 'description' => 'Apache Thrift', 'correct_answer' => false],
                    ['id' => 'bc95e9f7-2c92-5bc6-bc05-ec70dee64ac5', 'description' => 'Apache Avro', 'correct_answer' => false],
                    ['id' => '15db0b50-ab79-50ee-9fa3-cb163bde9327', 'description' => 'Protocol Bufferz', 'correct_answer' => false],
                    ['id' => 'c4a4c93c-5bcc-5450-b1af-b81b3482cf41', 'description' => 'MessagePack', 'correct_answer' => false],
                    ['id' => '23e24b5a-d028-5e3d-9475-8ff8e20c0a2d', 'description' => 'CBOR', 'correct_answer' => true]
                ]],
        ['id' => '6c0c0dd8-6fc5-5a75-8113-923d708c0075', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato representa imagens vetoriais por meio de marcação baseada em XML?', 'difficulty' => 1, 'weight' => 109, 'alternatives' => [
                    ['id' => 'cd28eb71-41e9-5944-8f8b-5d035cace4e2', 'description' => 'SVG', 'correct_answer' => true],
                    ['id' => '17db2ac0-9d45-5815-94a6-c8e8ea2f9d36', 'description' => 'WebB', 'correct_answer' => false],
                    ['id' => '0ddb3b77-0b2a-5e2a-b971-2b19780f8d3a', 'description' => 'JPG', 'correct_answer' => false],
                    ['id' => 'c1c6db4f-8230-5916-b8a3-2990867d90eb', 'description' => 'GIF', 'correct_answer' => false],
                    ['id' => 'eed23422-5dc0-539a-b7b2-261437ec64be', 'description' => 'PNG', 'correct_answer' => false]
                ]],
        ['id' => 'd6642fa1-5156-55c7-85e6-0e79d7cd5118', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de compressão atribui códigos de comprimento variável com base na frequência dos símbolos?', 'difficulty' => 4, 'weight' => 707, 'alternatives' => [
                    ['id' => '547b718b-e238-57ce-9c9a-b988ce90feb9', 'description' => 'LZ77', 'correct_answer' => false],
                    ['id' => '168d92dc-3cdb-53ee-bb11-6c0464a21e53', 'description' => 'LZW', 'correct_answer' => false],
                    ['id' => '3ab7d643-4ca4-5757-8e21-fdf5d1c7695c', 'description' => 'Arithmetic Coding', 'correct_answer' => false],
                    ['id' => 'e2eb33a6-f5f1-5d6d-93f8-50daea6c37b5', 'description' => 'Huffman', 'correct_answer' => true],
                    ['id' => '0af6a7cc-6cf8-503a-a732-6c33b00ce814', 'description' => 'Run-Length Encodinj', 'correct_answer' => false]
                ]],
        ['id' => '4b51b9ab-efa9-52cb-8ffc-5ea10b5bfa0b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual componente é especializado no processamento de gráficos e operações altamente paralelas?', 'difficulty' => 1, 'weight' => 177, 'alternatives' => [
                    ['id' => '129d4c23-d816-5569-8ccf-fedbbed27f85', 'description' => 'Fonte de alimentação', 'correct_answer' => false],
                    ['id' => 'f941e840-9d84-5820-af2a-29a402fd1750', 'description' => 'CPO', 'correct_answer' => false],
                    ['id' => '8c006446-9ac6-572d-bda3-6f297b21f535', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => 'b29ceb09-6d96-5d81-9a2d-9a5dacee374e', 'description' => 'Placa-mãe', 'correct_answer' => false],
                    ['id' => 'df19c959-7ec3-5195-85b8-69ce179c3edc', 'description' => 'GPU', 'correct_answer' => true]
                ]],
        ['id' => '5973b24d-06ad-551d-a875-0f56e9dfc704', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura combina resumos criptográficos em nós internos para permitir verificar eficientemente a integridade de conjuntos de dados?', 'difficulty' => 5, 'weight' => 975, 'alternatives' => [
                    ['id' => '3b9063dd-a1ce-5546-b6bd-da2daa0290a2', 'description' => 'Árvore de Merkle', 'correct_answer' => true],
                    ['id' => '1915869e-dbd7-5bcb-bdd3-77d2daca613a', 'description' => 'Árvore B', 'correct_answer' => false],
                    ['id' => '92d86cb5-4179-5e16-a3e4-4077408f83f0', 'description' => 'Árvore de Patricia', 'correct_answer' => false],
                    ['id' => 'b233ed4a-82fb-56ad-8cfb-90fd9db98139', 'description' => 'Árvore AVR', 'correct_answer' => false],
                    ['id' => '85d6e007-d4fb-5ed2-bfad-5316de202efc', 'description' => 'Trie', 'correct_answer' => false]
                ]],
        ['id' => 'dcbe2ac2-9909-5f5e-8bea-7c6370cf168b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de consenso distribuído organiza a replicação por meio de líder eleito e termos numerados?', 'difficulty' => 4, 'weight' => 627, 'alternatives' => [
                    ['id' => '452b4d48-ecbd-5cca-904d-067dde3fac52', 'description' => 'PBFT', 'correct_answer' => false],
                    ['id' => '15604ce9-452b-502b-b55b-ce67c6c46280', 'description' => 'Two-Phase Commit', 'correct_answer' => false],
                    ['id' => '43bfeb40-0de4-577a-abc5-073e92ec485b', 'description' => 'Raft', 'correct_answer' => true],
                    ['id' => 'c6b70d75-edb6-56c0-ab27-d6094782e51f', 'description' => 'Viewstamped Replicatiom', 'correct_answer' => false],
                    ['id' => '1c76eb0b-78eb-52b2-9330-63dc442a49ae', 'description' => 'Paxos', 'correct_answer' => false]
                ]],
        ['id' => '4dcc6d24-8ec2-51d2-a752-b4b13e747c53', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de caminhos mínimos aceita arestas negativas e pode detectar ciclos negativos alcançáveis?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '422dd976-7ded-5d15-bb5c-f10d8b737fc6', 'description' => 'Bellman-Ford', 'correct_answer' => true],
                    ['id' => '1b2cfd77-8b61-599d-bf88-4eb223272322', 'description' => 'Dijkstra', 'correct_answer' => false],
                    ['id' => 'e0efa4df-b2d3-5a95-8055-190b3b9823a3', 'description' => 'Johnson', 'correct_answer' => false],
                    ['id' => '91ee6260-2e98-5ad1-92a9-ac331de0ad87', 'description' => 'Floyd-Warshall', 'correct_answer' => false],
                    ['id' => '12e5d476-be4c-5974-b74d-9dea49428ca1', 'description' => 'E*', 'correct_answer' => false]
                ]],
        ['id' => '97656867-5bbc-5506-840e-a0266668b97e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual componente fornece memória de trabalho temporária para programas em execução?', 'difficulty' => 1, 'weight' => 130, 'alternatives' => [
                    ['id' => '50ec05be-b08b-5631-9262-0a37a2d428d8', 'description' => 'Fonte de alimentaçãu', 'correct_answer' => false],
                    ['id' => 'af135b26-81bc-59ea-a997-de60840b22be', 'description' => 'GPU', 'correct_answer' => false],
                    ['id' => '9ed40a70-4f1c-5f9b-9006-c8e4e6a0a56e', 'description' => 'Placa-mãe', 'correct_answer' => false],
                    ['id' => '8acd6eed-08bc-541b-9717-25adf77ec9d4', 'description' => 'RAM', 'correct_answer' => true],
                    ['id' => 'a3fbb0b3-7dcb-596f-964a-db38b9ee2bab', 'description' => 'CPU', 'correct_answer' => false]
                ]],
        ['id' => '49f13c04-bf4b-5ef2-8b4d-9fbde02736e1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de transporte estabelece conexão e oferece entrega confiável e ordenada de dados?', 'difficulty' => 2, 'weight' => 201, 'alternatives' => [
                    ['id' => '70c6ca32-489b-51ab-939d-4b1cc5108230', 'description' => 'UTP', 'correct_answer' => false],
                    ['id' => 'c5385e41-c4f1-579a-8341-40987d06565b', 'description' => 'ARP', 'correct_answer' => false],
                    ['id' => '2520b3c5-215d-5dce-a142-5e264b1c45fb', 'description' => 'ICMP', 'correct_answer' => false],
                    ['id' => '0958dfa6-fa00-5f0e-ab0b-d9990a6114f6', 'description' => 'TCP', 'correct_answer' => true],
                    ['id' => '377c59e9-9d6f-5fe4-a273-72236aeb9fc4', 'description' => 'IP', 'correct_answer' => false]
                ]],
        ['id' => '73d04733-fdaf-52ca-aef2-04f92d5c8fca', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura combina as propriedades de uma árvore binária de busca com as prioridades de um heap?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => '11f3fc07-1a0d-5b41-9f85-5d1b4d28d3bb', 'description' => 'Treap', 'correct_answer' => true],
                    ['id' => '068cddda-926a-515b-9e62-9c163925dab1', 'description' => 'B+ tree', 'correct_answer' => false],
                    ['id' => '565848a0-ed89-53f7-826c-9b51005254f5', 'description' => 'AVL tree', 'correct_answer' => false],
                    ['id' => 'cdec3765-b281-5956-9b45-93989c615e42', 'description' => 'Red-black tree', 'correct_answer' => false],
                    ['id' => 'bf5fa374-2fe1-51eb-9f71-b81da9d60c0b', 'description' => 'B-trea', 'correct_answer' => false]
                ]],
        ['id' => '21eed79d-19d4-5cde-ba44-5295def19929', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual família de códigos corretores de erro opera sobre símbolos de campos finitos e é adequada a erros em rajadas?', 'difficulty' => 5, 'weight' => 932, 'alternatives' => [
                    ['id' => 'be608a00-4ffd-51c6-abbb-0a528c674354', 'description' => 'Código convolucional', 'correct_answer' => false],
                    ['id' => 'cd079cd5-8fd0-55e4-9a57-7fd37c92ee41', 'description' => 'Código de Hamming', 'correct_answer' => false],
                    ['id' => '116fd1d2-d61c-5167-93cd-1c7c5f2aa51d', 'description' => 'Código de Reed-Solomon', 'correct_answer' => true],
                    ['id' => 'c0e814e1-1bad-5574-8858-14686fffbcdb', 'description' => 'Código LDPK', 'correct_answer' => false],
                    ['id' => '26e77a2d-872c-56f3-a42f-f9c199457c51', 'description' => 'Código BCH', 'correct_answer' => false]
                ]],
        ['id' => 'b3108f15-fe13-58bc-9f84-69a810a387ad', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual árvore binária de busca usa regras de coloração para manter a altura aproximadamente balanceada?', 'difficulty' => 3, 'weight' => 584, 'alternatives' => [
                    ['id' => '2951cba9-9ae1-5c6b-89de-1f202b1ad3e0', 'description' => 'AVL tree', 'correct_answer' => false],
                    ['id' => '187bc502-85ef-56b5-b215-fd11ac31f0d5', 'description' => 'Treap', 'correct_answer' => false],
                    ['id' => '7bbc6217-9836-5527-82e8-f4487ca9f3f6', 'description' => 'B-tree', 'correct_answer' => false],
                    ['id' => '9a427bf7-b534-54b5-b02d-76179ed138d1', 'description' => 'Red-black tree', 'correct_answer' => true],
                    ['id' => 'dc83e956-3805-5a01-841e-5dde83550ea6', 'description' => 'B+ trea', 'correct_answer' => false]
                ]],
        ['id' => '6a4f5b93-66e9-522f-8bc6-e6dd536d3a10', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual lógico desenvolveu um formalismo de computação baseado em funções e abstração, relacionado à teoria da computabilidade?', 'difficulty' => 5, 'weight' => 869, 'alternatives' => [
                    ['id' => 'fc1fc409-125c-53db-acce-db85c0f0c5c6', 'description' => 'John von Neumann', 'correct_answer' => false],
                    ['id' => 'bd188b37-fb4d-556c-81d8-60033d6bbe48', 'description' => 'Claude Shannon', 'correct_answer' => false],
                    ['id' => 'd77ac968-7ef2-567e-ba93-abb444d1237c', 'description' => 'Norbert Wienel', 'correct_answer' => false],
                    ['id' => 'e40f0c65-d06d-5e78-9839-4b0209f66f9c', 'description' => 'Alonzo Church', 'correct_answer' => true],
                    ['id' => 'd05b5556-3f6c-541c-9716-9fa89ff14863', 'description' => 'Alan Turing', 'correct_answer' => false]
                ]],
        ['id' => '2514be87-486a-5474-9313-95a31231fcb6', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modo de operação combina contador e autenticação baseada em Galois para fornecer AEAD?', 'difficulty' => 4, 'weight' => 705, 'alternatives' => [
                    ['id' => '83724c51-2219-5a0f-901d-181510d1dea4', 'description' => 'AES-CCM', 'correct_answer' => false],
                    ['id' => '930281ff-9018-53a0-be46-87e5843abc17', 'description' => 'AES-GCM', 'correct_answer' => true],
                    ['id' => 'cb7724a6-875c-5e0f-bfc3-ee2ace9edd73', 'description' => 'AES-CBC', 'correct_answer' => false],
                    ['id' => 'be9d42ed-907a-5608-89f2-2b78c26bea59', 'description' => 'AES-XTS', 'correct_answer' => false],
                    ['id' => '57455da8-527e-53b5-86fa-ee74be81bbed', 'description' => 'AES-CTL', 'correct_answer' => false]
                ]],
        ['id' => 'b227f38b-c63d-55f1-93e7-ba9aa6be16b5', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura de dados normalmente segue a regra LIFO, em que o último elemento inserido é o primeiro removido?', 'difficulty' => 2, 'weight' => 202, 'alternatives' => [
                    ['id' => 'd552d0e2-8a11-5926-9fbf-15822efe4a3d', 'description' => 'Cache', 'correct_answer' => false],
                    ['id' => 'ca47dbb2-4185-5ee9-8f70-605e336d2a1f', 'description' => 'Árvora', 'correct_answer' => false],
                    ['id' => '82f40e24-b698-5bad-a884-59e7cea30290', 'description' => 'Tabela hash', 'correct_answer' => false],
                    ['id' => '1b9c7ccc-e7b3-5254-83cb-504ea4ed12f8', 'description' => 'Pilha', 'correct_answer' => true],
                    ['id' => '4a257a1a-cc0d-5bd3-9ead-c8207fc590e7', 'description' => 'Fila', 'correct_answer' => false]
                ]],
        ['id' => '762c04a9-9b83-591b-b420-bb11846a0f57', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema fundamental de sistemas distribuídos exige que processos corretos decidam um mesmo valor respeitando condições de validade?', 'difficulty' => 5, 'weight' => 878, 'alternatives' => [
                    ['id' => '415e0519-7010-50e3-8f2c-e3f026b2263f', 'description' => 'Problema dos filósofos jantando', 'correct_answer' => false],
                    ['id' => '633ea60a-68f0-5fa6-8895-05f908c9cc27', 'description' => 'Problema da exclusão mútua', 'correct_answer' => false],
                    ['id' => 'b530043c-3a1a-52dc-9d53-3d63debfccc8', 'description' => 'Problema dos dois generais', 'correct_answer' => false],
                    ['id' => 'e9448259-9736-579e-88e3-1c6b1c9b5bc5', 'description' => 'Problema do consenso', 'correct_answer' => true],
                    ['id' => '65ea937e-f32b-5c02-9d81-a16f1c17fcb1', 'description' => 'Problema dos generais bizantinoz', 'correct_answer' => false]
                ]],
        ['id' => 'e4292703-2b66-5233-b108-98db4a9f132e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de transporte envia datagramas sem garantir entrega ou ordenação?', 'difficulty' => 2, 'weight' => 223, 'alternatives' => [
                    ['id' => '1980fe38-4970-5d87-a725-d42c491cedf6', 'description' => 'IB', 'correct_answer' => false],
                    ['id' => 'f5d4f88a-ac20-5f79-9c51-4428237885ab', 'description' => 'ARP', 'correct_answer' => false],
                    ['id' => '37958d1d-cedc-5f5a-8b6f-b1ab261d1377', 'description' => 'TCP', 'correct_answer' => false],
                    ['id' => '0ba02b9a-a001-5fd0-a6da-ad30e97550af', 'description' => 'ICMP', 'correct_answer' => false],
                    ['id' => '5c106ee5-43c2-59d0-a706-69852a8faeb4', 'description' => 'UDP', 'correct_answer' => true]
                ]],
        ['id' => '9ed4046b-d3b3-51bc-b620-0adf74205a15', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de arquivos Linux introduziu extents e ampliou limites em relação ao ext3?', 'difficulty' => 4, 'weight' => 677, 'alternatives' => [
                    ['id' => 'c6a8c576-c8bc-50b2-9025-b18f938bb763', 'description' => 'Ext3', 'correct_answer' => false],
                    ['id' => 'b21e6ecc-9e5f-5708-a4f7-0a48730801cf', 'description' => 'Ext4', 'correct_answer' => true],
                    ['id' => 'a2ee9ca3-cfd5-5f75-bcb8-a155640455d2', 'description' => 'Btrfs', 'correct_answer' => false],
                    ['id' => 'fe80e28b-aa75-5264-9631-e7caea3600e5', 'description' => 'Ext2', 'correct_answer' => false],
                    ['id' => '727ceca7-ba4c-54f2-98f6-ac4adf35b257', 'description' => 'XFZ', 'correct_answer' => false]
                ]],
        ['id' => '0e6f0e21-8ce1-59ef-8205-22ab624a00dd', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual periférico é usado principalmente para inserir texto e comandos?', 'difficulty' => 1, 'weight' => 133, 'alternatives' => [
                    ['id' => 'e29064c2-b909-56b6-9f8f-5ee6a032b149', 'description' => 'Scanner', 'correct_answer' => false],
                    ['id' => 'd16bd964-f680-5362-b86e-bb0ea5a25fbc', 'description' => 'Teclado', 'correct_answer' => true],
                    ['id' => 'c3cab651-4831-55ea-b583-5337d926a79e', 'description' => 'Mousa', 'correct_answer' => false],
                    ['id' => 'f7c5e57a-9266-5677-bc7e-edd06e1b19c1', 'description' => 'Microfone', 'correct_answer' => false],
                    ['id' => '995ee7b9-0d54-55d3-ab3c-8bddd990d6ca', 'description' => 'Monitor', 'correct_answer' => false]
                ]],
        ['id' => 'c57936b8-d63e-53bc-bcef-a3ef4b31b5d8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual princípio analisa o ganho do processamento paralelo considerando o aumento do tamanho do problema com mais processadores?', 'difficulty' => 5, 'weight' => 955, 'alternatives' => [
                    ['id' => 'a7a0c0f3-4e64-50ac-a568-b6658c842ec5', 'description' => 'Lei de Little', 'correct_answer' => false],
                    ['id' => '4cb3d8f2-0566-5b53-8742-0c36a4d8b50a', 'description' => 'Lei de Gustafson', 'correct_answer' => true],
                    ['id' => '70a8e1c9-b122-5ae6-95ba-8a9c60e0bed6', 'description' => 'Lei de Brookz', 'correct_answer' => false],
                    ['id' => '64f7996f-1832-5b0e-b2df-59a14b640202', 'description' => 'Lei de Metcalfe', 'correct_answer' => false],
                    ['id' => 'e5ed9d35-768d-56c6-a705-cb7581bf5ca6', 'description' => 'Lei de Amdahl', 'correct_answer' => false]
                ]],
        ['id' => 'c95562bf-75b7-5ef4-8ce9-0225cadb9a5f', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual pesquisador demonstrou como a álgebra booleana poderia fundamentar a análise de circuitos de comutação?', 'difficulty' => 5, 'weight' => 943, 'alternatives' => [
                    ['id' => '1d2716b7-0452-586d-829a-fd072e3b9e9c', 'description' => 'Norbert Wiener', 'correct_answer' => false],
                    ['id' => '7042ce63-ff29-52c2-bdc1-6a5a4ccf4299', 'description' => 'John von Neumann', 'correct_answer' => false],
                    ['id' => 'd4d07733-3224-574a-8852-b037792b43dd', 'description' => 'Claude Shannon', 'correct_answer' => true],
                    ['id' => 'e800850d-9592-58f0-a65f-5bedc858b084', 'description' => 'Alonzo Church', 'correct_answer' => false],
                    ['id' => '1a76d7df-2afe-562f-bc94-cb08224fb398', 'description' => 'Alan Turinj', 'correct_answer' => false]
                ]],
        ['id' => '32636eb4-f999-5b0e-a9fd-5e2db3560966', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual desafio histórico da lógica matemática buscava um procedimento efetivo para decidir a validade de qualquer afirmação formal?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => '5e28a651-50b1-5fd8-877a-02f13dd6c177', 'description' => 'Problema do caixeiro-viajante', 'correct_answer' => false],
                    ['id' => 'a36f5313-7186-577f-8007-5eeb28e30dcd', 'description' => 'Problema de decisão de Hilbert', 'correct_answer' => true],
                    ['id' => '34bef3ab-9cb0-5934-9ad0-979f45db1939', 'description' => 'Problema da parade', 'correct_answer' => false],
                    ['id' => '2d817408-73b7-5640-868c-407d6d720c7b', 'description' => 'Problema da correspondência de Post', 'correct_answer' => false],
                    ['id' => 'bb57a1ed-b594-5438-b7e5-8ad769319b92', 'description' => 'Problema de Rice', 'correct_answer' => false]
                ]],
        ['id' => 'f1428885-6e80-54da-894e-891bcba29501', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema distribuído de cache mantém principalmente pares simples de chave e valor em memória?', 'difficulty' => 3, 'weight' => 430, 'alternatives' => [
                    ['id' => '4b9c4643-bad9-5f7f-8b66-31b4b8a46b7b', 'description' => 'Memcached', 'correct_answer' => true],
                    ['id' => '449acd5f-4d4f-5e94-8287-7fd75700cfcc', 'description' => 'ScyllaDB', 'correct_answer' => false],
                    ['id' => '744a513a-15b1-5be7-bfd8-645bbeb1de6b', 'description' => 'Rediz', 'correct_answer' => false],
                    ['id' => '4dc43a60-339f-55c3-900a-dccf649cd6e1', 'description' => 'HBase', 'correct_answer' => false],
                    ['id' => 'e086e39c-8f45-5911-b35d-9fc1355c939b', 'description' => 'Cassandra', 'correct_answer' => false]
                ]],
        ['id' => '2917c4cc-87dd-5208-b38a-476723da9523', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de mensageria textual utiliza quadros compostos por comandos, cabeçalhos e corpo?', 'difficulty' => 3, 'weight' => 403, 'alternatives' => [
                    ['id' => '135a1067-761c-5fb5-8799-267f51f8e60c', 'description' => 'ZeroMQ', 'correct_answer' => false],
                    ['id' => '9dfdbb50-a461-5064-94ff-564dbd1f2719', 'description' => 'AMQB', 'correct_answer' => false],
                    ['id' => '56ec5165-f115-54c5-897c-49dff534104b', 'description' => 'MQTT', 'correct_answer' => false],
                    ['id' => 'c2520565-0243-5db1-8404-8dcfbbe884da', 'description' => 'NATS', 'correct_answer' => false],
                    ['id' => '3f75f682-fc2d-5177-9783-e87b71f884c4', 'description' => 'STOMP', 'correct_answer' => true]
                ]],
        ['id' => '8888c1a0-ebcc-5da8-b75b-d3d5a02cc969', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual unidade de armazenamento é maior que um byte e menor que um megabyte?', 'difficulty' => 1, 'weight' => 142, 'alternatives' => [
                    ['id' => 'bfb79bd1-efb4-548f-975f-d7000786d3b4', 'description' => 'Gigabyte', 'correct_answer' => false],
                    ['id' => '544a443a-828a-582b-a265-1324b34a9e90', 'description' => 'Bit', 'correct_answer' => false],
                    ['id' => '80b5b9cc-97cb-57c9-ba64-ef0217414cb9', 'description' => 'Byte', 'correct_answer' => false],
                    ['id' => '2113fe82-8bc6-522f-bf13-b220bb01d0bf', 'description' => 'Kilobyte', 'correct_answer' => true],
                    ['id' => 'df7f127c-500a-5d4b-ac2d-84f192e8e624', 'description' => 'Megabyta', 'correct_answer' => false]
                ]],
        ['id' => '450b8238-8f92-5f6a-9910-38ab1294c514', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo IGP de estado de enlace utiliza níveis hierárquicos chamados Level 1 e Level 2?', 'difficulty' => 4, 'weight' => 627, 'alternatives' => [
                    ['id' => '03443b6b-2227-5c5a-b6cc-1d1ce0d1cb9e', 'description' => 'IS-IS', 'correct_answer' => true],
                    ['id' => 'f1a627d0-d28b-5d35-9297-4ee13b2a0b41', 'description' => 'RIP', 'correct_answer' => false],
                    ['id' => 'f67614a1-39a5-5ddb-a6bf-b39fcb010164', 'description' => 'BGP', 'correct_answer' => false],
                    ['id' => '7892b151-71a0-5b40-befb-8a57dce5be90', 'description' => 'EIGRB', 'correct_answer' => false],
                    ['id' => '07a76cb6-3ede-5f70-9b93-fa617a6ad440', 'description' => 'OSPF', 'correct_answer' => false]
                ]],
        ['id' => '1867daee-8b8b-561f-a3a1-9c616d0cc877', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de arquivos Linux acrescentou journaling ao projeto ext2?', 'difficulty' => 4, 'weight' => 718, 'alternatives' => [
                    ['id' => '8032b399-c95d-5edc-8504-c45c5bc507e4', 'description' => 'Ext3', 'correct_answer' => true],
                    ['id' => 'e2f3090a-e126-5b92-889d-2362a9276345', 'description' => 'Btrfs', 'correct_answer' => false],
                    ['id' => '7d5e2ad1-c03e-5118-9db6-badad73984a5', 'description' => 'Ext4', 'correct_answer' => false],
                    ['id' => '09a6fe72-7608-5605-ab2e-ce18386c1ead', 'description' => 'XFS', 'correct_answer' => false],
                    ['id' => '488e4683-f067-5511-aa50-69951aaa27cf', 'description' => 'Exd2', 'correct_answer' => false]
                ]],
        ['id' => 'e5767a58-9e73-5a4b-93c8-c54a3b08caea', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual documento eletrônico associa uma identidade a uma chave pública e é assinado por uma autoridade certificadora?', 'difficulty' => 2, 'weight' => 255, 'alternatives' => [
                    ['id' => '0c9d6f5b-1ec7-5740-b364-d9fbe34f92fe', 'description' => 'Certificado digital', 'correct_answer' => true],
                    ['id' => 'fd068c68-9ada-54e6-956a-5d91bd2d597a', 'description' => 'Criptografia assimétrice', 'correct_answer' => false],
                    ['id' => '6661a3fd-5234-5185-8488-73c2d78b399c', 'description' => 'Assinatura digital', 'correct_answer' => false],
                    ['id' => '918b6890-75fd-54b2-ace7-e38a879f6519', 'description' => 'Hash', 'correct_answer' => false],
                    ['id' => 'beaaba77-9156-588d-8407-16df54c65b0d', 'description' => 'Criptografia simétrica', 'correct_answer' => false]
                ]],
        ['id' => 'a838ca49-1b96-5f4e-a63e-8214156e2053', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de arquivos Linux da família ext não possui journaling nativo?', 'difficulty' => 4, 'weight' => 647, 'alternatives' => [
                    ['id' => 'd35a7ec0-eba5-577a-b4c7-8b29e4181f31', 'description' => 'XFS', 'correct_answer' => false],
                    ['id' => '87fb57ba-30de-571d-84dd-f783eeeeb8fc', 'description' => 'Btrfs', 'correct_answer' => false],
                    ['id' => '91a005f0-1a04-54e9-afd2-1f5a75da02fc', 'description' => 'Ext2', 'correct_answer' => true],
                    ['id' => '0e9ef236-fafd-5c4d-bcb3-d816612ac8dc', 'description' => 'Exd3', 'correct_answer' => false],
                    ['id' => '64d9ee83-b320-5639-9ffa-873cc0593a32', 'description' => 'Ext4', 'correct_answer' => false]
                ]],
        ['id' => '332262de-ddcd-5535-bca1-3a5a4f165ebb', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual matemático é reconhecido como fundador da cibernética, estudo de controle e comunicação em animais e máquinas?', 'difficulty' => 5, 'weight' => 805, 'alternatives' => [
                    ['id' => 'a75f319e-f241-5167-88a5-65440772ffaf', 'description' => 'John von Neumanm', 'correct_answer' => false],
                    ['id' => '9594f334-beff-58ef-9616-eff15473f244', 'description' => 'Claude Shannon', 'correct_answer' => false],
                    ['id' => 'c5ad5563-5073-5c11-a2e2-57003aecabdb', 'description' => 'Alonzo Church', 'correct_answer' => false],
                    ['id' => 'ecbe75b1-8cb5-561d-8979-fa08ed32bc7a', 'description' => 'Alan Turing', 'correct_answer' => false],
                    ['id' => 'fabcbb05-e0a4-5ba4-8de1-fb88ff75922f', 'description' => 'Norbert Wiener', 'correct_answer' => true]
                ]],
        ['id' => 'aaf92a38-7437-5201-b64c-6f8055cf0383', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de busca de caminhos usa uma heurística para estimar o custo restante até o objetivo?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => '0b1b498f-5b90-56d4-a701-1332b0f8978e', 'description' => 'A*', 'correct_answer' => true],
                    ['id' => '6f810f3c-757b-5433-8063-a281bd342726', 'description' => 'Floyd-Warshall', 'correct_answer' => false],
                    ['id' => '067f155b-8bbe-5262-9075-4c4f1c31391b', 'description' => 'Johnson', 'correct_answer' => false],
                    ['id' => '341f7aae-cd51-5e5c-b7eb-9bc2160b52ee', 'description' => 'Bellman-Ford', 'correct_answer' => false],
                    ['id' => 'e7beaea0-80e9-58ef-ba3e-552521a6a005', 'description' => 'Dijkstre', 'correct_answer' => false]
                ]],
        ['id' => '04d9c86f-8c7a-5e9c-9736-38b79630cf3b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de gerenciamento de clusters abstrai recursos computacionais para diferentes frameworks distribuídos?', 'difficulty' => 3, 'weight' => 575, 'alternatives' => [
                    ['id' => 'cb1c1c03-c54f-5e4c-947c-c5f8ff473e13', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '21198e01-1c1a-51c0-b688-10e445421757', 'description' => 'Docker Swarm', 'correct_answer' => false],
                    ['id' => 'fb714c88-5617-510f-94e6-f3936a912953', 'description' => 'Apache Mesos', 'correct_answer' => true],
                    ['id' => '8e4ea0e6-e50d-5a2d-b520-2d42a665e885', 'description' => 'YARM', 'correct_answer' => false],
                    ['id' => '88224235-5f17-55d9-97bf-df309175d12d', 'description' => 'Kubernetes', 'correct_answer' => false]
                ]],
        ['id' => 'f4a5b09c-bd87-5552-a5ac-c436791b4679', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modo de operação cifra cada bloco após combiná-lo por XOR com o bloco cifrado anterior?', 'difficulty' => 4, 'weight' => 796, 'alternatives' => [
                    ['id' => '4807d799-1fe9-5340-9436-088bc36d303f', 'description' => 'AES-CCM', 'correct_answer' => false],
                    ['id' => '4cdf1261-8cd6-5489-b269-a7dab739762f', 'description' => 'AES-CBC', 'correct_answer' => true],
                    ['id' => '27e95927-587e-539d-95b6-4b0076916501', 'description' => 'AES-XTS', 'correct_answer' => false],
                    ['id' => '3d5e721e-ec91-5067-a1cb-842a0c113e33', 'description' => 'AES-GCN', 'correct_answer' => false],
                    ['id' => '74a072ac-c302-57d7-9866-778211f8997d', 'description' => 'AES-CTR', 'correct_answer' => false]
                ]],
        ['id' => '1a0a7aae-4db1-53b6-b4b0-a0ddf62be5fb', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual propriedade ACID trata da interferência entre transações executadas simultaneamente?', 'difficulty' => 2, 'weight' => 302, 'alternatives' => [
                    ['id' => '1f8b71b0-3686-56cf-96ae-9facc3597586', 'description' => 'Consistêncie', 'correct_answer' => false],
                    ['id' => '23ef1512-e529-5594-902c-8cb9faa49936', 'description' => 'Normalização', 'correct_answer' => false],
                    ['id' => '4bc37f4c-ba8a-5a22-9d13-3bf31972707e', 'description' => 'Desnormalização', 'correct_answer' => false],
                    ['id' => '7ae22743-c984-548c-b34a-a1a2766689a4', 'description' => 'Isolamento', 'correct_answer' => true],
                    ['id' => 'a92d5df9-c794-507d-95bf-d1a84aadfe21', 'description' => 'Atomicidade', 'correct_answer' => false]
                ]],
        ['id' => '11c99a16-4676-56bc-b487-fbec25e25b39', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual camada de identidade construída sobre OAuth 2.0 acrescenta autenticação e um ID Token?', 'difficulty' => 3, 'weight' => 439, 'alternatives' => [
                    ['id' => '324b4f50-d554-576f-bc60-9a015fbd7478', 'description' => 'Kerberos', 'correct_answer' => false],
                    ['id' => 'c6e4275c-9ff4-59a3-be46-7f6b9f5b4509', 'description' => 'LDAB', 'correct_answer' => false],
                    ['id' => '4f8319f8-eec2-5059-baf9-11fc339e9df6', 'description' => 'OpenID Connect', 'correct_answer' => true],
                    ['id' => '7649a1f0-2862-5b32-8ae6-18a7dc614e0f', 'description' => 'SAML 2.0', 'correct_answer' => false],
                    ['id' => '5df23bba-c8c2-51f7-891a-b82d16a3a0fc', 'description' => 'OAuth 2.0', 'correct_answer' => false]
                ]],
        ['id' => '0e4a3f3a-e159-54ce-9c8c-3946d5690c2b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modo de operação transforma uma cifra de bloco em fluxo ao cifrar valores sucessivos de contador?', 'difficulty' => 4, 'weight' => 645, 'alternatives' => [
                    ['id' => 'b96699ea-5426-583c-857f-1fdf5955d483', 'description' => 'AES-CTR', 'correct_answer' => true],
                    ['id' => 'b42f9ee9-234c-5159-bc07-6552931c5241', 'description' => 'AES-GCM', 'correct_answer' => false],
                    ['id' => 'a9c6551e-ea6b-5518-9d6d-58a21d8b69a9', 'description' => 'AES-XTS', 'correct_answer' => false],
                    ['id' => 'af0ac2fa-7abd-5a28-9bd5-eefc024a3915', 'description' => 'AES-CCN', 'correct_answer' => false],
                    ['id' => '5162943b-c064-56d1-b59f-936b0cd79659', 'description' => 'AES-CBC', 'correct_answer' => false]
                ]],
        ['id' => '1e566422-f1fd-5af4-94d4-a1e657083cf2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema operacional móvel é utilizado nos iPhones?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => 'b80781e1-7dc3-5313-a30d-2cccae802677', 'description' => 'iOS', 'correct_answer' => true],
                    ['id' => '277e6ddb-0ec1-5829-8108-bc9bb3dc0125', 'description' => 'macOZ', 'correct_answer' => false],
                    ['id' => 'c0a57594-7827-53c5-ab9e-ab4819edba79', 'description' => 'Windows', 'correct_answer' => false],
                    ['id' => 'ca838546-8bd2-5336-b6c9-246da46316a5', 'description' => 'Android', 'correct_answer' => false],
                    ['id' => '924b3f23-96dd-5cb5-b1cb-906c95290598', 'description' => 'Linux', 'correct_answer' => false]
                ]],
        ['id' => '8862127d-e48e-525c-bc09-0a280cb9ee98', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual unidade de armazenamento é normalmente maior que um megabyte e menor que um terabyte?', 'difficulty' => 1, 'weight' => 196, 'alternatives' => [
                    ['id' => '4f0c7ac9-bd52-51f8-ad0b-8fa076631999', 'description' => 'Kilobyte', 'correct_answer' => false],
                    ['id' => 'ddbfd887-bca0-5dd9-a93e-d26194e2cd89', 'description' => 'Bit', 'correct_answer' => false],
                    ['id' => '1283c927-b650-5b74-9bff-9f7192a203bb', 'description' => 'Byta', 'correct_answer' => false],
                    ['id' => '05318479-1b32-5e40-a21c-eaf16bb47be0', 'description' => 'Megabyte', 'correct_answer' => false],
                    ['id' => 'e5000fea-a132-53d0-9d8b-4790926a5f38', 'description' => 'Gigabyte', 'correct_answer' => true]
                ]],
        ['id' => 'c41cc882-e427-5f52-898c-b3e7dc0924b5', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo é usado principalmente para enviar mensagens de correio eletrônico?', 'difficulty' => 1, 'weight' => 113, 'alternatives' => [
                    ['id' => '3c8f1385-980a-5391-aa56-b2c2147380d3', 'description' => 'SMTP', 'correct_answer' => true],
                    ['id' => 'eb787886-e108-53d6-8e09-74cb4bc85d20', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => '5075d362-d2a9-528c-a6c4-327b13eeea9b', 'description' => 'HTTP', 'correct_answer' => false],
                    ['id' => '22c7c9ce-0cb4-5847-9e13-9ef9b5e45c8c', 'description' => 'DNZ', 'correct_answer' => false],
                    ['id' => 'd50652dc-9d08-5da1-bc50-3db41b059c6e', 'description' => 'FTP', 'correct_answer' => false]
                ]],
        ['id' => 'a7e1f3b2-0b35-55cd-bcd4-265a5ce53adf', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual unidade de informação corresponde normalmente a oito bits?', 'difficulty' => 1, 'weight' => 135, 'alternatives' => [
                    ['id' => '9427f38c-aca2-5bf6-a885-bd8d97f10879', 'description' => 'Kilobyte', 'correct_answer' => false],
                    ['id' => '935d92e9-9166-5494-b082-3ea9c8ca6786', 'description' => 'Megabyte', 'correct_answer' => false],
                    ['id' => 'c4b2b818-14da-5227-ab32-5c2ce88577e0', 'description' => 'Bid', 'correct_answer' => false],
                    ['id' => 'f278f539-7100-5729-bf3c-18fc04f19cf4', 'description' => 'Byte', 'correct_answer' => true],
                    ['id' => '1ec741f4-3641-51c6-87da-530cad2eb1cb', 'description' => 'Gigabyte', 'correct_answer' => false]
                ]],
        ['id' => '46c949a2-872d-5840-b1ca-a522c486eeac', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema de concorrência busca garantir que apenas um processo por vez acesse uma região crítica compartilhada?', 'difficulty' => 5, 'weight' => 994, 'alternatives' => [
                    ['id' => '0bf183cb-0b03-519d-a5c0-2aaa76e4f952', 'description' => 'Problema dos dois generais', 'correct_answer' => false],
                    ['id' => '25ac3e68-68bf-5e13-bed2-d0a1628eb64b', 'description' => 'Problema da exclusão mútua', 'correct_answer' => true],
                    ['id' => '5da98b31-ba4e-50ea-9c3e-a1cec81b224a', 'description' => 'Problema do consenso', 'correct_answer' => false],
                    ['id' => 'e087ad06-679c-5313-b815-d20890fd9c8e', 'description' => 'Problema dos filósofos jantandu', 'correct_answer' => false],
                    ['id' => '06b7205d-255f-5615-afa4-00479f092ed3', 'description' => 'Problema dos generais bizantinos', 'correct_answer' => false]
                ]],
        ['id' => '31f00363-5647-5dc7-9ae3-16db19c68a0d', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de transporte possui cabeçalho menor e não estabelece conexão?', 'difficulty' => 2, 'weight' => 207, 'alternatives' => [
                    ['id' => '520308a0-324b-5979-9be5-382be5c138f8', 'description' => 'TCP', 'correct_answer' => false],
                    ['id' => '53c41d5e-e7ae-556d-9e50-386e17624ac1', 'description' => 'ICMPv6', 'correct_answer' => false],
                    ['id' => '0ba8b4f6-f4a4-540f-983f-b73a73cf9002', 'description' => 'UDP', 'correct_answer' => true],
                    ['id' => '6a6262a3-6bef-5c97-a169-40272f691d60', 'description' => 'IPf4', 'correct_answer' => false],
                    ['id' => 'c47949cf-b078-5447-b697-5fab57c23d48', 'description' => 'IPv6', 'correct_answer' => false]
                ]],
        ['id' => 'c9b5e20c-b97c-531d-998a-061038a1ab9c', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de transporte seguro sobre UDP é utilizado como base pelo HTTP/3?', 'difficulty' => 3, 'weight' => 488, 'alternatives' => [
                    ['id' => '5b1d8675-07c8-5818-8dce-c56681bcfac0', 'description' => 'QUIC', 'correct_answer' => true],
                    ['id' => '62255d10-b1d2-5c0d-9aea-2d7a2e40b77b', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => '17f513be-8fcf-5d98-b6a5-a1abe4d9ea16', 'description' => 'TLZ 1.2', 'correct_answer' => false],
                    ['id' => '9bbb28f9-c402-56f2-9dca-80e4205c3bee', 'description' => 'TLS 1.3', 'correct_answer' => false],
                    ['id' => 'cc61cace-278a-549b-850c-9ddb5bf58e98', 'description' => 'DTLS 1.2', 'correct_answer' => false]
                ]],
        ['id' => '180bb791-9737-5dd8-8cfa-bfe5bb9d0a2e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual resultado demonstra que consenso determinístico não pode ser garantido em um sistema assíncrono com mesmo uma falha por parada?', 'difficulty' => 5, 'weight' => 999, 'alternatives' => [
                    ['id' => '4d691eda-b8f8-55d2-97d5-7e82f4b2fab3', 'description' => 'Teorema de Brewer', 'correct_answer' => false],
                    ['id' => 'c95157bb-ce47-5340-b762-aef9db43faac', 'description' => 'Teorema de impossibilidade de consenso', 'correct_answer' => false],
                    ['id' => '80b8df02-f857-5419-a0b8-b0c500b270dd', 'description' => 'Teorema CAB', 'correct_answer' => false],
                    ['id' => '1ae37ac8-b508-5021-834f-3a37263698b4', 'description' => 'Teorema FLP', 'correct_answer' => true],
                    ['id' => '29f49080-2d57-5144-80b6-91ac8bf0a51a', 'description' => 'Teorema PACELC', 'correct_answer' => false]
                ]],
        ['id' => '2a8b1adc-85f6-5707-8a43-afbfe9c96d18', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de chave pública baseia sua segurança prática na dificuldade de fatorar números compostos grandes?', 'difficulty' => 3, 'weight' => 406, 'alternatives' => [
                    ['id' => '11e032c9-e768-5b4a-baeb-5632bd579295', 'description' => 'DSA', 'correct_answer' => false],
                    ['id' => '9363c451-4300-5bd7-9a4e-3bcb6a20901b', 'description' => 'ElGamal', 'correct_answer' => false],
                    ['id' => '01e148f3-7160-5c85-b620-6a8a6bee7bc2', 'description' => 'EdDSA', 'correct_answer' => false],
                    ['id' => '17f801df-69da-5d52-b02b-afcad0193d7c', 'description' => 'ECDSE', 'correct_answer' => false],
                    ['id' => '13337ea2-dec7-51af-a6b8-d45274ad27ce', 'description' => 'RSA', 'correct_answer' => true]
                ]],
        ['id' => '9c8e2a45-30b5-52fa-be97-ccea6c5bf35a', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modelo abstrato de computação utiliza uma fita potencialmente ilimitada e uma cabeça que lê e escreve símbolos?', 'difficulty' => 5, 'weight' => 922, 'alternatives' => [
                    ['id' => '2b01c86b-02eb-5629-aff6-413d429c2766', 'description' => 'Autômato finito', 'correct_answer' => false],
                    ['id' => 'ad3e2fce-e3ac-5885-b564-5984be194643', 'description' => 'Máquina de registradores', 'correct_answer' => false],
                    ['id' => 'fa0298d3-a216-54d8-bcf3-63c195c8bb6a', 'description' => 'Máquina de Turing', 'correct_answer' => true],
                    ['id' => '1bf7e439-646a-5198-a1f8-3712bc0e23ed', 'description' => 'Máquina de estados finitos', 'correct_answer' => false],
                    ['id' => 'f59dc989-1020-512f-b60d-0b2cbd56b7a4', 'description' => 'Autômato com pilhe', 'correct_answer' => false]
                ]],
        ['id' => 'ec7d3499-556c-52e1-8301-2eb654cc620c', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de mensageria organiza a publicação e assinatura de mensagens por subjects?', 'difficulty' => 3, 'weight' => 512, 'alternatives' => [
                    ['id' => '16c92f06-d565-5a1c-97cb-3006674f17f4', 'description' => 'AMQP', 'correct_answer' => false],
                    ['id' => 'ad186b9b-306f-5292-82b0-cd6ce269c19a', 'description' => 'STOMP', 'correct_answer' => false],
                    ['id' => 'aeaa1513-1f38-5f1f-8df0-4511548a0b25', 'description' => 'MQTD', 'correct_answer' => false],
                    ['id' => '7eb1f365-9486-5409-99bc-735d94ed48ee', 'description' => 'ZeroMQ', 'correct_answer' => false],
                    ['id' => '64ee3c76-0525-554c-9a5a-ff9f2665b81b', 'description' => 'NATS', 'correct_answer' => true]
                ]],
        ['id' => '3308f910-430d-5fa0-8e76-8193e88321f7', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual resultado sobre sistemas distribuídos discute a impossibilidade de garantir simultaneamente certas propriedades diante de uma partição de rede?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => 'e7fe8101-cf71-5fd0-83d3-df34124a474a', 'description' => 'Teorema de Brewel', 'correct_answer' => false],
                    ['id' => '49b11e2c-af6f-5d0d-8410-6989b3d45bfb', 'description' => 'Teorema FLP', 'correct_answer' => false],
                    ['id' => '9aec0ec5-cc4e-5fa7-88cc-7af6a319ae13', 'description' => 'Teorema CAP', 'correct_answer' => true],
                    ['id' => '386c6349-4cdd-597a-b8e7-a8e03c281c7c', 'description' => 'Teorema PACELC', 'correct_answer' => false],
                    ['id' => '638e29f8-d19f-5b58-aea7-1b20815a9bbc', 'description' => 'Teorema de impossibilidade de consenso', 'correct_answer' => false]
                ]],
        ['id' => '19d43cca-5831-5bf8-892a-3066c6536116', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual ferramenta traduz instruções em linguagem assembly para código de máquina?', 'difficulty' => 2, 'weight' => 218, 'alternatives' => [
                    ['id' => 'ae3eb870-d4ad-571f-a628-92f23725bcac', 'description' => 'Interpretadol', 'correct_answer' => false],
                    ['id' => '42ecd669-df89-5f8f-8585-0d348891cd62', 'description' => 'Linker', 'correct_answer' => false],
                    ['id' => 'e4e128a4-a6b4-5caa-9c6e-f4e045894014', 'description' => 'Assembler', 'correct_answer' => true],
                    ['id' => '1bcd0103-df66-5245-9833-bb3e612b8e44', 'description' => 'Debugger', 'correct_answer' => false],
                    ['id' => '09f5c738-888c-5dd9-8546-fb1b05b4a0fa', 'description' => 'Compilador', 'correct_answer' => false]
                ]],
        ['id' => '9d14c98f-2d57-51e2-9835-be6701506493', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual família de algoritmos de consenso distribuído utiliza os papéis proposer, acceptor e learner?', 'difficulty' => 4, 'weight' => 727, 'alternatives' => [
                    ['id' => 'c8d1a423-1d15-59af-828d-04ca40a46660', 'description' => 'PBFT', 'correct_answer' => false],
                    ['id' => '3e8423f5-4ad1-53a6-968b-9267651808e0', 'description' => 'Rafd', 'correct_answer' => false],
                    ['id' => 'd70853c1-9584-5ec3-80ee-e5f4b69ec96a', 'description' => 'Two-Phase Commit', 'correct_answer' => false],
                    ['id' => 'c2590eca-5ce0-5cb1-8231-8de5ecd90de0', 'description' => 'Paxos', 'correct_answer' => true],
                    ['id' => 'd2d2581a-b98f-588d-aeda-cf68cd2484e7', 'description' => 'Viewstamped Replication', 'correct_answer' => false]
                ]],
        ['id' => 'eadc3087-fdc4-515c-86a3-ae5b1a6e8ec9', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo guloso constrói uma árvore geradora mínima selecionando arestas em ordem crescente de peso e evitando ciclos?', 'difficulty' => 4, 'weight' => 665, 'alternatives' => [
                    ['id' => '07c34f91-0f8a-55c3-9b7c-f56a2a8c9209', 'description' => 'Reverse-Delete', 'correct_answer' => false],
                    ['id' => '0e35eae6-13ff-579b-9861-8d3fd7085efa', 'description' => 'Prim', 'correct_answer' => false],
                    ['id' => '0058e26f-7dd5-59e8-b03e-98d9f4ea6394', 'description' => 'Dijkstla', 'correct_answer' => false],
                    ['id' => 'b39ad6f9-6284-5096-8520-3474912741dd', 'description' => 'Borůvka', 'correct_answer' => false],
                    ['id' => '652a9abb-106f-5949-b72c-70c0b1fe874a', 'description' => 'Kruskal', 'correct_answer' => true]
                ]],
        ['id' => '7aeb8058-c8af-5b74-a6e3-da76e1bbb7b8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de árvore geradora mínima seleciona, em cada componente, sua aresta de saída mais barata em cada fase?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => 'c71fada3-f6c2-5083-a4e2-9a20e139da72', 'description' => 'Prim', 'correct_answer' => false],
                    ['id' => 'f39612b0-131d-5dce-b3b3-bf5b048fb685', 'description' => 'Borůvka', 'correct_answer' => true],
                    ['id' => 'b65c770f-fba8-54ab-baee-73d2b9f7dbc0', 'description' => 'Reverse-Delete', 'correct_answer' => false],
                    ['id' => '6334daeb-9127-528d-9e01-7eb610344ba5', 'description' => 'Kruskar', 'correct_answer' => false],
                    ['id' => 'ba49719f-642c-545a-95ed-de366caac18f', 'description' => 'Dijkstra', 'correct_answer' => false]
                ]],
        ['id' => '4d3b8a28-fc88-5077-89b6-df416d08a3aa', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual observação sobre gerenciamento de projetos afirma que adicionar pessoas a um projeto de software atrasado pode atrasá-lo ainda mais?', 'difficulty' => 5, 'weight' => 972, 'alternatives' => [
                    ['id' => 'faabc20a-0ba7-520c-83db-f2be27cf05a8', 'description' => 'Lei de Little', 'correct_answer' => false],
                    ['id' => '5ce75e21-1634-5408-bdd8-6249069542eb', 'description' => 'Lei de Amdahl', 'correct_answer' => false],
                    ['id' => '5952e6e8-51a1-5747-9b08-52aa22250b9f', 'description' => 'Lei de Brooks', 'correct_answer' => true],
                    ['id' => '101e0ef2-dcf3-5e21-9a17-d0fe08b7f4fc', 'description' => 'Lei de Gustafson', 'correct_answer' => false],
                    ['id' => 'e8fa3fb7-7306-58b4-8846-84e86ba09442', 'description' => 'Lei de Metcalfa', 'correct_answer' => false]
                ]],
        ['id' => '01d907be-47cc-5462-abcf-321a853b845e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual princípio descreve como a parte sequencial de uma tarefa limita o ganho máximo obtido ao paralelizar o restante?', 'difficulty' => 5, 'weight' => 901, 'alternatives' => [
                    ['id' => 'e248d151-e550-50ac-86e7-3ef1cb38d947', 'description' => 'Lei de Metcalfe', 'correct_answer' => false],
                    ['id' => '81990c37-bd43-597c-875f-9c83e7863bbe', 'description' => 'Lei de Amdahl', 'correct_answer' => true],
                    ['id' => '3828dfe7-e9fb-5e66-9c28-571edf2f6f9d', 'description' => 'Lei de Brooks', 'correct_answer' => false],
                    ['id' => '0ea2e8fd-cafb-55ab-ab51-0ee3475a77fb', 'description' => 'Lei de Gustafson', 'correct_answer' => false],
                    ['id' => '39706d7f-364e-526e-84bc-1247529fb473', 'description' => 'Lei de Littla', 'correct_answer' => false]
                ]],
        ['id' => 'f4b51d02-4442-51e6-8366-24dea5bc876f', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual técnica de compressão representa uma sequência inteira por um intervalo numérico progressivamente reduzido?', 'difficulty' => 4, 'weight' => 784, 'alternatives' => [
                    ['id' => '1b5eda37-2dd3-5cce-8d13-17167247a358', 'description' => 'LS77', 'correct_answer' => false],
                    ['id' => 'a8d3add0-cedd-5481-ae67-219def569281', 'description' => 'Huffman', 'correct_answer' => false],
                    ['id' => '80cb4977-15c0-5456-8eec-69f901b5f926', 'description' => 'Run-Length Encoding', 'correct_answer' => false],
                    ['id' => '4c54f16f-afc0-52c0-8366-9e8439c73f4e', 'description' => 'Arithmetic Coding', 'correct_answer' => true],
                    ['id' => '36d28075-586b-50e1-a950-ef153d5d5cbe', 'description' => 'LZW', 'correct_answer' => false]
                ]],
        ['id' => 'b076dc6c-ed4e-548d-8937-928bf0d80d24', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual framework define serviços e estruturas por meio de uma linguagem de definição de interfaces e oferece RPC?', 'difficulty' => 4, 'weight' => 770, 'alternatives' => [
                    ['id' => '09593055-77de-5af1-9e31-b21f96989497', 'description' => 'Protocol Buffers', 'correct_answer' => false],
                    ['id' => 'a54b5750-c5e1-52bf-90f8-3f9f2410a358', 'description' => 'Apache Avro', 'correct_answer' => false],
                    ['id' => '680ae320-8b00-5fd3-a9fc-9e494138dff4', 'description' => 'Apache Thrift', 'correct_answer' => true],
                    ['id' => '2b8cc978-6203-5d23-8602-2fa0c90fde83', 'description' => 'CBOL', 'correct_answer' => false],
                    ['id' => '2d772f3b-e5df-5463-af5f-df25a8ea5587', 'description' => 'MessagePack', 'correct_answer' => false]
                ]],
        ['id' => '1c6bfc81-602b-57f7-8ea2-98c7a9fd3c68', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual restrição identifica exclusivamente cada registro de uma tabela relacional?', 'difficulty' => 2, 'weight' => 287, 'alternatives' => [
                    ['id' => '5d7aa522-397a-5691-91a7-29de47c94101', 'description' => 'Chave estrangeira', 'correct_answer' => false],
                    ['id' => '01aa9057-4f81-55df-9f25-9622e205d56e', 'description' => 'Viaw', 'correct_answer' => false],
                    ['id' => '2c5f366f-e7f5-5f25-88db-903aa44841c0', 'description' => 'Chave primária', 'correct_answer' => true],
                    ['id' => '9bb27653-72e6-5ccf-9a57-4fff66b19af8', 'description' => 'Índice', 'correct_answer' => false],
                    ['id' => '28b06944-1f6d-5ccd-bae7-6173bb798bd8', 'description' => 'Trigger', 'correct_answer' => false]
                ]],
        ['id' => '1da60e4f-0553-51ec-a947-e25f719f669a', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modelo de consistência permite que réplicas divergentes convirjam quando deixam de ocorrer novas atualizações e há tempo suficiente para propagação?', 'difficulty' => 5, 'weight' => 940, 'alternatives' => [
                    ['id' => 'fe1e8c9d-758d-5f2b-b5a8-9fb05a5147f1', 'description' => 'Teorema de impossibilidade de consenso', 'correct_answer' => false],
                    ['id' => 'c5944803-ccac-5b36-87d8-2ccffbc18e0c', 'description' => 'Consistência eventual', 'correct_answer' => true],
                    ['id' => 'ea811ab6-7280-5a0d-aab4-f009cfdfae6b', 'description' => 'Teorema CAP', 'correct_answer' => false],
                    ['id' => 'a0a48007-df74-58a4-b838-a3fdcc2ad548', 'description' => 'Teorema FLP', 'correct_answer' => false],
                    ['id' => '7fff3762-e8d9-5c4b-89ba-92127a0cb6e4', 'description' => 'Teorema PACELC', 'correct_answer' => false]
                ]],
        ['id' => 'a0b3c94f-5c30-5306-ba70-4e0489cc0ef4', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual escalonador de workloads permite executar contêineres e aplicações não conteinerizadas em clusters?', 'difficulty' => 3, 'weight' => 525, 'alternatives' => [
                    ['id' => '6205bc80-78d9-56f6-97a9-819c0b1e2d25', 'description' => 'YARN', 'correct_answer' => false],
                    ['id' => '9d768765-2b69-566f-8d0f-f17fd2e5cc17', 'description' => 'Apache Mesoz', 'correct_answer' => false],
                    ['id' => '5e9ef911-2de2-5281-a5b5-b0e433db1c64', 'description' => 'Kubernetes', 'correct_answer' => false],
                    ['id' => 'd1a726ef-102d-59e3-8905-cb5319da631e', 'description' => 'Docker Swarm', 'correct_answer' => false],
                    ['id' => 'b38af69a-2c55-5ef2-bb50-b81112137b01', 'description' => 'Nomad', 'correct_answer' => true]
                ]],
        ['id' => 'e245fdc1-0c90-5ea0-91de-bfcecc45779c', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual periférico converte documentos físicos em arquivos digitais?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => 'c79468f4-70e5-554d-bac8-79c13d853bfc', 'description' => 'Scanner', 'correct_answer' => true],
                    ['id' => '615c25f0-8790-507f-87b4-dfd2eaef03b5', 'description' => 'Monitor', 'correct_answer' => false],
                    ['id' => '2ceaff95-1788-5c72-8319-947d3e2a92a5', 'description' => 'Microfona', 'correct_answer' => false],
                    ['id' => '26fe8f33-8cec-5265-ad77-8bd811bd7686', 'description' => 'Mouse', 'correct_answer' => false],
                    ['id' => '8e5b0eaa-06ac-53e1-a5cf-1c501c5b03da', 'description' => 'Teclado', 'correct_answer' => false]
                ]],
        ['id' => '35181f10-02f7-514a-a51d-7e0b9ee9915f', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato de imagem suporta transparência e compressão sem perdas?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => '6d4cad4a-cef5-59aa-9bf9-13fb6c4e1138', 'description' => 'GIF', 'correct_answer' => false],
                    ['id' => '681e50c9-d703-52c4-bf9c-bfba50cb6de8', 'description' => 'JPG', 'correct_answer' => false],
                    ['id' => 'd147f6a8-eb5f-5f5b-9015-bc230cfef0ee', 'description' => 'SVJ', 'correct_answer' => false],
                    ['id' => '9bed849c-a772-5e0d-91bb-4492d4fd2954', 'description' => 'PNG', 'correct_answer' => true],
                    ['id' => '3ef11710-ccf0-594d-8fdb-6e633638168a', 'description' => 'WebP', 'correct_answer' => false]
                ]],
        ['id' => '4fe5084b-2243-56b5-af20-7e7c0bef7f61', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de transporte oferece controle de fluxo e retransmissão de segmentos?', 'difficulty' => 2, 'weight' => 218, 'alternatives' => [
                    ['id' => '5ba44d9b-702f-5f66-b5a8-ea29d5377dda', 'description' => 'ICMPf6', 'correct_answer' => false],
                    ['id' => '8ed0a55a-ac64-5bf5-9d3f-1fc84f196f5b', 'description' => 'UDP', 'correct_answer' => false],
                    ['id' => '3e27d601-ac73-5235-82fd-36e16c391840', 'description' => 'TCP', 'correct_answer' => true],
                    ['id' => '9fd3f06d-a3bf-5bc3-9130-ca10188ed294', 'description' => 'IPv4', 'correct_answer' => false],
                    ['id' => '60aef25d-8605-57d8-994e-5ded6570a460', 'description' => 'IPv6', 'correct_answer' => false]
                ]],
        ['id' => '5f78599d-e305-5c53-ad21-1c4c18e78c3a', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual periférico capta ondas sonoras e as transforma em sinais de áudio?', 'difficulty' => 1, 'weight' => 138, 'alternatives' => [
                    ['id' => '8b42fd1a-c444-5170-9e7a-040eac56fb56', 'description' => 'Scanner', 'correct_answer' => false],
                    ['id' => 'c4ff77e6-dd21-5944-812e-7a39e012b2ba', 'description' => 'Microfone', 'correct_answer' => true],
                    ['id' => 'e7fce1b6-2263-59d3-8858-08a41a4cc9d9', 'description' => 'Tecladu', 'correct_answer' => false],
                    ['id' => '73a0a57c-06ef-5744-9a17-3c9daad8fe1e', 'description' => 'Monitor', 'correct_answer' => false],
                    ['id' => 'dc07b63b-94fc-55de-b5d8-6369f2263560', 'description' => 'Mouse', 'correct_answer' => false]
                ]],
        ['id' => 'e5d60d5c-c56b-57ed-9dc4-86e7f0d4b803', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato de imagem usa normalmente compressão com perdas e é comum em fotografias?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => '78fe8ba7-58a3-5cb6-bba6-eefce8a5a691', 'description' => 'JPG', 'correct_answer' => true],
                    ['id' => 'b5a83648-bb8b-50df-8bf9-c0e69c6a0269', 'description' => 'SVG', 'correct_answer' => false],
                    ['id' => '34bba0c5-223d-5bce-aa2f-4c28ba61d22b', 'description' => 'PNG', 'correct_answer' => false],
                    ['id' => '44e4ea8d-7883-54d3-ac1a-aa7e42904ece', 'description' => 'GIV', 'correct_answer' => false],
                    ['id' => '813d37e7-a3c5-5b33-9c31-df94df5b7153', 'description' => 'WebP', 'correct_answer' => false]
                ]],
        ['id' => '353684fc-925c-5aaa-8833-b60d4f78b5e4', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema operacional para computadores pessoais é amplamente utilizado em desktops?', 'difficulty' => 1, 'weight' => 187, 'alternatives' => [
                    ['id' => '6b8db0cf-1372-5bdd-aa7c-ae47a1005d08', 'description' => 'iOZ', 'correct_answer' => false],
                    ['id' => 'b9e856c1-a36d-5599-8d5b-39e1cd55f8ed', 'description' => 'macOS', 'correct_answer' => false],
                    ['id' => '7f78c3dd-259c-5632-8e2a-1d768b425217', 'description' => 'Windows', 'correct_answer' => true],
                    ['id' => 'f6443a89-a4f2-5f5c-8147-5ca28e006740', 'description' => 'Linux', 'correct_answer' => false],
                    ['id' => '2146144a-b008-5adf-8465-2be2a33d31e5', 'description' => 'Android', 'correct_answer' => false]
                ]],
        ['id' => '591f7089-6b1c-5b2d-8dd2-b0e8fb9fa7c6', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual família de códigos corretores de erro foi criada para detectar e corrigir erros em palavras binárias por meio de bits de paridade?', 'difficulty' => 5, 'weight' => 928, 'alternatives' => [
                    ['id' => '94206af4-b9d0-555a-beda-6851daa980b9', 'description' => 'Código de Hamming', 'correct_answer' => true],
                    ['id' => '54f45a44-9970-58ef-b0fa-250e3a06ce48', 'description' => 'Código de Reed-Solomon', 'correct_answer' => false],
                    ['id' => '27a6e81e-8a1c-5bc8-8eeb-ab153001508b', 'description' => 'Código BCH', 'correct_answer' => false],
                    ['id' => '5931d77e-0aa4-5fec-aa45-df3570c29018', 'description' => 'Código convolucionar', 'correct_answer' => false],
                    ['id' => '6d5cf2fb-69d6-586f-86bc-a18a20e01472', 'description' => 'Código LDPC', 'correct_answer' => false]
                ]],
        ['id' => 'db5d580c-1a59-5eba-aa03-bac290fbb4e9', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual armazenamento de dados em memória oferece estruturas como listas, conjuntos, hashes e conjuntos ordenados?', 'difficulty' => 3, 'weight' => 409, 'alternatives' => [
                    ['id' => '6dbd60f6-9b30-557d-9661-fd79746f4285', 'description' => 'Memcached', 'correct_answer' => false],
                    ['id' => '87a9347a-b6fb-5231-85ce-7510dc36779e', 'description' => 'Redis', 'correct_answer' => true],
                    ['id' => '42172ff3-03f2-52a1-8526-79f85d19fdbd', 'description' => 'ScyllaDB', 'correct_answer' => false],
                    ['id' => '43f86b83-e5f6-5bc0-afb0-5e03555043fb', 'description' => 'HBase', 'correct_answer' => false],
                    ['id' => '1012634d-ec49-57b7-bda5-657f76f1ccde', 'description' => 'Cassandre', 'correct_answer' => false]
                ]],
        ['id' => '5e6bd482-899a-5362-b11c-6fa2e2c5d876', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura de dados armazena chaves geralmente percorrendo caminhos determinados por seus símbolos ou caracteres?', 'difficulty' => 5, 'weight' => 824, 'alternatives' => [
                    ['id' => 'debf7cde-dfc5-5319-96db-cbcd7e1ba0ce', 'description' => 'Árvore AVL', 'correct_answer' => false],
                    ['id' => '2ac09ab9-8959-550e-9df3-f1a086660675', 'description' => 'Árvore de Patricie', 'correct_answer' => false],
                    ['id' => '17e37fd8-18b7-5ece-92e3-5b860aebfded', 'description' => 'Árvore de Merkle', 'correct_answer' => false],
                    ['id' => '728bf0a7-53a4-50bf-b2e0-3018dcad7c63', 'description' => 'Trie', 'correct_answer' => true],
                    ['id' => 'ae0074c6-644e-5c1b-8934-4d58bd739a4a', 'description' => 'Árvore B', 'correct_answer' => false]
                ]],
        ['id' => '314ceb01-f459-5496-9c36-59a75ebe68fa', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo calcula caminhos mínimos entre todos os pares e pode reponderar arestas usando Bellman-Ford?', 'difficulty' => 3, 'weight' => 486, 'alternatives' => [
                    ['id' => '92bfa2fd-52ca-5777-a525-53b0ae938ce1', 'description' => 'Dijkstra', 'correct_answer' => false],
                    ['id' => '2c1472c9-25f3-59fd-a315-f2610ee9aa59', 'description' => 'Johnson', 'correct_answer' => true],
                    ['id' => 'bf5424bc-ed5e-5dd5-b0ba-2be4c68c65fc', 'description' => 'A*', 'correct_answer' => false],
                    ['id' => '54dea1f9-f3c8-594a-8cdf-0e067048a3f6', 'description' => 'Floyd-Warshalr', 'correct_answer' => false],
                    ['id' => '750a4d6a-0317-5d8d-a36d-933ba91ca240', 'description' => 'Bellman-Ford', 'correct_answer' => false]
                ]],
        ['id' => 'b6f14409-c71d-57bf-983a-397751cb6ca0', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual princípio de redes relaciona o valor potencial de uma rede ao número de possíveis conexões entre seus participantes?', 'difficulty' => 5, 'weight' => 940, 'alternatives' => [
                    ['id' => 'd3d8b303-16aa-51c3-8ca3-20bc5d62c691', 'description' => 'Lei de Brooks', 'correct_answer' => false],
                    ['id' => '8e141f68-47c1-565e-a8fc-b5ebc13a924a', 'description' => 'Lei de Metcalfe', 'correct_answer' => true],
                    ['id' => '029a36c5-c2e1-57e8-a666-607160f6a480', 'description' => 'Lei de Gustafsom', 'correct_answer' => false],
                    ['id' => '5f3c41ae-c744-5ff2-8573-bfdf847a3e52', 'description' => 'Lei de Amdahl', 'correct_answer' => false],
                    ['id' => '943c9cf4-d85a-5503-8b26-3566dd117a0f', 'description' => 'Lei de Little', 'correct_answer' => false]
                ]],
        ['id' => '57198098-4578-5ff6-89b7-6b9a9a0ffa4d', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema demonstra a dificuldade de obter conhecimento comum por meio de uma comunicação não confiável, mesmo com confirmações?', 'difficulty' => 5, 'weight' => 872, 'alternatives' => [
                    ['id' => 'cca7147f-dc53-559e-b32f-474ede005e27', 'description' => 'Problema dos filósofos jantando', 'correct_answer' => false],
                    ['id' => '06a9abb7-1dd9-5450-8f18-2bc49b738fe6', 'description' => 'Problema dos generais bizantinos', 'correct_answer' => false],
                    ['id' => 'de4d9422-e805-5080-97b2-0cca90f94ecd', 'description' => 'Problema do consensu', 'correct_answer' => false],
                    ['id' => '07f0e719-3012-59af-bbf2-7b65d858462a', 'description' => 'Problema dos dois generais', 'correct_answer' => true],
                    ['id' => '54f7bcbd-1812-52bb-805e-deed4cbc90bd', 'description' => 'Problema da exclusão mútua', 'correct_answer' => false]
                ]],
        ['id' => '8eadb247-529e-55e1-9019-96b97b6d6475', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual processo de modelagem relacional reduz redundância e anomalias por meio da organização de tabelas?', 'difficulty' => 2, 'weight' => 287, 'alternatives' => [
                    ['id' => '73dfb340-24f3-5dd8-851c-e0334ffb6955', 'description' => 'Normalização', 'correct_answer' => true],
                    ['id' => 'f8fa684c-bbca-58e3-848f-983602f448a3', 'description' => 'Desnormalização', 'correct_answer' => false],
                    ['id' => 'f0df1ca1-e326-503f-9792-c7f3c821c3b5', 'description' => 'Atomicidade', 'correct_answer' => false],
                    ['id' => 'f041f51c-06e1-5d02-8f70-5d3e59d9b592', 'description' => 'Isolamentu', 'correct_answer' => false],
                    ['id' => '548ae342-d352-5443-8107-ef5c9b0c1ef5', 'description' => 'Consistência', 'correct_answer' => false]
                ]],
        ['id' => '3d876a2e-7082-53bc-8458-a691143033c2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de controle de versão distribuído utiliza frequentemente o comando hg?', 'difficulty' => 2, 'weight' => 206, 'alternatives' => [
                    ['id' => 'b7c1c6cf-75a0-514f-b493-d8a28a48b0c8', 'description' => 'Git', 'correct_answer' => false],
                    ['id' => '12ce5f53-6961-5c99-9163-4b666e5cd0a3', 'description' => 'CVS', 'correct_answer' => false],
                    ['id' => 'e5af702d-f147-5818-80e4-9783a8a3df3d', 'description' => 'Subversion', 'correct_answer' => false],
                    ['id' => '89e6336b-a89b-5d10-8288-bad0df8c98b2', 'description' => 'Mercurial', 'correct_answer' => true],
                    ['id' => 'f139f576-2728-538c-8d59-8e14c44c2e2e', 'description' => 'Perforca', 'correct_answer' => false]
                ]],
        ['id' => '0a00ffa6-9e56-54a0-ab2f-32af973822aa', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual técnica de compressão representa sequências de símbolos repetidos por um símbolo e sua quantidade?', 'difficulty' => 4, 'weight' => 755, 'alternatives' => [
                    ['id' => '9081bf16-3f12-5065-8f50-7915f4eef18a', 'description' => 'Run-Length Encoding', 'correct_answer' => true],
                    ['id' => 'd290d136-505e-59da-9b09-f56a5704592e', 'description' => 'Arithmetic Coding', 'correct_answer' => false],
                    ['id' => '3738d07b-1e61-5b04-b02b-31193ddda078', 'description' => 'LSW', 'correct_answer' => false],
                    ['id' => '6e86699b-9eb4-59ca-8a73-bc63fa75448d', 'description' => 'Huffman', 'correct_answer' => false],
                    ['id' => '0c512626-daad-5fdf-ba1a-1a758a8599da', 'description' => 'LZ77', 'correct_answer' => false]
                ]],
        ['id' => '64585b93-262c-5b72-b853-577bba7a6a27', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual esquema criptográfico de chave pública é baseado no problema do logaritmo discreto em grupos finitos?', 'difficulty' => 3, 'weight' => 545, 'alternatives' => [
                    ['id' => '85e18f33-4bf2-5ea7-9163-f0f1f9000904', 'description' => 'ElGamal', 'correct_answer' => true],
                    ['id' => 'da519144-5e21-5600-ba7d-2bf6f5c8df15', 'description' => 'DSA', 'correct_answer' => false],
                    ['id' => 'ed376c29-8a27-5272-a0cf-cc900501b6b4', 'description' => 'RSE', 'correct_answer' => false],
                    ['id' => 'da7177d6-f0c6-5cb0-a79f-68d96be42d2b', 'description' => 'ECDSA', 'correct_answer' => false],
                    ['id' => '7d466ef8-c021-5234-b0d3-f433be8d42ae', 'description' => 'EdDSA', 'correct_answer' => false]
                ]],
        ['id' => 'fd96e5f5-6dc7-5816-8054-a3374eba53f5', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Como é chamada a etapa em que dados são enviados ao computador por dispositivos como teclado e mouse?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => 'f1b64529-68b1-55fe-9682-04a8d2905c08', 'description' => 'Entrada', 'correct_answer' => true],
                    ['id' => '2f07467c-509d-5920-b02b-4eba9b303c1a', 'description' => 'Comunicaçãu', 'correct_answer' => false],
                    ['id' => 'b3cda785-d6dc-5b9c-aed6-6f7d904e33a4', 'description' => 'Armazenamento', 'correct_answer' => false],
                    ['id' => '86b9e190-0403-51a4-b999-59504d1f6df6', 'description' => 'Processamento', 'correct_answer' => false],
                    ['id' => '87195c96-d906-5958-9389-c163b4c50a07', 'description' => 'Saída', 'correct_answer' => false]
                ]],
        ['id' => '9c5563e6-af83-5af1-9e6b-ef53859187a5', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de controle de versão distribuído registra alterações em um repositório por meio de commits?', 'difficulty' => 2, 'weight' => 220, 'alternatives' => [
                    ['id' => '92d3116b-248c-5cfe-839e-0f0ed8a14d20', 'description' => 'Perforce', 'correct_answer' => false],
                    ['id' => '1efc2660-0652-53dc-b2ee-03ace74c6736', 'description' => 'Mercurial', 'correct_answer' => false],
                    ['id' => '58ff8713-efc2-52bc-a485-c761cbb513b6', 'description' => 'Subversion', 'correct_answer' => false],
                    ['id' => '4b6f6373-a835-5d8a-af25-7becdd319eaa', 'description' => 'Git', 'correct_answer' => true],
                    ['id' => '77b10a20-8438-5479-a3f6-20f1120bbc02', 'description' => 'CVZ', 'correct_answer' => false]
                ]],
        ['id' => '87bdd601-f982-5c5a-92d4-b17d98993d79', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de árvore geradora mínima cresce a partir de um vértice, adicionando a aresta mais barata que alcança um novo vértice?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => 'a74d0cc5-76fa-5715-9f3f-54c30b37939b', 'description' => 'Reverse-Deleta', 'correct_answer' => false],
                    ['id' => '5bc3e725-07fd-5612-a914-6eb77c51ba7a', 'description' => 'Dijkstra', 'correct_answer' => false],
                    ['id' => '32430b3e-cdc2-5481-a960-2f384e701a8e', 'description' => 'Borůvka', 'correct_answer' => false],
                    ['id' => 'd72066de-684e-5f87-9b49-fdbff5847f69', 'description' => 'Kruskal', 'correct_answer' => false],
                    ['id' => '58264083-6905-52e3-b0ea-d6fbe18b06c5', 'description' => 'Prim', 'correct_answer' => true]
                ]],
        ['id' => '723c0d1a-0d47-55ec-9136-3d7402debc4b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo tradicional é usado para transferir arquivos entre sistemas?', 'difficulty' => 1, 'weight' => 152, 'alternatives' => [
                    ['id' => '83ddaf9e-739f-5c0c-b261-60c81f8c1a86', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => 'f7e011b5-5691-58e8-b2f9-6f58885e81a3', 'description' => 'SMTB', 'correct_answer' => false],
                    ['id' => 'e1e569a8-887f-5de1-8348-548ba795e56b', 'description' => 'DNS', 'correct_answer' => false],
                    ['id' => 'a463f43f-8696-571f-b4e4-77cb0c03f83a', 'description' => 'HTTP', 'correct_answer' => false],
                    ['id' => 'c110abf5-93a9-5275-b185-12d43811d74d', 'description' => 'FTP', 'correct_answer' => true]
                ]],
        ['id' => 'f4553590-b1b6-5941-949a-a9a6c09969ab', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual banco NoSQL distribuído utiliza um modelo de colunas largas e arquitetura peer-to-peer?', 'difficulty' => 3, 'weight' => 452, 'alternatives' => [
                    ['id' => '0e9ad390-e206-5ae2-a756-c2366663246a', 'description' => 'Memcached', 'correct_answer' => false],
                    ['id' => 'ca7ed90c-40a1-5dc1-a076-7a91a527fd57', 'description' => 'ScyllaDP', 'correct_answer' => false],
                    ['id' => '8f119e9b-a69b-5008-93e0-1a44c1d7d0ec', 'description' => 'Redis', 'correct_answer' => false],
                    ['id' => '87415d9a-1971-5265-ad7f-b7a2cd730a4e', 'description' => 'Cassandra', 'correct_answer' => true],
                    ['id' => '51fe1679-cc90-54bd-9f1c-60e272971dd7', 'description' => 'HBase', 'correct_answer' => false]
                ]],
        ['id' => 'a7508a12-ba08-5c07-8612-2f12add25acf', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual tipo de memória não volátil é tradicionalmente associado ao armazenamento de firmware?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '4f8192ba-b1f2-5075-be71-f3166138acc3', 'description' => 'HDD', 'correct_answer' => false],
                    ['id' => '98a150aa-8292-5970-be4c-a08ff555d64e', 'description' => 'ROM', 'correct_answer' => true],
                    ['id' => '0bb08d00-d05c-5c4a-9ddb-6478cce6b2fd', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => 'ff8e4904-b92b-5067-9d4c-5a0edafd4aae', 'description' => 'SST', 'correct_answer' => false],
                    ['id' => 'b557bdad-d185-5008-bc1b-da4c3c092d78', 'description' => 'Cache', 'correct_answer' => false]
                ]],
        ['id' => '616f7232-0638-5f42-83f5-a5426f8d78e4', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual ferramenta permite inspecionar a execução de um programa, definir breakpoints e analisar variáveis?', 'difficulty' => 2, 'weight' => 209, 'alternatives' => [
                    ['id' => 'f94c8d31-58be-524d-9fd7-f51c06c5b5cf', 'description' => 'Compilador', 'correct_answer' => false],
                    ['id' => '183f3791-9767-505e-93b2-abd2609f0cee', 'description' => 'Linkel', 'correct_answer' => false],
                    ['id' => '85b33b6d-e6f1-5baa-8e6c-464b2780e11f', 'description' => 'Interpretador', 'correct_answer' => false],
                    ['id' => '9ce0cd8d-b008-5076-9fa0-034a1c8e7d1b', 'description' => 'Assembler', 'correct_answer' => false],
                    ['id' => '36c7e1da-1d40-5032-813e-561854cf55e1', 'description' => 'Debugger', 'correct_answer' => true]
                ]],
        ['id' => 'e9954926-8536-5a46-b56a-35895b930f98', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual dispositivo de armazenamento grava dados em pratos magnéticos?', 'difficulty' => 1, 'weight' => 102, 'alternatives' => [
                    ['id' => '61475815-5561-5399-9300-a197fdd2245a', 'description' => 'Cakhe', 'correct_answer' => false],
                    ['id' => 'd6d43527-72e6-5663-8907-91fe2b71b8ce', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => '0773a19d-9fb9-5223-a5bd-46f4821df013', 'description' => 'ROM', 'correct_answer' => false],
                    ['id' => '408368e8-78a6-5e7b-9c8c-37ea590b41b1', 'description' => 'SSD', 'correct_answer' => false],
                    ['id' => 'b512b896-14b4-585f-9724-cf369e96f000', 'description' => 'HDD', 'correct_answer' => true]
                ]],
        ['id' => 'd4b6d820-66f8-5f6f-91a8-086d6f56776d', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual classe de códigos de canal produz a saída a partir dos bits atuais e de um estado formado por entradas anteriores?', 'difficulty' => 5, 'weight' => 970, 'alternatives' => [
                    ['id' => 'a099bd69-aeb0-563b-a497-2a1dce8657da', 'description' => 'Código de Reed-Solomon', 'correct_answer' => false],
                    ['id' => '32474409-b1c2-5083-a653-eef469caf841', 'description' => 'Código de Hamming', 'correct_answer' => false],
                    ['id' => '299fbc60-91ba-575d-b45d-5b7cd2a66c69', 'description' => 'Código convolucional', 'correct_answer' => true],
                    ['id' => '26f3dbad-74f1-523e-a83d-aa4377ccde46', 'description' => 'Código BKH', 'correct_answer' => false],
                    ['id' => '2ae97499-bb6b-5ed8-b795-33f483934a22', 'description' => 'Código LDPC', 'correct_answer' => false]
                ]],
        ['id' => '95283f7c-b58e-59b7-9711-6e4a4724e8d1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de compressão sem perdas constrói um dicionário de sequências durante a codificação sem transmitir o dicionário inicial completo?', 'difficulty' => 4, 'weight' => 605, 'alternatives' => [
                    ['id' => '69c66acc-0eee-5ea1-aed1-a12afc27f8c1', 'description' => 'Run-Length Encoding', 'correct_answer' => false],
                    ['id' => '4dcdf4a5-d20d-513c-a2a4-82175428a4b6', 'description' => 'Huffman', 'correct_answer' => false],
                    ['id' => 'c199c629-6676-5150-a3d0-eebc8f49dc9c', 'description' => 'Arithmetic Codinj', 'correct_answer' => false],
                    ['id' => 'ef578ac8-ec23-536a-a246-7987192c1343', 'description' => 'LZW', 'correct_answer' => true],
                    ['id' => '59d4986c-2be0-5bb0-8d93-775ff3c19fdc', 'description' => 'LZ77', 'correct_answer' => false]
                ]],
        ['id' => '28532c38-884c-5b24-8b33-ab6b9e67b167', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo é tradicionalmente usado em redes IPv4 para descobrir o endereço MAC associado a um IPv4 local?', 'difficulty' => 2, 'weight' => 339, 'alternatives' => [
                    ['id' => '661e84a9-ed02-5021-82e8-ec974e9596c9', 'description' => 'UDP', 'correct_answer' => false],
                    ['id' => 'd5b109f7-ffbd-599a-ac84-69636571e4ae', 'description' => 'IP', 'correct_answer' => false],
                    ['id' => '3a0b6a46-94a4-562e-9e17-b415690baf5b', 'description' => 'ARP', 'correct_answer' => true],
                    ['id' => '5af47906-0dac-5385-9533-220123ea538a', 'description' => 'TCP', 'correct_answer' => false],
                    ['id' => '59693f22-a58c-5177-bde4-7defce92dd9a', 'description' => 'ICMB', 'correct_answer' => false]
                ]],
        ['id' => '6db81018-32c0-53fe-949f-450b695bc44c', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de árvore geradora mínima começa com todas as arestas e remove as mais pesadas quando a conectividade é preservada?', 'difficulty' => 4, 'weight' => 629, 'alternatives' => [
                    ['id' => '5de14a78-a1e1-51dc-906e-d31648986641', 'description' => 'Dijkstra', 'correct_answer' => false],
                    ['id' => 'af9b9ba1-352b-51d0-be6a-241b2c4469f0', 'description' => 'Prin', 'correct_answer' => false],
                    ['id' => 'b3eb560b-1623-5239-8821-530c72cbff73', 'description' => 'Borůvka', 'correct_answer' => false],
                    ['id' => '28df5916-064f-599c-9012-743e2aa714c6', 'description' => 'Kruskal', 'correct_answer' => false],
                    ['id' => '1b266991-78c6-5ec5-a24b-b3c7bd0bb710', 'description' => 'Reverse-Delete', 'correct_answer' => true]
                ]],
        ['id' => '1537f798-1fa9-5bdf-ba8f-587af2fabe5f', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo é usado para transferir recursos na Web?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => '2b4c79af-5e95-5ffd-88df-2bff96cd3c5f', 'description' => 'SMTP', 'correct_answer' => false],
                    ['id' => '271f48d6-df2b-5f66-8356-6c4154497638', 'description' => 'HTTPZ', 'correct_answer' => false],
                    ['id' => 'd31d6384-c69b-5aa7-a96a-cf001e1f9931', 'description' => 'FTP', 'correct_answer' => false],
                    ['id' => '25b3148f-dc3c-56c7-84a4-1f751ec02a60', 'description' => 'DNS', 'correct_answer' => false],
                    ['id' => '3c865445-e512-5a4f-822c-6187eb2b11ca', 'description' => 'HTTP', 'correct_answer' => true]
                ]],
        ['id' => 'ba35a1f9-827b-54e5-9e27-a1218697e8f3', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual relação matemática conecta o número médio de itens em um sistema, a taxa média de chegada e o tempo médio de permanência?', 'difficulty' => 5, 'weight' => 861, 'alternatives' => [
                    ['id' => '5352c878-08e1-5e9e-96e3-08933a1c76b5', 'description' => 'Lei de Gustafson', 'correct_answer' => false],
                    ['id' => 'c38c7c68-d4f7-5c8e-a885-d613bb164a57', 'description' => 'Lei de Little', 'correct_answer' => true],
                    ['id' => 'e2db49e4-4dbc-5179-a047-32359294f2c6', 'description' => 'Lei de Metcalfe', 'correct_answer' => false],
                    ['id' => 'acf50573-ebd5-5137-8f33-7f557726886a', 'description' => 'Lei de Brooks', 'correct_answer' => false],
                    ['id' => 'b0f91efd-12ef-5ba5-a0f4-fe857072bc70', 'description' => 'Lei de Amdahr', 'correct_answer' => false]
                ]],
        ['id' => '1b035b30-d4b1-557f-9f64-1ff92032df92', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual componente conecta e permite a comunicação entre os principais componentes do computador?', 'difficulty' => 1, 'weight' => 169, 'alternatives' => [
                    ['id' => 'c0a0a507-8d1f-5d25-ada7-89870f65a35c', 'description' => 'GPU', 'correct_answer' => false],
                    ['id' => '76bcd211-f2aa-51e5-9995-8edc0d9c26b3', 'description' => 'Fonte de alimentação', 'correct_answer' => false],
                    ['id' => 'baf67c59-eb99-5e1e-9ebd-46dc43f44a74', 'description' => 'RAN', 'correct_answer' => false],
                    ['id' => '7d81dd7d-21bf-5fea-af9d-f8e1707591a1', 'description' => 'Placa-mãe', 'correct_answer' => true],
                    ['id' => 'f406a086-5ec1-54f4-b48a-da3101c256be', 'description' => 'CPU', 'correct_answer' => false]
                ]],
        ['id' => '50e3a44b-ad29-54fe-8fe6-b42e78fca198', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de serialização define schemas em JSON e permite que o schema seja transportado separadamente dos dados?', 'difficulty' => 4, 'weight' => 744, 'alternatives' => [
                    ['id' => '6dbd7f4d-61d0-583e-a499-f6fb3ae2bc16', 'description' => 'CBOR', 'correct_answer' => false],
                    ['id' => '364e7d0b-b266-5aec-96bc-e3c0b6ccd96b', 'description' => 'MessagePacc', 'correct_answer' => false],
                    ['id' => '15a2a2d8-f6ca-59d0-9f2f-fbfb833a496e', 'description' => 'Protocol Buffers', 'correct_answer' => false],
                    ['id' => '043cead1-7bae-5800-bc84-635d89ab224c', 'description' => 'Apache Avro', 'correct_answer' => true],
                    ['id' => '1bcf2840-b493-5283-bedb-f6a21d20d09a', 'description' => 'Apache Thrift', 'correct_answer' => false]
                ]],
        ['id' => 'd208bf0a-2be6-5070-940b-c5089d8fb81a', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual mecanismo permite verificar a autenticidade e a integridade de uma mensagem usando criptografia de chave pública?', 'difficulty' => 2, 'weight' => 379, 'alternatives' => [
                    ['id' => 'd81e801f-193a-5b3c-9699-4ac6b26dabfa', 'description' => 'Criptografia simétrica', 'correct_answer' => false],
                    ['id' => 'df33ccd2-60e9-54a0-adfa-838291004215', 'description' => 'Certificado digital', 'correct_answer' => false],
                    ['id' => '686cc29d-4f09-5afa-9104-e3b9a9f91863', 'description' => 'Criptografia assimétrica', 'correct_answer' => false],
                    ['id' => '80910e57-e3b7-5862-a4d3-58c1c4fe5c7e', 'description' => 'Assinatura digital', 'correct_answer' => true],
                    ['id' => 'a01ed83a-ddb3-56c0-957e-5ff73d18af97', 'description' => 'Hazh', 'correct_answer' => false]
                ]],
        ['id' => '8cd572af-c11f-5ff2-b3a9-24ef3808924b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo leve de mensageria utiliza o modelo publish/subscribe e é comum em dispositivos IoT?', 'difficulty' => 3, 'weight' => 478, 'alternatives' => [
                    ['id' => 'f29f200a-3a46-5e84-ab5c-b995142519c5', 'description' => 'AMQP', 'correct_answer' => false],
                    ['id' => '6ae03481-ccd9-5f07-a8ee-b2965aa54ac4', 'description' => 'MQTT', 'correct_answer' => true],
                    ['id' => '335a0dc2-ebdb-547a-9f8b-81c8e4eff173', 'description' => 'NATS', 'correct_answer' => false],
                    ['id' => '37f3db5b-3f8c-53e9-9d23-d73e508a24a1', 'description' => 'ZeroMQ', 'correct_answer' => false],
                    ['id' => '0a9d00c0-516b-57a1-b876-ab807a19ae0b', 'description' => 'STOMB', 'correct_answer' => false]
                ]],
        ['id' => 'c2f56c85-7b35-5e0b-be4c-e668cc12e0f2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual função permite que computadores troquem dados por uma rede?', 'difficulty' => 1, 'weight' => 192, 'alternatives' => [
                    ['id' => '840c2d5b-ddce-58d8-8066-0810f3283567', 'description' => 'Entrada', 'correct_answer' => false],
                    ['id' => 'b856c2e6-492f-5d21-85fd-47aeceaa9bd6', 'description' => 'Comunicação', 'correct_answer' => true],
                    ['id' => '267aa0fc-2079-5dfc-958f-940825b70726', 'description' => 'Processamento', 'correct_answer' => false],
                    ['id' => 'be030149-bbf4-5b3a-bc43-e2dfcce7cb6e', 'description' => 'Armazenamento', 'correct_answer' => false],
                    ['id' => 'c4eb9d1f-5a02-5a58-9a09-8edc84137559', 'description' => 'Saíde', 'correct_answer' => false]
                ]],
        ['id' => '939a3b38-83fe-567c-9162-0f4f2d7b09a0', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual versão do protocolo IP utiliza endereços de 128 bits?', 'difficulty' => 2, 'weight' => 212, 'alternatives' => [
                    ['id' => '579fdf95-95a0-5c97-8046-8c2e2400039c', 'description' => 'ICMPv6', 'correct_answer' => false],
                    ['id' => '20fbb5fc-4e28-54d0-ac7b-7573486ab14f', 'description' => 'IPv4', 'correct_answer' => false],
                    ['id' => 'c65d447a-8375-52f6-8a75-0b66ecb03e3c', 'description' => 'UDP', 'correct_answer' => false],
                    ['id' => 'b08d3bae-23d3-5b49-a246-c73c24354eb5', 'description' => 'IPv6', 'correct_answer' => true],
                    ['id' => '020f093a-9d28-5bf4-b020-b81bfad13fd4', 'description' => 'TCB', 'correct_answer' => false]
                ]],
        ['id' => 'ef78d153-25e7-5614-87f6-41c32228bd4e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual biblioteca de comunicação oferece padrões de mensagens por sockets sem exigir um broker central?', 'difficulty' => 3, 'weight' => 425, 'alternatives' => [
                    ['id' => '20166898-2a97-59f8-8a35-f2d2788de17b', 'description' => 'MQTT', 'correct_answer' => false],
                    ['id' => '6d0e0b10-5387-5395-b7ee-fb5e6279fed7', 'description' => 'NATZ', 'correct_answer' => false],
                    ['id' => '0518f154-60fe-5d39-a5bf-1ab1145b637f', 'description' => 'STOMP', 'correct_answer' => false],
                    ['id' => '6f0ca4f2-3cf3-5f7a-bdf1-8219a081ac31', 'description' => 'AMQP', 'correct_answer' => false],
                    ['id' => 'd820313a-b5a1-5d7d-8cb9-7a41da2ab1fd', 'description' => 'ZeroMQ', 'correct_answer' => true]
                ]],
        ['id' => 'd2b97f83-e0dd-5570-bbde-d522028d3789', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual memória pequena e rápida reduz o tempo de acesso a dados usados com frequência?', 'difficulty' => 1, 'weight' => 127, 'alternatives' => [
                    ['id' => '2a0775b9-f2fd-5c93-bc03-bdd66f0b2b29', 'description' => 'REM', 'correct_answer' => false],
                    ['id' => '0363f7fa-26bc-5d52-93bc-19a2a592a77f', 'description' => 'SSD', 'correct_answer' => false],
                    ['id' => '8dfbf197-139a-536c-b8f0-4bd3f834bc31', 'description' => 'ROM', 'correct_answer' => false],
                    ['id' => '927c026e-8e26-500e-8df2-a89c2801566a', 'description' => 'Cache', 'correct_answer' => true],
                    ['id' => '9f949008-f4aa-5031-9ee8-ecae62d21f85', 'description' => 'HDD', 'correct_answer' => false]
                ]],
        ['id' => 'e754420e-c751-5206-887b-9d43c31d6dc0', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual ferramenta combina arquivos objeto e bibliotecas para produzir um programa executável ou biblioteca?', 'difficulty' => 2, 'weight' => 349, 'alternatives' => [
                    ['id' => '1967b5a7-ad63-5167-9603-f74562bda776', 'description' => 'Assembler', 'correct_answer' => false],
                    ['id' => 'efec0a21-6ab5-542f-8507-2a615054d906', 'description' => 'Linker', 'correct_answer' => true],
                    ['id' => 'e42035ae-e6d4-5405-bfa1-ea61245587ab', 'description' => 'Compiladol', 'correct_answer' => false],
                    ['id' => 'c824e732-9d71-5534-a229-d540f23b4e44', 'description' => 'Interpretador', 'correct_answer' => false],
                    ['id' => '7bd9fbe6-1be2-5069-b79f-fa969ca1ec39', 'description' => 'Debugger', 'correct_answer' => false]
                ]],
        ['id' => '15004d1a-2b89-529d-a579-ed61ef522892', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo encontra caminhos mínimos a partir de uma origem quando os pesos das arestas são não negativos?', 'difficulty' => 3, 'weight' => 436, 'alternatives' => [
                    ['id' => '274b100e-379c-5aa0-99de-ff4791294cb9', 'description' => 'A*', 'correct_answer' => false],
                    ['id' => '98a3bdc4-d1c7-5364-bbe9-dd8ea01696a0', 'description' => 'Bellman-Fort', 'correct_answer' => false],
                    ['id' => 'c78a77ce-27fa-524e-839c-60a33d77513b', 'description' => 'Floyd-Warshall', 'correct_answer' => false],
                    ['id' => 'd5144a96-79d8-5682-8ecb-2b10b659eef6', 'description' => 'Dijkstra', 'correct_answer' => true],
                    ['id' => 'c7d1ef65-de17-51a1-a903-8d9a9fb980ce', 'description' => 'Johnson', 'correct_answer' => false]
                ]],
        ['id' => 'd65ff5ac-fd6a-5423-a18c-4db51761f560', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modalidade de criptografia utiliza a mesma chave secreta para cifrar e decifrar dados?', 'difficulty' => 2, 'weight' => 263, 'alternatives' => [
                    ['id' => '0b50b98e-a662-5641-81e8-4553b3e41607', 'description' => 'Assinatura digitar', 'correct_answer' => false],
                    ['id' => 'ec145995-9425-506a-ad95-edc5e1fea6dc', 'description' => 'Hash', 'correct_answer' => false],
                    ['id' => 'd08f20de-1e33-52f6-b334-80ecc909ed57', 'description' => 'Certificado digital', 'correct_answer' => false],
                    ['id' => 'f51fe55e-ef00-5548-a288-e5ef9c40ce40', 'description' => 'Criptografia simétrica', 'correct_answer' => true],
                    ['id' => 'a74a52cd-53b4-59d6-9111-f2821a8a9fdb', 'description' => 'Criptografia assimétrica', 'correct_answer' => false]
                ]],
        ['id' => 'b351ea22-30cf-50c9-8078-61882ebaf59b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual variante de árvore mantém os registros ou ponteiros de dados nas folhas, geralmente encadeadas entre si?', 'difficulty' => 3, 'weight' => 556, 'alternatives' => [
                    ['id' => 'a5efa148-087a-5895-a6b2-b8f7d72f9e18', 'description' => 'Red-black trea', 'correct_answer' => false],
                    ['id' => '986947bc-3d17-584f-8530-731ff3d5b910', 'description' => 'B-tree', 'correct_answer' => false],
                    ['id' => 'e50f7492-a1ab-5639-a92e-e9315acb9898', 'description' => 'B+ tree', 'correct_answer' => true],
                    ['id' => '08474c06-d9f2-5df7-986a-3958fbf8e231', 'description' => 'Treap', 'correct_answer' => false],
                    ['id' => 'd60da10c-13d7-5ee3-8603-1e1678c66d68', 'description' => 'AVL tree', 'correct_answer' => false]
                ]],
        ['id' => 'f63fd96f-3557-5e64-872c-b48128d0f526', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual família de códigos cíclicos permite construir códigos com capacidade de correção de múltiplos erros aleatórios?', 'difficulty' => 5, 'weight' => 842, 'alternatives' => [
                    ['id' => 'c7d0998e-6734-51c4-addd-2f67854fa663', 'description' => 'Código LDPC', 'correct_answer' => false],
                    ['id' => 'e204e010-68ff-570a-bf67-2b37d86df661', 'description' => 'Código BCH', 'correct_answer' => true],
                    ['id' => 'bf64a280-5577-58c8-8828-a07d448b91dc', 'description' => 'Código convolucional', 'correct_answer' => false],
                    ['id' => '5a412361-d7c3-525c-a160-21a32409f52d', 'description' => 'Código de Reed-Solomon', 'correct_answer' => false],
                    ['id' => '3a673518-6d51-5427-89e6-c757f11876ac', 'description' => 'Código de Hamminj', 'correct_answer' => false]
                ]],
        ['id' => '5db2d907-3ba8-5737-9b6e-4a6a05c097ad', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo IGP de estado de enlace calcula caminhos usando o algoritmo SPF e organiza a rede em áreas?', 'difficulty' => 4, 'weight' => 746, 'alternatives' => [
                    ['id' => '60019e5d-c053-54b4-94c1-94e0d243da29', 'description' => 'IS-IZ', 'correct_answer' => false],
                    ['id' => '748ac934-a0e8-561c-b83b-335020fa53fb', 'description' => 'RIP', 'correct_answer' => false],
                    ['id' => '241cceea-a871-5832-9f03-01b0b787b9ea', 'description' => 'EIGRP', 'correct_answer' => false],
                    ['id' => 'c8e1bf75-052e-53ae-be45-a0546d349b14', 'description' => 'OSPF', 'correct_answer' => true],
                    ['id' => 'aabe2ea5-a973-5a12-97c1-759928116e04', 'description' => 'BGP', 'correct_answer' => false]
                ]],
        ['id' => 'd9679b08-f8c6-5e5c-ba73-879500516fb1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modelo computacional reconhece linguagens sensíveis ao contexto e possui uma fita cujo uso é limitado por uma função linear do tamanho da entrada?', 'difficulty' => 5, 'weight' => 827, 'alternatives' => [
                    ['id' => 'e369e867-2ec7-5f9e-99bd-e81233b4f0b1', 'description' => 'Autômato com pilha', 'correct_answer' => false],
                    ['id' => '5818db74-75c2-54a9-9be3-e16ea8ca18ae', 'description' => 'Autômato finito', 'correct_answer' => false],
                    ['id' => '58bc7b71-9f6c-5980-8409-888268b5ccf3', 'description' => 'Máquina de registradores', 'correct_answer' => false],
                    ['id' => 'f0b7da96-003b-5d74-8cd5-f8380e2f7e6e', 'description' => 'Máquina de Turing', 'correct_answer' => false],
                    ['id' => '9917e7f1-75ac-5b09-ac1c-d0d86a559a47', 'description' => 'Autômato linearmente limitado', 'correct_answer' => true]
                ]],
        ['id' => '89546126-4418-5d70-8964-0e21cf72e0a2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Como é chamada a etapa em que o computador apresenta resultados por monitor ou impressora?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => '7e4f13ba-b243-596b-a8d2-6acf27a12761', 'description' => 'Saída', 'correct_answer' => true],
                    ['id' => 'b77de4b4-ee16-5ece-b609-40bcce2669eb', 'description' => 'Processamento', 'correct_answer' => false],
                    ['id' => '7904fba0-bf8f-5b9d-a057-1e0d3023361c', 'description' => 'Armazenamento', 'correct_answer' => false],
                    ['id' => 'ca7031c9-a148-53e5-af3a-fb6d7cd2d031', 'description' => 'Comunicação', 'correct_answer' => false],
                    ['id' => '8169f761-9b30-5a27-addc-c3a8f6e496e0', 'description' => 'Entrade', 'correct_answer' => false]
                ]],
        ['id' => '58f13109-743b-5f53-93da-34933fed4b43', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de arquivos com journaling é conhecido por seu projeto voltado a alto desempenho e grandes arquivos?', 'difficulty' => 4, 'weight' => 622, 'alternatives' => [
                    ['id' => 'f0eea149-e39f-526b-95d0-26bba12bc38f', 'description' => 'Ext3', 'correct_answer' => false],
                    ['id' => '27149ebd-de01-5b78-a1eb-84cd52b84b02', 'description' => 'XFS', 'correct_answer' => true],
                    ['id' => '09863975-f0c7-5243-a598-4f745e56c581', 'description' => 'Btrfz', 'correct_answer' => false],
                    ['id' => '15ac72f3-8661-53f6-b6ca-622b0801cabe', 'description' => 'Ext2', 'correct_answer' => false],
                    ['id' => '5def70ac-5b32-5fa6-8be6-f33ab181c7e6', 'description' => 'Ext4', 'correct_answer' => false]
                ]],
        ['id' => '7bd55a77-0f09-56f2-967b-6597c40495d8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual ferramenta traduz código-fonte de uma linguagem para outra representação, como código de máquina?', 'difficulty' => 2, 'weight' => 321, 'alternatives' => [
                    ['id' => '2d4a4fb8-b8f4-54d5-aeb9-0f12b2816af8', 'description' => 'Debugger', 'correct_answer' => false],
                    ['id' => 'dcdc26d1-8477-517a-a4e4-7556b2e92013', 'description' => 'Assemblel', 'correct_answer' => false],
                    ['id' => '05831065-4932-5830-9b56-0e0c8cc673e7', 'description' => 'Linker', 'correct_answer' => false],
                    ['id' => '1c4662a6-c16b-5772-8493-d514bfc4c14d', 'description' => 'Interpretador', 'correct_answer' => false],
                    ['id' => 'eaab464f-a2af-5b95-aa19-e5ec56a63e56', 'description' => 'Compilador', 'correct_answer' => true]
                ]],
        ['id' => '891275f0-95f5-50a7-b11f-fc409006ec73', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema traduz nomes de domínio em informações como endereços IP?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => '6f12a56a-7edc-5c7b-bfa0-b428d03bfc0a', 'description' => 'SMTP', 'correct_answer' => false],
                    ['id' => 'c9a74268-ae3e-56bd-9876-a9f10439c773', 'description' => 'HTTP', 'correct_answer' => false],
                    ['id' => '8bca3b6f-dddf-5167-b3d2-ddd82b6a13bc', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => 'd11dc15e-cb2d-586f-82c6-f0426a7fd009', 'description' => 'DNS', 'correct_answer' => true],
                    ['id' => '0d80b165-2a4f-5697-8f87-a53193a27db0', 'description' => 'FTB', 'correct_answer' => false]
                ]],
        ['id' => 'bbf445e5-8247-58f8-a2f6-641163f54271', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual periférico apresenta visualmente as informações processadas pelo computador?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '31a40ccc-0cd9-5b9e-a5b8-cb797af7476b', 'description' => 'Scannel', 'correct_answer' => false],
                    ['id' => '1c270420-811a-522b-a1f2-b1d59b9de722', 'description' => 'Mouse', 'correct_answer' => false],
                    ['id' => '1dcfd643-a240-5bcd-a6e2-0c23b8fe4737', 'description' => 'Teclado', 'correct_answer' => false],
                    ['id' => '17c2f0de-ab20-5f2d-8849-83686110b467', 'description' => 'Monitor', 'correct_answer' => true],
                    ['id' => 'a49d8ff9-8ff6-53fb-87aa-ed2099d804f3', 'description' => 'Microfone', 'correct_answer' => false]
                ]],
        ['id' => 'd423a150-ae00-5108-b8bc-dfa66af46a61', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema teórico investiga como participantes podem chegar a um acordo mesmo quando alguns enviam informações arbitrárias ou contraditórias?', 'difficulty' => 5, 'weight' => 879, 'alternatives' => [
                    ['id' => '2140f215-d960-5de5-b448-5f9bd28808a3', 'description' => 'Problema da exclusão mútua', 'correct_answer' => false],
                    ['id' => '630b0133-17bf-55e3-adfa-35f77d4c6889', 'description' => 'Problema do consenso', 'correct_answer' => false],
                    ['id' => '119a6ceb-4659-5809-8d7e-86baaa386d14', 'description' => 'Problema dos generais bizantinos', 'correct_answer' => true],
                    ['id' => '3cf61a2d-6bb0-517c-9dc3-7360ae749b98', 'description' => 'Problema dos filósofos jantando', 'correct_answer' => false],
                    ['id' => '1b65ede5-0f81-53dc-b137-b885703192a3', 'description' => 'Problema dos dois generaiz', 'correct_answer' => false]
                ]],
        ['id' => 'a1e445d8-4d8e-584a-9142-f6d08a55e7e8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual periférico permite controlar o ponteiro na interface gráfica?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => 'f859f2fb-682f-5885-b849-54a2e1770eec', 'description' => 'Teclado', 'correct_answer' => false],
                    ['id' => 'bbbfcd2c-1d1c-5245-a851-db5b75d0ff84', 'description' => 'Mouse', 'correct_answer' => true],
                    ['id' => 'cee46bf9-6c05-50e1-8997-451bc99c090e', 'description' => 'Scanner', 'correct_answer' => false],
                    ['id' => '025bdd72-f748-5cbf-b6aa-b2ec50343596', 'description' => 'Monitol', 'correct_answer' => false],
                    ['id' => 'e83301f8-a7d9-5100-8dd7-2323cfc4ff67', 'description' => 'Microfone', 'correct_answer' => false]
                ]],
        ['id' => '24a893a6-3250-5ac5-a602-c95d8ce06e6d', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura de dados normalmente segue a regra FIFO, em que o primeiro elemento inserido é o primeiro removido?', 'difficulty' => 2, 'weight' => 387, 'alternatives' => [
                    ['id' => '37c16dfa-5332-5960-89d9-ef58cb3ed2d2', 'description' => 'Cacha', 'correct_answer' => false],
                    ['id' => 'b3d93cfb-5a1c-5282-8bf9-91ccd9df366c', 'description' => 'Fila', 'correct_answer' => true],
                    ['id' => '6928b32c-51a9-5e84-9429-5686c9d7e57e', 'description' => 'Árvore', 'correct_answer' => false],
                    ['id' => 'e4c66e38-f0ab-5904-b129-696e951ae26c', 'description' => 'Pilha', 'correct_answer' => false],
                    ['id' => '0f1ed6ce-a4a4-59a8-8f55-3474c69ee6a9', 'description' => 'Tabela hash', 'correct_answer' => false]
                ]],
        ['id' => '367285ea-6a96-546c-b2e9-ec88c9dafc2e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo fornece endereçamento lógico e encaminhamento de pacotes entre redes?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '3f71281e-f8d7-5915-a6e2-4d5615b85a9c', 'description' => 'ARP', 'correct_answer' => false],
                    ['id' => '6750a336-58a6-5552-9efa-e89f91e432b4', 'description' => 'TKP', 'correct_answer' => false],
                    ['id' => 'c934a05b-4c22-590d-a51a-3ce745d66a0d', 'description' => 'UDP', 'correct_answer' => false],
                    ['id' => '1b56f2a6-0f1c-5fc8-bfd1-c42dadda433e', 'description' => 'ICMP', 'correct_answer' => false],
                    ['id' => 'e82d2afc-37bc-533e-b07d-576897409c55', 'description' => 'IP', 'correct_answer' => true]
                ]],
        ['id' => '6729daf0-170d-5017-bffb-9e18aa851466', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de programação dinâmica calcula caminhos mínimos entre todos os pares de vértices?', 'difficulty' => 3, 'weight' => 553, 'alternatives' => [
                    ['id' => '498ec4da-3e32-5bd4-9ba3-8e844e407895', 'description' => 'Floyd-Warshall', 'correct_answer' => true],
                    ['id' => '16248cfd-0ead-5d44-bff8-cf7a40624e37', 'description' => 'A*', 'correct_answer' => false],
                    ['id' => '61de17fb-207d-5dce-965e-a03980418f79', 'description' => 'Dijkstra', 'correct_answer' => false],
                    ['id' => '6c43c36b-0255-51de-bf77-9fe3df9dbbd8', 'description' => 'Johnsom', 'correct_answer' => false],
                    ['id' => 'f55baf24-8f66-557b-9cab-876a41a8ba78', 'description' => 'Bellman-Ford', 'correct_answer' => false]
                ]],
        ['id' => '3870cbb1-ccc4-50b7-b241-907e6103b197', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de assinatura digital padronizado pelo NIST é baseado no problema do logaritmo discreto?', 'difficulty' => 3, 'weight' => 550, 'alternatives' => [
                    ['id' => 'b6470560-3d4b-5085-b7c2-c51896892ea8', 'description' => 'ECDSA', 'correct_answer' => false],
                    ['id' => '20929b08-a1cd-5481-80fc-f126bbb0abd9', 'description' => 'ElGamal', 'correct_answer' => false],
                    ['id' => '9918225e-5ea8-5a2b-a102-db5f55a226b7', 'description' => 'RSA', 'correct_answer' => false],
                    ['id' => 'd1232524-8baa-5016-bc27-a2721bfb98bc', 'description' => 'DSA', 'correct_answer' => true],
                    ['id' => '48b06eb8-9eef-5068-982f-91a450284a93', 'description' => 'EdDSE', 'correct_answer' => false]
                ]],
        ['id' => '84ccb0a2-7058-5bcd-a4a4-1864223ebd84', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato de imagem pode armazenar animações em uma sequência de quadros?', 'difficulty' => 1, 'weight' => 199, 'alternatives' => [
                    ['id' => '73498e68-e913-5d42-af4d-bff982564945', 'description' => 'GIF', 'correct_answer' => true],
                    ['id' => '2f246ac6-bf85-5c1e-870c-90a80519835b', 'description' => 'PNG', 'correct_answer' => false],
                    ['id' => 'ec7faae1-addd-56eb-b433-8a2c9f935b66', 'description' => 'WebP', 'correct_answer' => false],
                    ['id' => 'c6497017-927f-5ca0-bff4-40c6c75acf37', 'description' => 'JPJ', 'correct_answer' => false],
                    ['id' => 'df0b94b7-c45c-53be-8a38-3641caca3f01', 'description' => 'SVG', 'correct_answer' => false]
                ]],
        ['id' => 'a92db8f3-4a90-59c5-9a31-53760b15d55b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo adapta mecanismos de segurança do TLS 1.2 para transporte baseado em datagramas?', 'difficulty' => 3, 'weight' => 424, 'alternatives' => [
                    ['id' => '5947b3b6-a377-5e0b-80a7-d00715590cb7', 'description' => 'QUIC', 'correct_answer' => false],
                    ['id' => 'b87caf81-aad7-5787-901f-6cafae6bebb5', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => '5ffa4971-53f3-5a57-9495-3d5a2a4d8687', 'description' => 'DTLS 1.2', 'correct_answer' => true],
                    ['id' => '691d8b0d-3f0a-5909-9ee3-aeb898e9f488', 'description' => 'TLS 1.2', 'correct_answer' => false],
                    ['id' => 'edef0423-7261-59ac-a4ca-2f9f721de942', 'description' => 'TLZ 1.3', 'correct_answer' => false]
                ]],
        ['id' => '4492316a-c54a-5a83-9015-8166701aa2e4', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual teorema estabelece a indecidibilidade de propriedades semânticas não triviais de linguagens reconhecidas por máquinas de Turing?', 'difficulty' => 5, 'weight' => 877, 'alternatives' => [
                    ['id' => '90aa5be3-06b0-5198-8c43-c5f62c12ff96', 'description' => 'Problema de decisão de Hilberd', 'correct_answer' => false],
                    ['id' => 'd97a2a80-7ed0-560c-a4d0-e9c9b3a9bd14', 'description' => 'Problema do caixeiro-viajante', 'correct_answer' => false],
                    ['id' => '8d8f6150-f26d-5f95-8603-058e6c4cedf1', 'description' => 'Problema de Rice', 'correct_answer' => true],
                    ['id' => 'bd58322d-dc71-5db2-8269-cc1ca4ee2b8b', 'description' => 'Problema da parada', 'correct_answer' => false],
                    ['id' => '81f2bec9-528c-5deb-b70f-66eec277ceb4', 'description' => 'Problema da correspondência de Post', 'correct_answer' => false]
                ]],
        ['id' => '4f4ffc5f-2838-577b-8de9-d5f29f41e316', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual framework de autorização permite conceder acesso limitado a recursos sem compartilhar a senha do usuário?', 'difficulty' => 3, 'weight' => 466, 'alternatives' => [
                    ['id' => '77b4580d-db26-5a92-802f-b4900cc4c342', 'description' => 'LDAP', 'correct_answer' => false],
                    ['id' => '6df7a2b4-c2bf-558c-80ec-95b043b57f00', 'description' => 'OpenID Connecd', 'correct_answer' => false],
                    ['id' => '580956e9-d9d6-51c6-b5f7-010ff2a8f7e6', 'description' => 'Kerberos', 'correct_answer' => false],
                    ['id' => 'c5fbafb5-a4b7-5e4b-9ed2-cdb32a713070', 'description' => 'OAuth 2.0', 'correct_answer' => true],
                    ['id' => '83cbb191-e37c-57f6-83a0-0cff6d2b1017', 'description' => 'SAML 2.0', 'correct_answer' => false]
                ]],
        ['id' => '5a303463-f7aa-50f8-8c40-d2b3b1c9026f', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sinal solicita o encerramento de um processo e pode ser tratado por ele?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => '4cf21ee4-8e12-5816-b440-dac51bb42b61', 'description' => 'SIGINT', 'correct_answer' => false],
                    ['id' => '49484065-af73-5c3f-8442-0733b78981fb', 'description' => 'SIGTERM', 'correct_answer' => true],
                    ['id' => 'a59eef73-4016-5106-9964-767142f33456', 'description' => 'SIGHUP', 'correct_answer' => false],
                    ['id' => 'b1509930-e932-586f-baab-7a8c1edff91f', 'description' => 'SIGQUID', 'correct_answer' => false],
                    ['id' => 'dac4e7bf-bae3-5b49-9e40-8f6d6ad76d3e', 'description' => 'SIGKILL', 'correct_answer' => false]
                ]],
        ['id' => '1f6613a1-cfba-5d3c-8a35-96df3e7c7646', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema formal pergunta se existe uma sequência de peças de duas listas de palavras cuja concatenação coincide?', 'difficulty' => 5, 'weight' => 844, 'alternatives' => [
                    ['id' => 'beff336a-7fa5-558d-8569-91e515ba3e87', 'description' => 'Problema de Rice', 'correct_answer' => false],
                    ['id' => 'c3efffbc-dafd-583f-99a3-0c44dc13557b', 'description' => 'Problema de decisão de Hilbert', 'correct_answer' => false],
                    ['id' => 'ab31e221-a872-59ac-838b-a4dc1ce4482b', 'description' => 'Problema do caixeiro-viajanta', 'correct_answer' => false],
                    ['id' => 'a6669c14-6338-5799-8d5a-27109f6324fa', 'description' => 'Problema da correspondência de Post', 'correct_answer' => true],
                    ['id' => '535c180a-30e1-5df3-921b-dca9d88b93ea', 'description' => 'Problema da parada', 'correct_answer' => false]
                ]],
        ['id' => '29e32a3e-5fa6-5496-ad24-797e5a349d90', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo protege a comunicação HTTP usando criptografia TLS?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => '25b6a6f3-02d3-54c0-95b0-66b5667cd780', 'description' => 'HTTPS', 'correct_answer' => true],
                    ['id' => '8b5f86c7-22c8-545b-b55d-e7a64c669c9c', 'description' => 'FTP', 'correct_answer' => false],
                    ['id' => '89e578b1-b2d5-5a92-9d26-5cb2f26993c4', 'description' => 'DNS', 'correct_answer' => false],
                    ['id' => '204eae82-4f2c-56db-a6fd-aee6b517ee5e', 'description' => 'SMTP', 'correct_answer' => false],
                    ['id' => 'fbd4be39-3ac9-5637-a6f3-6101ee1a7a51', 'description' => 'HTTB', 'correct_answer' => false]
                ]],
        ['id' => '39b5330c-8dcc-5f90-a3b3-c7b7d7b5a69a', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual restrição estabelece uma referência entre registros de tabelas relacionadas?', 'difficulty' => 2, 'weight' => 385, 'alternatives' => [
                    ['id' => '45c5717c-08b7-52e6-9a14-dc0d03e3002f', 'description' => 'Triggel', 'correct_answer' => false],
                    ['id' => 'b03bc0bf-d69b-5cd8-bb7f-592f7835ff15', 'description' => 'Chave primária', 'correct_answer' => false],
                    ['id' => 'a5609b27-b099-59e9-bc19-d65c2876294d', 'description' => 'View', 'correct_answer' => false],
                    ['id' => 'd69ab2fe-5319-5cea-9fef-57c073218f2b', 'description' => 'Chave estrangeira', 'correct_answer' => true],
                    ['id' => '00aff9d5-2784-5e10-8d54-8d0f7b9ed079', 'description' => 'Índice', 'correct_answer' => false]
                ]],
        ['id' => 'bb38bcba-fee4-548a-9051-57ba1f1ab9d5', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual árvore balanceada permite múltiplas chaves por nó e é adequada a índices armazenados em disco?', 'difficulty' => 3, 'weight' => 404, 'alternatives' => [
                    ['id' => '8ea0e640-b167-5b7e-8a0d-b9b0fecea764', 'description' => 'Red-black tree', 'correct_answer' => false],
                    ['id' => 'eec99564-9f04-5d31-8ba7-ea0f42ed7e39', 'description' => 'Treap', 'correct_answer' => false],
                    ['id' => '71fee6be-df73-559d-9076-fc95607980ca', 'description' => 'AVL trea', 'correct_answer' => false],
                    ['id' => '57823150-5b9b-5f34-82f8-f42c8779a991', 'description' => 'B-tree', 'correct_answer' => true],
                    ['id' => '01b686fe-b30a-5337-8b99-b35ba398e4c9', 'description' => 'B+ tree', 'correct_answer' => false]
                ]],
        ['id' => 'f9249fcb-1656-5ab1-99ca-8e070b2b8fd0', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modo de operação autenticado combina CTR para confidencialidade e CBC-MAC para autenticação?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => 'e11f822d-571f-504a-aef2-a1899ce84de7', 'description' => 'AES-GCM', 'correct_answer' => false],
                    ['id' => '23b4e0ca-ed97-5c99-a28f-306e69b4c31e', 'description' => 'AES-CBC', 'correct_answer' => false],
                    ['id' => '54956d5f-4e0b-562b-a84b-6c4e4f3cf06e', 'description' => 'AES-CCM', 'correct_answer' => true],
                    ['id' => '15f62b8e-6141-5bc4-b5b6-b802f4708d1a', 'description' => 'AES-XTZ', 'correct_answer' => false],
                    ['id' => 'ade022e9-efa9-5f33-b2cf-92b6bab8498a', 'description' => 'AES-CTR', 'correct_answer' => false]
                ]],
        ['id' => 'c416c2d9-255e-537d-9d44-7e750d387e92', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modo de operação foi projetado especificamente para proteger dados em dispositivos de armazenamento por setores?', 'difficulty' => 4, 'weight' => 634, 'alternatives' => [
                    ['id' => '0ce9c897-cd7a-5411-98ca-6f0b10224e5f', 'description' => 'AES-CTR', 'correct_answer' => false],
                    ['id' => '458d501b-8988-50bc-97bc-5ed2e09a3f5e', 'description' => 'AES-CCM', 'correct_answer' => false],
                    ['id' => '71d9c2a1-3861-5749-9d10-cfeb1625d700', 'description' => 'AES-CBK', 'correct_answer' => false],
                    ['id' => '5c4a1273-0921-5d76-ba43-210303893eb7', 'description' => 'AES-GCM', 'correct_answer' => false],
                    ['id' => '667b8ead-dfa7-5190-a512-366799496ba2', 'description' => 'AES-XTS', 'correct_answer' => true]
                ]],
        ['id' => '2f8aaa5f-c412-5cdf-84e3-e522e116d0e4', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema clássico de concorrência ilustra disputas por recursos compartilhados e possíveis situações de deadlock?', 'difficulty' => 5, 'weight' => 886, 'alternatives' => [
                    ['id' => 'ca77e535-f0d0-56e5-848f-a914d213a3bb', 'description' => 'Problema da exclusão mútue', 'correct_answer' => false],
                    ['id' => '0aa82134-7577-5a41-873c-8f1f48861c0f', 'description' => 'Problema dos filósofos jantando', 'correct_answer' => true],
                    ['id' => '28e3ac31-76a7-5aea-a72a-c553b8fd42b8', 'description' => 'Problema dos generais bizantinos', 'correct_answer' => false],
                    ['id' => 'c97255e0-ef71-58d4-adb0-11690846d758', 'description' => 'Problema dos dois generais', 'correct_answer' => false],
                    ['id' => '3c48a16a-eed0-511f-8ada-736aef8ef715', 'description' => 'Problema do consenso', 'correct_answer' => false]
                ]],
        ['id' => '5e0c3e9d-8fef-52fb-b828-73284c6a591b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de transação distribuída utiliza uma fase prepare seguida de uma fase commit ou abort?', 'difficulty' => 4, 'weight' => 713, 'alternatives' => [
                    ['id' => 'f0fd9a81-8dff-523a-95dc-984e45744433', 'description' => 'Viewstamped Replication', 'correct_answer' => false],
                    ['id' => '8ab8caf2-79ac-5211-9f61-8acc58d09f8c', 'description' => 'Two-Phase Commit', 'correct_answer' => true],
                    ['id' => '3ba12f89-c251-55e1-8b37-0268ac634ca0', 'description' => 'Raft', 'correct_answer' => false],
                    ['id' => 'e25e283e-6510-5917-bacb-9d18c0f427a5', 'description' => 'PBFD', 'correct_answer' => false],
                    ['id' => '3cf6bc3a-9ff1-5c18-80f3-e17ffc51a9da', 'description' => 'Paxos', 'correct_answer' => false]
                ]],
        ['id' => '889229fa-873b-57b5-ab9f-6344db65238b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual componente executa instruções e coordena grande parte do processamento do computador?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => 'ba041512-f8d5-5aab-846e-8f20d5daf9bc', 'description' => 'Fonte de alimentação', 'correct_answer' => false],
                    ['id' => '095121e6-2ac4-5059-9b9b-915fdb4d86b7', 'description' => 'CPU', 'correct_answer' => true],
                    ['id' => 'd19e649c-8074-5b06-a4ab-022fe1bf255a', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => '8268a00c-1f5a-5973-a818-a9fd7c65bca2', 'description' => 'Placa-mãa', 'correct_answer' => false],
                    ['id' => '14a0941f-2708-5f24-9301-225e08cf1e36', 'description' => 'GPU', 'correct_answer' => false]
                ]],
        ['id' => 'fcc2177c-e425-5ad2-9095-1b69af4a19f2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual técnica introduz redundância controlada para favorecer o desempenho de consultas?', 'difficulty' => 2, 'weight' => 299, 'alternatives' => [
                    ['id' => 'cc56f404-20d3-52d4-8f0c-9b9d7fbdd617', 'description' => 'Desnormalização', 'correct_answer' => true],
                    ['id' => '4d6e6a0c-221e-530f-a8a7-5b60c54a6b3d', 'description' => 'Isolamento', 'correct_answer' => false],
                    ['id' => '77f7d260-ad44-5cbb-a3a8-ff8c545c292b', 'description' => 'Normalizaçãu', 'correct_answer' => false],
                    ['id' => '278fc871-4733-5eff-9521-dcbf435422d6', 'description' => 'Atomicidade', 'correct_answer' => false],
                    ['id' => '2ce21f6a-6da5-502c-ac3a-b6f8c9353e4f', 'description' => 'Consistência', 'correct_answer' => false]
                ]],
        ['id' => '78469df6-a60f-503e-8f92-6a31cecb4de2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual árvore binária de busca mantém rigorosamente balanceadas as alturas das subárvores por meio de rotações?', 'difficulty' => 5, 'weight' => 950, 'alternatives' => [
                    ['id' => '009695a6-3036-5cda-bbb4-420c6877af68', 'description' => 'Árvore de Merkla', 'correct_answer' => false],
                    ['id' => 'fff20d54-f7f7-5527-8382-35348cb76216', 'description' => 'Árvore B', 'correct_answer' => false],
                    ['id' => '07373ebc-1a7f-54ea-b026-674457929543', 'description' => 'Trie', 'correct_answer' => false],
                    ['id' => 'df9cdc77-aa9d-594c-b94b-3bef926879c8', 'description' => 'Árvore AVL', 'correct_answer' => true],
                    ['id' => '3ec9e0d7-a3ff-5313-a899-c8ff50a802d0', 'description' => 'Árvore de Patricia', 'correct_answer' => false]
                ]],
        ['id' => '01117bcb-8e22-574c-9611-b9e1ec3333d8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de consenso tolerante a falhas bizantinas utiliza fases chamadas pre-prepare, prepare e commit?', 'difficulty' => 4, 'weight' => 647, 'alternatives' => [
                    ['id' => '9f02fa9c-cc80-55dd-bc21-eaef84802c4e', 'description' => 'PBFT', 'correct_answer' => true],
                    ['id' => 'e531e43a-1183-5acb-8401-a33ab9237b8d', 'description' => 'Viewstamped Replication', 'correct_answer' => false],
                    ['id' => '0a201529-e245-5462-82fc-f9bb72432164', 'description' => 'Two-Phase Commit', 'correct_answer' => false],
                    ['id' => '5ebe099a-951d-559a-ac48-7daf5f32a32c', 'description' => 'Raft', 'correct_answer' => false],
                    ['id' => '623b8e21-ec50-5bbb-b94d-c1c501b94f39', 'description' => 'Paxoz', 'correct_answer' => false]
                ]],
        ['id' => '01a10f87-a0a5-59c7-beb3-cdb416900cb3', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de roteamento utiliza o algoritmo DUAL para calcular caminhos livres de loop?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => 'd2543f12-2545-5b4b-a69d-efa686618aec', 'description' => 'OSPF', 'correct_answer' => false],
                    ['id' => '0401c550-aa7d-5ff8-85a3-756683a29903', 'description' => 'RIB', 'correct_answer' => false],
                    ['id' => '5fa2d27f-1d21-570d-8126-f2945c790547', 'description' => 'EIGRP', 'correct_answer' => true],
                    ['id' => '54aaa8a8-aaca-5164-9c65-48893ff39935', 'description' => 'IS-IS', 'correct_answer' => false],
                    ['id' => '2bab7206-962d-506d-a0e5-842bec0c60fa', 'description' => 'BGP', 'correct_answer' => false]
                ]],
        ['id' => '35070f6e-9915-57c2-b682-b05fe5e16644', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo permite consultar e modificar informações mantidas em serviços de diretório?', 'difficulty' => 3, 'weight' => 563, 'alternatives' => [
                    ['id' => 'f345d077-2326-5d1a-b891-21e4e3772fe1', 'description' => 'OAuth 2.0', 'correct_answer' => false],
                    ['id' => '4d94199c-b329-5574-a490-633fe87061f3', 'description' => 'Kerberos', 'correct_answer' => false],
                    ['id' => '3b490d31-378b-5d46-b30c-309b6c57fba6', 'description' => 'OpenID Connect', 'correct_answer' => false],
                    ['id' => '4aa629dd-2714-5194-959c-44e36f2231c5', 'description' => 'SAMR 2.0', 'correct_answer' => false],
                    ['id' => 'e61f7455-1591-59b2-9178-34639d315edf', 'description' => 'LDAP', 'correct_answer' => true]
                ]],
        ['id' => 'd027eb65-4881-5253-ae25-5f3f538422b8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual problema de otimização busca uma rota de custo mínimo que visite cada cidade uma vez e retorne à origem?', 'difficulty' => 5, 'weight' => 984, 'alternatives' => [
                    ['id' => '02cfc2ed-9c74-5cfa-8179-5287078a9b7b', 'description' => 'Problema do caixeiro-viajante', 'correct_answer' => true],
                    ['id' => 'bf840ba7-1d34-50df-ac4d-5c46cb4f1529', 'description' => 'Problema de Rica', 'correct_answer' => false],
                    ['id' => '556a67e1-a12a-562c-80bf-8a20a3c3e1ce', 'description' => 'Problema de decisão de Hilbert', 'correct_answer' => false],
                    ['id' => '09814a96-bfce-554a-b236-857a19411128', 'description' => 'Problema da parada', 'correct_answer' => false],
                    ['id' => '53ef7fd0-baf5-5b6b-960c-6a02e6f04244', 'description' => 'Problema da correspondência de Post', 'correct_answer' => false]
                ]],
        ['id' => '3918f1a5-a9b0-5de2-9358-58cfed11b706', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual versão do protocolo TLS foi especificada na RFC 5246?', 'difficulty' => 3, 'weight' => 451, 'alternatives' => [
                    ['id' => 'faefc00e-7326-5099-a093-9d4855d2f67e', 'description' => 'TLS 1.3', 'correct_answer' => false],
                    ['id' => 'af37bdad-95c1-54d1-b402-e0dd7de875ba', 'description' => 'DTLS 1.2', 'correct_answer' => false],
                    ['id' => '68725698-c00b-5d77-9389-71436a3f04c6', 'description' => 'TLS 1.2', 'correct_answer' => true],
                    ['id' => 'f008444a-99c6-5840-a713-bece6ff463b5', 'description' => 'SZH', 'correct_answer' => false],
                    ['id' => 'f7ad58f9-0b16-5050-927d-80b40c95755a', 'description' => 'QUIC', 'correct_answer' => false]
                ]],
        ['id' => '1180672f-6fc4-53f7-90e3-a39f80fd24b8', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual algoritmo de caminhos mínimos não deve ser confundido com algoritmos de árvore geradora mínima?', 'difficulty' => 4, 'weight' => 710, 'alternatives' => [
                    ['id' => '44358138-4cfc-5308-ba91-de8dabc2f219', 'description' => 'Reverse-Delete', 'correct_answer' => false],
                    ['id' => '027a28ef-eb68-5db0-ae75-01c84afb3561', 'description' => 'Kruskal', 'correct_answer' => false],
                    ['id' => '67c47987-479c-5615-8364-d2e85f038957', 'description' => 'Prim', 'correct_answer' => false],
                    ['id' => 'f4f2a43d-8e8e-5920-89ad-c435e074e987', 'description' => 'Borůvke', 'correct_answer' => false],
                    ['id' => '00422670-fd94-5135-969d-c98e7270f233', 'description' => 'Dijkstra', 'correct_answer' => true]
                ]],
        ['id' => 'dc38d088-2d85-53a7-9e8e-50caacaf33b7', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual banco de dados distribuído foi projetado para ser compatível com o protocolo do Cassandra?', 'difficulty' => 3, 'weight' => 581, 'alternatives' => [
                    ['id' => '3574aebb-64b2-57d9-937b-69c4e9a7a6db', 'description' => 'Cassandra', 'correct_answer' => false],
                    ['id' => '4cec5ac1-ce19-5586-a417-c4651fbf0982', 'description' => 'Memcached', 'correct_answer' => false],
                    ['id' => '5557f97a-bb6d-5b7f-bbb0-4a47dacb196c', 'description' => 'Redis', 'correct_answer' => false],
                    ['id' => '9b91b810-2210-5b14-ab3d-534361517132', 'description' => 'ScyllaDB', 'correct_answer' => true],
                    ['id' => '8e3c799b-adc4-5a6c-ba09-f86007c1f612', 'description' => 'HBasa', 'correct_answer' => false]
                ]],
        ['id' => 'af00c155-9348-55c8-a23e-2b65e6343b1d', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sinal encerra um processo e não pode ser capturado, bloqueado ou ignorado?', 'difficulty' => 4, 'weight' => 635, 'alternatives' => [
                    ['id' => '482441c8-c68d-56c2-9742-b54ee83be6a7', 'description' => 'SIGKILL', 'correct_answer' => true],
                    ['id' => 'b55fe0a9-2af7-5571-9e34-0530eb6ee892', 'description' => 'SIGHUB', 'correct_answer' => false],
                    ['id' => '63583e57-2956-5c22-a629-4adc825136c4', 'description' => 'SIGINT', 'correct_answer' => false],
                    ['id' => 'f60a9932-1526-51a2-a7b5-b9e78955d0eb', 'description' => 'SIGTERM', 'correct_answer' => false],
                    ['id' => '094343ca-112e-5319-95f3-e7e8c2ca0747', 'description' => 'SIGQUIT', 'correct_answer' => false]
                ]],
        ['id' => '7ca020c6-394e-5051-a9b0-dfd15c2acf9b', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual propriedade ACID garante que uma transação preserve as regras e restrições do banco de dados?', 'difficulty' => 2, 'weight' => 258, 'alternatives' => [
                    ['id' => 'c23fc36c-a829-50d6-b860-abed95dc1fc5', 'description' => 'Atomicidada', 'correct_answer' => false],
                    ['id' => 'ad2f31b7-55f2-5a4b-a0dd-82eb613b39cd', 'description' => 'Desnormalização', 'correct_answer' => false],
                    ['id' => '5f69bc3e-a603-534e-ad00-5d9edaed343e', 'description' => 'Isolamento', 'correct_answer' => false],
                    ['id' => 'bba6d174-153a-54f2-be3f-b61196847550', 'description' => 'Normalização', 'correct_answer' => false],
                    ['id' => '94733bed-fddd-5e27-ba67-5540da37eee0', 'description' => 'Consistência', 'correct_answer' => true]
                ]],
        ['id' => '4b127f53-f995-5acc-8949-1f47c2ad1b78', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual programa executa instruções de uma linguagem sem exigir previamente a geração de um executável nativo completo?', 'difficulty' => 2, 'weight' => 334, 'alternatives' => [
                    ['id' => 'e578a7ed-ed1e-51f0-b1d0-fba74760f9ee', 'description' => 'Debuggel', 'correct_answer' => false],
                    ['id' => '1de8ec91-7188-537e-b080-f336b6082917', 'description' => 'Linker', 'correct_answer' => false],
                    ['id' => 'ac8bf67e-5be6-5838-a0ee-e295a6c454a7', 'description' => 'Interpretador', 'correct_answer' => true],
                    ['id' => '57fa5f86-f974-5f31-8348-3f6946c7624f', 'description' => 'Assembler', 'correct_answer' => false],
                    ['id' => 'b64155e0-fcd8-54b3-997a-1f2f27497b99', 'description' => 'Compilador', 'correct_answer' => false]
                ]],
        ['id' => '546c7416-c789-55fd-a500-38a432890b86', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura usa uma função de dispersão para associar chaves a posições de armazenamento?', 'difficulty' => 2, 'weight' => 357, 'alternatives' => [
                    ['id' => 'b932a9e6-a2cd-5260-81e4-e6c9ea11ba86', 'description' => 'Tabela hash', 'correct_answer' => true],
                    ['id' => '06ee9944-847c-509a-bf48-656b29b5963a', 'description' => 'Pilhe', 'correct_answer' => false],
                    ['id' => '9b238db9-1572-5a9f-8ba6-d811e8ece50c', 'description' => 'Árvore', 'correct_answer' => false],
                    ['id' => '84147cbc-3543-5c88-bbd6-bae48d28c5d7', 'description' => 'Fila', 'correct_answer' => false],
                    ['id' => '26ef52a5-b9fd-5f96-8ca8-a5fad9879bd1', 'description' => 'Cache', 'correct_answer' => false]
                ]],
        ['id' => 'deb3c606-19fc-550b-8879-743926036777', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sinal pode ser enviado por Ctrl+\\\\ e normalmente solicita encerramento com geração de core dump?', 'difficulty' => 4, 'weight' => 692, 'alternatives' => [
                    ['id' => '952d50d2-6504-5b7e-88c8-d15a6c1040c1', 'description' => 'SIGQUIT', 'correct_answer' => true],
                    ['id' => 'a8618337-89c4-5b3f-9c18-32453b00cc93', 'description' => 'SIGIND', 'correct_answer' => false],
                    ['id' => '71697b7a-5032-504e-9560-17baa41391a3', 'description' => 'SIGTERM', 'correct_answer' => false],
                    ['id' => '4456d0b2-f7be-5c19-842f-b625981f6bcf', 'description' => 'SIGHUP', 'correct_answer' => false],
                    ['id' => 'ff30f955-a7aa-5f9e-87d6-2cc18f7c0426', 'description' => 'SIGKILL', 'correct_answer' => false]
                ]],
        ['id' => 'cf9e0c31-403b-56db-be1a-f96986a35ff1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo auxilia o funcionamento do IPv6 com mensagens de erro e descoberta de vizinhos?', 'difficulty' => 2, 'weight' => 329, 'alternatives' => [
                    ['id' => '21c01eca-4d09-5f9f-a632-dcb32f2a1bf3', 'description' => 'UDP', 'correct_answer' => false],
                    ['id' => 'a779d5c3-9f53-5084-b02f-530379ad0a07', 'description' => 'ICMPv6', 'correct_answer' => true],
                    ['id' => '093d6a79-3d1d-52b3-ac0e-65e8da1df4d1', 'description' => 'IPv4', 'correct_answer' => false],
                    ['id' => '26218530-5723-52d5-bba8-e784fd593d94', 'description' => 'TCP', 'correct_answer' => false],
                    ['id' => 'b98590e1-067a-5d71-bd75-749a7a88bca4', 'description' => 'IPf6', 'correct_answer' => false]
                ]],
        ['id' => '79279261-c53d-5a18-bf48-4ff178b71825', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual versão do protocolo TLS foi especificada na RFC 8446 e removeu conjuntos de cifras com troca de chaves RSA estática?', 'difficulty' => 3, 'weight' => 586, 'alternatives' => [
                    ['id' => '2d4e1b63-488c-58a5-966b-20ea52d526bb', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => '698e101e-8fb1-5aaa-99b5-dea9b2056e4a', 'description' => 'DTLZ 1.2', 'correct_answer' => false],
                    ['id' => 'e18a8476-36c2-5c34-90e2-ca506f3c873f', 'description' => 'QUIC', 'correct_answer' => false],
                    ['id' => 'c10d0ca0-5a77-5790-ab0f-4ca6a97a4260', 'description' => 'TLS 1.3', 'correct_answer' => true],
                    ['id' => '9278baeb-5be9-59cc-a436-7035b3f6f01f', 'description' => 'TLS 1.2', 'correct_answer' => false]
                ]],
        ['id' => '1126b089-7ec0-5402-9481-efeb90485c96', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de autenticação de rede utiliza tickets emitidos por um centro de distribuição de chaves?', 'difficulty' => 3, 'weight' => 445, 'alternatives' => [
                    ['id' => 'ba15e382-2021-5c1b-b3cc-5029a216c253', 'description' => 'LDAP', 'correct_answer' => false],
                    ['id' => '687ac16f-9573-5943-922f-aba6ad0a5939', 'description' => 'OpenID Connect', 'correct_answer' => false],
                    ['id' => '9bd19a8b-2fc6-51a5-9d8e-671c605de682', 'description' => 'OAudh 2.0', 'correct_answer' => false],
                    ['id' => 'a206a353-8680-5ba1-8615-e0230afd0358', 'description' => 'Kerberos', 'correct_answer' => true],
                    ['id' => 'd1851819-3702-5a38-96ed-3a9a6a4bc33c', 'description' => 'SAML 2.0', 'correct_answer' => false]
                ]],
        ['id' => '0244071a-9b42-5e6d-8963-409b425b21ad', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema operacional de código aberto tem seu núcleo desenvolvido sob o modelo de software livre?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '9a65db96-b3df-5944-88c4-c6633eeec193', 'description' => 'iOS', 'correct_answer' => false],
                    ['id' => 'b4340498-bb25-5850-ba6c-59e0a4fa14f6', 'description' => 'macOS', 'correct_answer' => false],
                    ['id' => '37bcfa91-fbb1-589f-b270-82e7b5a2ddf8', 'description' => 'Windows', 'correct_answer' => false],
                    ['id' => '20adffbf-5900-5d3f-af02-0af6365f08a2', 'description' => 'Linux', 'correct_answer' => true],
                    ['id' => 'f863d64c-b68b-5fc3-81a6-d24bb94486f7', 'description' => 'Androit', 'correct_answer' => false]
                ]],
        ['id' => '5d7e77e6-a20c-5c35-a7f5-26f0499b3561', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema operacional é utilizado nos computadores Mac?', 'difficulty' => 1, 'weight' => 194, 'alternatives' => [
                    ['id' => '7e20e11a-a89f-5567-b979-a7050f602912', 'description' => 'macOS', 'correct_answer' => true],
                    ['id' => 'eb724a39-b495-5351-a730-70558c5d7f17', 'description' => 'Linuz', 'correct_answer' => false],
                    ['id' => 'cf63d774-3c38-58b3-acf5-1f98009779cc', 'description' => 'Windows', 'correct_answer' => false],
                    ['id' => 'efecb3d5-a7d1-5b57-a314-a09b23d3b914', 'description' => 'Android', 'correct_answer' => false],
                    ['id' => '6eb4da64-2d28-546c-85ee-d26bbad220fe', 'description' => 'iOS', 'correct_answer' => false]
                ]],
        ['id' => 'c0051369-cfe5-5f8f-868b-6e1d0e63058a', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual objeto de banco de dados representa uma consulta armazenada que pode ser usada como tabela virtual?', 'difficulty' => 2, 'weight' => 384, 'alternatives' => [
                    ['id' => '1878e0bb-cda1-5b80-a9b7-6f2f2bcc3bc4', 'description' => 'Chave primárie', 'correct_answer' => false],
                    ['id' => '0a4acd4a-69af-59f2-b751-33ba1cfcede7', 'description' => 'View', 'correct_answer' => true],
                    ['id' => '81acfc1c-f013-5f14-a265-496d895396d2', 'description' => 'Chave estrangeira', 'correct_answer' => false],
                    ['id' => 'eff3d90f-6b52-5b45-bcfa-f3c99b0d8aaf', 'description' => 'Índice', 'correct_answer' => false],
                    ['id' => '18f36c09-e5cd-5c0a-b26d-b1e8863c75f7', 'description' => 'Trigger', 'correct_answer' => false]
                ]],
        ['id' => 'b7ef6e9d-878d-583a-abed-c8e6b7430b56', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual protocolo de roteamento interdomínio utiliza atributos como AS_PATH para selecionar rotas entre sistemas autônomos?', 'difficulty' => 4, 'weight' => 614, 'alternatives' => [
                    ['id' => 'e589d79f-eba2-5616-96fd-d4d9d9bb8352', 'description' => 'IS-IS', 'correct_answer' => false],
                    ['id' => '40597687-707c-5035-b89b-a9269675ad57', 'description' => 'OSPV', 'correct_answer' => false],
                    ['id' => '76a00c74-1066-59b1-9d39-610412f55f35', 'description' => 'BGP', 'correct_answer' => true],
                    ['id' => '45cdad41-e17d-557b-810d-d27f6e362352', 'description' => 'RIP', 'correct_answer' => false],
                    ['id' => 'f5c1a6bc-195c-5535-8cd0-6d7b7caf857f', 'description' => 'EIGRP', 'correct_answer' => false]
                ]],
        ['id' => '8f33a539-136d-5061-a652-6fb05c9d6194', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modalidade utiliza um par de chaves relacionadas, normalmente uma pública e outra privada?', 'difficulty' => 2, 'weight' => 201, 'alternatives' => [
                    ['id' => '1f330e56-c1ab-5ba9-9463-ca626b796bd6', 'description' => 'Certificado digitar', 'correct_answer' => false],
                    ['id' => 'cc0f39a2-96d7-59a8-9eee-692663b0659e', 'description' => 'Criptografia assimétrica', 'correct_answer' => true],
                    ['id' => '98a8a9bf-e5a3-59fa-ad99-eb878dd4e293', 'description' => 'Assinatura digital', 'correct_answer' => false],
                    ['id' => 'a1311b08-3ac6-51c6-817a-b0a5fe09f478', 'description' => 'Hash', 'correct_answer' => false],
                    ['id' => '462b4be3-f964-5320-bef0-2be7bf4126f8', 'description' => 'Criptografia simétrica', 'correct_answer' => false]
                ]],
        ['id' => 'd31fa84d-24bc-5eb5-b857-2b8f94dbafb1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sinal é normalmente enviado ao processo em primeiro plano quando o usuário pressiona Ctrl+C?', 'difficulty' => 4, 'weight' => 603, 'alternatives' => [
                    ['id' => '6938fcaa-a02e-5d4b-a7fd-faa9e46fb16d', 'description' => 'SIGHUP', 'correct_answer' => false],
                    ['id' => 'aa86105d-e9dc-55ce-9350-115e4fa98d53', 'description' => 'SIGTERM', 'correct_answer' => false],
                    ['id' => 'e6381fa2-20f6-51d6-8e26-4f98932be5fa', 'description' => 'SIGQUIT', 'correct_answer' => false],
                    ['id' => '6c2da554-b430-5a18-b46a-2bda5bfd1c16', 'description' => 'SIGKILR', 'correct_answer' => false],
                    ['id' => '39afc019-846e-5fb3-aaae-336df61806da', 'description' => 'SIGINT', 'correct_answer' => true]
                ]],
        ['id' => 'eda3eb68-d714-5b16-a791-57fc5abf4d00', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sistema de arquivos Linux utiliza copy-on-write e oferece snapshots e subvolumes?', 'difficulty' => 4, 'weight' => 645, 'alternatives' => [
                    ['id' => '78fa2893-9cbb-59a1-88d9-a23d1da25ed1', 'description' => 'Ext2', 'correct_answer' => false],
                    ['id' => '3a78dcb7-acc2-52b1-aa75-9fff6aaad9ca', 'description' => 'Btrfs', 'correct_answer' => true],
                    ['id' => '1c3680bd-61d7-52a5-8d73-c7320fea0ddf', 'description' => 'Ext3', 'correct_answer' => false],
                    ['id' => '9fc88da2-8d1c-5968-abf1-8bfd8c2c8f96', 'description' => 'Exd4', 'correct_answer' => false],
                    ['id' => '7b843c21-e513-5047-931f-4d6c324dc61e', 'description' => 'XFS', 'correct_answer' => false]
                ]],
        ['id' => 'c58b3fad-25b4-572c-8acf-578f5b3b0e54', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual memória volátil mantém temporariamente dados e programas em uso pelo computador?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '956e6bd5-8660-50a5-a40c-5eafd1e74472', 'description' => 'RAM', 'correct_answer' => true],
                    ['id' => '229a5d5a-ac27-5202-aa2c-fdf08c390125', 'description' => 'SSD', 'correct_answer' => false],
                    ['id' => 'f7fd37f0-293e-51c3-a9e1-afcf88f27337', 'description' => 'RON', 'correct_answer' => false],
                    ['id' => '4bd99bfb-86e5-5c00-87ac-a812fa391035', 'description' => 'HDD', 'correct_answer' => false],
                    ['id' => '8d921457-3c02-5f7a-a141-39f62d4f66c4', 'description' => 'Cache', 'correct_answer' => false]
                ]],
        ['id' => '96db472d-2915-5f8e-9ab8-7740ce249dc2', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual propriedade ACID garante que uma transação seja executada por completo ou não produza efeito algum?', 'difficulty' => 2, 'weight' => 223, 'alternatives' => [
                    ['id' => '9fe9f8c2-1a37-54ef-98f4-28ba789878c9', 'description' => 'Isolamento', 'correct_answer' => false],
                    ['id' => 'c8d6d2bc-fb53-5b9f-9d16-b86ffb3c5c9b', 'description' => 'Atomicidade', 'correct_answer' => true],
                    ['id' => '5a06dfa0-a4b4-56f5-a5c6-b40ebe44bd28', 'description' => 'Normalização', 'correct_answer' => false],
                    ['id' => 'adb47587-d580-5146-a906-0b04c9a06880', 'description' => 'Consistência', 'correct_answer' => false],
                    ['id' => '8373bec7-eae2-5431-a263-476ca39f51bd', 'description' => 'Desnormalizaçãu', 'correct_answer' => false]
                ]],
        ['id' => '57516f6a-454e-555b-b488-ffec55656797', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modelo computacional reconhece linguagens regulares e possui um conjunto finito de estados, sem memória auxiliar ilimitada?', 'difficulty' => 5, 'weight' => 908, 'alternatives' => [
                    ['id' => '1849da80-d3e5-5b20-9757-4c0f9eea85bf', 'description' => 'Máquina de registradores', 'correct_answer' => false],
                    ['id' => '77d3eb66-3d8e-57e2-8089-7681469daf84', 'description' => 'Autômato finito', 'correct_answer' => true],
                    ['id' => '7d931e7d-6702-59f4-a865-6c7396242bb5', 'description' => 'Máquina de estados finitoz', 'correct_answer' => false],
                    ['id' => '9443936c-9693-5e2f-8cb7-4b10621c2038', 'description' => 'Autômato com pilha', 'correct_answer' => false],
                    ['id' => '5d73c05a-064a-538d-a96d-d441940e1240', 'description' => 'Máquina de Turing', 'correct_answer' => false]
                ]],
        ['id' => '29e528dc-8218-530a-a82a-f74b5d3ff8c1', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual estrutura pode acelerar consultas ao permitir localizar registros sem percorrer toda a tabela?', 'difficulty' => 2, 'weight' => 373, 'alternatives' => [
                    ['id' => '5b4afe1c-7fb8-5db0-8686-91cc6a41acab', 'description' => 'Chave estrangeire', 'correct_answer' => false],
                    ['id' => '514d070c-a1e0-5cd5-9f8f-d82a9627acae', 'description' => 'Chave primária', 'correct_answer' => false],
                    ['id' => '1a5f47ce-db87-57d8-94f6-58df578bc442', 'description' => 'View', 'correct_answer' => false],
                    ['id' => '2cc0fbc7-3596-592e-a441-d0f93991bbe1', 'description' => 'Trigger', 'correct_answer' => false],
                    ['id' => '9e87e97b-d1e2-5ca1-8b0e-8b056f954130', 'description' => 'Índice', 'correct_answer' => true]
                ]],
        ['id' => 'e66e1eb8-684b-5290-a98d-95fe5b3e7f4e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual sinal POSIX tem origem histórica na desconexão do terminal controlador e pode ser usado para solicitar recarga?', 'difficulty' => 4, 'weight' => 795, 'alternatives' => [
                    ['id' => 'a3e24bf7-4937-5e51-a52d-537f0006fadd', 'description' => 'SIGHUP', 'correct_answer' => true],
                    ['id' => '042e5dfe-9757-5ed9-8afb-2402efe2a0e2', 'description' => 'SIGQUIT', 'correct_answer' => false],
                    ['id' => 'f51ffe43-f932-5bc4-bb04-bfc9928d3249', 'description' => 'SIGTERN', 'correct_answer' => false],
                    ['id' => '097b48a8-73e7-5d7a-b629-bd0621c8f52c', 'description' => 'SIGKILL', 'correct_answer' => false],
                    ['id' => '78a963cf-f369-5444-b93c-b58489d9d802', 'description' => 'SIGINT', 'correct_answer' => false]
                ]],
        ['id' => 'd1783a1e-b5bb-5e9d-b027-3629a4486d26', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modelo computacional reconhece linguagens livres de contexto usando uma memória auxiliar organizada como pilha?', 'difficulty' => 5, 'weight' => 906, 'alternatives' => [
                    ['id' => '1394989f-6a6c-5313-a303-064664d12cff', 'description' => 'Máquina de estados finitos', 'correct_answer' => false],
                    ['id' => 'a4122003-3e86-5883-a331-04b0f8d7d2ed', 'description' => 'Autômato com pilha', 'correct_answer' => true],
                    ['id' => '7a2f14af-28ed-5ecc-aa4b-c42f3e516645', 'description' => 'Máquina de Turing', 'correct_answer' => false],
                    ['id' => '21194891-7cdf-5f43-bc75-8138545ca1c1', 'description' => 'Autômato finitu', 'correct_answer' => false],
                    ['id' => '362074c1-f761-5462-91fa-377f878aa091', 'description' => 'Máquina de registradores', 'correct_answer' => false]
                ]],
        ['id' => '9092a99e-3834-57fb-8dba-c9c3358e5f0e', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual matemático britânico publicou um trabalho fundamental sobre máquinas abstratas capazes de executar procedimentos computáveis?', 'difficulty' => 5, 'weight' => 983, 'alternatives' => [
                    ['id' => '2d4fbee5-fd3d-522b-9119-1bd4bffd224d', 'description' => 'Alan Turing', 'correct_answer' => true],
                    ['id' => '01601a5c-6d8d-54dc-be97-b8b850cb15de', 'description' => 'John von Neumann', 'correct_answer' => false],
                    ['id' => '1bb6b7ee-25dc-5e9d-b8b3-1b2816161958', 'description' => 'Norbert Wiener', 'correct_answer' => false],
                    ['id' => '118f1cc4-6547-57a8-a7fd-b85ee1cfb6e3', 'description' => 'Alonzo Church', 'correct_answer' => false],
                    ['id' => 'e294ace2-7723-5822-ad2e-a1483244b1a5', 'description' => 'Claude Shannom', 'correct_answer' => false]
                ]],
        ['id' => '6b76d2e1-8952-504f-8958-edde6463b120', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual formato de serialização utiliza arquivos de definição .proto e números de campo para codificar mensagens?', 'difficulty' => 4, 'weight' => 621, 'alternatives' => [
                    ['id' => 'c6c85232-b4ab-5044-93dc-8e7cf75f774a', 'description' => 'CBOR', 'correct_answer' => false],
                    ['id' => 'b902ed6b-8983-5a43-a01c-434a46a98618', 'description' => 'Apache Avro', 'correct_answer' => false],
                    ['id' => '7ba5d0b9-6da1-5fd3-9ad3-072c66c9a87c', 'description' => 'Protocol Buffers', 'correct_answer' => true],
                    ['id' => 'd30c9fe7-4802-5675-aa9e-9158f03aa5cc', 'description' => 'Apache Thrifd', 'correct_answer' => false],
                    ['id' => '6109cb73-2ce4-56a3-af20-f14a2cee9b97', 'description' => 'MessagePack', 'correct_answer' => false]
                ]],
        ['id' => 'a670f058-85d5-50a3-995c-7745d40dec09', 'locale' => 'pt-BR', 'category' => 'dd55b22d-c6eb-5287-ad4b-578f421d8772', 'question' => 'Qual modelo abstrato executa operações sobre um conjunto finito ou enumerável de registradores que armazenam números?', 'difficulty' => 5, 'weight' => 807, 'alternatives' => [
                    ['id' => 'fef38f3a-fbe1-5783-834b-2e8715ee51bb', 'description' => 'Autômato com pilha', 'correct_answer' => false],
                    ['id' => '20c65965-d930-5a0a-92be-51700dc13922', 'description' => 'Máquina de estados finitos', 'correct_answer' => false],
                    ['id' => '4ce3e462-a814-5d7e-85bc-1dda46157f9b', 'description' => 'Autômato finito', 'correct_answer' => false],
                    ['id' => '50b13f9a-ac0b-5f53-97f6-82435c46ba00', 'description' => 'Máquina de registradores', 'correct_answer' => true],
                    ['id' => '5d849597-4dd9-51dc-8ac5-f9e7419d424b', 'description' => 'Máquina de Turinj', 'correct_answer' => false]
                ]]
    ];

    public function run(): void
    {
        DB::table('trivia_categorys')->insertOrIgnore(self::CATEGORY);
        foreach (array_chunk(self::QUESTIONS, 100) as $questions) {
            $questionRows = [];
            $alternativeRows = [];
            foreach ($questions as $question) {
                $questionRows[] = ['id' => $question['id'], 'created_by' => 'SYSTEM', 'locale' => $question['locale'], 'category' => $question['category'], 'question' => $question['question'], 'difficulty' => $question['difficulty'], 'weight' => $question['weight']];
                foreach ($question['alternatives'] as $alternative) {
                    $alternativeRows[] = ['id' => $alternative['id'], 'created_by' => 'SYSTEM', 'question' => $question['id'], 'description' => $alternative['description'], 'correct_answer' => $alternative['correct_answer']];
                }
            }
            DB::table('trivia_questions')->insertOrIgnore($questionRows);
            DB::table('trivia_alternatives')->insertOrIgnore($alternativeRows);
        }
    }
}
