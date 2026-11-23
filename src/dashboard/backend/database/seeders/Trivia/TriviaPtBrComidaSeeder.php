<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrComidaSeeder extends Seeder
{
    private const CATEGORY = ['id' => '9720360c-622d-588a-b9e0-022fa3083c70', 'created_by' => 'SYSTEM', 'short_description' => 'comida', 'description' => 'Comida'];

    private const QUESTIONS = [
        ['id' => '13244351-6433-5b16-ac65-897fa0a6b42f', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual fruta costuma ser associada à expressão popular que diz que uma unidade por dia mantém o médico afastado?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => 'c0fb6dfd-98ab-557a-8ddb-76d0f7f3aaab', 'description' => 'Manga', 'correct_answer' => false],
                    ['id' => '2d501855-3113-5fb9-be9b-9001481e4ea2', 'description' => 'Abacaxi', 'correct_answer' => false],
                    ['id' => '6a2fa21d-4cbc-5501-80d5-1927cf0520e0', 'description' => 'Maçã', 'correct_answer' => true],
                    ['id' => '2dc0efa6-eaca-52bc-aaf4-2c8b434da84a', 'description' => 'Banana', 'correct_answer' => false],
                    ['id' => 'ed2fe5bf-c450-5917-8171-c2bc0546c9d1', 'description' => 'Pera', 'correct_answer' => false]
                ]],
        ['id' => '98cd32ac-ba6f-527c-a1b7-e6c7ab4d3b00', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual fruta tropical é conhecida por ser rica em potássio e ter casca que muda de verde para amarela ao amadurecer?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => '0842171a-6c48-5ed2-b96b-ebf0196e92cd', 'description' => 'Uva', 'correct_answer' => false],
                    ['id' => '4e444dd7-2a23-5c8d-982e-969a141fdbd3', 'description' => 'Manga', 'correct_answer' => false],
                    ['id' => '9b15b273-7ff5-5b53-91ef-70e32c65bed7', 'description' => 'Laranja', 'correct_answer' => false],
                    ['id' => '9abb0aab-5b96-58cb-b5b4-ff2d8d6dd3c6', 'description' => 'Banana', 'correct_answer' => true],
                    ['id' => 'df142519-d7a0-56b6-9edf-e44630c5d2df', 'description' => 'Maçã', 'correct_answer' => false]
                ]],
        ['id' => 'c8f1bc51-9101-5981-869e-58c893db859d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual fruta cítrica é tradicionalmente usada para preparar suco rico em vitamina C?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => '426dc0e9-2f96-598e-9c43-97a4e5587afd', 'description' => 'Mamão', 'correct_answer' => false],
                    ['id' => 'cb2628ab-6a0c-54c6-9b9c-0adc15d00cf2', 'description' => 'Pera', 'correct_answer' => false],
                    ['id' => '726c18f4-2881-545a-9914-7b1e412197ec', 'description' => 'Melancia', 'correct_answer' => false],
                    ['id' => '00dca252-011d-5c11-9ac1-e935da566679', 'description' => 'Abacaxi', 'correct_answer' => false],
                    ['id' => '5f59517e-9be1-5846-bbeb-137710ac1eaa', 'description' => 'Laranja', 'correct_answer' => true]
                ]],
        ['id' => '065d319c-e2d5-5cd5-82a1-9bc1f36cb317', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual fruta tem formato geralmente arredondado na base e afilado próximo ao cabo?', 'difficulty' => 1, 'weight' => 119, 'alternatives' => [
                    ['id' => '8d1ed5c4-667d-5663-98c9-fac177b99c03', 'description' => 'Pera', 'correct_answer' => true],
                    ['id' => 'f1411499-0903-50d2-b853-69076cf09e79', 'description' => 'Morango', 'correct_answer' => false],
                    ['id' => '97bf26d1-48c2-5c55-88cc-e70540f1b99d', 'description' => 'Uva', 'correct_answer' => false],
                    ['id' => '16e8dce4-56b4-5ff2-bca5-88ed3abc2161', 'description' => 'Maçã', 'correct_answer' => false],
                    ['id' => 'f4151ad3-2f53-54fc-b397-87d1e3936f89', 'description' => 'Banana', 'correct_answer' => false]
                ]],
        ['id' => '7e727f5d-635d-59a2-8571-4c480e727fe8', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual fruta cresce em cachos e é usada na produção de vinho?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => '9213aa3e-ad10-55ea-b1ca-c0c0a8e12de6', 'description' => 'Abacaxi', 'correct_answer' => false],
                    ['id' => 'eede5782-9013-5d5f-89c2-2c3dfb9de7e5', 'description' => 'Uva', 'correct_answer' => true],
                    ['id' => '10398201-26e0-5537-99ce-ba6111f2743a', 'description' => 'Banana', 'correct_answer' => false],
                    ['id' => '06d672f3-94f4-5820-aed1-db7bdfda5035', 'description' => 'Manga', 'correct_answer' => false],
                    ['id' => 'ae7e8591-6326-50dc-9fa7-a718b6bc2d0d', 'description' => 'Morango', 'correct_answer' => false]
                ]],
        ['id' => 'af5a4345-6c71-56d0-9851-a7b04749f0bc', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual grão é a base de um acompanhamento muito comum na refeição brasileira junto com feijão?', 'difficulty' => 1, 'weight' => 173, 'alternatives' => [
                    ['id' => '0e1c4307-677b-54db-acfe-3e6a4ddf1ffc', 'description' => 'Cevada', 'correct_answer' => false],
                    ['id' => '05cd89fd-eab0-526c-abbd-4e5ffc3789bf', 'description' => 'Aveia', 'correct_answer' => false],
                    ['id' => '089b46bb-4640-59c1-a7d6-1b7a235a52fa', 'description' => 'Milho', 'correct_answer' => false],
                    ['id' => 'beced904-c118-5f70-bea5-629683bc87b7', 'description' => 'Arroz', 'correct_answer' => true],
                    ['id' => '11e73db0-ed02-56ed-bc6d-e156cfe5a761', 'description' => 'Lentilha', 'correct_answer' => false]
                ]],
        ['id' => '2ecad9c6-2427-5f18-bf48-8115c3003bfb', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual leguminosa costuma ser cozida em caldo e servida com arroz no Brasil?', 'difficulty' => 1, 'weight' => 135, 'alternatives' => [
                    ['id' => '7c85436c-b765-5309-9019-c41612c54c4c', 'description' => 'Centeio', 'correct_answer' => false],
                    ['id' => '02e057ee-f05c-576e-b968-33eb23b107f3', 'description' => 'Arroz', 'correct_answer' => false],
                    ['id' => '0183ed20-702b-589c-9d9c-63b3c27fa453', 'description' => 'Lentilha', 'correct_answer' => false],
                    ['id' => 'f9593a74-908e-5677-9e23-0361754eb2e0', 'description' => 'Feijão', 'correct_answer' => true],
                    ['id' => 'd7650be3-8198-5fa3-be6f-92dcbc5d7973', 'description' => 'Trigo', 'correct_answer' => false]
                ]],
        ['id' => '5d91ab78-861f-5fa5-8370-6f767ab1f99b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual leguminosa pequena e achatada é tradicionalmente consumida em sopas e em refeições de Ano-Novo?', 'difficulty' => 1, 'weight' => 114, 'alternatives' => [
                    ['id' => 'f1575a16-78ec-5653-9f70-43cf43194d85', 'description' => 'Cevada', 'correct_answer' => false],
                    ['id' => '1a4d1a1e-48e4-5b33-87fa-1357fb129ecf', 'description' => 'Grão-de-bico', 'correct_answer' => false],
                    ['id' => '4668a909-4f42-5c4a-b666-84e86d73a866', 'description' => 'Milho', 'correct_answer' => false],
                    ['id' => '1c663dbc-1324-5fb8-b241-f07f83a20f57', 'description' => 'Lentilha', 'correct_answer' => true],
                    ['id' => '9d041d79-230b-5446-9149-8ea51b36c0d4', 'description' => 'Trigo', 'correct_answer' => false]
                ]],
        ['id' => 'd7d4a9a2-699d-5cdd-baa5-a8a092011711', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual leguminosa é o ingrediente principal do homus?', 'difficulty' => 1, 'weight' => 132, 'alternatives' => [
                    ['id' => '0fc887c9-7219-5c4e-8dac-97b9344085e1', 'description' => 'Trigo', 'correct_answer' => false],
                    ['id' => '9140f581-2720-5a9a-a3dd-a6db2642ce28', 'description' => 'Grão-de-bico', 'correct_answer' => true],
                    ['id' => 'f3bb3dda-56a3-58ad-96a0-f78095143811', 'description' => 'Aveia', 'correct_answer' => false],
                    ['id' => '60fc9f58-069b-57bc-8400-025a38d45d48', 'description' => 'Cevada', 'correct_answer' => false],
                    ['id' => '8a363255-4f04-5340-8f22-6658a64521e9', 'description' => 'Centeio', 'correct_answer' => false]
                ]],
        ['id' => '9ebe3032-0d36-5b67-9a39-4ab98390c775', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual leguminosa verde e arredondada é frequentemente usada em sopas e saladas?', 'difficulty' => 1, 'weight' => 123, 'alternatives' => [
                    ['id' => '109e858d-0e54-5d1c-ac03-30fb8fd92d07', 'description' => 'Feijão', 'correct_answer' => false],
                    ['id' => '389356f8-fcb6-5313-bfa4-fbf91a0a24a9', 'description' => 'Lentilha', 'correct_answer' => false],
                    ['id' => 'e3b6a7ca-aa0a-5aa9-b1ba-28eaf90531b1', 'description' => 'Ervilha', 'correct_answer' => true],
                    ['id' => 'bbd43858-10f2-5b17-8546-9292f10f3e26', 'description' => 'Centeio', 'correct_answer' => false],
                    ['id' => 'ec79b7d4-ed42-53a4-ba91-d6e0429b944a', 'description' => 'Arroz', 'correct_answer' => false]
                ]],
        ['id' => '6c6c1894-5cd6-56c1-a5d5-0aa6eebfc60e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual alimento líquido é a matéria-prima tradicional de muitos derivados lácteos?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => 'b6571c2b-7705-549c-a49f-00843c8f2450', 'description' => 'parmesão', 'correct_answer' => false],
                    ['id' => '20014c70-8b24-5d62-b3a0-11d10eeff803', 'description' => 'Leite', 'correct_answer' => true],
                    ['id' => '3da8b11f-be1b-5001-8e4e-2b11a0b0887a', 'description' => 'Queijo', 'correct_answer' => false],
                    ['id' => 'ddd81da1-8cc0-52fc-bb42-4e2f7d1de809', 'description' => 'Requeijão', 'correct_answer' => false],
                    ['id' => '9264d397-7820-572d-9496-a48b1f026778', 'description' => 'Creme de leite', 'correct_answer' => false]
                ]],
        ['id' => '276a041e-f026-52e6-be97-1e2108489a16', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual alimento é produzido pela coagulação do leite e pode passar por maturação?', 'difficulty' => 1, 'weight' => 138, 'alternatives' => [
                    ['id' => 'e1d81847-8505-548c-8776-ebb67330f041', 'description' => 'Queijo', 'correct_answer' => true],
                    ['id' => '9058d4e3-621e-54e4-8e51-b26fd9611388', 'description' => 'Requeijão', 'correct_answer' => false],
                    ['id' => '645d139f-5466-55e5-b783-8c70672180ee', 'description' => 'Coalhada', 'correct_answer' => false],
                    ['id' => '7b0fca6e-a2a4-5151-bbcc-c2e74b0fc0c9', 'description' => 'Leite', 'correct_answer' => false],
                    ['id' => 'a5f88c24-c6bf-52cf-84ff-dff6988f5089', 'description' => 'Manteiga', 'correct_answer' => false]
                ]],
        ['id' => '61846a7e-86c7-50b1-bc81-dcf57e11bfd6', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual derivado do leite é obtido por fermentação com culturas bacterianas específicas?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '96ec3882-883a-5e64-bccb-fb261bd559c2', 'description' => 'Queijo', 'correct_answer' => false],
                    ['id' => '9506afc3-f8c9-55c3-a7c4-ded9a9ecc78c', 'description' => 'Requeijão', 'correct_answer' => false],
                    ['id' => '5811c166-50be-5c1f-a3f1-9f071bc3a599', 'description' => 'Muçarela', 'correct_answer' => false],
                    ['id' => '0ef37a04-7c0e-5363-8c1a-ea240c181dd1', 'description' => 'Creme de leite', 'correct_answer' => false],
                    ['id' => '3ff4ca1f-8494-50f6-80a6-8865c47b0064', 'description' => 'Iogurte', 'correct_answer' => true]
                ]],
        ['id' => 'de779d9b-3a95-5939-9784-2dfc8a9d3634', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual produto lácteo é obtido principalmente pela agitação do creme de leite?', 'difficulty' => 1, 'weight' => 139, 'alternatives' => [
                    ['id' => 'e2848bcd-d288-509e-81c7-41994e4814a6', 'description' => 'Manteiga', 'correct_answer' => true],
                    ['id' => '6c61555c-3396-5411-a071-13f347859246', 'description' => 'Coalhada', 'correct_answer' => false],
                    ['id' => '492dec13-0009-5315-bcfb-c567f66aed5e', 'description' => 'Iogurte', 'correct_answer' => false],
                    ['id' => 'f328e259-69c5-5bdc-be67-f3cd9cdae5ec', 'description' => 'Creme de leite', 'correct_answer' => false],
                    ['id' => '912b96ab-50c2-5ecf-a898-b0b5e6bf55f1', 'description' => 'Queijo', 'correct_answer' => false]
                ]],
        ['id' => 'f7b9f482-d58d-5cbd-83bf-77e7a53c43b5', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual ingrediente lácteo é usado para dar cremosidade a molhos e sobremesas?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => '29c40cc6-891c-587e-b0dd-df95ba315550', 'description' => 'Manteiga', 'correct_answer' => false],
                    ['id' => '3bcbb903-f10b-50ee-a6f8-aaf7dcd69414', 'description' => 'Leite', 'correct_answer' => false],
                    ['id' => 'a2b913c0-e90c-5005-b848-1e4fe823c1c5', 'description' => 'Creme de leite', 'correct_answer' => true],
                    ['id' => '6cb5d536-cc46-54e1-9040-11d5172b7995', 'description' => 'Iogurte', 'correct_answer' => false],
                    ['id' => '5d841bb6-38b8-5224-9800-bc1786ad39ce', 'description' => 'Ricota', 'correct_answer' => false]
                ]],
        ['id' => '1a862f43-2e97-5f10-9373-6be6dec858da', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual erva aromática é um ingrediente clássico do molho pesto genovês?', 'difficulty' => 1, 'weight' => 174, 'alternatives' => [
                    ['id' => 'ce1272b5-48fe-5ebe-abdf-f4c4ea0f9e81', 'description' => 'Coentro', 'correct_answer' => false],
                    ['id' => 'e8756eb2-5a67-5c90-a9ea-a7cf756c4fb5', 'description' => 'Salsa', 'correct_answer' => false],
                    ['id' => 'db59bbf9-dd42-5409-a2bb-b129a00d64ad', 'description' => 'Sálvia', 'correct_answer' => false],
                    ['id' => 'd3a0bff9-ee44-5708-987a-770cc5c9dc2f', 'description' => 'Manjericão', 'correct_answer' => true],
                    ['id' => 'af8c97be-b70e-56d0-816a-5aecb663e222', 'description' => 'Louro', 'correct_answer' => false]
                ]],
        ['id' => 'e68e3ad1-7455-59b2-9993-ebc97ed2c6fe', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual erva de folhas verdes é muito usada picada para finalizar pratos e guarnições?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => '78f45f88-9b2c-5a06-832b-455965257810', 'description' => 'Salsa', 'correct_answer' => true],
                    ['id' => '0cf9763e-2305-5ee2-a727-e041f7a5651f', 'description' => 'Manjericão', 'correct_answer' => false],
                    ['id' => '24ef1d80-0d8a-50b6-ad41-f3a61e38f3f9', 'description' => 'Orégano', 'correct_answer' => false],
                    ['id' => '2dccc11f-b954-5aac-b101-01cdd9db10d8', 'description' => 'Louro', 'correct_answer' => false],
                    ['id' => '24f63155-c373-505d-93d8-1adf124d5c4f', 'description' => 'Coentro', 'correct_answer' => false]
                ]],
        ['id' => 'a658fe3e-2384-5b9c-a19e-427168f8599e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual erva de sabor marcante é bastante usada em pratos do Nordeste brasileiro e em cozinhas latino-americanas?', 'difficulty' => 1, 'weight' => 117, 'alternatives' => [
                    ['id' => '1c3fe0eb-7f71-5cc0-9b13-06996fb311ce', 'description' => 'Hortelã', 'correct_answer' => false],
                    ['id' => '92ee0349-dd14-58ca-9386-f0ab8fb17460', 'description' => 'Cebolinha', 'correct_answer' => false],
                    ['id' => 'd4bd2809-a0ab-5e88-9301-11bae870db43', 'description' => 'Manjericão', 'correct_answer' => false],
                    ['id' => '9c0c9ac7-58a8-51aa-a190-cac9cdf56002', 'description' => 'Coentro', 'correct_answer' => true],
                    ['id' => '45ad4c23-13d3-5aad-99f3-abb7abf4a6b6', 'description' => 'Salsa', 'correct_answer' => false]
                ]],
        ['id' => '86caa429-6e62-5448-bf47-d2a0fb7d210b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual erva aromática de folhas finas é frequentemente usada para temperar batatas e carnes assadas?', 'difficulty' => 1, 'weight' => 195, 'alternatives' => [
                    ['id' => '75d88188-a1e2-5c04-880b-628657cc0a38', 'description' => 'Salsa', 'correct_answer' => false],
                    ['id' => 'a7bcac87-6800-5263-b776-70f39d95aac8', 'description' => 'Coentro', 'correct_answer' => false],
                    ['id' => '675cd99b-13e9-50a7-b1e8-034111121bc9', 'description' => 'Manjericão', 'correct_answer' => false],
                    ['id' => '98533149-c201-5cb2-a02e-b46d26bf4d88', 'description' => 'Cebolinha', 'correct_answer' => false],
                    ['id' => 'fb0ce7ab-7131-57e9-8dfe-544dd29a56c3', 'description' => 'Alecrim', 'correct_answer' => true]
                ]],
        ['id' => '9e32cb6c-fc20-5505-a797-b3249ccea9b9', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual erva de pequenas folhas é comum em buquês de ervas e temperos de ensopados?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => '228c79ae-663d-5da2-a67d-c92a1a87ce87', 'description' => 'Sálvia', 'correct_answer' => false],
                    ['id' => 'f8e28ca3-a359-58dd-b59e-45109d610484', 'description' => 'Louro', 'correct_answer' => false],
                    ['id' => 'fe0362b0-d519-5af1-9423-ffed1f81d957', 'description' => 'Tomilho', 'correct_answer' => true],
                    ['id' => 'ae5c547e-c972-5abb-b3ff-8d5cdb5f7835', 'description' => 'Coentro', 'correct_answer' => false],
                    ['id' => '3ab8f93b-7168-5864-bf79-ad46c2b69f5e', 'description' => 'Hortelã', 'correct_answer' => false]
                ]],
        ['id' => 'a4dc54b5-1ad2-56d3-a5f5-8e2ef0febb01', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bebida é normalmente preparada pela extração de compostos de grãos torrados e moídos?', 'difficulty' => 1, 'weight' => 128, 'alternatives' => [
                    ['id' => '1353c260-0c1c-59bd-bbcd-de7b11343818', 'description' => 'Café', 'correct_answer' => true],
                    ['id' => '5809ce10-75c5-5f2c-bbb4-cba9b35367d7', 'description' => 'Chocolate quente', 'correct_answer' => false],
                    ['id' => '969dcf28-f3f2-561d-bc0c-99b31127f1d6', 'description' => 'Chá', 'correct_answer' => false],
                    ['id' => '56ca44ff-efcb-56a2-88c8-6351a76f3156', 'description' => 'Refrigerante', 'correct_answer' => false],
                    ['id' => '2c9d849e-6097-5f25-9ec1-8d11ae4a5625', 'description' => 'Mate', 'correct_answer' => false]
                ]],
        ['id' => 'bac88bc9-18dc-5275-a075-230279e7e367', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bebida é tradicionalmente preparada por infusão de folhas de Camellia sinensis?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => 'c6d1a1a6-1000-5be4-895f-f5b9ef2740e3', 'description' => 'Limonada', 'correct_answer' => false],
                    ['id' => '70e89b23-e2e9-59eb-b56c-623217cb97fe', 'description' => 'Refrigerante', 'correct_answer' => false],
                    ['id' => '91f2718e-07df-5bbc-b36b-bda70df17142', 'description' => 'Chá', 'correct_answer' => true],
                    ['id' => 'e8d1b646-6031-5921-b9d5-67678a1f2d8f', 'description' => 'Água de coco', 'correct_answer' => false],
                    ['id' => 'fe8611e3-45a8-5813-8e0a-6653193aea01', 'description' => 'Café', 'correct_answer' => false]
                ]],
        ['id' => '7ddc0453-b103-5ed0-89fe-ad181b59dd25', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bebida é obtida ao extrair o líquido de frutas?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => '276a9c17-3d2f-5320-ab59-2c6d8b8a6527', 'description' => 'Café', 'correct_answer' => false],
                    ['id' => '608c9226-f258-5168-9fab-e3a89b1a394e', 'description' => 'Chá', 'correct_answer' => false],
                    ['id' => 'b8476b04-03fd-5804-98dd-a79ca4704a00', 'description' => 'Suco', 'correct_answer' => true],
                    ['id' => 'a43b7cb6-e94f-5431-a842-51953c098e8a', 'description' => 'Mate', 'correct_answer' => false],
                    ['id' => '89dec63e-b9d5-5ac7-a3de-b10530639af1', 'description' => 'Chocolate quente', 'correct_answer' => false]
                ]],
        ['id' => '555e8049-fbe6-5385-be6b-043429bae17d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bebida costuma combinar água, limão e açúcar?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => '2fa39f81-0201-560c-9e9f-da559d4b0c9b', 'description' => 'Leite', 'correct_answer' => false],
                    ['id' => 'c37ad042-4369-5773-b82d-4406503de98e', 'description' => 'Limonada', 'correct_answer' => true],
                    ['id' => 'aea43b73-f690-5065-8d93-f5f9d14bea81', 'description' => 'Mate', 'correct_answer' => false],
                    ['id' => '3b4bfda1-d829-5e48-9baa-6eec00000691', 'description' => 'Chá', 'correct_answer' => false],
                    ['id' => '06621d68-79ad-5ff3-b709-5cb833e86f23', 'description' => 'Vitamina', 'correct_answer' => false]
                ]],
        ['id' => 'd4ab8bcd-45c2-53e8-bd9e-6236ad52973e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual líquido naturalmente presente no interior do coco verde é consumido como bebida?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => 'aed28bee-f89c-5bb6-acdb-653938525bb6', 'description' => 'Chocolate quente', 'correct_answer' => false],
                    ['id' => '7412f3cd-4030-5572-8368-20aa425d1584', 'description' => 'Suco', 'correct_answer' => false],
                    ['id' => '2882db83-8b73-5827-96be-9b94f6c5cc9c', 'description' => 'Chá', 'correct_answer' => false],
                    ['id' => '07683a4e-5304-58db-97ed-0f167bce274e', 'description' => 'Leite', 'correct_answer' => false],
                    ['id' => '8d3a1546-bdfd-5978-9ab7-4bfda2719ffd', 'description' => 'Água de coco', 'correct_answer' => true]
                ]],
        ['id' => 'beeb5a47-4b27-55d5-82b9-8c2490d07480', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual sobremesa assada costuma ser preparada com farinha, ovos, açúcar e algum agente de crescimento?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => '5a2cf014-e3a9-5208-b9cf-e1655eb87372', 'description' => 'Sorvete', 'correct_answer' => false],
                    ['id' => '0ec213cf-082c-5ce6-94c7-b7114c25c9e9', 'description' => 'Paçoca', 'correct_answer' => false],
                    ['id' => '6d3665d4-53d8-5cc8-b50d-a1bf5e59efb0', 'description' => 'Mousse', 'correct_answer' => false],
                    ['id' => '52d64d80-c4cb-5a7a-b78f-ed539a561fc7', 'description' => 'Arroz-doce', 'correct_answer' => false],
                    ['id' => '815cb4d0-7058-5e28-931d-461230feec0f', 'description' => 'Bolo', 'correct_answer' => true]
                ]],
        ['id' => 'e139b912-8ce2-52ea-9911-c4b3e7edbfe3', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação pode ter uma base de massa e um recheio doce ou salgado?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => '2d297254-24e3-5a48-9b61-47b0ac87a60f', 'description' => 'Doce de leite', 'correct_answer' => false],
                    ['id' => '49cf6737-160f-5b65-89a0-e5b51f2f4c92', 'description' => 'Arroz-doce', 'correct_answer' => false],
                    ['id' => '6c89917e-8f5d-54cf-9b78-fc74c9662ee2', 'description' => 'Pudim', 'correct_answer' => false],
                    ['id' => '407aadff-40f2-5fb7-8b4c-1974cb6f807b', 'description' => 'Torta', 'correct_answer' => true],
                    ['id' => '2004c790-5356-5d25-a9f9-eeb7b9d7fcec', 'description' => 'Gelatina', 'correct_answer' => false]
                ]],
        ['id' => '9a667571-e833-56fa-ac91-dc83cfb604ab', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual sobremesa cremosa é frequentemente preparada em banho-maria e servida com calda de caramelo?', 'difficulty' => 1, 'weight' => 113, 'alternatives' => [
                    ['id' => '7e469432-7d65-5eb2-b26c-abe09faf961f', 'description' => 'Pudim', 'correct_answer' => true],
                    ['id' => 'db088941-e353-53c3-8ef6-c162a6d59f0b', 'description' => 'Doce de leite', 'correct_answer' => false],
                    ['id' => '82743bf4-6d0d-5754-99c3-2a42984e2f10', 'description' => 'Sorvete', 'correct_answer' => false],
                    ['id' => '948d85ec-1020-523f-8603-eb7f322d9057', 'description' => 'Gelatina', 'correct_answer' => false],
                    ['id' => 'e23e3e97-3072-5d56-88b9-9adda79db2b9', 'description' => 'Brigadeiro', 'correct_answer' => false]
                ]],
        ['id' => 'd02c9d22-4cfe-5c05-b8d9-1554199f913c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual sobremesa aerada costuma ter textura leve e pode ser feita com chocolate ou frutas?', 'difficulty' => 1, 'weight' => 177, 'alternatives' => [
                    ['id' => '9338b8d2-c58a-5850-a64a-b5261082b090', 'description' => 'Paçoca', 'correct_answer' => false],
                    ['id' => 'dad3bf5c-2c7a-5aeb-beec-8f65e25d4485', 'description' => 'Sorvete', 'correct_answer' => false],
                    ['id' => '26356b9e-b974-5de0-9eef-0ff393ddb49a', 'description' => 'Mousse', 'correct_answer' => true],
                    ['id' => '8932b4f3-66e7-5890-b3bb-3d10fe0b15bc', 'description' => 'Brigadeiro', 'correct_answer' => false],
                    ['id' => '09154ca5-c2f8-5247-8d85-578f3eb468bc', 'description' => 'Torta', 'correct_answer' => false]
                ]],
        ['id' => '43858e4a-e4bc-5cfa-9769-c6cf0639a48a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual sobremesa gelada é produzida por congelamento e agitação de uma mistura cremosa?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => 'b8386ca3-00b4-5451-b3c4-953fb0fbe7c9', 'description' => 'Sorvete', 'correct_answer' => true],
                    ['id' => 'ebfb7a78-c939-5e2d-a832-471fd945adbf', 'description' => 'Bolo', 'correct_answer' => false],
                    ['id' => 'a123eae4-525e-5e06-af79-5be5a96c797f', 'description' => 'Torta', 'correct_answer' => false],
                    ['id' => '8207eb10-0556-51f0-9e88-6c97abb12390', 'description' => 'Gelatina', 'correct_answer' => false],
                    ['id' => '38a13344-758b-545e-8ce3-ca2f3fb1b81d', 'description' => 'Mousse', 'correct_answer' => false]
                ]],
        ['id' => '7b17b187-5f27-5bef-8837-7ebef33fe0cb', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual alimento assado é tradicionalmente preparado com farinha, água e fermento?', 'difficulty' => 1, 'weight' => 176, 'alternatives' => [
                    ['id' => '4787a80c-73b1-59f3-ab27-1eedc0d788f5', 'description' => 'Pão de queijo', 'correct_answer' => false],
                    ['id' => 'e49e3d1d-9ac2-54b0-92c7-2426fc7e9bb2', 'description' => 'Torrada', 'correct_answer' => false],
                    ['id' => 'f858f509-ba49-59cf-9c85-b2ecb73cc0d5', 'description' => 'Croissant', 'correct_answer' => false],
                    ['id' => 'ae771a40-fd95-557a-9966-182b7ad736f0', 'description' => 'Pão', 'correct_answer' => true],
                    ['id' => 'a227476f-9d70-56c3-b477-08f0b634c30a', 'description' => 'Rosquinha', 'correct_answer' => false]
                ]],
        ['id' => '1c2ed276-d6d4-53d0-9b97-0958604655e3', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual produto de panificação costuma ser pequeno, seco e crocante?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => 'c74bf25e-2518-55ce-9e61-5018c7ac5cd4', 'description' => 'Pão', 'correct_answer' => false],
                    ['id' => 'd67b90be-99f6-5052-b0d7-c2207545eb20', 'description' => 'Biscoito', 'correct_answer' => true],
                    ['id' => '2b98084b-d885-5691-bb38-f6c032b69871', 'description' => 'Torrada', 'correct_answer' => false],
                    ['id' => 'fe220ca5-61af-5a44-b1ba-bc11677826c9', 'description' => 'Croissant', 'correct_answer' => false],
                    ['id' => 'b3cccceb-e580-58fc-879f-930ed74e3d5a', 'description' => 'Rosquinha', 'correct_answer' => false]
                ]],
        ['id' => '214cdbc2-4c9c-535b-bfa7-7ae13fb74486', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação feita com massa líquida é cozida em uma frigideira e pode receber recheios?', 'difficulty' => 1, 'weight' => 143, 'alternatives' => [
                    ['id' => '460be3c0-6b65-50d4-b7b1-889617a8f189', 'description' => 'Biscoito', 'correct_answer' => false],
                    ['id' => '7eb6ad2d-5b56-5034-b828-5f08fcf45eb4', 'description' => 'Waffle', 'correct_answer' => false],
                    ['id' => '3eaef078-1180-56a0-b051-88f6e74fa405', 'description' => 'Pão', 'correct_answer' => false],
                    ['id' => '99c9299b-fa90-5168-9e9e-4b8516f69dae', 'description' => 'Rosquinha', 'correct_answer' => false],
                    ['id' => '1b9fa615-1097-5a4a-890a-d4de47150f15', 'description' => 'Panqueca', 'correct_answer' => true]
                ]],
        ['id' => 'cd18c0ce-277c-53e5-b3c1-9190e69b9adb', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação de massa é assada em uma prensa que deixa um padrão quadriculado?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '1c1ae952-d84c-54cd-8297-573c867c8858', 'description' => 'Biscoito', 'correct_answer' => false],
                    ['id' => 'a19abf9d-6cb8-59b1-bb8f-5a1857e7a5b0', 'description' => 'Panqueca', 'correct_answer' => false],
                    ['id' => 'aa6af5bf-dcd2-51d2-b54a-402b43f869ac', 'description' => 'Waffle', 'correct_answer' => true],
                    ['id' => 'afde487a-0111-501a-89e7-d880864cfe8a', 'description' => 'Pão', 'correct_answer' => false],
                    ['id' => 'c136b967-e0b0-54de-b864-c4e9e3f836a7', 'description' => 'Bolo', 'correct_answer' => false]
                ]],
        ['id' => 'c1f9941c-ab73-5d03-b97c-342ccf9ba325', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual pão folhado de origem francesa tem formato curvo e camadas delicadas?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => '659d98c2-937e-5441-bf6b-1a543fb928ae', 'description' => 'Rosquinha', 'correct_answer' => false],
                    ['id' => '3faa8817-d868-5a37-936e-93198c495564', 'description' => 'Croissant', 'correct_answer' => true],
                    ['id' => '52e75ce0-bec6-571c-960c-1d66bcbed67e', 'description' => 'Waffle', 'correct_answer' => false],
                    ['id' => 'e447af0a-6d09-5523-84e4-89f42de867f6', 'description' => 'Crepe', 'correct_answer' => false],
                    ['id' => '8c0f4835-bc12-56cc-bc66-194647e7325e', 'description' => 'Biscoito', 'correct_answer' => false]
                ]],
        ['id' => '33b8df6c-da87-5105-947d-6e55451ea11b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual ingrediente é usado principalmente para realçar o sabor salgado dos alimentos?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => 'a458a1c5-6592-5d7f-bea5-c591c9e74e83', 'description' => 'Mel', 'correct_answer' => false],
                    ['id' => '7c5c7a13-2450-5527-8b94-49d406696ca2', 'description' => 'Sal', 'correct_answer' => true],
                    ['id' => '57a44895-9ce4-5df8-ba00-3700a2f74ad1', 'description' => 'Canela', 'correct_answer' => false],
                    ['id' => '4c0a3821-be7d-5e13-87ab-f4747d3da280', 'description' => 'Azeite', 'correct_answer' => false],
                    ['id' => 'f1bfd4e3-1639-5a1d-adeb-52eb9b82a92e', 'description' => 'Açúcar', 'correct_answer' => false]
                ]],
        ['id' => '5a61b67e-e6bd-5a81-bf89-c40cd712fa0e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual ingrediente cristalino é usado para adoçar bebidas e sobremesas?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => '368ec822-aad2-506b-8fc8-d48b1f69d6ac', 'description' => 'Colorau', 'correct_answer' => false],
                    ['id' => 'e5898708-4d95-581a-9bd4-af37fde103ea', 'description' => 'Sal', 'correct_answer' => false],
                    ['id' => '665209f1-270e-51b7-a134-834f93a87d09', 'description' => 'Vinagre', 'correct_answer' => false],
                    ['id' => '50262c14-726e-50f3-9625-d7e4bf2b6882', 'description' => 'Açúcar', 'correct_answer' => true],
                    ['id' => '5ca28283-7a7e-596f-93cd-ce8fc2f3600c', 'description' => 'Pimenta-do-reino', 'correct_answer' => false]
                ]],
        ['id' => 'e027ccb0-2861-5ea1-8dff-b159167c6e95', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual líquido ácido é obtido por fermentação e é usado em conservas e temperos?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => '1581c07e-14de-5efa-b48b-021051dd2874', 'description' => 'Mostarda', 'correct_answer' => false],
                    ['id' => '9cf01ae1-3ff0-5a9f-8532-ec2118df654a', 'description' => 'Açúcar', 'correct_answer' => false],
                    ['id' => 'b9f51003-5c81-5597-b622-455763279836', 'description' => 'Azeite', 'correct_answer' => false],
                    ['id' => '7af85b5d-a607-591c-9312-e63b4949af61', 'description' => 'Colorau', 'correct_answer' => false],
                    ['id' => 'f245f93d-e2d6-50bd-b4eb-b7195a85a300', 'description' => 'Vinagre', 'correct_answer' => true]
                ]],
        ['id' => '902686a2-2259-55fa-aeee-ac8d9b6a0503', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual óleo alimentar é extraído de azeitonas?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => 'a886fe7f-9884-54a1-90ae-f2956884a056', 'description' => 'Cominho', 'correct_answer' => false],
                    ['id' => '56401cf8-f73c-5d6c-ae55-84fac1df09a1', 'description' => 'Pimenta-do-reino', 'correct_answer' => false],
                    ['id' => 'fa5f084e-df8d-5d23-8f66-f9b604b16d16', 'description' => 'Vinagre', 'correct_answer' => false],
                    ['id' => 'fa33959c-3585-5a0b-81e9-5e684ff9a833', 'description' => 'Canela', 'correct_answer' => false],
                    ['id' => '2d572f28-2bc0-5d2e-ae45-243abc6626d9', 'description' => 'Azeite', 'correct_answer' => true]
                ]],
        ['id' => '4565b412-b0f8-547d-805c-4c927e2dd67c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual alimento doce é produzido por abelhas a partir do néctar das flores?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => 'adc5f745-7733-5bf7-89f0-38a4faaa61aa', 'description' => 'Mel', 'correct_answer' => true],
                    ['id' => '567b24f2-80c4-5df8-83bb-e77c362795d3', 'description' => 'Pimenta-do-reino', 'correct_answer' => false],
                    ['id' => '5da586a4-fbf5-5474-b6ed-6da42628afba', 'description' => 'Açúcar', 'correct_answer' => false],
                    ['id' => '7ec860b6-0911-533e-afec-68771f648139', 'description' => 'Mostarda', 'correct_answer' => false],
                    ['id' => '296ffffb-be8f-5a3f-a7a8-a061bab7e0fe', 'description' => 'Azeite', 'correct_answer' => false]
                ]],
        ['id' => '1d56e1be-1c16-5894-9805-bc89f6d1deb2', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato italiano é preparado mexendo arroz gradualmente com caldo para obter textura cremosa?', 'difficulty' => 2, 'weight' => 332, 'alternatives' => [
                    ['id' => '78519f14-e8c6-5786-a3d0-6b5d9939e8d6', 'description' => 'Arroz à grega', 'correct_answer' => false],
                    ['id' => '34a4e0c1-11e5-5dbd-ae19-5359124f26a8', 'description' => 'Risoto', 'correct_answer' => true],
                    ['id' => '5f52cd99-4cbf-502c-af4f-f32ee6aab843', 'description' => 'Jambalaya', 'correct_answer' => false],
                    ['id' => 'f13e4fe6-b0f2-5b76-a8e0-2f006d666b0a', 'description' => 'Pilaf', 'correct_answer' => false],
                    ['id' => 'd7ad9869-ca46-5e57-add8-a866353f3679', 'description' => 'Sushi', 'correct_answer' => false]
                ]],
        ['id' => '89af75b2-39d5-5092-a9bc-939eb10d8e13', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato espanhol de arroz é tradicionalmente associado à região de Valência?', 'difficulty' => 2, 'weight' => 291, 'alternatives' => [
                    ['id' => 'e6d85ddb-b187-596d-b39a-693bd26e8909', 'description' => 'Arroz de pato', 'correct_answer' => false],
                    ['id' => '3cfd8b38-4b1a-5885-9168-33759d48bd12', 'description' => 'Risoto', 'correct_answer' => false],
                    ['id' => '8604b6b7-d19f-568b-b7c5-e422c66be5a1', 'description' => 'Arroz carreteiro', 'correct_answer' => false],
                    ['id' => '356abe16-8086-58b1-8e55-3a526f3e5a80', 'description' => 'Paella', 'correct_answer' => true],
                    ['id' => 'd1d93643-374e-523a-82b3-20771ca3c225', 'description' => 'Biryani', 'correct_answer' => false]
                ]],
        ['id' => '2b65aaf8-33a8-5530-979e-d1062440582b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato brasileiro combina arroz com carne-seca ou charque e tem origem ligada aos carreteiros?', 'difficulty' => 2, 'weight' => 298, 'alternatives' => [
                    ['id' => 'da2fee8b-79f7-5fc4-bf77-e16a2345f336', 'description' => 'Arroz à grega', 'correct_answer' => false],
                    ['id' => 'bf7e41f7-b8d2-5516-8b45-c6281d4d05e8', 'description' => 'Arroz carreteiro', 'correct_answer' => true],
                    ['id' => '814b1c86-cd04-5ddd-ac61-196dde2f6b56', 'description' => 'Arroz de pato', 'correct_answer' => false],
                    ['id' => '7f2fd481-9a50-5c53-a3cd-59f784e7bfbe', 'description' => 'Risoto', 'correct_answer' => false],
                    ['id' => '96f36c8c-7087-5801-8f64-35c9c91eb44e', 'description' => 'Pilaf', 'correct_answer' => false]
                ]],
        ['id' => 'a40fd27a-da34-5d13-b5a5-be36a04e2837', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato português tradicional combina arroz com carne de pato, muitas vezes desfiada?', 'difficulty' => 2, 'weight' => 394, 'alternatives' => [
                    ['id' => '8e74c9cf-9164-526d-834d-4524fb477c95', 'description' => 'Biryani', 'correct_answer' => false],
                    ['id' => '312b30be-e960-523e-a075-e7829dc7ba7d', 'description' => 'Arroz à grega', 'correct_answer' => false],
                    ['id' => '0c3d039a-7ddb-535b-85c4-39218836cb9c', 'description' => 'Jambalaya', 'correct_answer' => false],
                    ['id' => '1c88c73c-17e2-5690-b552-7b45724bed10', 'description' => 'Arroz de pato', 'correct_answer' => true],
                    ['id' => 'b9b2fca3-4f2a-5f5d-a6a8-9473ea3cb2dc', 'description' => 'Arroz carreteiro', 'correct_answer' => false]
                ]],
        ['id' => '3f6e86ec-084b-559e-a213-7b314110cfc3', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato da Louisiana mistura arroz, carnes ou frutos do mar e temperos crioulos?', 'difficulty' => 2, 'weight' => 329, 'alternatives' => [
                    ['id' => 'ca28e5a2-f564-5ffd-b5c5-2a22126b2456', 'description' => 'Paella', 'correct_answer' => false],
                    ['id' => 'cac26fd7-a1dc-5ee5-8a9a-21394b8144c3', 'description' => 'Arroz carreteiro', 'correct_answer' => false],
                    ['id' => '3029dc13-48a3-5b5a-b2f1-6eddb066ecd6', 'description' => 'Pilaf', 'correct_answer' => false],
                    ['id' => 'bfd38919-9a2c-5602-a562-bbed40928825', 'description' => 'Jambalaya', 'correct_answer' => true],
                    ['id' => '15bd2e3a-7a09-5703-a788-ded019ce0776', 'description' => 'Arroz-doce', 'correct_answer' => false]
                ]],
        ['id' => '0178cc39-c9ca-5a25-9824-1890095247f7', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo italiano de leite de vaca é produzido em áreas específicas da Emilia-Romagna e maturado por longos períodos?', 'difficulty' => 2, 'weight' => 246, 'alternatives' => [
                    ['id' => 'ff4f4e9a-87c6-5cd1-83d2-90df8f0b2e46', 'description' => 'Brie', 'correct_answer' => false],
                    ['id' => 'd9ec69ca-8a33-5eb8-87ff-afe16f1e71f9', 'description' => 'Pecorino Romano', 'correct_answer' => false],
                    ['id' => '18a71856-2adb-566c-9f81-4dea023b0c3f', 'description' => 'Camembert', 'correct_answer' => false],
                    ['id' => 'd9c0b1eb-96a6-5246-be35-ae6f212dd548', 'description' => 'Parmigiano-Reggiano', 'correct_answer' => true],
                    ['id' => 'b5f52388-c920-59ab-972f-f7e470b682fb', 'description' => 'Roquefort', 'correct_answer' => false]
                ]],
        ['id' => '6851224c-5b4a-5ad8-863e-96d0589a680f', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo italiano de massa azul é produzido com leite de vaca e possui veios de fungos?', 'difficulty' => 2, 'weight' => 294, 'alternatives' => [
                    ['id' => 'cc17e913-bfa7-5d62-9a5e-5013e673d7b4', 'description' => 'Roquefort', 'correct_answer' => false],
                    ['id' => 'bc3c6ce2-656e-51ba-8271-ee3b061516c5', 'description' => 'Brie', 'correct_answer' => false],
                    ['id' => 'b914c8ca-c1d4-5eee-80f7-c73187edcd4c', 'description' => 'Gorgonzola', 'correct_answer' => true],
                    ['id' => '60cf1a65-3574-5ff2-ad05-fb9baaf0288d', 'description' => 'Parmigiano-Reggiano', 'correct_answer' => false],
                    ['id' => 'ea514874-114d-59cc-931e-1b72f2f437e0', 'description' => 'Manchego', 'correct_answer' => false]
                ]],
        ['id' => '1c4cdf0f-5ba4-5490-9882-902e5b6cac8c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo azul francês é tradicionalmente produzido com leite de ovelha e maturado nas cavernas de Roquefort-sur-Soulzon?', 'difficulty' => 2, 'weight' => 325, 'alternatives' => [
                    ['id' => '27717a05-97cf-5e09-a2a3-3310b631c1bd', 'description' => 'Roquefort', 'correct_answer' => true],
                    ['id' => 'c1fb37ff-a3b2-50e8-bfc4-4d4669b9415c', 'description' => 'Camembert', 'correct_answer' => false],
                    ['id' => 'c123a34a-0941-5ab1-ab4e-b461fad680ac', 'description' => 'Brie', 'correct_answer' => false],
                    ['id' => '9bef8f0a-1a2c-5989-822d-08633b716f06', 'description' => 'Gorgonzola', 'correct_answer' => false],
                    ['id' => 'ba2cf3db-cc0e-5573-bcb3-7b45cb576e89', 'description' => 'Manchego', 'correct_answer' => false]
                ]],
        ['id' => '65d79c54-7ac5-5c98-b624-1834164d7f60', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo francês de massa mole possui casca branca aveludada e é associado à região de Île-de-France?', 'difficulty' => 2, 'weight' => 350, 'alternatives' => [
                    ['id' => 'b37bfb41-5ac1-5b43-82d3-a3aad22e7298', 'description' => 'Gouda', 'correct_answer' => false],
                    ['id' => 'cfb02916-332c-5ce3-8918-e34ade505939', 'description' => 'Parmigiano-Reggiano', 'correct_answer' => false],
                    ['id' => 'd92596cf-75d7-5061-a3a7-ce65f9bc786e', 'description' => 'Gorgonzola', 'correct_answer' => false],
                    ['id' => 'f4e671db-9093-5277-b1a4-8c153022e8d9', 'description' => 'Brie', 'correct_answer' => true],
                    ['id' => '0569c414-6b3e-5658-bf66-34ffe4d21e8b', 'description' => 'Camembert', 'correct_answer' => false]
                ]],
        ['id' => '2b79d37b-fc6e-5840-ba09-4f883a4deb53', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo francês de massa mole é tradicionalmente associado à Normandia?', 'difficulty' => 2, 'weight' => 317, 'alternatives' => [
                    ['id' => '4812bd83-4bcf-5dda-9ca1-8836d27b8968', 'description' => 'Brie', 'correct_answer' => false],
                    ['id' => 'a8b88e4a-63b3-51d1-b0dd-790691cd9e99', 'description' => 'Manchego', 'correct_answer' => false],
                    ['id' => '58481500-ad01-5c53-a693-1de5b49632ff', 'description' => 'Parmigiano-Reggiano', 'correct_answer' => false],
                    ['id' => '868dd02c-77d8-5cb7-9e89-71a0d8627c3d', 'description' => 'Roquefort', 'correct_answer' => false],
                    ['id' => '92994279-8271-5f9f-b23e-3e8a792de98a', 'description' => 'Camembert', 'correct_answer' => true]
                ]],
        ['id' => '61cdca07-b0fa-51c8-8cda-22cd5991e192', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação japonesa consiste em fatias de peixe ou frutos do mar servidas sem arroz?', 'difficulty' => 2, 'weight' => 296, 'alternatives' => [
                    ['id' => '761bf97a-c764-5cbb-8c96-3b43de1b575f', 'description' => 'Gunkan', 'correct_answer' => false],
                    ['id' => 'b2329e1d-92ed-5cc8-b18d-34df1a5b5740', 'description' => 'Maki', 'correct_answer' => false],
                    ['id' => '8989c01a-359d-5523-a010-26debbba30c6', 'description' => 'Oshizushi', 'correct_answer' => false],
                    ['id' => '2814fafd-70f9-5314-af96-72943efd0b04', 'description' => 'Inari', 'correct_answer' => false],
                    ['id' => '4bfb300a-8185-5a7b-b8ad-533a70301901', 'description' => 'Sashimi', 'correct_answer' => true]
                ]],
        ['id' => '6b1b09f3-afb0-5be8-b486-90ed4c492b62', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual tipo de sushi é formado por uma pequena porção de arroz moldada à mão com uma cobertura?', 'difficulty' => 2, 'weight' => 216, 'alternatives' => [
                    ['id' => 'f7fff82b-421a-5fdc-95a0-66cb013ddae7', 'description' => 'Maki', 'correct_answer' => false],
                    ['id' => '4ac896b8-8ac3-5313-bba4-9c84d586fe82', 'description' => 'Gunkan', 'correct_answer' => false],
                    ['id' => '215c6c82-23d7-510e-97a1-eac5f7013f8f', 'description' => 'Temaki', 'correct_answer' => false],
                    ['id' => 'c6ea085f-6567-58a4-9871-05a0b4da294d', 'description' => 'Nigiri', 'correct_answer' => true],
                    ['id' => 'd42190d8-aae9-5201-8c8d-829f21811b04', 'description' => 'Inari', 'correct_answer' => false]
                ]],
        ['id' => 'b75a4aab-0112-50d8-9aa1-e12e35915cb4', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual tipo de sushi é enrolado em alga nori e cortado em pequenos cilindros?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => 'a0c36691-1d5d-53bd-88b6-5c982168067f', 'description' => 'Sashimi', 'correct_answer' => false],
                    ['id' => 'a8073598-687d-5328-81f4-f7bf15a6de91', 'description' => 'Gunkan', 'correct_answer' => false],
                    ['id' => '46d20351-37a3-52b2-8fae-b42b2db99a63', 'description' => 'Temaki', 'correct_answer' => false],
                    ['id' => 'a5ed13bc-34d9-5d45-bde9-19899f1be7bd', 'description' => 'Maki', 'correct_answer' => true],
                    ['id' => 'c91a0a06-a1d2-5702-b6bc-a46b4d2812eb', 'description' => 'Inari', 'correct_answer' => false]
                ]],
        ['id' => 'd75235cb-daf2-5cb4-a691-d4c9a4a755d1', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação japonesa de sushi é enrolada à mão em formato de cone?', 'difficulty' => 2, 'weight' => 234, 'alternatives' => [
                    ['id' => 'eeed3033-92b4-50f3-802f-db247e0ac04d', 'description' => 'Temaki', 'correct_answer' => true],
                    ['id' => 'ad23855e-19ca-592e-8c81-83faa1e26ffc', 'description' => 'Maki', 'correct_answer' => false],
                    ['id' => '034724ca-6b6a-50ea-aef6-734751e99cf4', 'description' => 'Chirashi', 'correct_answer' => false],
                    ['id' => 'd3012d09-5e36-551b-8251-50f72302e51f', 'description' => 'Oshizushi', 'correct_answer' => false],
                    ['id' => 'de383594-a5f9-5aea-a992-c735f573a911', 'description' => 'Uramaki', 'correct_answer' => false]
                ]],
        ['id' => 'b0b2b6a2-5b92-5a49-9602-e02e26d56dd8', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual tipo de sushi apresenta o arroz na parte externa do rolo e a alga geralmente no interior?', 'difficulty' => 2, 'weight' => 396, 'alternatives' => [
                    ['id' => '348026e2-2863-561d-b8a1-2fbade987ed7', 'description' => 'Temaki', 'correct_answer' => false],
                    ['id' => '3fd276b9-877f-53b5-9417-52fe4e64df5b', 'description' => 'Maki', 'correct_answer' => false],
                    ['id' => '5a1a4116-8aad-5ab0-86ec-227db9711266', 'description' => 'Gunkan', 'correct_answer' => false],
                    ['id' => '9cb663eb-774c-5b14-ab1f-4a3e3e3f68b0', 'description' => 'Uramaki', 'correct_answer' => true],
                    ['id' => 'a510da97-edd0-5456-9eb8-245aee5eda6e', 'description' => 'Sashimi', 'correct_answer' => false]
                ]],
        ['id' => 'a5b77e92-3ae9-5f75-84e0-9f2040012382', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual sobremesa francesa leva creme aromatizado e uma fina camada superior de açúcar caramelizado?', 'difficulty' => 2, 'weight' => 252, 'alternatives' => [
                    ['id' => '802a2807-639e-5a06-b2e1-192ca780d78a', 'description' => 'Torrone', 'correct_answer' => false],
                    ['id' => '24f6bf03-37cf-519d-856b-1dd1f310e01e', 'description' => 'Panna cotta', 'correct_answer' => false],
                    ['id' => '8a8bd712-8f40-55ca-9a85-280f4a0c12a4', 'description' => 'Gelato', 'correct_answer' => false],
                    ['id' => '0a5a4500-14f2-5552-b8e5-f368e2232d29', 'description' => 'Zabaglione', 'correct_answer' => false],
                    ['id' => '59f55d67-3499-53a4-a0b8-eb923678250c', 'description' => 'Crème brûlée', 'correct_answer' => true]
                ]],
        ['id' => '04e2f009-71a8-516b-87c8-b9eaf15a2df4', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual sobremesa italiana é feita com creme de leite adoçado e gelificado?', 'difficulty' => 2, 'weight' => 312, 'alternatives' => [
                    ['id' => 'e19f8726-c287-5892-9c4e-5898aab7dedd', 'description' => 'Cannoli', 'correct_answer' => false],
                    ['id' => 'bef7e707-2f4d-59fe-b569-19cf7e0db6c9', 'description' => 'Crème brûlée', 'correct_answer' => false],
                    ['id' => 'ab35855d-720b-592b-8756-3130b05b2e29', 'description' => 'Panna cotta', 'correct_answer' => true],
                    ['id' => 'f68d5535-83a4-55ac-9ea2-38f5879940fb', 'description' => 'Sfogliatella', 'correct_answer' => false],
                    ['id' => '383f27a1-4aab-589a-a46f-20ac1ec3b6a3', 'description' => 'Gelato', 'correct_answer' => false]
                ]],
        ['id' => '0b270936-0b77-5a45-82e6-81292b7b0540', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual sobremesa italiana combina camadas de biscoitos embebidos em café e creme de mascarpone?', 'difficulty' => 2, 'weight' => 310, 'alternatives' => [
                    ['id' => '017f5796-23ad-5265-b96e-72b6fcdec2da', 'description' => 'Sfogliatella', 'correct_answer' => false],
                    ['id' => '67d9b7c6-d3b0-5749-86de-036f020dc385', 'description' => 'Semifreddo', 'correct_answer' => false],
                    ['id' => '5f7a1128-de68-59da-be39-e64072aa53e9', 'description' => 'Crème brûlée', 'correct_answer' => false],
                    ['id' => 'f48bf78b-c5e8-539f-afff-9076fc1fc99c', 'description' => 'Tiramisù', 'correct_answer' => true],
                    ['id' => '8269c9b4-6d22-599e-a36d-2385eb190c45', 'description' => 'Granita', 'correct_answer' => false]
                ]],
        ['id' => 'd21aa7c8-fe7d-5469-b004-8d7b30f63f79', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual doce siciliano consiste em tubos de massa frita recheados tradicionalmente com ricota adoçada?', 'difficulty' => 2, 'weight' => 392, 'alternatives' => [
                    ['id' => '661bd8b0-9b9a-52a7-b364-b34ff9d5a419', 'description' => 'Sfogliatella', 'correct_answer' => false],
                    ['id' => 'aa13e40e-32f6-5f98-b3d8-d27060b8deff', 'description' => 'Cannoli', 'correct_answer' => true],
                    ['id' => '1bf4e080-c386-5cf7-b4ee-446492357610', 'description' => 'Granita', 'correct_answer' => false],
                    ['id' => '5deccc18-f369-58cd-b3b5-61d7da77befd', 'description' => 'Tiramisù', 'correct_answer' => false],
                    ['id' => '343b31f8-4c79-5b2f-976a-8faf0898ae21', 'description' => 'Zabaglione', 'correct_answer' => false]
                ]],
        ['id' => '0611fcb5-8f8c-51cc-8993-54ffa40dc27c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual doce napolitano possui massa folhada em camadas e recheio tradicional de ricota?', 'difficulty' => 2, 'weight' => 249, 'alternatives' => [
                    ['id' => '097de309-1986-53c0-909e-9a398e1820de', 'description' => 'Zabaglione', 'correct_answer' => false],
                    ['id' => '7467e28d-2f3b-57d8-a3f8-b22101fde815', 'description' => 'Semifreddo', 'correct_answer' => false],
                    ['id' => '7e3d86a1-9e25-578b-b4d2-a4fc7362017c', 'description' => 'Panna cotta', 'correct_answer' => false],
                    ['id' => '2e67719a-42d9-513e-bb37-652bd31c0f60', 'description' => 'Sfogliatella', 'correct_answer' => true],
                    ['id' => 'f80af8a9-5df7-5461-85e8-1c9b8b1d7f0d', 'description' => 'Torrone', 'correct_answer' => false]
                ]],
        ['id' => 'b18c446d-4ba0-5996-8105-816387704206', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual acompanhamento coreano é tradicionalmente feito com vegetais fermentados e temperados, frequentemente acelga?', 'difficulty' => 2, 'weight' => 356, 'alternatives' => [
                    ['id' => '0519ea57-a04d-5132-a229-a6bfe3f10e88', 'description' => 'Natto', 'correct_answer' => false],
                    ['id' => '48460467-6904-5595-988c-c33bcefcd4c5', 'description' => 'Sauerkraut', 'correct_answer' => false],
                    ['id' => '2a4f2cb1-91ae-593a-a829-c68295cee806', 'description' => 'Doenjang', 'correct_answer' => false],
                    ['id' => 'd2d72cc1-ba54-599d-8d68-d46b9cf8e851', 'description' => 'Kimchi', 'correct_answer' => true],
                    ['id' => 'cc950085-910d-5ef4-a087-35c0d3765004', 'description' => 'Kefir', 'correct_answer' => false]
                ]],
        ['id' => '965e3f02-c22f-53a1-bee3-08fd5e455cc9', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual conserva fermentada de repolho é tradicional da culinária alemã e da Europa Central?', 'difficulty' => 2, 'weight' => 215, 'alternatives' => [
                    ['id' => '60a42ec1-4908-57ef-b18a-bba361681325', 'description' => 'Natto', 'correct_answer' => false],
                    ['id' => '71e69dfc-db3b-5f94-bbf7-54cf971637d2', 'description' => 'Kefir', 'correct_answer' => false],
                    ['id' => '71922f71-1ec0-5953-8649-a10510f14bd1', 'description' => 'Sauerkraut', 'correct_answer' => true],
                    ['id' => '00e67893-3a29-5cf1-ad2f-e8bd09db23f7', 'description' => 'Kombucha', 'correct_answer' => false],
                    ['id' => '6991823a-ae36-5aa7-80de-323ada69fc61', 'description' => 'Kimchi', 'correct_answer' => false]
                ]],
        ['id' => '18aa429c-bd2e-520e-a03f-ea4212ad48d1', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bebida fermentada é produzida com grãos que contêm uma comunidade de bactérias e leveduras?', 'difficulty' => 2, 'weight' => 261, 'alternatives' => [
                    ['id' => '5bf8c2c8-9101-5d0a-8139-3ab19dce0cc5', 'description' => 'Kimchi', 'correct_answer' => false],
                    ['id' => '06fa8421-d13a-5059-adaa-dc693015816d', 'description' => 'Natto', 'correct_answer' => false],
                    ['id' => 'c68ce99e-93a7-5bc4-835e-73b668ff1fe7', 'description' => 'Doenjang', 'correct_answer' => false],
                    ['id' => '13c36844-2398-5499-b6d0-d9ce87d944b8', 'description' => 'Kombucha', 'correct_answer' => false],
                    ['id' => '09ad9036-0ef4-5117-af10-08e869faaa91', 'description' => 'Kefir', 'correct_answer' => true]
                ]],
        ['id' => '5d32ba09-eb27-59fa-aed6-70a1609e2fad', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bebida fermentada é preparada a partir de chá adoçado e uma cultura simbiótica de microrganismos?', 'difficulty' => 2, 'weight' => 277, 'alternatives' => [
                    ['id' => '6fd1d743-65b7-56ed-bd1f-e57a36bc533b', 'description' => 'Shoyu', 'correct_answer' => false],
                    ['id' => '3ba0c023-71b5-51f7-af70-dded1cafdec6', 'description' => 'Kombucha', 'correct_answer' => true],
                    ['id' => '6dfec40c-c54b-5b75-b68a-185fc0620db9', 'description' => 'Natto', 'correct_answer' => false],
                    ['id' => '94c1e09f-c082-515d-ba32-4b29807084b0', 'description' => 'Tsukemono', 'correct_answer' => false],
                    ['id' => '3638eb29-32af-50a0-926a-8d3a0aaf6278', 'description' => 'Kefir', 'correct_answer' => false]
                ]],
        ['id' => '3e1b9296-75d6-5559-8a62-38eb27628a7a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual pasta japonesa fermentada é geralmente produzida com soja, sal e koji?', 'difficulty' => 2, 'weight' => 266, 'alternatives' => [
                    ['id' => 'a84cac58-bf05-5087-9c93-aa078a67eef0', 'description' => 'Kombucha', 'correct_answer' => false],
                    ['id' => '1bbd2f2f-a126-515a-8eeb-533d076465c1', 'description' => 'Miso', 'correct_answer' => true],
                    ['id' => '73a27ad7-b9e1-5eed-8a64-8f42ccda7799', 'description' => 'Shoyu', 'correct_answer' => false],
                    ['id' => '1e46db12-08ef-5629-b9a4-c8bb98dbd502', 'description' => 'Kimchi', 'correct_answer' => false],
                    ['id' => 'c2f5d6eb-667f-5a2f-9adf-ff07b4d94b04', 'description' => 'Tsukemono', 'correct_answer' => false]
                ]],
        ['id' => 'bf7d62d1-ea3c-58d7-9f6c-b5d08d5fefdc', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual ensopado provençal de peixes e frutos do mar é associado à cidade de Marselha?', 'difficulty' => 2, 'weight' => 304, 'alternatives' => [
                    ['id' => 'c2ddc82d-84e8-5383-b18b-6aeff979d032', 'description' => 'Quiche Lorraine', 'correct_answer' => false],
                    ['id' => '9d6a81ff-04b5-5e11-a2d2-d4b23264a685', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => 'f34b68c7-7fc9-51d9-910e-90ecba048f8a', 'description' => 'Confit de canard', 'correct_answer' => false],
                    ['id' => '04a5da75-3371-5f61-ada9-8c14d0689f11', 'description' => 'Boeuf bourguignon', 'correct_answer' => false],
                    ['id' => '2d8684e7-5ba6-5ab9-a71f-3545e0edc0f8', 'description' => 'Bouillabaisse', 'correct_answer' => true]
                ]],
        ['id' => 'ebc0214c-f877-59d7-b7a1-12261325c195', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação provençal combina vegetais como berinjela, abobrinha, tomate e pimentão?', 'difficulty' => 2, 'weight' => 329, 'alternatives' => [
                    ['id' => '41d296a0-4ea9-5f03-bbe5-a9e37496010a', 'description' => 'Ratatouille', 'correct_answer' => true],
                    ['id' => '3c6054e1-bbbc-595d-9e90-b4b161f7353e', 'description' => 'Brandade', 'correct_answer' => false],
                    ['id' => '99593f1e-2891-57df-bb8a-926a9ac28f8e', 'description' => 'Coq au vin', 'correct_answer' => false],
                    ['id' => '33ef8a2f-67f0-5d07-a5d6-4ec6747545ba', 'description' => 'Cassoulet', 'correct_answer' => false],
                    ['id' => '55aee4aa-431f-516f-8aa8-f2497019d349', 'description' => 'Boeuf bourguignon', 'correct_answer' => false]
                ]],
        ['id' => '67d63866-a8c5-5ef6-8e89-ae0d5e78d29c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato do sudoeste da França é cozido lentamente com feijão branco e carnes?', 'difficulty' => 2, 'weight' => 270, 'alternatives' => [
                    ['id' => '8f570278-d73d-53dd-9a6b-f96cb205869a', 'description' => 'Confit de canard', 'correct_answer' => false],
                    ['id' => '087fa120-8d49-57bd-b032-e52da239a52d', 'description' => 'Brandade', 'correct_answer' => false],
                    ['id' => '0133bfbe-cbb1-5e88-aa11-4f08c5b4fced', 'description' => 'Tartiflette', 'correct_answer' => false],
                    ['id' => 'f6bebde9-06d4-58f6-baa7-c372ae927bdd', 'description' => 'Quiche Lorraine', 'correct_answer' => false],
                    ['id' => 'eead8188-39ab-5870-b74c-05185f4c5708', 'description' => 'Cassoulet', 'correct_answer' => true]
                ]],
        ['id' => '24c6fff8-d97e-5dc4-b0e9-c91c3eabd929', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato francês cozinha frango lentamente em vinho, geralmente com cogumelos e cebolas?', 'difficulty' => 2, 'weight' => 253, 'alternatives' => [
                    ['id' => 'b41cd25f-fec3-5982-8831-17e049c6f19f', 'description' => 'Coq au vin', 'correct_answer' => true],
                    ['id' => 'e0d8b538-cb74-57b4-9949-42334086f128', 'description' => 'Brandade', 'correct_answer' => false],
                    ['id' => '97b05dad-60e2-56ea-8fb3-9d889e0cd3c8', 'description' => 'Bouillabaisse', 'correct_answer' => false],
                    ['id' => 'ec92687c-e828-523a-a240-1018e9e0addf', 'description' => 'Cassoulet', 'correct_answer' => false],
                    ['id' => 'a7073c1c-6e53-5f82-abd0-a336ef3865b3', 'description' => 'Boeuf bourguignon', 'correct_answer' => false]
                ]],
        ['id' => 'e6952815-f520-5e8f-a713-b37d633b790e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual ensopado francês de carne bovina é tradicionalmente preparado com vinho tinto da Borgonha?', 'difficulty' => 2, 'weight' => 215, 'alternatives' => [
                    ['id' => 'd53c783e-3c5e-52c6-89b4-bfaeffed7ae4', 'description' => 'Boeuf bourguignon', 'correct_answer' => true],
                    ['id' => 'f28cc5cd-df58-5d60-b485-581bcd61ea0b', 'description' => 'Brandade', 'correct_answer' => false],
                    ['id' => '90908df2-bff5-5e44-a5cc-4b5c89475a8d', 'description' => 'Coq au vin', 'correct_answer' => false],
                    ['id' => '9d93b50c-cd9d-5dff-a6f7-8cdeeca6124d', 'description' => 'Confit de canard', 'correct_answer' => false],
                    ['id' => '8e3f1186-f9f6-594d-94de-b6ecdb66b140', 'description' => 'Soupe à l\'oignon', 'correct_answer' => false]
                ]],
        ['id' => '3927dae8-38db-50e1-8922-7752d45aa80a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato peruano prepara peixe ou frutos do mar em marinada ácida, geralmente com limão e temperos?', 'difficulty' => 2, 'weight' => 229, 'alternatives' => [
                    ['id' => '5cadcea7-f6c3-5897-9bd3-ee7133d5c52f', 'description' => 'Ají de gallina', 'correct_answer' => false],
                    ['id' => '256174c5-92d2-5040-92cc-23ffe57e8ee1', 'description' => 'Ceviche', 'correct_answer' => true],
                    ['id' => '36a4ae80-4a99-5bb9-8201-c67d9931e280', 'description' => 'Papa a la huancaína', 'correct_answer' => false],
                    ['id' => 'caa81f21-19c6-5c12-a6f4-abd4a3cf462a', 'description' => 'Anticucho', 'correct_answer' => false],
                    ['id' => '05ded766-c11a-5f11-932e-ab9a4103d04b', 'description' => 'Tiradito', 'correct_answer' => false]
                ]],
        ['id' => 'f73f20fb-ad44-5376-a72f-c8960f8daeaa', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação peruana de peixe cru é cortado em fatias e servido com molho cítrico ou apimentado, sem a cebola típica do ceviche?', 'difficulty' => 2, 'weight' => 372, 'alternatives' => [
                    ['id' => '584e3018-d4bd-5074-bed6-1f1b2bc70eb9', 'description' => 'Tiradito', 'correct_answer' => true],
                    ['id' => 'a871cc62-c7bf-5104-a62b-ea4617a49230', 'description' => 'Rocoto relleno', 'correct_answer' => false],
                    ['id' => 'b67fe235-fca0-55b2-9cf1-01c4753a99c1', 'description' => 'Pachamanca', 'correct_answer' => false],
                    ['id' => '6ee30f06-ff85-5f5e-b7fa-242d0740e396', 'description' => 'Chupe de camarones', 'correct_answer' => false],
                    ['id' => 'bf75fede-92b3-56b0-a9ba-a2e0abe8e5ea', 'description' => 'Ceviche', 'correct_answer' => false]
                ]],
        ['id' => '68919cc5-0e24-5ca8-bb68-7e10152c9e5f', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual espetinho peruano é tradicionalmente preparado com coração bovino marinado?', 'difficulty' => 2, 'weight' => 308, 'alternatives' => [
                    ['id' => '428abfc9-3a96-5f22-a127-695b9ba7e06a', 'description' => 'Lomo saltado', 'correct_answer' => false],
                    ['id' => 'd081dd44-3a45-5561-88c5-fa85a6fb2285', 'description' => 'Chupe de camarones', 'correct_answer' => false],
                    ['id' => '324b4074-cb1d-5546-92b4-30b416e5d7fb', 'description' => 'Tiradito', 'correct_answer' => false],
                    ['id' => 'c892557c-c9f4-57ce-b476-eb2c5af5e94a', 'description' => 'Pachamanca', 'correct_answer' => false],
                    ['id' => 'd84f325a-7ad2-5a2e-98fd-f034b3c97d00', 'description' => 'Anticucho', 'correct_answer' => true]
                ]],
        ['id' => '9c2f48aa-6a11-58af-9bf5-532fbe85a2e4', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato peruano-chinês salteia tiras de carne com cebola, tomate e molho de soja?', 'difficulty' => 2, 'weight' => 282, 'alternatives' => [
                    ['id' => 'b742cb34-73ce-56b7-8e57-b4cd25241b9b', 'description' => 'Chupe de camarones', 'correct_answer' => false],
                    ['id' => '434f3906-52ef-51ba-997c-274640c629ce', 'description' => 'Anticucho', 'correct_answer' => false],
                    ['id' => '0d922649-7ff2-5a42-965d-9066a24c6344', 'description' => 'Rocoto relleno', 'correct_answer' => false],
                    ['id' => 'da81eba7-eccc-5c99-b063-70ad71b76f64', 'description' => 'Pachamanca', 'correct_answer' => false],
                    ['id' => '1262cabf-04aa-5f9b-a46d-8449d1510e4c', 'description' => 'Lomo saltado', 'correct_answer' => true]
                ]],
        ['id' => '00c26b9e-9386-5b13-8f2e-4450454589ec', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual prato peruano cremoso é preparado com frango desfiado e molho de ají amarelo?', 'difficulty' => 2, 'weight' => 244, 'alternatives' => [
                    ['id' => 'ee41715c-171c-5616-8b3e-980006d07d01', 'description' => 'Chupe de camarones', 'correct_answer' => false],
                    ['id' => '34870df5-d309-512b-a853-83301d8fa475', 'description' => 'Tiradito', 'correct_answer' => false],
                    ['id' => 'e1d05b57-1c81-5142-aafc-2e1f1211f103', 'description' => 'Lomo saltado', 'correct_answer' => false],
                    ['id' => '82f89c72-272b-50ff-8178-28a880939587', 'description' => 'Papa a la huancaína', 'correct_answer' => false],
                    ['id' => '8c4e3522-a123-54fb-8007-5be3256ac347', 'description' => 'Ají de gallina', 'correct_answer' => true]
                ]],
        ['id' => 'f0fc85d7-12c8-5789-9072-db0f1d42a64a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho-mãe francês é preparado tradicionalmente com roux branco e leite?', 'difficulty' => 2, 'weight' => 381, 'alternatives' => [
                    ['id' => 'd7847067-7e7b-52d9-b061-1c7252c27df1', 'description' => 'Mayonnaise', 'correct_answer' => false],
                    ['id' => '262ecf8b-f0ba-5aac-bce4-144e18d8fa53', 'description' => 'Vinaigrette', 'correct_answer' => false],
                    ['id' => 'c5b3bb8e-ce19-5b16-a8ef-ae9da8c142e8', 'description' => 'Espagnole', 'correct_answer' => false],
                    ['id' => '73918ba2-cd61-50b8-ac37-6ea3f3be9d0f', 'description' => 'Pesto', 'correct_answer' => false],
                    ['id' => '1a438745-d448-58c8-81a4-b4b4e7810e3a', 'description' => 'Béchamel', 'correct_answer' => true]
                ]],
        ['id' => '127eda91-bcd3-558b-8c05-807529215f82', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho-mãe francês é feito com roux claro e caldo claro, como o de aves ou peixe?', 'difficulty' => 2, 'weight' => 212, 'alternatives' => [
                    ['id' => '6e9453bd-4f29-5050-bcf2-202427fe27fa', 'description' => 'Pesto', 'correct_answer' => false],
                    ['id' => 'c6d82d72-a4a2-5c66-a2d6-ddeb44c07f5a', 'description' => 'Sauce tomate', 'correct_answer' => false],
                    ['id' => 'a57854e0-c2bc-50e0-b0ae-194ce8624ecf', 'description' => 'Chimichurri', 'correct_answer' => false],
                    ['id' => 'ec8ea0dd-ce77-570c-8657-b5fcfb6284f5', 'description' => 'Velouté', 'correct_answer' => true],
                    ['id' => '92ba8767-2218-5a02-a66e-c9b71889a6da', 'description' => 'Espagnole', 'correct_answer' => false]
                ]],
        ['id' => '3ef3a76b-6b7f-522b-a515-5268bdf717ee', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho-mãe clássico francês é escuro e utiliza fundo escuro, roux e mirepoix?', 'difficulty' => 2, 'weight' => 322, 'alternatives' => [
                    ['id' => 'eb739319-f502-5ae6-8c78-d3e84edd2d62', 'description' => 'Espagnole', 'correct_answer' => true],
                    ['id' => '9c61e900-0b49-55b0-995b-ad7f021796cd', 'description' => 'Velouté', 'correct_answer' => false],
                    ['id' => 'f73d3dc7-7997-5bd3-84db-37bc28507c25', 'description' => 'Vinaigrette', 'correct_answer' => false],
                    ['id' => '311c7cfa-e7f6-5f90-b1f6-5b4d842a2ca1', 'description' => 'Béchamel', 'correct_answer' => false],
                    ['id' => '8dfc83ed-f3e4-5ac9-8355-515c20eb1239', 'description' => 'Mayonnaise', 'correct_answer' => false]
                ]],
        ['id' => '5cfadefc-596f-54e5-a5c0-5584f40adccb', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho clássico francês é uma emulsão quente de gemas e manteiga clarificada?', 'difficulty' => 2, 'weight' => 246, 'alternatives' => [
                    ['id' => 'cae3cf81-c703-59e1-91ba-950d42362f7c', 'description' => 'Béchamel', 'correct_answer' => false],
                    ['id' => 'efdd1ff8-4b91-5e00-9341-f87c6faf1192', 'description' => 'Vinaigrette', 'correct_answer' => false],
                    ['id' => 'a98b7f9d-8a1d-5b79-bcef-60eda298cc14', 'description' => 'Pesto', 'correct_answer' => false],
                    ['id' => '7bf39e3a-6a43-531d-8e79-810e30e88af3', 'description' => 'Hollandaise', 'correct_answer' => true],
                    ['id' => '390e8c3d-7181-54e1-9a5e-e9614e935d30', 'description' => 'Velouté', 'correct_answer' => false]
                ]],
        ['id' => '9511a958-c44b-5744-a28f-1a427fa372ab', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho-mãe clássico francês tem tomate como ingrediente principal e pode incluir mirepoix e fundo?', 'difficulty' => 2, 'weight' => 396, 'alternatives' => [
                    ['id' => '84957a05-87ac-5d49-a881-0648cfc87213', 'description' => 'Sauce tomate', 'correct_answer' => true],
                    ['id' => '05079a5b-da4d-5002-adbe-f16d268ba7ab', 'description' => 'Vinaigrette', 'correct_answer' => false],
                    ['id' => '5c39fe0f-bdba-581c-bd1a-9683ee3390a8', 'description' => 'Mayonnaise', 'correct_answer' => false],
                    ['id' => 'dd8385c1-f32d-5618-a42c-ff47a033a3ed', 'description' => 'Aioli', 'correct_answer' => false],
                    ['id' => 'ebc8592b-224b-568e-8013-a2c9feae3aa8', 'description' => 'Béchamel', 'correct_answer' => false]
                ]],
        ['id' => 'e252a129-441d-57ac-98f1-b2e494b243b2', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação provençal é um molho ou pasta de anchovas, alho e azeite, servida frequentemente com vegetais?', 'difficulty' => 3, 'weight' => 529, 'alternatives' => [
                    ['id' => '11bd96aa-b706-531b-98f5-41c78f80a33c', 'description' => 'Aïoli provençal', 'correct_answer' => false],
                    ['id' => '56691576-3f10-556a-b2b3-57c5f65e4a33', 'description' => 'Anchoïade', 'correct_answer' => true],
                    ['id' => '760718ff-ad02-5f03-850b-28846303acef', 'description' => 'Panisse', 'correct_answer' => false],
                    ['id' => '132c5bee-0aa9-5ca8-8af9-a51535f8ec43', 'description' => 'Daube provençale', 'correct_answer' => false],
                    ['id' => '70bdafc7-87a6-541c-a52f-c434c177eb54', 'description' => 'Pieds et paquets', 'correct_answer' => false]
                ]],
        ['id' => '3cd96095-4a67-5d35-8fe4-ebaa4d99d808', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual pasta provençal é feita principalmente de azeitonas, alcaparras e anchovas?', 'difficulty' => 3, 'weight' => 584, 'alternatives' => [
                    ['id' => '31e7b5bc-a348-57ca-9483-734abb57e087', 'description' => 'Panisse', 'correct_answer' => false],
                    ['id' => 'a1328d1c-dd49-5e1f-87a5-fd580b70b06b', 'description' => 'Pissaladière', 'correct_answer' => false],
                    ['id' => '1fccb3f5-df1c-59b2-9cd1-2443574f8e3c', 'description' => 'Tapenade', 'correct_answer' => true],
                    ['id' => '916a47c6-a69d-5a0d-ae05-cae680b3976c', 'description' => 'Anchoïade', 'correct_answer' => false],
                    ['id' => 'a319884c-4b9a-57b0-be79-388851887bd1', 'description' => 'Brandade de morue', 'correct_answer' => false]
                ]],
        ['id' => '41e220e4-57ae-5f76-bb66-2519d05ae95a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação do sul da França mistura bacalhau dessalgado com azeite e, em algumas versões, leite ou batata?', 'difficulty' => 3, 'weight' => 582, 'alternatives' => [
                    ['id' => '876c763c-bfc2-55d2-a251-23628b83a9d4', 'description' => 'Brandade de morue', 'correct_answer' => true],
                    ['id' => 'e842382f-def4-53b0-b488-508545eddd6a', 'description' => 'Fougasse', 'correct_answer' => false],
                    ['id' => '6dfe6ecc-4477-5ad2-bebe-a7d9d060090d', 'description' => 'Socca', 'correct_answer' => false],
                    ['id' => '267153e7-4640-5cb0-a0b8-e07bca8802b7', 'description' => 'Pieds et paquets', 'correct_answer' => false],
                    ['id' => '99934340-c984-55b7-a298-116b05643847', 'description' => 'Panisse', 'correct_answer' => false]
                ]],
        ['id' => '5377b346-8ef2-5d9d-9c58-e1f251de2268', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho tradicional provençal emulsiona alho e azeite, sendo frequentemente servido com peixe e vegetais?', 'difficulty' => 3, 'weight' => 477, 'alternatives' => [
                    ['id' => 'dace580e-6ac2-5926-b9bb-5160412f20e3', 'description' => 'Daube provençale', 'correct_answer' => false],
                    ['id' => '1acb4a8e-e05a-572e-b68e-caa237839f1a', 'description' => 'Fougasse', 'correct_answer' => false],
                    ['id' => 'ca8ee76f-2248-51e4-8a16-37d2d1267846', 'description' => 'Panisse', 'correct_answer' => false],
                    ['id' => '75b0c81a-664a-507e-8c4b-be2a995e9f9f', 'description' => 'Aïoli provençal', 'correct_answer' => true],
                    ['id' => 'c16b7dfe-de09-5fbe-b16a-2e3b572e6106', 'description' => 'Pissaladière', 'correct_answer' => false]
                ]],
        ['id' => '887a9e3f-c5fe-5c7a-8395-368fa722e07a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual torta salgada de Nice é coberta com cebolas lentamente cozidas, anchovas e azeitonas?', 'difficulty' => 3, 'weight' => 516, 'alternatives' => [
                    ['id' => '98c63a07-7fa0-5631-a760-ea7f36b48a21', 'description' => 'Brandade de morue', 'correct_answer' => false],
                    ['id' => '145fd000-a0f3-5c66-8280-f3d4e248a261', 'description' => 'Pieds et paquets', 'correct_answer' => false],
                    ['id' => '62e97221-53a7-512d-aec6-dbb07992426c', 'description' => 'Fougasse', 'correct_answer' => false],
                    ['id' => '698a133a-f95a-588b-a540-4d73b5ba715c', 'description' => 'Pissaladière', 'correct_answer' => true],
                    ['id' => '3873a737-82f5-5dcc-a874-aaf8fdaa9482', 'description' => 'Anchoïade', 'correct_answer' => false]
                ]],
        ['id' => '6692db53-cee0-57ad-87fc-b1a5b05d53ae', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa francesa é cozida inicialmente em panela e depois assada para formar uma cavidade interna?', 'difficulty' => 3, 'weight' => 414, 'alternatives' => [
                    ['id' => '51acce12-ee35-5e58-8815-c0297dd6ec6c', 'description' => 'Pâte battue', 'correct_answer' => false],
                    ['id' => 'faebb33b-a5b4-5626-aa88-8b1e25e9278f', 'description' => 'Pâte levée', 'correct_answer' => false],
                    ['id' => '124f276f-023b-5a35-8a68-acacb92e21df', 'description' => 'Pâte à crêpes', 'correct_answer' => false],
                    ['id' => '149b8241-4777-5f19-be1b-95cfc0a01e5c', 'description' => 'Pâte feuilletée', 'correct_answer' => false],
                    ['id' => '97f99220-e637-5a03-8506-64d93078326a', 'description' => 'Pâte à choux', 'correct_answer' => true]
                ]],
        ['id' => '8dfe7451-a15f-503d-9cea-b58cc416fce5', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa francesa quebradiça, pouco doce ou neutra, é usada frequentemente em quiches e tortas salgadas?', 'difficulty' => 3, 'weight' => 421, 'alternatives' => [
                    ['id' => '7143926d-ec9c-5873-841c-b627fa45733a', 'description' => 'Pâte à choux', 'correct_answer' => false],
                    ['id' => '9fddc9c2-7633-50ca-9a39-6d37b2277d7d', 'description' => 'Pâte brisée', 'correct_answer' => true],
                    ['id' => '0c0c12d9-3905-57fd-94d8-e774ed3f232e', 'description' => 'Pâte battue', 'correct_answer' => false],
                    ['id' => 'a9745e98-616c-5a0c-aa30-4fca83059539', 'description' => 'Pâte sucrée', 'correct_answer' => false],
                    ['id' => '169e45d1-94f8-5fba-b294-71f982aada88', 'description' => 'Pâte à crêpes', 'correct_answer' => false]
                ]],
        ['id' => '9dd37b63-574d-5c50-9004-2dc809186b0a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa francesa doce e arenosa é rica em manteiga e usada em bases de tortas?', 'difficulty' => 3, 'weight' => 474, 'alternatives' => [
                    ['id' => '4cd61afe-a761-58e4-a852-e5eb2930d849', 'description' => 'Pâte à foncer', 'correct_answer' => false],
                    ['id' => '6f1614f6-c31b-51dc-8660-0a216e0c976e', 'description' => 'Pâte sablée', 'correct_answer' => true],
                    ['id' => '32bdd26c-1670-5904-a1eb-b8819e304ae0', 'description' => 'Pâte à choux', 'correct_answer' => false],
                    ['id' => 'a4aa8b47-4f39-56a6-b2b8-7cf38aae8b0c', 'description' => 'Pâte battue', 'correct_answer' => false],
                    ['id' => '6282c89b-2915-56c7-96ed-1e9baee29899', 'description' => 'Pâte brisée', 'correct_answer' => false]
                ]],
        ['id' => 'bdfd99b5-927e-5dc5-a58f-75892197c40d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa francesa é formada por camadas alternadas de massa e manteiga obtidas por dobras sucessivas?', 'difficulty' => 3, 'weight' => 462, 'alternatives' => [
                    ['id' => '1d5654d3-e9b6-5a8c-8cfd-e06b477b366f', 'description' => 'Pâte levée', 'correct_answer' => false],
                    ['id' => '88747304-d262-5a03-8fd7-4798c7097030', 'description' => 'Pâte à foncer', 'correct_answer' => false],
                    ['id' => 'ee9797b9-df8b-58e2-839a-a243e5423c45', 'description' => 'Pâte sablée', 'correct_answer' => false],
                    ['id' => 'd7ebd63b-fbf2-5982-9c8d-46946b488b04', 'description' => 'Pâte battue', 'correct_answer' => false],
                    ['id' => 'c402e768-ad4f-5b85-9d13-904ba5f05b22', 'description' => 'Pâte feuilletée', 'correct_answer' => true]
                ]],
        ['id' => 'eeaf774b-ad7d-59ed-a1e5-bbfa50166204', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa doce francesa é mais firme e estruturada que a sablée, sendo comum em tortas de confeitaria?', 'difficulty' => 3, 'weight' => 444, 'alternatives' => [
                    ['id' => 'e1c4e0ed-51a5-5aad-bc1c-4a624dbcdc21', 'description' => 'Pâte levée', 'correct_answer' => false],
                    ['id' => 'd7bbe3c3-cdd5-53dd-bbab-624e30534562', 'description' => 'Pâte battue', 'correct_answer' => false],
                    ['id' => 'e84fd0ef-4f56-5627-9bd1-63db39ba4559', 'description' => 'Pâte à foncer', 'correct_answer' => false],
                    ['id' => '41dd11d4-bd36-5ac5-8054-6a74a2ae37ef', 'description' => 'Pâte à crêpes', 'correct_answer' => false],
                    ['id' => '1415ce3b-25eb-5e02-a832-dfbb94ad3792', 'description' => 'Pâte sucrée', 'correct_answer' => true]
                ]],
        ['id' => 'f41806f7-667a-51aa-be3b-bef701ca2891', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual embutido italiano cozido é tradicionalmente preparado com carne e pele suína e servido no Ano-Novo?', 'difficulty' => 3, 'weight' => 407, 'alternatives' => [
                    ['id' => 'a416205d-40a3-5f6c-ad10-b12e571be3c1', 'description' => 'Lardo', 'correct_answer' => false],
                    ['id' => '28cfd6fc-4cbc-5b91-ab86-424d930b7d34', 'description' => 'Cotechino', 'correct_answer' => true],
                    ['id' => 'c835c7c8-c840-5c1c-9c58-ddc1e91b65db', 'description' => 'Pancetta', 'correct_answer' => false],
                    ['id' => '0cb75b50-ae28-5089-99d3-8d1025144a84', 'description' => 'Mortadella', 'correct_answer' => false],
                    ['id' => 'c719f928-a9bf-5a6d-b831-7891aa2d018f', 'description' => 'Speck', 'correct_answer' => false]
                ]],
        ['id' => '4c81c827-b7f0-5640-ba27-006007d4fe61', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual especialidade italiana consiste em uma mistura de carne suína temperada recheada na pele da pata dianteira do porco?', 'difficulty' => 3, 'weight' => 414, 'alternatives' => [
                    ['id' => '03880006-6381-586d-84ff-1afdefa22924', 'description' => 'Speck', 'correct_answer' => false],
                    ['id' => '72fd8ab9-2774-588d-a2e4-e5f2889574fd', 'description' => 'Mortadella', 'correct_answer' => false],
                    ['id' => '670addee-97fa-5de0-84dd-f638722acbb5', 'description' => 'Pancetta', 'correct_answer' => false],
                    ['id' => 'f1a88367-025b-5bb8-8e9a-4a26104bae5b', 'description' => 'Coppa', 'correct_answer' => false],
                    ['id' => 'e8343cef-2bbe-56a2-a307-fb64b87bf5ea', 'description' => 'Zampone', 'correct_answer' => true]
                ]],
        ['id' => 'f3c1199c-8e03-5ad9-9ed2-d67158c86e8d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual carne bovina curada e seca é típica da região da Valtellina, no norte da Itália?', 'difficulty' => 3, 'weight' => 528, 'alternatives' => [
                    ['id' => 'b3f78bd9-f49c-51b6-aac2-bffd1ae396b6', 'description' => 'Guanciale', 'correct_answer' => false],
                    ['id' => '64c53e8f-0460-5aa4-a9e3-6f631bd9e7b6', 'description' => 'Pancetta', 'correct_answer' => false],
                    ['id' => '1047bb5d-3987-508e-a929-8a89f84841cb', 'description' => 'Zampone', 'correct_answer' => false],
                    ['id' => '7f8a0c42-f619-5b71-b426-d6c52e2d54af', 'description' => 'Bresaola', 'correct_answer' => true],
                    ['id' => 'a0f260b6-95b8-5445-933d-d9c008479960', 'description' => 'Speck', 'correct_answer' => false]
                ]],
        ['id' => 'dedf5dd3-78eb-5af9-85a5-282be47372df', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual produto italiano é feito de barriga suína curada, geralmente enrolada ou em peça plana?', 'difficulty' => 3, 'weight' => 469, 'alternatives' => [
                    ['id' => '33f861d1-3aef-5926-a7ea-8b5729a977a6', 'description' => 'Cotechino', 'correct_answer' => false],
                    ['id' => '06edeb61-99f0-5376-9c3a-c27f72c521c3', 'description' => 'Prosciutto', 'correct_answer' => false],
                    ['id' => '411f5824-725a-5f5f-9a67-b2389531d67e', 'description' => 'Zampone', 'correct_answer' => false],
                    ['id' => '71defc89-e07f-5bdb-aa0a-9ee30d8fa773', 'description' => 'Lardo', 'correct_answer' => false],
                    ['id' => '916a72cc-3be0-5eb3-8da7-73091b437db7', 'description' => 'Pancetta', 'correct_answer' => true]
                ]],
        ['id' => 'd02f3e07-30b8-50cc-b7cd-5a8e74630b7c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual ingrediente italiano é preparado com a bochecha ou papada suína curada e é tradicional em carbonara e amatriciana?', 'difficulty' => 3, 'weight' => 469, 'alternatives' => [
                    ['id' => '0993b1c5-767d-54ba-b598-2ad108cd5879', 'description' => 'Bresaola', 'correct_answer' => false],
                    ['id' => '7917b8e8-c218-5a91-b9a9-37050ad2034b', 'description' => 'Lardo', 'correct_answer' => false],
                    ['id' => 'ca29ae0e-d1cc-55f8-91a2-1d9d89ecdaab', 'description' => 'Zampone', 'correct_answer' => false],
                    ['id' => 'c506e7cf-bffd-5015-9708-5c1b5e2443aa', 'description' => 'Speck', 'correct_answer' => false],
                    ['id' => 'eb0eda94-8ba9-52db-8e78-5f3d511753c8', 'description' => 'Guanciale', 'correct_answer' => true]
                ]],
        ['id' => 'def9baef-dd25-53b7-8557-3d37727db5c6', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual caldo-base japonês é tradicionalmente preparado com kombu e katsuobushi?', 'difficulty' => 3, 'weight' => 487, 'alternatives' => [
                    ['id' => '7e41df1b-3acb-5066-896c-c13124a476d3', 'description' => 'Kombu-jime', 'correct_answer' => false],
                    ['id' => '581f5f7a-50a8-59b9-8b02-0a5d2ccc670e', 'description' => 'Mentsuyu', 'correct_answer' => false],
                    ['id' => '832b1160-7795-5074-bcb1-12a0cda6a1c6', 'description' => 'Ponzu', 'correct_answer' => false],
                    ['id' => '2abe5273-f868-571c-95d4-2a64e563ea39', 'description' => 'Dashi', 'correct_answer' => true],
                    ['id' => 'd17b7693-068b-51df-ba95-9f971b8a513b', 'description' => 'Shirodashi', 'correct_answer' => false]
                ]],
        ['id' => '3ed13c4d-b44f-537b-b08f-70be18876e6a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho concentrado japonês é usado como base para caldos de macarrão, combinando dashi, shoyu e mirin?', 'difficulty' => 3, 'weight' => 540, 'alternatives' => [
                    ['id' => 'cb5da51b-d409-5f04-b1bc-803d449c363a', 'description' => 'Dashi', 'correct_answer' => false],
                    ['id' => '77e9bd56-3910-5cff-ad90-95134e4a788a', 'description' => 'Ponzu', 'correct_answer' => false],
                    ['id' => 'f3087b87-af04-509b-851d-389700a84afa', 'description' => 'Mentsuyu', 'correct_answer' => true],
                    ['id' => '52a00711-f7a7-5413-a60c-56bd6f64d76a', 'description' => 'Tare', 'correct_answer' => false],
                    ['id' => '8cb39679-876b-5563-8e8c-044d150826dc', 'description' => 'Kombu-jime', 'correct_answer' => false]
                ]],
        ['id' => '1fe18991-a14b-5ff1-92a5-1e843dd49fc2', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho japonês combina molho de soja com suco cítrico e é usado como acompanhamento ou tempero?', 'difficulty' => 3, 'weight' => 595, 'alternatives' => [
                    ['id' => '157950c6-6e0c-5532-93c8-d4e2b40382ee', 'description' => 'Dashi', 'correct_answer' => false],
                    ['id' => 'c4f0db87-9e8f-5240-9c99-a0e5c382f03f', 'description' => 'Ponzu', 'correct_answer' => true],
                    ['id' => 'd880e8f3-7c2b-58aa-9d76-9a46978d424a', 'description' => 'Shirodashi', 'correct_answer' => false],
                    ['id' => 'f55d667a-1aca-59e8-882d-e216e5c3cbd6', 'description' => 'Nitsume', 'correct_answer' => false],
                    ['id' => '5cb22d65-14e2-5e00-9bf6-d1ab45ec3446', 'description' => 'Tsuyu', 'correct_answer' => false]
                ]],
        ['id' => '08fa8378-2940-5b28-bb3e-2b9b7a3bf702', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual denominação japonesa se refere a molhos de sabor concentrado usados para pincelar ou acompanhar grelhados e outros pratos?', 'difficulty' => 3, 'weight' => 470, 'alternatives' => [
                    ['id' => 'b64b7985-3aae-55bd-b8e5-07533d4061b2', 'description' => 'Shirodashi', 'correct_answer' => false],
                    ['id' => 'e2babc33-d2b0-5b5b-8d85-e2156b2f8451', 'description' => 'Warishita', 'correct_answer' => false],
                    ['id' => '50d7a24f-eb28-54f7-aee0-7264fecccda7', 'description' => 'Tsuyu', 'correct_answer' => false],
                    ['id' => 'dbe483da-c374-502a-8b8b-f4a8e343a683', 'description' => 'Tare', 'correct_answer' => true],
                    ['id' => '0d58fea7-2bac-5e57-9511-e39fa5170a41', 'description' => 'Ponzu', 'correct_answer' => false]
                ]],
        ['id' => 'dd530fd1-8fa2-5ee8-b1f7-afc687ea445a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho ou caldo japonês à base de dashi e shoyu é usado especialmente para acompanhar macarrão?', 'difficulty' => 3, 'weight' => 474, 'alternatives' => [
                    ['id' => '395ba34b-07e3-5176-ac9c-6b2b985acce5', 'description' => 'Tsuyu', 'correct_answer' => true],
                    ['id' => '82a6b5d4-e2c1-5a8e-bd35-dbc618e7f3a3', 'description' => 'Kombu-jime', 'correct_answer' => false],
                    ['id' => '344c1d01-e78f-59f3-9d13-63f2cabf005d', 'description' => 'Ponzu', 'correct_answer' => false],
                    ['id' => 'c8c4409f-397c-5ebb-8f57-88f8a4680ac1', 'description' => 'Warishita', 'correct_answer' => false],
                    ['id' => '73369e8f-e3b3-54fb-a77a-e2a968a13195', 'description' => 'Nikiri', 'correct_answer' => false]
                ]],
        ['id' => '3abfd5ef-703e-5827-8063-f93e08f2574e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual pasta picante do Magrebe é feita principalmente com pimentas, alho, azeite e especiarias?', 'difficulty' => 3, 'weight' => 435, 'alternatives' => [
                    ['id' => 'ad900a92-9f92-5ce0-aa64-34dfb973e30c', 'description' => 'Dukkah', 'correct_answer' => false],
                    ['id' => '4021a637-5fb0-5886-be12-bd8530d77f5a', 'description' => 'Advieh', 'correct_answer' => false],
                    ['id' => '76d2323b-739e-5cc9-92b0-8ddcdb21f3af', 'description' => 'Chermoula', 'correct_answer' => false],
                    ['id' => 'a55c54ad-3cda-552f-ad7b-2e7be7bee6e3', 'description' => 'Harissa', 'correct_answer' => true],
                    ['id' => '977f0cb4-4f6f-5741-8ec2-bc33326063e7', 'description' => 'Mitmita', 'correct_answer' => false]
                ]],
        ['id' => '700c6f05-74ab-59d6-9ac8-4f26ebfa90e5', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual mistura de especiarias do norte da África pode reunir dezenas de ingredientes e é associada à culinária marroquina?', 'difficulty' => 3, 'weight' => 581, 'alternatives' => [
                    ['id' => '737c45ce-8336-52fc-857b-4ee0fb79dd96', 'description' => 'Ras el hanout', 'correct_answer' => true],
                    ['id' => '074e5f9a-38a8-50ea-bb39-4564e8d8f3df', 'description' => 'Chermoula', 'correct_answer' => false],
                    ['id' => 'd765a230-7edc-582d-9a26-af6545d9db78', 'description' => 'Za\'atar', 'correct_answer' => false],
                    ['id' => '9f52a1ab-52f4-5012-b9c9-aa0daa36bc29', 'description' => 'Hawaij', 'correct_answer' => false],
                    ['id' => '78b02cf3-760f-50e0-a385-b478ab97319a', 'description' => 'Mitmita', 'correct_answer' => false]
                ]],
        ['id' => '30358179-6fae-54f8-afa0-f1c94ee413a4', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual marinada norte-africana combina ervas, alho, especiarias e elementos ácidos para temperar peixes e frutos do mar?', 'difficulty' => 3, 'weight' => 534, 'alternatives' => [
                    ['id' => '618a6609-7f43-5573-9bbd-f4ccaae8b383', 'description' => 'Baharat', 'correct_answer' => false],
                    ['id' => '88a94b6f-4f44-5f32-b62b-0c77762086c5', 'description' => 'Berbere', 'correct_answer' => false],
                    ['id' => '31cf4676-8106-517f-a6f1-4506249a6026', 'description' => 'Mitmita', 'correct_answer' => false],
                    ['id' => 'aeba094a-8c63-5509-94f9-7c392035ae4d', 'description' => 'Chermoula', 'correct_answer' => true],
                    ['id' => 'fad85bd5-e41f-5d91-a93d-b0ba51dcade7', 'description' => 'Ras el hanout', 'correct_answer' => false]
                ]],
        ['id' => '01d904b6-b76f-5bb5-ba41-1348efd35f0e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual mistura egípcia de castanhas, sementes e especiarias é frequentemente consumida com pão e azeite?', 'difficulty' => 3, 'weight' => 442, 'alternatives' => [
                    ['id' => 'b5310a14-7474-5ae6-a1d8-e4b302071394', 'description' => 'Berbere', 'correct_answer' => false],
                    ['id' => 'eef5e912-087b-5190-a854-43fefeef7b31', 'description' => 'Za\'atar', 'correct_answer' => false],
                    ['id' => '3dea52a4-8d4d-55ef-aa23-b6feab0f341f', 'description' => 'Hawaij', 'correct_answer' => false],
                    ['id' => 'de08d5d3-5266-5d95-a26d-1467b0ca7663', 'description' => 'Dukkah', 'correct_answer' => true],
                    ['id' => 'aa155df3-8aaa-5d57-94ba-7ff775767b7a', 'description' => 'Baharat', 'correct_answer' => false]
                ]],
        ['id' => '24c418a8-dc06-56a6-a15f-d3ed285df9fa', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual mistura de especiarias do Oriente Médio costuma incluir pimenta-do-reino, cominho, coentro e canela?', 'difficulty' => 3, 'weight' => 411, 'alternatives' => [
                    ['id' => 'be1d64fa-a1d4-532f-bf69-a01cec2eb65c', 'description' => 'Za\'atar', 'correct_answer' => false],
                    ['id' => '6163388d-8725-5d64-882b-42508d41e392', 'description' => 'Chermoula', 'correct_answer' => false],
                    ['id' => 'a64507a1-2d49-58fe-8494-ff045def8867', 'description' => 'Ras el hanout', 'correct_answer' => false],
                    ['id' => '8756a461-4f93-5f5f-8dcb-bdeb07bd5401', 'description' => 'Baharat', 'correct_answer' => true],
                    ['id' => '259fa2fe-a508-5456-b46c-1882fa20d875', 'description' => 'Dukkah', 'correct_answer' => false]
                ]],
        ['id' => 'a71d0a77-0b52-55f2-92fb-cab920681324', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa recheada do Piemonte italiano costuma ter formato de pequenos quadrados ou retângulos?', 'difficulty' => 3, 'weight' => 525, 'alternatives' => [
                    ['id' => '4ab90fc8-dee5-5589-beaf-981384fd8068', 'description' => 'Agnolotti', 'correct_answer' => true],
                    ['id' => 'bb7359b2-b13c-56f0-ad55-be481e95221f', 'description' => 'Ravioli', 'correct_answer' => false],
                    ['id' => 'cba0740e-4040-56bc-8f11-8f398e39ef0b', 'description' => 'Culurgiones', 'correct_answer' => false],
                    ['id' => '062ce055-d1c9-54e7-9b3f-ed3ad42d9125', 'description' => 'Tortelloni', 'correct_answer' => false],
                    ['id' => 'cdda6d2d-0cca-57f0-9a47-a91fa92c55f8', 'description' => 'Pansotti', 'correct_answer' => false]
                ]],
        ['id' => '6e7ed0ec-de22-581a-9f8a-f42288786894', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa recheada da Emilia-Romagna tem formato de pequeno anel e é tradicionalmente servida em caldo?', 'difficulty' => 3, 'weight' => 473, 'alternatives' => [
                    ['id' => 'f833e5d4-54a5-50ee-a103-824b9985f091', 'description' => 'Tortelloni', 'correct_answer' => false],
                    ['id' => '8d3e0059-e38b-51c1-8dfa-0e6b8f5918e9', 'description' => 'Agnolotti', 'correct_answer' => false],
                    ['id' => '9a967662-c4fc-5b2c-a106-12c796a6e359', 'description' => 'Cappelletti', 'correct_answer' => false],
                    ['id' => 'a2f2cc32-3ab3-5e26-9c99-6c72db542304', 'description' => 'Casoncelli', 'correct_answer' => false],
                    ['id' => 'a06e5ece-cbc8-5eb6-9de2-66576500a04c', 'description' => 'Tortellini', 'correct_answer' => true]
                ]],
        ['id' => '3b95a80b-1f6f-5add-9c79-e9ddbf91c54e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa italiana recheada é formada por duas folhas de massa unidas ao redor do recheio?', 'difficulty' => 3, 'weight' => 418, 'alternatives' => [
                    ['id' => '1cbb6e94-0b00-5cd6-82f9-2ddfe6f05f18', 'description' => 'Tortelloni', 'correct_answer' => false],
                    ['id' => '6ea1a713-778e-5ccc-a45b-c68887bc239e', 'description' => 'Ravioli', 'correct_answer' => true],
                    ['id' => '415e4494-c1e6-5740-82d2-632e401d1d29', 'description' => 'Culurgiones', 'correct_answer' => false],
                    ['id' => '155ec576-3fd8-5641-9eb2-2fd3940c6058', 'description' => 'Casoncelli', 'correct_answer' => false],
                    ['id' => 'f64cb550-7d06-5991-a20a-9684b8591c02', 'description' => 'Anolini', 'correct_answer' => false]
                ]],
        ['id' => '8b802f5b-64cc-5e93-bd44-bfc88721d1d5', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa recheada italiana tem formato semelhante a pequenos chapéus e é comum em caldos?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => 'da8a9866-1f14-585f-aadb-7e3d6c622c37', 'description' => 'Cappelletti', 'correct_answer' => true],
                    ['id' => 'f07bcbe7-88d9-51e7-9876-b91380db5e65', 'description' => 'Mezzelune', 'correct_answer' => false],
                    ['id' => '7ee70bb6-07d9-571a-8284-a19865e0b46e', 'description' => 'Tortellini', 'correct_answer' => false],
                    ['id' => 'aa545b0c-dc1b-51d3-a13d-803e704aba00', 'description' => 'Casoncelli', 'correct_answer' => false],
                    ['id' => '9b9695f8-f3f8-59d1-99f4-1f442910e81f', 'description' => 'Anolini', 'correct_answer' => false]
                ]],
        ['id' => '05c89921-9b66-5b0a-91db-cae6afeaacc8', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual massa recheada da Emilia-Romagna é geralmente maior que o tortellini e pode levar recheios de ricota e ervas?', 'difficulty' => 3, 'weight' => 562, 'alternatives' => [
                    ['id' => '60891256-5eae-594b-ac95-349ff816057a', 'description' => 'Culurgiones', 'correct_answer' => false],
                    ['id' => '2499e754-ecfd-5421-b735-224665632b25', 'description' => 'Pansotti', 'correct_answer' => false],
                    ['id' => 'b3cc2d8f-ea2a-5d1b-b051-aad125684364', 'description' => 'Anolini', 'correct_answer' => false],
                    ['id' => 'e5e0f380-58e0-582d-9d2d-ef891eddd00f', 'description' => 'Tortelloni', 'correct_answer' => true],
                    ['id' => '9c6a58db-500f-5255-bb5b-5279499300ff', 'description' => 'Tortellini', 'correct_answer' => false]
                ]],
        ['id' => '029c490d-ec26-569e-a03f-3a96a9467a7c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual creme salgado japonês de ovos é cozido no vapor em pequenas xícaras e costuma levar dashi?', 'difficulty' => 3, 'weight' => 592, 'alternatives' => [
                    ['id' => '2d22a106-b24b-5998-9094-dc93b7662427', 'description' => 'Onsen tamago', 'correct_answer' => false],
                    ['id' => 'e2d41a74-ac63-56fe-92f7-0567429c0e4e', 'description' => 'Unadon', 'correct_answer' => false],
                    ['id' => '289346b1-894b-53a5-9d02-c72c393e4c08', 'description' => 'Chawanmushi', 'correct_answer' => true],
                    ['id' => 'c0717472-8087-5eaa-b8b5-b2dd16ce8aa6', 'description' => 'Tamagoyaki', 'correct_answer' => false],
                    ['id' => '5f08273c-8b78-5eea-bb2c-f4dbaf25542b', 'description' => 'Katsudon', 'correct_answer' => false]
                ]],
        ['id' => '7569e38c-7ee1-5f65-b065-8901bcc3207b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual omelete japonesa enrolada é preparada com ovos e caldo dashi?', 'difficulty' => 3, 'weight' => 415, 'alternatives' => [
                    ['id' => '202c8495-277a-5602-a39f-0888fb2dc986', 'description' => 'Tamagoyaki', 'correct_answer' => false],
                    ['id' => 'c4323201-00e4-5f66-8c6c-413c272f1ace', 'description' => 'Butadon', 'correct_answer' => false],
                    ['id' => '1e5026b9-2599-551b-99f8-f55f4cfb1563', 'description' => 'Unadon', 'correct_answer' => false],
                    ['id' => '879dfa9b-724e-54e9-b9c2-e3bc1ccfa047', 'description' => 'Oyakodon', 'correct_answer' => false],
                    ['id' => '4c5ee977-ac8d-5d40-a3ce-3b68b2a33289', 'description' => 'Dashimaki tamago', 'correct_answer' => true]
                ]],
        ['id' => '08a66a68-34db-59a7-80f1-8c65036d6c26', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual omelete japonesa é cozida em camadas finas e enrolada em formato retangular?', 'difficulty' => 3, 'weight' => 454, 'alternatives' => [
                    ['id' => 'e400ebee-10f8-59f8-83d2-e494ca38a2e2', 'description' => 'Oyakodon', 'correct_answer' => false],
                    ['id' => 'b66cce8e-b8bd-56f9-b7fa-50c1aa0fa731', 'description' => 'Tendon', 'correct_answer' => false],
                    ['id' => '7c2a62d6-2fd7-56ca-9390-4c3750e5dd1f', 'description' => 'Gyudon', 'correct_answer' => false],
                    ['id' => 'f2515c9d-07d3-50da-8ce6-697e48387312', 'description' => 'Butadon', 'correct_answer' => false],
                    ['id' => '91b87135-da82-5eed-b230-2a1b4f62cdcd', 'description' => 'Tamagoyaki', 'correct_answer' => true]
                ]],
        ['id' => '97d5c237-f152-5b1f-93c5-190d4ccc0705', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação japonesa produz ovos cozidos lentamente em água morna, com clara delicada e gema cremosa?', 'difficulty' => 3, 'weight' => 534, 'alternatives' => [
                    ['id' => '04541439-9ea6-5008-bae9-40ca1a0d774a', 'description' => 'Dashimaki tamago', 'correct_answer' => false],
                    ['id' => 'a93635d8-5df1-5334-b1af-7d3a58c7e7b7', 'description' => 'Onsen tamago', 'correct_answer' => true],
                    ['id' => '43451a5e-4673-5c48-adb6-93ad307a4474', 'description' => 'Unadon', 'correct_answer' => false],
                    ['id' => 'f649c933-752e-596d-a6e4-8318c359fc0e', 'description' => 'Chawanmushi', 'correct_answer' => false],
                    ['id' => '273619df-de05-5a03-ac41-76b394b0c88a', 'description' => 'Tamagoyaki', 'correct_answer' => false]
                ]],
        ['id' => '970790d5-eaf6-5640-a56f-10965b09aced', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual tigela japonesa de arroz é coberta com costeleta empanada, ovo e cebola cozidos em molho?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => 'e9a26ed1-110f-5272-b395-653a34aa26a2', 'description' => 'Unadon', 'correct_answer' => false],
                    ['id' => '8c2aae33-c7ea-5f49-a646-cc450be77fc4', 'description' => 'Onsen tamago', 'correct_answer' => false],
                    ['id' => '9f6cf299-1553-57a8-86f2-021f4d7d47b0', 'description' => 'Tamagoyaki', 'correct_answer' => false],
                    ['id' => 'bbadbea0-23ab-5c96-9e9b-76d7881caf5d', 'description' => 'Katsudon', 'correct_answer' => true],
                    ['id' => 'cbb5163b-5487-5789-9503-a011b00a9181', 'description' => 'Tendon', 'correct_answer' => false]
                ]],
        ['id' => 'cb189479-993e-532e-bab6-7aaf2479af38', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual composto alcaloide é responsável por boa parte da pungência característica da pimenta-do-reino?', 'difficulty' => 3, 'weight' => 597, 'alternatives' => [
                    ['id' => '88e392be-cee8-5505-bf6b-6849a83faa4d', 'description' => 'Piperina', 'correct_answer' => true],
                    ['id' => '1b3115f9-087e-5dde-8f6c-de22aaf73bdb', 'description' => 'Gingerol', 'correct_answer' => false],
                    ['id' => '217a472e-7a69-562d-8384-efa31c687ba0', 'description' => 'Anetol', 'correct_answer' => false],
                    ['id' => '0e5c2d48-f410-5033-b41e-58c0fb3eefb7', 'description' => 'Curcumina', 'correct_answer' => false],
                    ['id' => '0d762499-bcd9-5a8c-9cb5-96bdb70a58b4', 'description' => 'Capsaicina', 'correct_answer' => false]
                ]],
        ['id' => '61ada09a-a233-54d6-90a1-fbc6f7d5c490', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual composto é responsável pela sensação de ardência das pimentas do gênero Capsicum?', 'difficulty' => 3, 'weight' => 435, 'alternatives' => [
                    ['id' => '0da8e1ce-a244-586a-8fe6-1dca29448efa', 'description' => 'Gingerol', 'correct_answer' => false],
                    ['id' => '39eb660c-e01c-5c2e-bddd-459229dd82f6', 'description' => 'Curcumina', 'correct_answer' => false],
                    ['id' => 'cf1b54e0-9df1-5cfb-8454-c1110613f7c4', 'description' => 'Mentol', 'correct_answer' => false],
                    ['id' => '158f4e5d-ac39-52e3-a073-4a1bccbaf5bc', 'description' => 'Piperina', 'correct_answer' => false],
                    ['id' => '207b8998-80e2-5850-bae1-e9ca57398ef5', 'description' => 'Capsaicina', 'correct_answer' => true]
                ]],
        ['id' => '526877dc-a65f-5e67-9ca9-2d53656e8b19', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual composto sulfurado é formado quando o alho é cortado ou esmagado e participa de seu aroma característico?', 'difficulty' => 3, 'weight' => 415, 'alternatives' => [
                    ['id' => 'a76a679f-c55a-508b-a36c-d20120745c7a', 'description' => 'Vanilina', 'correct_answer' => false],
                    ['id' => '87c3f0d6-8736-5005-8bfa-4a59b9a79005', 'description' => 'Capsaicina', 'correct_answer' => false],
                    ['id' => 'aa9776fe-5f5b-59e9-a5c7-94c367ba5545', 'description' => 'Curcumina', 'correct_answer' => false],
                    ['id' => '45c99b3f-cc94-54b8-85df-d77c44ee37da', 'description' => 'Anetol', 'correct_answer' => false],
                    ['id' => 'f3e372d5-eb83-55d0-9df5-f5002e78a0f7', 'description' => 'Allicina', 'correct_answer' => true]
                ]],
        ['id' => 'c5842338-ae3f-58cf-afc1-b49826c112a5', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual composto fenólico contribui para o sabor picante característico do gengibre fresco?', 'difficulty' => 3, 'weight' => 424, 'alternatives' => [
                    ['id' => 'cf27dbcb-931c-5255-a356-8a8dbf04ecdc', 'description' => 'Vanilina', 'correct_answer' => false],
                    ['id' => '25eb3822-ab54-5053-aeb9-5569ebebe3a0', 'description' => 'Gingerol', 'correct_answer' => true],
                    ['id' => '6e4779be-301d-5128-85db-a970019f62b3', 'description' => 'Eugenol', 'correct_answer' => false],
                    ['id' => '40e3060b-64d7-5545-9596-11a7ae66c91d', 'description' => 'Anetol', 'correct_answer' => false],
                    ['id' => '0af00878-e2eb-55b8-bbca-1d3437094dde', 'description' => 'Mentol', 'correct_answer' => false]
                ]],
        ['id' => 'ca93f60c-68f9-5700-b065-679d10fa8ecf', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual pigmento polifenólico confere à cúrcuma sua coloração amarela intensa?', 'difficulty' => 3, 'weight' => 579, 'alternatives' => [
                    ['id' => '84b62fd8-098b-5c58-928c-81cc24eca946', 'description' => 'Eugenol', 'correct_answer' => false],
                    ['id' => 'a62ba800-1743-5ed6-a9de-cfb853d4c681', 'description' => 'Mentol', 'correct_answer' => false],
                    ['id' => '7ee64246-e683-57ae-8a69-d70fe81f6ab5', 'description' => 'Allicina', 'correct_answer' => false],
                    ['id' => '8dd16f91-e918-5ebc-8620-90f3a0cf7920', 'description' => 'Vanilina', 'correct_answer' => false],
                    ['id' => '1b47bd61-c5fb-51d0-8b6d-9c858b575e6d', 'description' => 'Curcumina', 'correct_answer' => true]
                ]],
        ['id' => '3ec88c6f-28d4-5d0f-89c0-53da453d0176', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação clássica francesa consiste em carne desossada, recheada, enrolada e cozida, tradicionalmente servida fria?', 'difficulty' => 4, 'weight' => 612, 'alternatives' => [
                    ['id' => '1420395c-1e86-5bae-82f7-1fb3908bb1ca', 'description' => 'Aspic', 'correct_answer' => false],
                    ['id' => '891b68b6-0cc9-57f7-84e3-69869f1e1fe5', 'description' => 'Galantina', 'correct_answer' => true],
                    ['id' => '05ccb8c7-5c95-55b2-8027-b02e7073935d', 'description' => 'Rillettes', 'correct_answer' => false],
                    ['id' => '9a372196-6fc0-560b-84c1-d7068621f041', 'description' => 'Quenelle', 'correct_answer' => false],
                    ['id' => 'c1769022-1802-5ea4-9c1f-757eb3aa291f', 'description' => 'Terrine', 'correct_answer' => false]
                ]],
        ['id' => '08ef8fbd-0e47-5fbb-84e0-2759af75f5e4', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação francesa utiliza uma peça de carne desossada, recheada e moldada em formato cilíndrico antes do cozimento?', 'difficulty' => 4, 'weight' => 746, 'alternatives' => [
                    ['id' => 'ff5ce20a-6299-53d0-8851-2a461802ba6a', 'description' => 'Rillettes', 'correct_answer' => false],
                    ['id' => '41850bf0-af2c-55a3-b368-d0d4606576d2', 'description' => 'Galantina', 'correct_answer' => false],
                    ['id' => '4d796139-042d-5c8f-8f4f-4aad401c1bfe', 'description' => 'Aspic', 'correct_answer' => false],
                    ['id' => 'f615297f-a177-5f88-b2c4-fe9833b2542b', 'description' => 'Ballotine', 'correct_answer' => true],
                    ['id' => '6904c474-a2f8-5332-88bd-1218c6281743', 'description' => 'Terrine', 'correct_answer' => false]
                ]],
        ['id' => '626c5e49-60f0-566a-a229-a52744f1da53', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação de charcutaria é assada dentro de uma crosta de massa e servida em fatias?', 'difficulty' => 4, 'weight' => 613, 'alternatives' => [
                    ['id' => 'ee738c95-6e4c-537e-9398-0e9a20c84240', 'description' => 'Terrine', 'correct_answer' => false],
                    ['id' => 'f8261c0a-d5d9-51bf-bd50-dbe70b571c73', 'description' => 'Pâté', 'correct_answer' => false],
                    ['id' => '97a7633b-99ae-5225-8861-88e5bc373ab9', 'description' => 'Mousseline', 'correct_answer' => false],
                    ['id' => '6a9de687-dfa2-56a5-9c7c-3ff754aaf35f', 'description' => 'Ballotine', 'correct_answer' => false],
                    ['id' => '6995eeae-a566-5c29-bd94-36fad4e52ade', 'description' => 'Pâté en croûte', 'correct_answer' => true]
                ]],
        ['id' => 'f49c8437-1124-572c-afda-01432400d9f1', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação francesa é cozida e servida em um recipiente de mesmo nome, podendo conter carnes, vegetais ou outros ingredientes?', 'difficulty' => 4, 'weight' => 671, 'alternatives' => [
                    ['id' => '22ef9a67-83f6-5314-a2dd-fe0abe72f9c0', 'description' => 'Aspic', 'correct_answer' => false],
                    ['id' => '121f1844-5d21-5a01-8bb1-eea3256ca51b', 'description' => 'Terrine', 'correct_answer' => true],
                    ['id' => 'cb2472c0-a059-5d0b-a31b-a2c946bbddb7', 'description' => 'Pâté en croûte', 'correct_answer' => false],
                    ['id' => '62f9d886-2011-557b-bfb9-c8adb761a77c', 'description' => 'Quenelle', 'correct_answer' => false],
                    ['id' => '3b0a33eb-c631-5bde-b2f5-748bd8727d8e', 'description' => 'Pâté', 'correct_answer' => false]
                ]],
        ['id' => 'fff44235-c867-5b92-b3e1-528f0a5550f8', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual preparação francesa de carne cozida lentamente em gordura é desfiada até formar uma pasta fibrosa?', 'difficulty' => 4, 'weight' => 749, 'alternatives' => [
                    ['id' => 'b6ce2b25-0e26-5dcd-93a2-809fded0aa8d', 'description' => 'Rillettes', 'correct_answer' => true],
                    ['id' => '4b4d4186-34ea-5f74-b6f1-809fd2daed86', 'description' => 'Aspic', 'correct_answer' => false],
                    ['id' => '393d9425-54f9-5918-aa30-08890cf0963e', 'description' => 'Quenelle', 'correct_answer' => false],
                    ['id' => '73db2e5f-a7aa-50fd-809e-eeedc0c1384e', 'description' => 'Pâté', 'correct_answer' => false],
                    ['id' => '2a4a35e4-493f-5c10-ae81-bc23590e509f', 'description' => 'Ballotine', 'correct_answer' => false]
                ]],
        ['id' => '3bc210c7-af63-59e2-b6b4-9a7a213332cf', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual iguaria mediterrânea é produzida com ovas de peixe salgadas, prensadas e secas?', 'difficulty' => 4, 'weight' => 650, 'alternatives' => [
                    ['id' => 'b7cd3228-7e29-527b-8e58-e1fcde505c7b', 'description' => 'Colatura di alici', 'correct_answer' => false],
                    ['id' => '6543a2d6-acca-5d6d-8eeb-dc42d630d522', 'description' => 'Garum', 'correct_answer' => false],
                    ['id' => '1b7161c0-09a4-539e-8270-3af24e474562', 'description' => 'Bottarga', 'correct_answer' => true],
                    ['id' => '255abfa9-a000-5475-b2b5-427a6702838f', 'description' => 'Mắm tôm', 'correct_answer' => false],
                    ['id' => 'abfb7f00-88ad-5ea5-8391-d42be278eff7', 'description' => 'Prahok', 'correct_answer' => false]
                ]],
        ['id' => '759c79ae-717b-595b-a9e5-f046b80c91fa', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual condimento fermentado de peixe era amplamente utilizado na culinária da Roma Antiga?', 'difficulty' => 4, 'weight' => 668, 'alternatives' => [
                    ['id' => '7a02c127-5d96-54b2-a474-48aaacfafd0a', 'description' => 'Prahok', 'correct_answer' => false],
                    ['id' => '6a13fe0d-1f9a-5348-99ca-c466690c7c98', 'description' => 'Katsuobushi', 'correct_answer' => false],
                    ['id' => '80aa0ed4-d822-50c7-9e83-f0764a2ca39c', 'description' => 'Colatura di alici', 'correct_answer' => false],
                    ['id' => '27ccb83d-b600-52ee-9b7b-6f6fc5b4c4d2', 'description' => 'Garum', 'correct_answer' => true],
                    ['id' => 'ab427c71-c043-5a6c-bea2-e9c02dd3bfe6', 'description' => 'Bottarga', 'correct_answer' => false]
                ]],
        ['id' => 'f1a1e0a9-d078-5cbc-a0ec-0e6b477c107b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho italiano de anchovas maturadas é tradicionalmente produzido na região de Cetara, na Campânia?', 'difficulty' => 4, 'weight' => 661, 'alternatives' => [
                    ['id' => '636bcd6d-f386-5169-85b6-bdd460b00071', 'description' => 'Colatura di alici', 'correct_answer' => true],
                    ['id' => 'b0132bbb-5594-59d4-8ab9-d9bfef654ea1', 'description' => 'Mắm tôm', 'correct_answer' => false],
                    ['id' => '2122fae6-806f-5ee4-9115-cc57e8c67a98', 'description' => 'Bottarga', 'correct_answer' => false],
                    ['id' => '32d0eb44-b324-5f2e-967e-335a8fea4668', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => '89ecd722-0d20-56eb-8459-81f2876dee09', 'description' => 'Katsuobushi', 'correct_answer' => false]
                ]],
        ['id' => '42b8b1d7-7c02-5d1f-a7fd-2e88456589d7', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho vietnamita de peixe fermentado é amplamente utilizado como tempero?', 'difficulty' => 4, 'weight' => 652, 'alternatives' => [
                    ['id' => '9ed932c8-f7a4-5e89-90c0-82d6dd8635b9', 'description' => 'Shiokara', 'correct_answer' => false],
                    ['id' => 'abfbbb7c-00dc-5ff1-a387-4ae1989a5953', 'description' => 'Mắm tôm', 'correct_answer' => false],
                    ['id' => 'b9645f43-cbcb-55fa-8043-fc689450267d', 'description' => 'Prahok', 'correct_answer' => false],
                    ['id' => 'ae016dac-9606-5144-9f99-6d4f73ef962c', 'description' => 'Nuoc mam', 'correct_answer' => true],
                    ['id' => '944eea8e-9ac7-534b-bcd1-0737f603a675', 'description' => 'Ikan teri', 'correct_answer' => false]
                ]],
        ['id' => 'b76c6eb1-ceb0-52c9-a83c-8dd655a4b128', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual pasta cambojana é feita de peixe fermentado e possui aroma e sabor intensos?', 'difficulty' => 4, 'weight' => 631, 'alternatives' => [
                    ['id' => 'cde60efd-c362-562f-b8f4-df6ad43ec41f', 'description' => 'Prahok', 'correct_answer' => true],
                    ['id' => '9640cdeb-98b2-5036-904b-12142e10ab5d', 'description' => 'Katsuobushi', 'correct_answer' => false],
                    ['id' => '65b77ed1-2b34-500f-aa1e-0b59c6f15d24', 'description' => 'Colatura di alici', 'correct_answer' => false],
                    ['id' => '8c148f4e-9a16-56c7-80e9-004f9fcde3c0', 'description' => 'Shiokara', 'correct_answer' => false],
                    ['id' => '67d0fce8-cb1b-5778-a714-b32f581ab754', 'description' => 'Garum', 'correct_answer' => false]
                ]],
        ['id' => '3b905760-5e67-5e7f-b041-ee00d2eb6eb3', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual polissacarídeo presente nas paredes celulares de frutas é utilizado para formar gel em geleias?', 'difficulty' => 4, 'weight' => 676, 'alternatives' => [
                    ['id' => 'e20bbb63-f602-5896-954c-67ff80b54d79', 'description' => 'Amido modificado', 'correct_answer' => false],
                    ['id' => 'c59688fb-3b40-5550-bc92-9de57f0b625e', 'description' => 'Pectina', 'correct_answer' => true],
                    ['id' => 'c851bf91-dac3-5134-9cff-f334d56b3e20', 'description' => 'Gelatina', 'correct_answer' => false],
                    ['id' => '982258d7-4fb8-59bb-8e10-4d2ed776f0b7', 'description' => 'Agar-agar', 'correct_answer' => false],
                    ['id' => '70567135-cec7-5f9f-844b-d4ec16805b4d', 'description' => 'Lecitina', 'correct_answer' => false]
                ]],
        ['id' => '9d262000-79fd-5e7e-855f-ee2b2a8c2b6f', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual agente gelificante extraído de algas vermelhas é muito utilizado em confeitaria e microbiologia?', 'difficulty' => 4, 'weight' => 741, 'alternatives' => [
                    ['id' => '3d0033c1-9451-5957-bb26-eeb33e2ffb99', 'description' => 'Goma xantana', 'correct_answer' => false],
                    ['id' => '34a8d021-36c5-5cc2-827f-b19f66a68839', 'description' => 'Lecitina', 'correct_answer' => false],
                    ['id' => '3f6337b7-cda5-5f38-a9fb-7ff163186fef', 'description' => 'Agar-agar', 'correct_answer' => true],
                    ['id' => '65bcfdc5-2a5f-5658-82f3-e7edfe5b4e30', 'description' => 'Carragena', 'correct_answer' => false],
                    ['id' => '7b31f4d2-dd88-56d4-b6bf-cbe04e33eb5d', 'description' => 'Goma guar', 'correct_answer' => false]
                ]],
        ['id' => 'cc0fa0dc-0628-54a8-985f-e48ec368849a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual família de polissacarídeos extraídos de algas vermelhas é utilizada como espessante e estabilizante?', 'difficulty' => 4, 'weight' => 691, 'alternatives' => [
                    ['id' => '979f9487-41e3-5a27-9fdc-5b383d25ff61', 'description' => 'Carragena', 'correct_answer' => true],
                    ['id' => 'fbc3ed92-f6f4-508f-96b1-f1f38e63008f', 'description' => 'Alginato', 'correct_answer' => false],
                    ['id' => 'dfaffa8d-eb25-524f-ab60-239b3c262b7e', 'description' => 'Gelatina', 'correct_answer' => false],
                    ['id' => '153d6097-9c71-556c-ae3f-de967c53f955', 'description' => 'Metilcelulose', 'correct_answer' => false],
                    ['id' => '675c01a9-58a9-58f0-b3dd-a169ac922fa3', 'description' => 'Goma guar', 'correct_answer' => false]
                ]],
        ['id' => 'dc4c0762-d00b-59c3-accd-7a3ffb5426ad', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual hidrocoloide extraído de algas marrons pode formar gel na presença de íons cálcio?', 'difficulty' => 4, 'weight' => 634, 'alternatives' => [
                    ['id' => '98a8d835-29dc-5185-9d71-d1ef99039082', 'description' => 'Amido modificado', 'correct_answer' => false],
                    ['id' => 'ca5bf67e-445a-551d-a1a4-9cb9582b62b2', 'description' => 'Carragena', 'correct_answer' => false],
                    ['id' => '9beb561c-e073-5519-902c-b88385ba19f8', 'description' => 'Alginato', 'correct_answer' => true],
                    ['id' => '8aec1d8d-1c35-583f-828a-dc20995ecae3', 'description' => 'Goma xantana', 'correct_answer' => false],
                    ['id' => 'ee6b05a5-ba26-5cb9-932a-b500bd580eca', 'description' => 'Agar-agar', 'correct_answer' => false]
                ]],
        ['id' => '1b33d2cc-de0b-5bfd-8cfd-3148fb68811d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual agente gelificante proteico é obtido pela hidrólise parcial do colágeno?', 'difficulty' => 4, 'weight' => 777, 'alternatives' => [
                    ['id' => 'ff47e2d9-0b78-5ae2-bfff-3d7e4aa80afa', 'description' => 'Goma xantana', 'correct_answer' => false],
                    ['id' => 'b52fca4a-d156-55e0-8ab0-cc23e442f1ab', 'description' => 'Metilcelulose', 'correct_answer' => false],
                    ['id' => '94dc914c-3bcf-5c00-832b-97a0beb3f6a0', 'description' => 'Gelatina', 'correct_answer' => true],
                    ['id' => '57a002f4-9f25-54f9-aee4-bfd388c12638', 'description' => 'Lecitina', 'correct_answer' => false],
                    ['id' => '6b56b2b1-39b0-5358-80cf-48b57a5b25fe', 'description' => 'Goma guar', 'correct_answer' => false]
                ]],
        ['id' => '632935c8-b803-5334-9e4d-da164facc028', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual técnica cozinha alimentos embalados a vácuo em banho de água com temperatura controlada por longo período?', 'difficulty' => 4, 'weight' => 792, 'alternatives' => [
                    ['id' => '561f2922-ec97-5245-9305-8c0a010fb3e2', 'description' => 'Cocção sous-vide', 'correct_answer' => true],
                    ['id' => '153c6e26-3c1d-5bd3-b514-fa81b6486276', 'description' => 'Grelhar', 'correct_answer' => false],
                    ['id' => '4cf97a88-e8b7-5a81-a1dd-312f93418aed', 'description' => 'Escalfamento', 'correct_answer' => false],
                    ['id' => '0877a9be-3bb6-52c1-8c7d-406abd68d6ee', 'description' => 'Pocher', 'correct_answer' => false],
                    ['id' => '7ca9ec1c-71d4-5f62-87ea-0bc194f8d131', 'description' => 'Defumar', 'correct_answer' => false]
                ]],
        ['id' => '8d127ad6-eb52-5174-a499-53d04aba2265', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual técnica tradicional cozinha lentamente um alimento submerso em gordura a temperatura relativamente baixa?', 'difficulty' => 4, 'weight' => 787, 'alternatives' => [
                    ['id' => 'e60c64e6-92b0-59ce-a049-938917617c03', 'description' => 'Pocher', 'correct_answer' => false],
                    ['id' => '497b8be1-1290-5518-817a-6358cd2bb2a9', 'description' => 'Cocção sous-vide', 'correct_answer' => false],
                    ['id' => '0bb78590-8977-5597-8ac5-9a4bfef0ab57', 'description' => 'Grelhar', 'correct_answer' => false],
                    ['id' => 'ae0e1a12-c165-5d31-8dc4-5cdf975d5952', 'description' => 'Confit', 'correct_answer' => true],
                    ['id' => '198e503c-44b0-55e4-bea4-b6ac873aebb5', 'description' => 'Braseado', 'correct_answer' => false]
                ]],
        ['id' => '88e5eea9-1b18-522e-9f88-ed08b33ed25c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual método combina dourar o alimento e depois cozinhá-lo lentamente com pequena quantidade de líquido em recipiente tampado?', 'difficulty' => 4, 'weight' => 671, 'alternatives' => [
                    ['id' => 'ec77fae7-78af-5185-95a6-aef0b395bdac', 'description' => 'Pocher', 'correct_answer' => false],
                    ['id' => '11f6030a-e167-5a45-909b-c0888f4a9926', 'description' => 'Cocção sous-vide', 'correct_answer' => false],
                    ['id' => 'cb8dcfb5-6bda-53a1-9c39-5922dbbe177e', 'description' => 'Braseado', 'correct_answer' => true],
                    ['id' => '572bbff1-b66b-5306-8e28-564f74880cc0', 'description' => 'Confit', 'correct_answer' => false],
                    ['id' => '507a5856-5c84-5b1d-b297-425f9e29aa19', 'description' => 'Saltear', 'correct_answer' => false]
                ]],
        ['id' => '2cf4d00c-6f85-521b-af5a-dd6b361e9e8d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual método cozinha delicadamente alimentos em líquido mantido abaixo do ponto de fervura intensa?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => '1bd630f3-39b0-5bc8-a23b-c04ed31f009b', 'description' => 'Assar em papillote', 'correct_answer' => false],
                    ['id' => 'cf998761-045b-5990-88d9-79fffb760fec', 'description' => 'Defumar', 'correct_answer' => false],
                    ['id' => '8d7fe7d3-1e46-5945-a778-21189dac1703', 'description' => 'Braseado', 'correct_answer' => false],
                    ['id' => 'e971298f-f8d9-57f0-94dc-7cb6699b2e40', 'description' => 'Grelhar', 'correct_answer' => false],
                    ['id' => '796dd319-4c48-5d2a-ad5a-93a5727c657d', 'description' => 'Escalfamento', 'correct_answer' => true]
                ]],
        ['id' => '073ef79f-a153-5df1-85e5-b2beb807b9de', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual técnica envolve ingredientes em papel ou outro invólucro fechado para cozinhar no próprio vapor?', 'difficulty' => 4, 'weight' => 676, 'alternatives' => [
                    ['id' => '91cdc851-b7b0-5a98-a7ac-36908bc0b1ab', 'description' => 'Assar em papillote', 'correct_answer' => true],
                    ['id' => 'c456fdd1-296a-5b5e-ae9e-846906f7d3bd', 'description' => 'Pocher', 'correct_answer' => false],
                    ['id' => '54ba3c0a-d8f8-58a8-9b75-51c6c7686eda', 'description' => 'Confit', 'correct_answer' => false],
                    ['id' => '82b1d2fd-4c7e-52dd-949b-55c591c9c56a', 'description' => 'Escalfamento', 'correct_answer' => false],
                    ['id' => 'c00f5bf8-ce8a-5068-b8af-31b34ed6bedb', 'description' => 'Cocção sous-vide', 'correct_answer' => false]
                ]],
        ['id' => '6953af94-c205-5a48-a4b8-d5747e88e905', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual variedade de uva branca é tradicionalmente associada à região suíça de Lavaux e ao vinho Fendant?', 'difficulty' => 4, 'weight' => 695, 'alternatives' => [
                    ['id' => 'b0e999ff-2fbd-5aa3-8462-51dec7ca3e15', 'description' => 'Chasselas', 'correct_answer' => true],
                    ['id' => '413f1a3f-e021-5099-9501-59d61c6e1044', 'description' => 'Riesling', 'correct_answer' => false],
                    ['id' => '6a93c255-ae3c-56d3-a973-cd1777f8e644', 'description' => 'Muscadet', 'correct_answer' => false],
                    ['id' => 'd5511002-9a9d-5885-a438-c13158d0eeb5', 'description' => 'Marsanne', 'correct_answer' => false],
                    ['id' => 'c0681d68-5eea-5ce8-ac50-acb2a3bc7bec', 'description' => 'Viognier', 'correct_answer' => false]
                ]],
        ['id' => 'fa7ba9ad-ddf6-5f19-b2b6-710b0332ba80', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual variedade de uva branca é fortemente associada às regiões alemãs do Mosel e do Rheingau?', 'difficulty' => 4, 'weight' => 719, 'alternatives' => [
                    ['id' => 'f04dc465-bf0f-5223-892d-e489b13ce68a', 'description' => 'Aligoté', 'correct_answer' => false],
                    ['id' => 'd523c87c-667a-51a5-86c4-0e6cecb721b3', 'description' => 'Viognier', 'correct_answer' => false],
                    ['id' => '5fc6aca1-51f7-53e9-a50d-d288721bc406', 'description' => 'Pinot Gris', 'correct_answer' => false],
                    ['id' => '84367d7f-1731-57fd-b580-2aad29e2a088', 'description' => 'Marsanne', 'correct_answer' => false],
                    ['id' => '3c36c7af-bc28-5aee-8c15-df30106f7604', 'description' => 'Riesling', 'correct_answer' => true]
                ]],
        ['id' => '9fae2d79-51fb-55ae-bf37-ec6a64c4de65', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual variedade de uva branca aromática é conhecida por notas florais e de lichia e tem presença marcante na Alsácia?', 'difficulty' => 4, 'weight' => 717, 'alternatives' => [
                    ['id' => '4ba49efc-99a2-5008-9d20-026b6ef81d3f', 'description' => 'Pinot Gris', 'correct_answer' => false],
                    ['id' => 'dfcc7600-a62d-5eb7-98be-309639e53fda', 'description' => 'Muscadet', 'correct_answer' => false],
                    ['id' => '3963e6ab-24b9-59b2-aa6a-653a7ab91aba', 'description' => 'Gewürztraminer', 'correct_answer' => true],
                    ['id' => '20bab99f-1fa8-58e0-b6c1-f52f25136b4a', 'description' => 'Marsanne', 'correct_answer' => false],
                    ['id' => '68a038b0-1ac4-51dd-b447-1fcb23675ae6', 'description' => 'Chasselas', 'correct_answer' => false]
                ]],
        ['id' => '4db3acbd-a120-5b61-b0a6-7f84f6a261df', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual variedade de uva branca é cultivada na Alsácia e na Francônia, produzindo vinhos geralmente discretos e frescos?', 'difficulty' => 4, 'weight' => 757, 'alternatives' => [
                    ['id' => 'fdc1f742-4eef-5da0-8b9a-a6dbf8859d9a', 'description' => 'Pinot Gris', 'correct_answer' => false],
                    ['id' => 'cff002ec-f064-54e9-ac1e-93ba86f0be0d', 'description' => 'Viognier', 'correct_answer' => false],
                    ['id' => 'ebce6aee-0442-5052-9285-332f5fcb126f', 'description' => 'Sylvaner', 'correct_answer' => true],
                    ['id' => '2793281b-0cbf-5e26-b978-9a05adce4b7c', 'description' => 'Chasselas', 'correct_answer' => false],
                    ['id' => '2d6bab2d-afd8-5fc2-ac61-4e81bc24844f', 'description' => 'Riesling', 'correct_answer' => false]
                ]],
        ['id' => '670e451a-3203-58d1-b205-4e8ffd1ee478', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual variedade de uva branca de casca rosada é conhecida como Grauburgunder na Alemanha e Pinot Grigio na Itália?', 'difficulty' => 4, 'weight' => 789, 'alternatives' => [
                    ['id' => 'fbe0ee9b-51c8-504f-8fd7-e2e3a766a881', 'description' => 'Riesling', 'correct_answer' => false],
                    ['id' => '6fbb2d23-ee0c-5f02-aaf1-3fbe69428c4c', 'description' => 'Marsanne', 'correct_answer' => false],
                    ['id' => '64fba9f9-d3dd-517f-b604-02fa1d581046', 'description' => 'Muscadet', 'correct_answer' => false],
                    ['id' => 'c449c0f6-dba0-5ea9-b111-b47d1436f5d1', 'description' => 'Pinot Gris', 'correct_answer' => true],
                    ['id' => 'f23478fd-7af1-5f90-a304-b7655e90e9da', 'description' => 'Viognier', 'correct_answer' => false]
                ]],
        ['id' => 'f32cc525-5def-57e4-b3c0-d1f4996d950b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho clássico francês é preparado com vinho tinto, chalotas e tradicionalmente tutano?', 'difficulty' => 4, 'weight' => 769, 'alternatives' => [
                    ['id' => 'a39532df-e351-5429-9407-5b9d3ab21455', 'description' => 'Marchand de vin', 'correct_answer' => false],
                    ['id' => '54200336-7018-595b-b539-30ffa67abb1b', 'description' => 'Poivrade', 'correct_answer' => false],
                    ['id' => '97a6aa25-3463-5389-8732-5a8e4627c25c', 'description' => 'Bordelaise', 'correct_answer' => true],
                    ['id' => 'd0a45505-537e-5bad-a9f7-371456f8b612', 'description' => 'Béarnaise', 'correct_answer' => false],
                    ['id' => 'edb10dab-4f54-5eb0-ae20-85c2a6236a33', 'description' => 'Charcutière', 'correct_answer' => false]
                ]],
        ['id' => 'b408396c-1e77-52d6-a82d-b48aabcbf79f', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho francês emulsionado é aromatizado com estragão e redução de vinagre e chalotas?', 'difficulty' => 4, 'weight' => 718, 'alternatives' => [
                    ['id' => '6d15a847-91e6-5020-9c86-9b02addb57de', 'description' => 'Foyot', 'correct_answer' => false],
                    ['id' => '74686077-d21c-5293-b68e-6ded765c81b2', 'description' => 'Robert', 'correct_answer' => false],
                    ['id' => 'a6cd5555-921c-50ca-bd63-aa632fef1d67', 'description' => 'Poivrade', 'correct_answer' => false],
                    ['id' => '472e1de8-3236-520a-8caa-5a4e92265d51', 'description' => 'Choron', 'correct_answer' => false],
                    ['id' => '7374abf1-0266-5349-935b-f8ce80e56746', 'description' => 'Béarnaise', 'correct_answer' => true]
                ]],
        ['id' => '52c86bd8-0f0f-5af6-b400-11899b10e4cd', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual variação de molho béarnaise incorpora tomate?', 'difficulty' => 4, 'weight' => 633, 'alternatives' => [
                    ['id' => 'ecf72043-205e-5742-acb6-030752297ca4', 'description' => 'Poivrade', 'correct_answer' => false],
                    ['id' => '042a2676-d86c-52ca-814c-c31787e18120', 'description' => 'Bordelaise', 'correct_answer' => false],
                    ['id' => 'a4a34db7-8b38-5ea3-bd38-1f2ebb28d7aa', 'description' => 'Charcutière', 'correct_answer' => false],
                    ['id' => '540b615d-7b02-5afb-83ca-94c2c0c84333', 'description' => 'Robert', 'correct_answer' => false],
                    ['id' => 'abc87a1c-86b5-5d0d-a8ab-fd36a286bfdf', 'description' => 'Choron', 'correct_answer' => true]
                ]],
        ['id' => '938de01c-34c8-5a60-8d35-49a27cd5eddd', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual variação de béarnaise é enriquecida com glace de viande ou demi-glace?', 'difficulty' => 4, 'weight' => 701, 'alternatives' => [
                    ['id' => '47bc252b-81e1-5d0c-8b9f-75e9f35ace9a', 'description' => 'Poivrade', 'correct_answer' => false],
                    ['id' => '9c9e1c1f-a8a1-59f3-bf69-5fa1556f0c4d', 'description' => 'Choron', 'correct_answer' => false],
                    ['id' => 'ba2fa5c6-685e-5a69-bba6-ab38bf8d1c25', 'description' => 'Foyot', 'correct_answer' => true],
                    ['id' => '375809c9-537c-5722-86ee-91476ce7fb72', 'description' => 'Béarnaise', 'correct_answer' => false],
                    ['id' => 'b92079e4-e820-560a-beff-989084219097', 'description' => 'Bordelaise', 'correct_answer' => false]
                ]],
        ['id' => '2e21646e-1bf8-5aa4-b833-d471e055f238', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual molho clássico francês é preparado com vinho tinto, chalotas e fundo escuro?', 'difficulty' => 4, 'weight' => 779, 'alternatives' => [
                    ['id' => '5af287a9-a103-5041-8848-a31c415a85c4', 'description' => 'Charcutière', 'correct_answer' => false],
                    ['id' => 'b5f57ac6-fa8f-5f95-a960-eff7d6fef258', 'description' => 'Robert', 'correct_answer' => false],
                    ['id' => '05cf5b8c-36de-52a4-a6e6-169665b6453a', 'description' => 'Choron', 'correct_answer' => false],
                    ['id' => 'a15a91e4-74b7-5b9a-9bd0-3aba9e8c1caa', 'description' => 'Béarnaise', 'correct_answer' => false],
                    ['id' => 'e0b37298-9605-5799-ae92-7c361ed0f894', 'description' => 'Marchand de vin', 'correct_answer' => true]
                ]],
        ['id' => '9ecb1fb1-84fa-5a29-bce9-aa08af9eaea8', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual torta francesa redonda de massa folhada costuma conter recheio de frangipane e uma superfície decorada em espiral?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => 'fa028d13-7770-5f04-8ee9-1dca21f303db', 'description' => 'Galette des rois', 'correct_answer' => false],
                    ['id' => 'ea916fef-74b4-574b-9b5e-0d867224e99d', 'description' => 'Clafoutis', 'correct_answer' => false],
                    ['id' => '34a10523-35dd-5ec9-b651-cd2ac28828ab', 'description' => 'Canelé', 'correct_answer' => false],
                    ['id' => 'c8494138-b144-59cf-ba63-c04e31ac8f01', 'description' => 'Gâteau basque', 'correct_answer' => false],
                    ['id' => 'c6acc8f5-a2b3-545e-8cdb-87630d2db75a', 'description' => 'Pithivier', 'correct_answer' => true]
                ]],
        ['id' => '50a72b75-dffc-5121-b185-433887f917e0', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bolo ou torta tradicional francesa é consumido na Epifania e frequentemente contém uma fava escondida?', 'difficulty' => 4, 'weight' => 668, 'alternatives' => [
                    ['id' => '4ead52c7-ad9e-5732-8b44-51e474507793', 'description' => 'Galette des rois', 'correct_answer' => true],
                    ['id' => 'e2ea0215-4278-5811-8da6-f8f69636eec4', 'description' => 'Paris-Brest', 'correct_answer' => false],
                    ['id' => 'f531b3d3-9a81-5386-95d6-56a3fcc7c9ca', 'description' => 'Gâteau basque', 'correct_answer' => false],
                    ['id' => 'b2f89ef3-c5a8-5bc0-84bb-608d2bbdb7ed', 'description' => 'Tarte Tatin', 'correct_answer' => false],
                    ['id' => '7c1321cc-bd80-59fd-b603-67688b993ce1', 'description' => 'Pithivier', 'correct_answer' => false]
                ]],
        ['id' => 'f41848e5-c4fc-5b02-981e-5fe39bab92ba', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual especialidade da Bretanha é feita com massa fermentada, manteiga e açúcar, formando camadas caramelizadas?', 'difficulty' => 4, 'weight' => 680, 'alternatives' => [
                    ['id' => 'e82152cb-0b82-5ba1-8d31-967907b8d8d0', 'description' => 'Kouign-amann', 'correct_answer' => true],
                    ['id' => 'e8857a7d-495f-5bd2-aca7-16a764efef25', 'description' => 'Galette des rois', 'correct_answer' => false],
                    ['id' => '9b9f4e4f-b4f2-5fab-b82e-19cf1e7643de', 'description' => 'Canelé', 'correct_answer' => false],
                    ['id' => '6932eeaa-1663-5c9e-a146-1dc947a4610a', 'description' => 'Gâteau basque', 'correct_answer' => false],
                    ['id' => 'd85fa63c-b682-5ecd-b27b-ae05a5cde123', 'description' => 'Pithivier', 'correct_answer' => false]
                ]],
        ['id' => 'a9a6387e-b71e-5cb3-8505-0759730890b4', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual bolo tradicional do País Basco francês costuma ser recheado com creme de confeiteiro ou geleia de cereja?', 'difficulty' => 4, 'weight' => 720, 'alternatives' => [
                    ['id' => 'fe24a264-cd42-53cc-bdc2-9a587c65ccde', 'description' => 'Gâteau basque', 'correct_answer' => true],
                    ['id' => '8e3b0ca2-3ed2-5aaf-9d8a-977e40f88218', 'description' => 'Pithivier', 'correct_answer' => false],
                    ['id' => 'e45fba49-1c0a-5657-81f7-80ae8e034a39', 'description' => 'Galette des rois', 'correct_answer' => false],
                    ['id' => '9c901477-b823-589d-8f8f-9c234673fcb8', 'description' => 'Kouign-amann', 'correct_answer' => false],
                    ['id' => 'a7c24d04-b790-5ab7-ae5d-f46316c1caff', 'description' => 'Far breton', 'correct_answer' => false]
                ]],
        ['id' => '08a8b887-1e48-5538-8eba-819eaf63b1dc', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual torta francesa de maçãs é assada com a fruta caramelizada sob a massa e depois invertida para servir?', 'difficulty' => 4, 'weight' => 690, 'alternatives' => [
                    ['id' => 'a85c81e4-38e6-5664-b823-092ea9d660c5', 'description' => 'Tarte Tatin', 'correct_answer' => true],
                    ['id' => 'dc3f89c6-57bc-561c-988c-7edad5b158eb', 'description' => 'Canelé', 'correct_answer' => false],
                    ['id' => '7ee8b2a9-bf5b-5911-8c64-7cde54e1b863', 'description' => 'Paris-Brest', 'correct_answer' => false],
                    ['id' => '86cf700d-74f8-5c5c-a1a7-4e9e9de7744c', 'description' => 'Clafoutis', 'correct_answer' => false],
                    ['id' => '848cfb61-bd6b-5704-aa8d-d523c68f8988', 'description' => 'Gâteau basque', 'correct_answer' => false]
                ]],
        ['id' => '08fcfb97-9603-54b7-b92a-4b986ebb776a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo de conservação remove água de um alimento congelado por sublimação sob baixa pressão?', 'difficulty' => 4, 'weight' => 672, 'alternatives' => [
                    ['id' => '5b3c0b52-9d92-5f31-a06b-c75de2fe55a8', 'description' => 'Secagem por micro-ondas', 'correct_answer' => false],
                    ['id' => '575e84f8-3a9e-5bc1-8c91-d06a9e315134', 'description' => 'Secagem solar', 'correct_answer' => false],
                    ['id' => 'e16142dc-352b-5b1d-a26f-346eeccd47e4', 'description' => 'Liofilização', 'correct_answer' => true],
                    ['id' => '2a194629-c16e-5eb9-a5a9-d6b823f810f0', 'description' => 'Secagem por tambor', 'correct_answer' => false],
                    ['id' => 'e3d5dfdf-59fa-53f6-9192-a1823c49310f', 'description' => 'Atomização', 'correct_answer' => false]
                ]],
        ['id' => 'ace9ed5e-812e-5e47-902b-4e7e3d1c004d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo reduz a água de frutas ou vegetais por imersão em soluções concentradas de açúcar ou sal?', 'difficulty' => 4, 'weight' => 635, 'alternatives' => [
                    ['id' => '17a00bca-a8df-5397-b506-553b92a8039a', 'description' => 'Desidratação osmótica', 'correct_answer' => true],
                    ['id' => '6956f375-214a-5d0c-b896-6f4e68327903', 'description' => 'Crioconcentração', 'correct_answer' => false],
                    ['id' => '3a8839c8-83eb-54d7-ba29-20bddf244eb0', 'description' => 'Secagem por infravermelho', 'correct_answer' => false],
                    ['id' => 'ffc1672f-283a-52bd-a0a9-ae60a4b999ad', 'description' => 'Secagem solar', 'correct_answer' => false],
                    ['id' => 'ee3acbb8-c569-567f-9c44-d4bb57b2f14e', 'description' => 'Secagem por tambor', 'correct_answer' => false]
                ]],
        ['id' => '5f142f6b-923c-565d-9791-215947ffec72', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo transforma um líquido em pó ao pulverizá-lo em gotículas em contato com ar quente?', 'difficulty' => 4, 'weight' => 702, 'alternatives' => [
                    ['id' => '5c632a75-0e6e-5101-a412-cd358a9ad7aa', 'description' => 'Secagem por micro-ondas', 'correct_answer' => false],
                    ['id' => '9887980a-7fbd-5d70-bd75-42dbf57a9543', 'description' => 'Secagem solar', 'correct_answer' => false],
                    ['id' => '51e8b4b7-e18c-54e8-ad19-eac21109e753', 'description' => 'Atomização', 'correct_answer' => true],
                    ['id' => '2688025a-9552-5453-a660-b7be68b2b4d8', 'description' => 'Secagem em leito fluidizado', 'correct_answer' => false],
                    ['id' => '5a991037-e054-5e73-9701-c74bf9346995', 'description' => 'Crioconcentração', 'correct_answer' => false]
                ]],
        ['id' => 'cafb2164-9f45-59d1-92b5-b3b9a4d5b39d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo remove parte da água de um alimento líquido por evaporação sob pressão reduzida?', 'difficulty' => 4, 'weight' => 654, 'alternatives' => [
                    ['id' => '82878299-a2e9-5bcd-affc-1a98dcd2843f', 'description' => 'Secagem em leito fluidizado', 'correct_answer' => false],
                    ['id' => '2c238137-3147-5668-881c-12cd9dc9d589', 'description' => 'Concentração a vácuo', 'correct_answer' => true],
                    ['id' => 'd0a2d203-aee9-5d8b-91f1-fbea04f37bfb', 'description' => 'Secagem por tambor', 'correct_answer' => false],
                    ['id' => '547de8a8-056b-5cd7-a12c-0720613f0f95', 'description' => 'Desidratação osmótica', 'correct_answer' => false],
                    ['id' => '8a8c8172-b71c-5822-a9a1-86f5e379727c', 'description' => 'Liofilização', 'correct_answer' => false]
                ]],
        ['id' => '6e9f7204-3c18-5564-bf85-f4095fb77e6f', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo concentra soluções alimentares removendo água na forma de cristais de gelo?', 'difficulty' => 4, 'weight' => 658, 'alternatives' => [
                    ['id' => '9545d430-5141-502a-b666-85fc468225e7', 'description' => 'Concentração a vácuo', 'correct_answer' => false],
                    ['id' => '4b7b371c-5b8d-5450-baa1-f9fdf72753ea', 'description' => 'Liofilização', 'correct_answer' => false],
                    ['id' => 'bfad3df4-7e96-518b-8e70-ed21ada008ad', 'description' => 'Atomização', 'correct_answer' => false],
                    ['id' => 'fcbd9933-bb16-57f9-b244-f543c940b848', 'description' => 'Secagem por tambor', 'correct_answer' => false],
                    ['id' => '64a60098-c8e2-5b68-817f-8f7c8fe529fc', 'description' => 'Crioconcentração', 'correct_answer' => true]
                ]],
        ['id' => 'fe549124-1822-50c1-ac3d-a0a834684396', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual conjunto de reações entre grupos carbonila de açúcares redutores e grupos amino contribui para o escurecimento e aromas de alimentos aquecidos?', 'difficulty' => 5, 'weight' => 935, 'alternatives' => [
                    ['id' => '1101f5bb-d3c5-533c-a32b-122eaa6cca19', 'description' => 'Retrogradação', 'correct_answer' => false],
                    ['id' => '7e7d0cc1-8cbe-53ed-a828-e649e31e68f8', 'description' => 'Desnaturação proteica', 'correct_answer' => false],
                    ['id' => '38273c84-8736-52fc-b464-92c470928814', 'description' => 'Reação de Maillard', 'correct_answer' => true],
                    ['id' => 'cd242d05-d6d1-5641-89bc-3a61dc1c9c0d', 'description' => 'Hidrólise do amido', 'correct_answer' => false],
                    ['id' => 'f457319e-f71e-5fd8-b826-737085fbdfbd', 'description' => 'Fermentação alcoólica', 'correct_answer' => false]
                ]],
        ['id' => 'eee3d70d-1756-5b83-9e9a-cd1eaa75d77a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual transformação térmica de açúcares ocorre sem exigir a presença de aminoácidos e produz compostos de cor e aroma característicos?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => '686dff2c-4a57-5e84-a09f-c9a069812cd1', 'description' => 'Caramelização', 'correct_answer' => true],
                    ['id' => 'd04c589a-6a69-5c7b-95cf-856a94bd1f63', 'description' => 'Reação de Maillard', 'correct_answer' => false],
                    ['id' => '2a4053b5-4ecd-5fab-b1e9-bbb4ac31ea4c', 'description' => 'Fermentação alcoólica', 'correct_answer' => false],
                    ['id' => 'ea3d0b56-ac32-530d-924d-175012c4aac2', 'description' => 'Gelatinização', 'correct_answer' => false],
                    ['id' => '0e91d4d6-01b1-5bfc-81a4-5499c83f1d6a', 'description' => 'Desnaturação proteica', 'correct_answer' => false]
                ]],
        ['id' => 'f3485cba-0c80-5a06-a1c7-2959e7cbf7be', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual transformação do amido pelo calor seco produz moléculas menores chamadas dextrinas?', 'difficulty' => 5, 'weight' => 841, 'alternatives' => [
                    ['id' => '0f469b9f-cf51-5fb9-b214-38991d64e9e1', 'description' => 'Gelatinização', 'correct_answer' => false],
                    ['id' => '4ba5f164-64bb-5381-8e21-f562d1d6347f', 'description' => 'Dextrinização', 'correct_answer' => true],
                    ['id' => '16c17b66-7999-5af1-9456-7447f46cdde7', 'description' => 'Hidrólise do amido', 'correct_answer' => false],
                    ['id' => 'b42cb9e8-2e5a-5c8d-8873-11714329d6df', 'description' => 'Retrogradação', 'correct_answer' => false],
                    ['id' => '5c9df2a0-91a4-5af6-8425-2dd8007444e5', 'description' => 'Fermentação alcoólica', 'correct_answer' => false]
                ]],
        ['id' => 'ade99e65-fd50-54d5-a994-8172f03826b7', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual fenômeno ocorre quando grânulos de amido absorvem água e incham durante o aquecimento, aumentando a viscosidade?', 'difficulty' => 5, 'weight' => 976, 'alternatives' => [
                    ['id' => '383f6f07-60bb-551f-bb65-f43b603e79ac', 'description' => 'Reação de Maillard', 'correct_answer' => false],
                    ['id' => 'a1a3c7ea-b6da-5e30-8de5-eb357d543e02', 'description' => 'Dextrinização', 'correct_answer' => false],
                    ['id' => '4c976ee8-47d7-53f3-86fb-7e0b87ed0a3d', 'description' => 'Oxidação lipídica', 'correct_answer' => false],
                    ['id' => '24c55b69-205e-5c8b-8c2f-9f992736eb94', 'description' => 'Gelatinização', 'correct_answer' => true],
                    ['id' => 'a956d663-244e-5355-9482-eab6e9128a5b', 'description' => 'Fermentação lática', 'correct_answer' => false]
                ]],
        ['id' => '82675b67-7d48-5119-8bc9-75fe75ecd093', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual fenômeno ocorre quando cadeias de amido gelatinizado se reassociam durante o resfriamento e armazenamento?', 'difficulty' => 5, 'weight' => 819, 'alternatives' => [
                    ['id' => '7076f65c-d895-5143-aefe-bf150fc7eb02', 'description' => 'Fermentação lática', 'correct_answer' => false],
                    ['id' => '723a5c67-26d0-59e7-8b65-953bd4592ec1', 'description' => 'Reação de Maillard', 'correct_answer' => false],
                    ['id' => '0d1e9a5e-3ce6-5790-8720-7e8bee0a9832', 'description' => 'Desnaturação proteica', 'correct_answer' => false],
                    ['id' => 'b315d7bc-e529-55eb-8ff8-bce094141736', 'description' => 'Retrogradação', 'correct_answer' => true],
                    ['id' => 'f95e17f9-acd2-5d9f-9feb-370f2178c585', 'description' => 'Caramelização', 'correct_answer' => false]
                ]],
        ['id' => '54c21e58-8df4-5033-a517-b5edc0b2add5', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual grandeza expressa a disponibilidade termodinâmica da água em um alimento e ajuda a prever sua estabilidade microbiológica?', 'difficulty' => 5, 'weight' => 966, 'alternatives' => [
                    ['id' => '37845c60-555a-5d04-819b-77381dc87007', 'description' => 'Calor específico', 'correct_answer' => false],
                    ['id' => '91a94e14-9fcf-5288-b2cd-d13396c363b7', 'description' => 'Ponto de congelamento', 'correct_answer' => false],
                    ['id' => 'b2b6766d-c85f-522e-a540-b03a77fb7c91', 'description' => 'Atividade de água', 'correct_answer' => true],
                    ['id' => '01894a74-d0ac-5c3a-a587-6e4b8128da32', 'description' => 'Permeabilidade ao vapor', 'correct_answer' => false],
                    ['id' => 'a3ea4fa1-1a88-5e3d-9777-94575882fbd3', 'description' => 'Entalpia de vaporização', 'correct_answer' => false]
                ]],
        ['id' => '489e7ee0-9b06-5b1d-b0e2-f53c473fd97e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual parâmetro corresponde à umidade relativa do ar em equilíbrio com a água de um alimento, sob temperatura definida?', 'difficulty' => 5, 'weight' => 979, 'alternatives' => [
                    ['id' => '9f640ee0-9b1b-54d6-8812-44f7b0689d0b', 'description' => 'Umidade relativa de equilíbrio', 'correct_answer' => true],
                    ['id' => 'e3ebec87-0878-5b2e-a4e1-1a4e549bb757', 'description' => 'Entalpia de vaporização', 'correct_answer' => false],
                    ['id' => 'b35e7deb-792a-576b-ab28-1001c79aab11', 'description' => 'Ponto de congelamento', 'correct_answer' => false],
                    ['id' => '8291cad3-038a-5145-a3fa-a2e7d45af4f7', 'description' => 'Potencial osmótico', 'correct_answer' => false],
                    ['id' => '55e2a47f-df07-58ab-abee-5edb9e88f975', 'description' => 'Pressão de vapor', 'correct_answer' => false]
                ]],
        ['id' => '29de63be-160d-5807-9a1c-8b1ef5513092', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual componente do potencial da água está associado à presença de solutos dissolvidos?', 'difficulty' => 5, 'weight' => 913, 'alternatives' => [
                    ['id' => '61efe8be-3e35-5a1d-803f-8cc34a58d94f', 'description' => 'Pressão de vapor', 'correct_answer' => false],
                    ['id' => '62d439c3-bb58-5991-9033-6e342c2f9739', 'description' => 'Isoterma de sorção', 'correct_answer' => false],
                    ['id' => '0af3c7d8-4a93-55e2-8480-08782e9c2c62', 'description' => 'Potencial osmótico', 'correct_answer' => true],
                    ['id' => '8aea21cd-9441-5cd0-8d55-ed53aa8e17fd', 'description' => 'Ponto de congelamento', 'correct_answer' => false],
                    ['id' => '5e8f04f3-e69f-5e89-8aa2-d2cf4a315385', 'description' => 'Entalpia de vaporização', 'correct_answer' => false]
                ]],
        ['id' => 'b4ef996b-03f9-5c92-ae8d-287b3f155adb', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual curva relaciona o teor de água de equilíbrio de um alimento à atividade de água, em temperatura constante?', 'difficulty' => 5, 'weight' => 842, 'alternatives' => [
                    ['id' => '47f3c81b-93fa-5b11-a51f-eca71d6b8b46', 'description' => 'Isoterma de sorção', 'correct_answer' => true],
                    ['id' => '855b59b0-9575-59cc-a45c-7f25e42b1bec', 'description' => 'Permeabilidade ao vapor', 'correct_answer' => false],
                    ['id' => 'f04cd4d6-4244-55ac-8d1f-038fcc16be7f', 'description' => 'Higroscopicidade', 'correct_answer' => false],
                    ['id' => 'f9e2ccdc-3d32-5d81-8fc4-2be23a2d6e0f', 'description' => 'Pressão de vapor', 'correct_answer' => false],
                    ['id' => '75988192-1ace-531b-aafe-6eda688e0cb0', 'description' => 'Calor específico', 'correct_answer' => false]
                ]],
        ['id' => 'f3db237d-f919-503b-b5cb-faba0e8095b6', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual propriedade descreve a capacidade de um material absorver umidade do ambiente?', 'difficulty' => 5, 'weight' => 865, 'alternatives' => [
                    ['id' => 'f47a0744-cc71-5743-b755-9b53b1deff52', 'description' => 'Atividade de água', 'correct_answer' => false],
                    ['id' => '6b2c1530-faa8-5264-b617-5b58a51a9c95', 'description' => 'Potencial osmótico', 'correct_answer' => false],
                    ['id' => 'd9dda893-845a-503b-b6b1-65cef9a1cf53', 'description' => 'Ponto de congelamento', 'correct_answer' => false],
                    ['id' => '59500b31-9dd9-5e23-ac72-12340818e89d', 'description' => 'Higroscopicidade', 'correct_answer' => true],
                    ['id' => 'e86b4b61-2a0b-5ca3-bc08-ccc28d54a20b', 'description' => 'Isoterma de sorção', 'correct_answer' => false]
                ]],
        ['id' => '5f256475-c0c8-55af-b6be-9597a3173356', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual polissacarídeo do amido é formado predominantemente por cadeias lineares de unidades de glicose ligadas por ligações alfa-1,4?', 'difficulty' => 5, 'weight' => 808, 'alternatives' => [
                    ['id' => 'a2355637-37c9-506a-a79f-a00b1e0dffe9', 'description' => 'Quitina', 'correct_answer' => false],
                    ['id' => '850d50fd-0bcd-5a72-b027-c2d1c7298f30', 'description' => 'Amilopectina', 'correct_answer' => false],
                    ['id' => '2ebed783-7ced-5225-a774-5bd8cb0db51a', 'description' => 'Glicogênio', 'correct_answer' => false],
                    ['id' => 'd37c1a41-64f6-5c69-ac44-6d2c27319716', 'description' => 'Amilose', 'correct_answer' => true],
                    ['id' => '2c7e2f48-33ff-5ae5-9e14-416738d77285', 'description' => 'Pectina', 'correct_answer' => false]
                ]],
        ['id' => 'cbc70741-f4b0-59e6-b611-a533cdc31ee4', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual componente do amido possui estrutura altamente ramificada com ligações alfa-1,4 e pontos de ramificação alfa-1,6?', 'difficulty' => 5, 'weight' => 980, 'alternatives' => [
                    ['id' => '5ae4defb-d721-58d5-ad17-07a9d67a397c', 'description' => 'Beta-glucana', 'correct_answer' => false],
                    ['id' => '84dc89b0-39f4-5722-b4dc-96add7f2428e', 'description' => 'Inulina', 'correct_answer' => false],
                    ['id' => '39be3345-5bda-5908-80c6-b4a4e9b151bf', 'description' => 'Pectina', 'correct_answer' => false],
                    ['id' => 'e31e1c0e-30f4-58cc-8ef5-400546df283b', 'description' => 'Dextrana', 'correct_answer' => false],
                    ['id' => '63c6c629-d3fc-5bdf-8767-3220c01982bc', 'description' => 'Amilopectina', 'correct_answer' => true]
                ]],
        ['id' => '827d5ee7-077e-5370-b16f-e99e839327ef', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual polissacarídeo estrutural vegetal é formado por unidades de glicose unidas por ligações beta-1,4?', 'difficulty' => 5, 'weight' => 951, 'alternatives' => [
                    ['id' => 'bf9e6e20-04c4-5875-9a44-3b9ad2b1b2f8', 'description' => 'Amilopectina', 'correct_answer' => false],
                    ['id' => 'a6ff5f50-f296-5b9a-941b-b989e7d4d122', 'description' => 'Amido resistente', 'correct_answer' => false],
                    ['id' => '1c32af26-cdfa-56ef-8167-f946ce80dee6', 'description' => 'Beta-glucana', 'correct_answer' => false],
                    ['id' => '7784aeb8-ebbc-58a7-8fce-ed3a7cbc28e4', 'description' => 'Glicogênio', 'correct_answer' => false],
                    ['id' => '4fcfa1ee-991d-513e-a089-462c34c58f85', 'description' => 'Celulose', 'correct_answer' => true]
                ]],
        ['id' => '43e35867-0aff-5472-be58-76caf3f25da0', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual polissacarídeo rico em ácido galacturônico é importante na estrutura da parede celular vegetal e na formação de gel?', 'difficulty' => 5, 'weight' => 838, 'alternatives' => [
                    ['id' => '9edbd848-859a-50a3-af58-2fe610a36353', 'description' => 'Amido resistente', 'correct_answer' => false],
                    ['id' => '5b8a50ab-64b3-576c-9211-36b59241a866', 'description' => 'Pectina', 'correct_answer' => true],
                    ['id' => 'f023208c-901d-541a-9e64-f1e682f84749', 'description' => 'Amilose', 'correct_answer' => false],
                    ['id' => '0d3a31c3-d7a9-5bea-8423-6ae6f9ccea48', 'description' => 'Beta-glucana', 'correct_answer' => false],
                    ['id' => '2c6829fc-88f5-5834-88f7-816cc2628a94', 'description' => 'Amilopectina', 'correct_answer' => false]
                ]],
        ['id' => 'ffe839a4-c998-58a6-b2d7-db976dcf96e8', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual frutano de reserva vegetal é composto principalmente por unidades de frutose e atua como fibra prebiótica?', 'difficulty' => 5, 'weight' => 980, 'alternatives' => [
                    ['id' => '3abb3bbc-4fee-5048-897b-1384a09a4810', 'description' => 'Amilose', 'correct_answer' => false],
                    ['id' => '262759d9-e3d5-5cbf-9c9e-0d2467544db4', 'description' => 'Beta-glucana', 'correct_answer' => false],
                    ['id' => '9cac8160-645d-5ac7-bf5d-210e119e62be', 'description' => 'Inulina', 'correct_answer' => true],
                    ['id' => '4b2e72c8-5a6d-53d8-87b9-a8ff7cf9b837', 'description' => 'Glicogênio', 'correct_answer' => false],
                    ['id' => '566895d7-ed6c-535e-a934-7943f72e9591', 'description' => 'Amilopectina', 'correct_answer' => false]
                ]],
        ['id' => '58356e56-a45c-523d-bdae-0be34d283162', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual família de proteínas representa a maior parte das proteínas do leite bovino e forma micelas estabilizadas por fosfato de cálcio?', 'difficulty' => 5, 'weight' => 898, 'alternatives' => [
                    ['id' => 'f30dc7ca-1861-5ff0-811f-c03eb33d18e7', 'description' => 'Colágeno', 'correct_answer' => false],
                    ['id' => '192972fa-6d33-5d7f-98ea-e41ea7e262af', 'description' => 'Glutenina', 'correct_answer' => false],
                    ['id' => 'f2cfd042-658c-5d32-b1aa-8edeaae356ab', 'description' => 'Caseína', 'correct_answer' => true],
                    ['id' => '0c4ddd56-3bdf-5677-b13e-ad9d2848b0b5', 'description' => 'Beta-lactoglobulina', 'correct_answer' => false],
                    ['id' => '7fd14316-60d0-5fa2-84b0-180b978ff699', 'description' => 'Miosina', 'correct_answer' => false]
                ]],
        ['id' => '41a72a17-ecff-5238-8ab0-593109ad9611', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual proteína do soro do leite bovino é conhecida por conter grupos capazes de formar ligações dissulfeto durante o aquecimento?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '71a627af-9f9b-5f00-8bb8-89d27225c80e', 'description' => 'Beta-lactoglobulina', 'correct_answer' => true],
                    ['id' => 'd02c3b21-360d-5d27-9d68-a4eaad610211', 'description' => 'Elastina', 'correct_answer' => false],
                    ['id' => 'a22fc5ba-fe46-5507-bb9a-53a166f74d89', 'description' => 'Alfa-lactoalbumina', 'correct_answer' => false],
                    ['id' => '7dea0178-6888-5306-93b8-7e55444acae4', 'description' => 'Colágeno', 'correct_answer' => false],
                    ['id' => '0ef5355d-4109-559c-b1f9-06654835caa6', 'description' => 'Ovoalbumina', 'correct_answer' => false]
                ]],
        ['id' => '7b7d6f46-12f4-593b-a2f7-782c1c11ad7e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual proteína do soro do leite participa da síntese de lactose por integrar o complexo lactose-sintase?', 'difficulty' => 5, 'weight' => 819, 'alternatives' => [
                    ['id' => 'fa7bfb16-600b-53c8-be26-2154a8e365f7', 'description' => 'Miosina', 'correct_answer' => false],
                    ['id' => '7c9db0b9-94b8-5f8f-9b0a-57a6cc3509a5', 'description' => 'Caseína', 'correct_answer' => false],
                    ['id' => '998f4bbf-324c-583d-9362-ecfe3df5c0b8', 'description' => 'Beta-lactoglobulina', 'correct_answer' => false],
                    ['id' => '639e3fe8-e144-52a3-bb7f-7433f2340b67', 'description' => 'Alfa-lactoalbumina', 'correct_answer' => true],
                    ['id' => 'e9603f51-dfdc-5ef6-bf95-1272d152e7b3', 'description' => 'Ovotransferrina', 'correct_answer' => false]
                ]],
        ['id' => '426f9b4f-1e20-54e1-ba07-1a9c2bb79af1', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual proteína é a principal fração proteica da clara do ovo e apresenta propriedades de formação de espuma?', 'difficulty' => 5, 'weight' => 848, 'alternatives' => [
                    ['id' => 'fc65f67c-91e0-5102-8ae3-faed44356720', 'description' => 'Ovoalbumina', 'correct_answer' => true],
                    ['id' => 'b1ee007f-65fd-5a04-ae66-f42c7c745221', 'description' => 'Caseína', 'correct_answer' => false],
                    ['id' => 'bf662530-b85b-5910-9d48-ed4be23564fe', 'description' => 'Elastina', 'correct_answer' => false],
                    ['id' => '9bcf643e-2812-52f0-bbc1-a1a49f6edf5e', 'description' => 'Glutenina', 'correct_answer' => false],
                    ['id' => 'dfaba488-d6be-53b3-98d4-74100091602a', 'description' => 'Actina', 'correct_answer' => false]
                ]],
        ['id' => '39399fb1-50f8-5eff-83fb-211dab6494ca', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual proteína da clara do ovo também é conhecida como conalbumina e possui capacidade de ligar íons metálicos?', 'difficulty' => 5, 'weight' => 854, 'alternatives' => [
                    ['id' => 'ebd48f67-fa91-5bae-b7de-fed5ef7c4424', 'description' => 'Ovotransferrina', 'correct_answer' => true],
                    ['id' => '301ecf02-7329-5f75-bd02-3422cc55c44e', 'description' => 'Elastina', 'correct_answer' => false],
                    ['id' => '28b61cd0-dabd-5173-875f-b3f3aaaaaad5', 'description' => 'Miosina', 'correct_answer' => false],
                    ['id' => '3cd73568-79fc-576c-b19a-f7f0ef21b1c8', 'description' => 'Colágeno', 'correct_answer' => false],
                    ['id' => 'daf988ba-4427-5883-bb38-a810391b180a', 'description' => 'Actina', 'correct_answer' => false]
                ]],
        ['id' => '06d16c4c-8ba5-54ba-845d-3b11230dddb6', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual enzima catalisa a hidrólise de triacilgliceróis, liberando ácidos graxos e glicerol ou acilgliceróis parciais?', 'difficulty' => 5, 'weight' => 875, 'alternatives' => [
                    ['id' => 'cb84d22e-a3bc-5ece-b121-be8041539364', 'description' => 'Polifenoloxidase', 'correct_answer' => false],
                    ['id' => '4f45cf80-5769-5ba0-8b1a-c9f64f8c6db7', 'description' => 'Lactase', 'correct_answer' => false],
                    ['id' => '965376f4-7531-57e8-854d-48a914b224bc', 'description' => 'Invertase', 'correct_answer' => false],
                    ['id' => '0b4f5c02-2384-5f9c-b32f-62f8d49f32f5', 'description' => 'Lipase', 'correct_answer' => true],
                    ['id' => '4330f162-316c-53d1-8802-760e82854a2f', 'description' => 'Lipoxigenase', 'correct_answer' => false]
                ]],
        ['id' => '67cd9057-4883-536f-a925-917bab4cbe9e', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual enzima hidrolisa ligações glicosídicas do amido e contribui para a formação de açúcares menores?', 'difficulty' => 5, 'weight' => 978, 'alternatives' => [
                    ['id' => '36055f5b-cbed-5a01-b3e7-2deed0ec3bda', 'description' => 'Pectinase', 'correct_answer' => false],
                    ['id' => '3d8a3671-a9bd-5de6-98d0-06fb1fe4eab3', 'description' => 'Invertase', 'correct_answer' => false],
                    ['id' => '35c04ba9-d4e5-569a-8211-e32a4f124ef1', 'description' => 'Polifenoloxidase', 'correct_answer' => false],
                    ['id' => '4ce9a8d5-99db-5dec-8e6b-9cb7f53ccd0b', 'description' => 'Celulase', 'correct_answer' => false],
                    ['id' => '5eb1730c-3637-5360-b1ff-12a1b053b87f', 'description' => 'Amilase', 'correct_answer' => true]
                ]],
        ['id' => '20e8ca63-3b59-5150-b175-c9168b8e31c7', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual classe de enzimas catalisa a hidrólise de ligações peptídicas em proteínas?', 'difficulty' => 5, 'weight' => 958, 'alternatives' => [
                    ['id' => 'bc0681fd-6467-58de-ad29-c52e2e8618a9', 'description' => 'Catalase', 'correct_answer' => false],
                    ['id' => 'e54edaff-814b-57b7-bc23-82720d3939cb', 'description' => 'Lactase', 'correct_answer' => false],
                    ['id' => 'b9598283-2f24-5ce0-b07e-2129647244c8', 'description' => 'Protease', 'correct_answer' => true],
                    ['id' => 'a0817305-ab1e-5b16-b739-28f01be3dd19', 'description' => 'Amilase', 'correct_answer' => false],
                    ['id' => '7e7a7a29-778b-54c4-89ea-18e68198f4bc', 'description' => 'Celulase', 'correct_answer' => false]
                ]],
        ['id' => '812718d0-c5cb-5a8a-8d27-1871b9fa6f13', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual enzima hidrolisa a lactose em glicose e galactose?', 'difficulty' => 5, 'weight' => 864, 'alternatives' => [
                    ['id' => '5e9dd951-31fb-5b9d-bb6c-c6d99d4f9f69', 'description' => 'Pectinase', 'correct_answer' => false],
                    ['id' => '0ebb650e-3e59-55b5-ba64-04e17e71803a', 'description' => 'Invertase', 'correct_answer' => false],
                    ['id' => '80eb8f6d-dd59-5974-a42b-45bfb1ca4660', 'description' => 'Lipase', 'correct_answer' => false],
                    ['id' => '6881cd28-020b-5e17-9f2a-e21dd4310ea5', 'description' => 'Protease', 'correct_answer' => false],
                    ['id' => '79e0a89c-4d98-5a88-95cf-7d9524f5e675', 'description' => 'Lactase', 'correct_answer' => true]
                ]],
        ['id' => 'b7c7c814-2bc8-56cd-a55d-297d6cc5b9a0', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual enzima catalisa a hidrólise da sacarose em glicose e frutose?', 'difficulty' => 5, 'weight' => 823, 'alternatives' => [
                    ['id' => '3d5718d7-7929-5561-9695-84f413766747', 'description' => 'Lipase', 'correct_answer' => false],
                    ['id' => '4527535c-6280-5b7f-ae2b-409c030b17e1', 'description' => 'Amilase', 'correct_answer' => false],
                    ['id' => '068458fe-db31-5f73-93fc-c8ee01d9096c', 'description' => 'Celulase', 'correct_answer' => false],
                    ['id' => 'ccccb58b-d81e-54e6-83fd-26be1a94c759', 'description' => 'Invertase', 'correct_answer' => true],
                    ['id' => '22acd814-6afd-5a40-9d45-057963eac54a', 'description' => 'Protease', 'correct_answer' => false]
                ]],
        ['id' => '80ac1666-86e3-51cd-95ba-64259ec689d9', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo italiano de denominação protegida exige produção em áreas delimitadas da Emilia-Romagna e partes da Lombardia?', 'difficulty' => 5, 'weight' => 833, 'alternatives' => [
                    ['id' => '4ee90cfa-230b-5394-92fb-3e7305ff436e', 'description' => 'Queijo Fontina', 'correct_answer' => false],
                    ['id' => '986390b3-56d5-50f6-a98d-9ba2ce3602eb', 'description' => 'Queijo Parmigiano-Reggiano', 'correct_answer' => true],
                    ['id' => 'd70e4828-7457-5e99-8d54-ccdb426d18b4', 'description' => 'Queijo Piave', 'correct_answer' => false],
                    ['id' => '2c15afa3-e70a-57c8-93d3-f728f5272ce7', 'description' => 'Queijo Provolone Valpadana', 'correct_answer' => false],
                    ['id' => '5febc8c6-d778-510f-8722-46cf874e9bec', 'description' => 'Queijo Montasio', 'correct_answer' => false]
                ]],
        ['id' => '67c61288-3b47-5e62-b416-e44cf51d547a', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo italiano de massa dura possui denominação protegida e é produzido em uma área extensa do norte da Itália?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '49512e2b-3ac0-5701-9b36-ebb84e52a4be', 'description' => 'Queijo Pecorino Romano', 'correct_answer' => false],
                    ['id' => 'eb9fec9a-84f2-5053-9254-1837714ba642', 'description' => 'Queijo Gorgonzola', 'correct_answer' => false],
                    ['id' => '7f87d475-3477-5ad3-9623-58a8aef95f51', 'description' => 'Queijo Montasio', 'correct_answer' => false],
                    ['id' => '698776ca-2fee-5c5e-80d0-8b4f06d4c633', 'description' => 'Queijo Asiago', 'correct_answer' => false],
                    ['id' => '803183e6-9517-5b9d-87a8-795afb529d3f', 'description' => 'Queijo Grana Padano', 'correct_answer' => true]
                ]],
        ['id' => 'beeaef3b-c9f3-518a-819d-4b5b34b83f25', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo italiano de leite de ovelha, de sabor salgado e massa dura, possui denominação protegida?', 'difficulty' => 5, 'weight' => 817, 'alternatives' => [
                    ['id' => '6024bf57-a8b9-5b43-8747-c2f2176a38e8', 'description' => 'Queijo Grana Padano', 'correct_answer' => false],
                    ['id' => 'b2a17695-89d8-5e4d-b90c-897573fe57c1', 'description' => 'Queijo Pecorino Romano', 'correct_answer' => true],
                    ['id' => '920767c0-ec62-56a0-b3aa-97c5fa6cf8fe', 'description' => 'Queijo Asiago', 'correct_answer' => false],
                    ['id' => '8c08a240-645a-5db9-8902-e88b6aab2442', 'description' => 'Queijo Provolone Valpadana', 'correct_answer' => false],
                    ['id' => 'feb0940a-f707-5a3d-bb17-303b2334bf89', 'description' => 'Queijo Parmigiano-Reggiano', 'correct_answer' => false]
                ]],
        ['id' => 'f9b31d06-3182-5e1f-9d2f-688f9f55deb3', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo de denominação protegida é produzido no planalto de Asiago e em áreas delimitadas do Vêneto e Trentino?', 'difficulty' => 5, 'weight' => 908, 'alternatives' => [
                    ['id' => 'd1e28e72-761e-5fee-a230-48f0348928ac', 'description' => 'Queijo Piave', 'correct_answer' => false],
                    ['id' => '527a77c2-862d-5af7-8e19-a94e43bdfb55', 'description' => 'Queijo Asiago', 'correct_answer' => true],
                    ['id' => 'e6f0eea6-b343-5613-91fb-d22533136409', 'description' => 'Queijo Provolone Valpadana', 'correct_answer' => false],
                    ['id' => '8088f609-2d6c-5123-90da-0283b1210799', 'description' => 'Queijo Montasio', 'correct_answer' => false],
                    ['id' => 'f74106bb-55ad-5ed3-9cb1-050cc4aa7365', 'description' => 'Queijo Gorgonzola', 'correct_answer' => false]
                ]],
        ['id' => 'cd1ad1fb-2d31-58c4-9dd1-02d42ef080a6', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual queijo de leite de vaca com denominação protegida é produzido na província de Belluno, no Vêneto?', 'difficulty' => 5, 'weight' => 814, 'alternatives' => [
                    ['id' => 'f00eac70-866f-5d7d-b3af-81b4cfb78a77', 'description' => 'Queijo Parmigiano-Reggiano', 'correct_answer' => false],
                    ['id' => '1f210009-3af4-55d5-8c10-dfa40c70e0aa', 'description' => 'Queijo Piave', 'correct_answer' => true],
                    ['id' => '105dae40-0dd7-548b-9005-e0574a559ad0', 'description' => 'Queijo Provolone Valpadana', 'correct_answer' => false],
                    ['id' => '0de4e94a-7766-5a57-8df7-d8165331b947', 'description' => 'Queijo Grana Padano', 'correct_answer' => false],
                    ['id' => 'ee724a4c-0178-5f5f-85c7-7d6384bc8e12', 'description' => 'Queijo Montasio', 'correct_answer' => false]
                ]],
        ['id' => 'a9a920bc-b34f-5c30-9326-ff563ba7100d', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual classe de compostos voláteis costuma contribuir com notas frutadas, como banana e maçã, em alimentos e bebidas?', 'difficulty' => 5, 'weight' => 944, 'alternatives' => [
                    ['id' => 'd41e009b-aa02-558f-b0c9-57cf2283963e', 'description' => 'Ésteres', 'correct_answer' => true],
                    ['id' => 'e0b0297c-07f7-5d5d-bc17-cbfac141455b', 'description' => 'Cetonas', 'correct_answer' => false],
                    ['id' => 'f2143dba-2469-5d26-bae4-ebe3e46facc8', 'description' => 'Compostos sulfurados', 'correct_answer' => false],
                    ['id' => 'bca2256a-03fa-50b1-ad59-d093994dd0d9', 'description' => 'Aldeídos', 'correct_answer' => false],
                    ['id' => 'f2fcbcaf-2a0b-529d-8cee-af95647f5a5b', 'description' => 'Tióis', 'correct_answer' => false]
                ]],
        ['id' => '5cf89b55-bba5-5ff0-86d8-ea305e11be0c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual classe de compostos inclui o hexanal, frequentemente associado a notas verdes e à oxidação de lipídios?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => 'fb325308-5ce7-5a57-b6ab-c251fce96142', 'description' => 'Terpenos', 'correct_answer' => false],
                    ['id' => '109c5d87-66da-5eb0-995b-67b8924f5183', 'description' => 'Aldeídos', 'correct_answer' => true],
                    ['id' => 'c9b8800e-ae54-526d-b291-3d6dd5cab4cd', 'description' => 'Lactonas', 'correct_answer' => false],
                    ['id' => '307bf6d0-f76c-5fa3-ad6c-2b06adcfebc4', 'description' => 'Pirazinas', 'correct_answer' => false],
                    ['id' => '55f55b0c-5b71-56cd-8789-c4013ddcfa53', 'description' => 'Furanos', 'correct_answer' => false]
                ]],
        ['id' => '207a0a60-920c-5e70-9b43-b8e056cafc3c', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual classe de compostos inclui moléculas como a 2,3-butanodiona, associada ao aroma amanteigado?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '4651b821-7164-5848-bf28-9975f54ac0b0', 'description' => 'Fenóis voláteis', 'correct_answer' => false],
                    ['id' => '4dbe29f4-6856-5d55-bf95-662c70dca491', 'description' => 'Furanos', 'correct_answer' => false],
                    ['id' => '8f0eda6f-6277-56b5-b0e5-bb7af235daea', 'description' => 'Pirazinas', 'correct_answer' => false],
                    ['id' => 'de4e5409-6dfa-5cb5-9925-81d657905873', 'description' => 'Lactonas', 'correct_answer' => false],
                    ['id' => '386d4d81-4fd6-57b9-92f6-e275bdb58553', 'description' => 'Cetonas', 'correct_answer' => true]
                ]],
        ['id' => '117e082d-8385-5043-9c07-5032e1d46213', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual classe de ésteres cíclicos pode contribuir com aromas de pêssego, coco e creme?', 'difficulty' => 5, 'weight' => 941, 'alternatives' => [
                    ['id' => '6ab9d29e-5587-57d8-bd9d-978c40d8ee22', 'description' => 'Ésteres', 'correct_answer' => false],
                    ['id' => 'c90aaff1-b2b8-57c6-b3f0-ca24116ec47b', 'description' => 'Pirazinas', 'correct_answer' => false],
                    ['id' => 'e48cfd5c-d936-5aa0-8548-5f53d9d06411', 'description' => 'Aldeídos', 'correct_answer' => false],
                    ['id' => 'c07d43bc-6014-52bd-8641-3005c77aa2ac', 'description' => 'Compostos sulfurados', 'correct_answer' => false],
                    ['id' => '254780ea-ea77-5e34-9707-f09cd283c2af', 'description' => 'Lactonas', 'correct_answer' => true]
                ]],
        ['id' => '5ae2aadb-5211-5705-84ff-55657de88f4b', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual grande classe de compostos naturais inclui limoneno e linalol, frequentemente associados a aromas cítricos e florais?', 'difficulty' => 5, 'weight' => 938, 'alternatives' => [
                    ['id' => '03eaf6b1-480e-54b0-b1ae-e4f0af31927b', 'description' => 'Terpenos', 'correct_answer' => true],
                    ['id' => 'e1b8d6d6-1880-5ce3-8cf2-88deb48fd066', 'description' => 'Furanos', 'correct_answer' => false],
                    ['id' => '05af87ef-b66e-5c1d-8321-b93724c2ccd0', 'description' => 'Lactonas', 'correct_answer' => false],
                    ['id' => '4ac68b64-352a-58f0-82b0-05825a3d6ea4', 'description' => 'Aldeídos', 'correct_answer' => false],
                    ['id' => '5cc18c31-f2fe-5287-a57d-cdde5b590749', 'description' => 'Compostos sulfurados', 'correct_answer' => false]
                ]],
        ['id' => 'e041846d-d719-5c7b-890c-0afd68870173', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo enológico converte ácido málico em ácido lático e dióxido de carbono, reduzindo a acidez do vinho?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => '50ca9a8f-a072-51fc-88b1-2ebaa47a3c8a', 'description' => 'Fermentação malolática', 'correct_answer' => true],
                    ['id' => 'e3edd48a-34ea-5a14-90c2-96ca5858d7ba', 'description' => 'Fermentação lática homolática', 'correct_answer' => false],
                    ['id' => 'a1b3cc53-2345-5593-b686-704e0baccf39', 'description' => 'Fermentação alcoólica', 'correct_answer' => false],
                    ['id' => '9b8500a6-fbb4-5863-a0f2-e132f8239bc1', 'description' => 'Fermentação de Brettanomyces', 'correct_answer' => false],
                    ['id' => '31e6c4e1-2d47-5090-b179-4d133ab291df', 'description' => 'Fermentação espontânea', 'correct_answer' => false]
                ]],
        ['id' => 'f6ba3f5e-6f15-5077-a3fc-17743d4daba6', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo metabólico converte açúcares em etanol e dióxido de carbono por ação de leveduras?', 'difficulty' => 5, 'weight' => 891, 'alternatives' => [
                    ['id' => 'a02e09a9-65f4-5e11-9064-5335f7571aa2', 'description' => 'Fermentação butírica', 'correct_answer' => false],
                    ['id' => '0f58dbd8-c91f-5dc2-9d93-99c525920e90', 'description' => 'Fermentação lática heterolática', 'correct_answer' => false],
                    ['id' => 'ecac100d-d5e8-53a1-abaf-888eabf8e072', 'description' => 'Fermentação de Brettanomyces', 'correct_answer' => false],
                    ['id' => '7a42adea-94b1-55ca-97ec-540a2fa5e3f1', 'description' => 'Fermentação alcoólica', 'correct_answer' => true],
                    ['id' => '17061ccc-9ff8-55f8-8ce3-a2c1999730dd', 'description' => 'Fermentação secundária', 'correct_answer' => false]
                ]],
        ['id' => 'e83cb8ef-0526-51e7-920f-67ba28eea978', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo realizado por bactérias acéticas oxida etanol a ácido acético na presença de oxigênio?', 'difficulty' => 5, 'weight' => 977, 'alternatives' => [
                    ['id' => '08162566-ec2e-52d9-8e3a-3207c4bb6b52', 'description' => 'Fermentação malolática', 'correct_answer' => false],
                    ['id' => '0265d6b4-854e-591b-a432-6e81059ab090', 'description' => 'Fermentação acética', 'correct_answer' => true],
                    ['id' => 'd75de09a-4be7-5086-960f-d450848afd41', 'description' => 'Fermentação butírica', 'correct_answer' => false],
                    ['id' => '6e19548a-736c-579a-bb2e-fcf674ffcfa4', 'description' => 'Fermentação de Brettanomyces', 'correct_answer' => false],
                    ['id' => 'e2996087-2828-5a9d-8184-8da45cbc0651', 'description' => 'Fermentação secundária', 'correct_answer' => false]
                ]],
        ['id' => '22d75367-7d8e-5077-8779-c042d11aedde', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo microbiano produz ácido propiônico, ácido acético e dióxido de carbono e contribui para os olhos do queijo suíço?', 'difficulty' => 5, 'weight' => 808, 'alternatives' => [
                    ['id' => 'c21e5ce3-c5d2-5bfc-b85e-1d6de7115faa', 'description' => 'Fermentação acética', 'correct_answer' => false],
                    ['id' => '3b2d71f6-3b97-57ac-93ba-efc583d8579f', 'description' => 'Fermentação propiónica', 'correct_answer' => true],
                    ['id' => '25e5582b-f9ad-50c4-98a6-d8db939af506', 'description' => 'Fermentação butírica', 'correct_answer' => false],
                    ['id' => '5b79bc02-43fc-5a36-a190-a5245fed821b', 'description' => 'Fermentação espontânea', 'correct_answer' => false],
                    ['id' => '1f2ac7ff-bd7b-5745-971a-b8dc734f7600', 'description' => 'Fermentação malolática', 'correct_answer' => false]
                ]],
        ['id' => '96339f00-f05e-5b00-a992-85621b815478', 'locale' => 'pt-BR', 'category' => '9720360c-622d-588a-b9e0-022fa3083c70', 'question' => 'Qual processo anaeróbio pode produzir ácido butírico e gases a partir de carboidratos ou lactato?', 'difficulty' => 5, 'weight' => 830, 'alternatives' => [
                    ['id' => '2a6d1154-099a-5be0-9743-bf046c48e3f5', 'description' => 'Fermentação propiónica', 'correct_answer' => false],
                    ['id' => '910a0e9b-f878-57cf-96d6-b1969662736f', 'description' => 'Fermentação butírica', 'correct_answer' => true],
                    ['id' => '4933db50-7345-581b-82a7-ed489e75d324', 'description' => 'Fermentação lática homolática', 'correct_answer' => false],
                    ['id' => '611734e4-1220-5deb-b160-1c8823e8bdf3', 'description' => 'Fermentação espontânea', 'correct_answer' => false],
                    ['id' => 'f8d2010c-139a-513b-b4dd-1ade2ae120f9', 'description' => 'Fermentação secundária', 'correct_answer' => false]
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
