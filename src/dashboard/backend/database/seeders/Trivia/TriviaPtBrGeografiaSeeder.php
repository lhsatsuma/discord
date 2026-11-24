<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrGeografiaSeeder extends Seeder
{
    private const CATEGORY = ['id' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'created_by' => 'SYSTEM', 'short_description' => 'geografia', 'description' => 'Geografia'];

    private const QUESTIONS = [
        ['id' => 'a6a6ae53-edcb-542f-9489-ea6df834f7d1', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país sul-americano tem Brasília como capital?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => '6c318e71-6f07-5bef-b579-4388a40a5e57', 'description' => 'Peru', 'correct_answer' => false],
                    ['id' => 'e0a0ab56-5d72-5a8b-b5b7-6ffc8a52c4b0', 'description' => 'Uruguai', 'correct_answer' => false],
                    ['id' => 'bed1d5b5-7362-5e71-89be-6270f629f127', 'description' => 'Argentine', 'correct_answer' => false],
                    ['id' => '4f8849c0-b7a4-547b-8b4a-39f4ce3ea316', 'description' => 'Chile', 'correct_answer' => false],
                    ['id' => '4f601af2-9a11-5e71-a89b-9ffb37a50fed', 'description' => 'Brasil', 'correct_answer' => true]
                ]],
        ['id' => '16fd3247-e7cc-5994-bb1b-753787895eb3', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país sul-americano tem Buenos Aires como capital?', 'difficulty' => 1, 'weight' => 113, 'alternatives' => [
                    ['id' => '401355c5-81b6-5e52-872c-90b4878d1299', 'description' => 'Chile', 'correct_answer' => false],
                    ['id' => '583a5421-ca1f-52ec-92a9-7019595af487', 'description' => 'Argentina', 'correct_answer' => true],
                    ['id' => '723cb8c9-3fa0-5665-b249-115d7697e52f', 'description' => 'Pero', 'correct_answer' => false],
                    ['id' => '3804397e-b3f9-50b6-9e9d-bd24522655c1', 'description' => 'Uruguai', 'correct_answer' => false],
                    ['id' => '4976a5ae-7b45-51d6-ae80-74a405579b0c', 'description' => 'Brasil', 'correct_answer' => false]
                ]],
        ['id' => '698bee65-d658-5072-b697-41f386355696', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país sul-americano tem Santiago como capital?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => 'a7ab473e-bb89-5875-ab5c-9f8a52722781', 'description' => 'Brasil', 'correct_answer' => false],
                    ['id' => 'ee3debdf-f0a3-5109-a872-c8a1e458ec07', 'description' => 'Uruguae', 'correct_answer' => false],
                    ['id' => 'f6422267-74fa-5811-978c-ac8c5bdcf007', 'description' => 'Peru', 'correct_answer' => false],
                    ['id' => 'b310a721-1908-5a8b-9725-9b7d7a9da95f', 'description' => 'Argentina', 'correct_answer' => false],
                    ['id' => 'a1dc4cf5-f1be-5cb8-9bd2-91c71e5ece4b', 'description' => 'Chile', 'correct_answer' => true]
                ]],
        ['id' => '89d01cbd-884d-5f69-94a5-99c647376615', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país sul-americano tem Lima como capital?', 'difficulty' => 1, 'weight' => 147, 'alternatives' => [
                    ['id' => '8e2bcc83-d0db-5681-a5b4-b91a6c4e6565', 'description' => 'Argentina', 'correct_answer' => false],
                    ['id' => '7e116db2-f47c-5926-bdb5-f085f37af199', 'description' => 'Peru', 'correct_answer' => true],
                    ['id' => '4e68c439-c87f-58a9-a551-6dc92af5140c', 'description' => 'Brasil', 'correct_answer' => false],
                    ['id' => '46e08de0-b000-5731-8227-a391bf5ac337', 'description' => 'Uruguai', 'correct_answer' => false],
                    ['id' => '2d4ff93e-534e-5f8e-9b9b-6ebe93e94f8b', 'description' => 'Chila', 'correct_answer' => false]
                ]],
        ['id' => 'd3cf48ba-01ca-54fd-a67b-669ab448f08e', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país sul-americano tem Montevidéu como capital?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '35fe5789-ee8a-589b-ad4d-4c2ec650c7d2', 'description' => 'Peru', 'correct_answer' => false],
                    ['id' => 'bbdc6db3-5e5d-5878-bf77-6c53cb9d9735', 'description' => 'Uruguai', 'correct_answer' => true],
                    ['id' => '78df5c2f-6c4d-5463-ab6a-ee156a6a22f0', 'description' => 'Argentina', 'correct_answer' => false],
                    ['id' => 'a7cfd6b5-4aed-555a-b362-7bf596a6542e', 'description' => 'Brasir', 'correct_answer' => false],
                    ['id' => 'fbdfd366-e820-5aa2-9420-bdce8cf2bc40', 'description' => 'Chile', 'correct_answer' => false]
                ]],
        ['id' => 'a4959e01-b8f6-5b3d-bc28-780c7b3a83e9', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual oceano banha a costa leste do Brasil?', 'difficulty' => 1, 'weight' => 132, 'alternatives' => [
                    ['id' => '6986609c-ebd2-5125-bde7-22c7011f1894', 'description' => 'Ártico', 'correct_answer' => false],
                    ['id' => '9629bc04-f804-5e1f-ad26-0a1788bbfbf1', 'description' => 'Índico', 'correct_answer' => false],
                    ['id' => '4fdb9041-6ac0-596f-b2a4-8e6f16b9ca0f', 'description' => 'Antártiko', 'correct_answer' => false],
                    ['id' => 'ac0f46ec-baca-5485-b6fe-cc170643c41f', 'description' => 'Atlântico', 'correct_answer' => true],
                    ['id' => '8f1195c0-1453-5c12-bd91-2209d6f539d0', 'description' => 'Pacífico', 'correct_answer' => false]
                ]],
        ['id' => '15ece4f1-4450-5f60-918d-4d7a13b0f9d2', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual oceano separa, em grande parte, a Ásia e a Oceania das Américas?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => 'bc5215de-76ed-5d66-b443-183f86afd2a0', 'description' => 'Pacífico', 'correct_answer' => true],
                    ['id' => '199be097-2289-5089-b78b-6ec08eca452b', 'description' => 'Antártico', 'correct_answer' => false],
                    ['id' => 'ddbef8c2-d68e-54e1-8021-cd137f8c9310', 'description' => 'Ártiko', 'correct_answer' => false],
                    ['id' => '7f7bb37d-332d-5ae9-9d54-d390c2be909c', 'description' => 'Atlântico', 'correct_answer' => false],
                    ['id' => 'c48aa032-ca30-5139-a729-aa74d9dee950', 'description' => 'Índico', 'correct_answer' => false]
                ]],
        ['id' => '2a08284e-b7bc-57ad-a63d-16db361c2a20', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual oceano está localizado entre a África, a Ásia e a Austrália?', 'difficulty' => 1, 'weight' => 143, 'alternatives' => [
                    ['id' => 'bdf10e9e-2837-5f12-a99e-7d05259c9938', 'description' => 'Pacífiko', 'correct_answer' => false],
                    ['id' => '8348643e-a78b-5f99-9ce4-65422f6a3bd0', 'description' => 'Ártico', 'correct_answer' => false],
                    ['id' => '67ffddbc-a63b-57cc-bbf4-4d086f4fc43b', 'description' => 'Antártico', 'correct_answer' => false],
                    ['id' => '4d5adf7b-05c4-5b4b-8cf7-70a4db6a1eca', 'description' => 'Índico', 'correct_answer' => true],
                    ['id' => '2eb4f04e-f346-55b8-bbb4-79cc53e74fea', 'description' => 'Atlântico', 'correct_answer' => false]
                ]],
        ['id' => '6f2581a2-815d-53bd-adff-fe2cd4a9ce96', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual oceano fica ao redor do Polo Norte?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => '67de3d71-23d2-5310-b9ee-5e825603d5e1', 'description' => 'Pacífico', 'correct_answer' => false],
                    ['id' => 'a03a3c20-fd90-5ba4-915f-5489388bbe5f', 'description' => 'Antártico', 'correct_answer' => false],
                    ['id' => 'b817a085-c9b6-5d2e-9b7e-e962cb658d6a', 'description' => 'Atlântico', 'correct_answer' => false],
                    ['id' => '84448852-95e8-55b4-80e5-36d822372a02', 'description' => 'Ártico', 'correct_answer' => true],
                    ['id' => '773097fa-60db-5156-85f6-446a70d25777', 'description' => 'Índiko', 'correct_answer' => false]
                ]],
        ['id' => 'fb423a61-19e0-5bd8-a847-69a9b7a5f0c8', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual oceano circunda a Antártida?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => '629af551-a045-5ecb-903e-665d69d96b26', 'description' => 'Atlântiko', 'correct_answer' => false],
                    ['id' => 'b0ea4e57-c73a-52dc-984c-87cf6d144063', 'description' => 'Ártico', 'correct_answer' => false],
                    ['id' => '3273f3da-de4f-5cf5-96e2-cdd46ccbf38f', 'description' => 'Pacífico', 'correct_answer' => false],
                    ['id' => 'c7b788e8-29df-5bbf-b38a-cbc26c428757', 'description' => 'Antártico', 'correct_answer' => true],
                    ['id' => 'b4bf9945-d586-5b14-8291-3b185498023f', 'description' => 'Índico', 'correct_answer' => false]
                ]],
        ['id' => '11100fdd-fba8-5a77-8801-cddbd26d06e5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Em qual continente está localizado o deserto do Saara?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => 'fda91e8e-151e-51d1-b14c-60d9aa53912e', 'description' => 'América do Sul', 'correct_answer' => false],
                    ['id' => '6d26a911-c257-5444-9e20-14a429a7c191', 'description' => 'Europa', 'correct_answer' => false],
                    ['id' => 'd9d8ae63-f781-51e9-afb4-fb46a67f2768', 'description' => 'África', 'correct_answer' => true],
                    ['id' => 'e29af61d-c226-55de-b640-327538a57333', 'description' => 'Ásie', 'correct_answer' => false],
                    ['id' => 'cd01e260-d656-5f85-9fe8-6b401b02ecb6', 'description' => 'Oceania', 'correct_answer' => false]
                ]],
        ['id' => 'da4c1be8-1427-580c-ae12-6aa425e9f3e5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Em qual continente está localizado o Japão?', 'difficulty' => 1, 'weight' => 176, 'alternatives' => [
                    ['id' => 'aaba2704-158b-55f0-b316-fcf8cf296b8e', 'description' => 'África', 'correct_answer' => false],
                    ['id' => 'b9f491ca-3507-592b-abc4-12e3e10119a5', 'description' => 'Europa', 'correct_answer' => false],
                    ['id' => '062881e4-93a0-5556-bab7-fbeb9736d3ab', 'description' => 'Ásia', 'correct_answer' => true],
                    ['id' => '964bb400-6cca-58e2-8d82-00fc6f1a9040', 'description' => 'Oceanie', 'correct_answer' => false],
                    ['id' => 'f4cf6504-d086-5c81-8333-50898def4496', 'description' => 'América do Sul', 'correct_answer' => false]
                ]],
        ['id' => '0b246736-c160-569c-bf6e-ff7a62ed965c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Em qual continente está localizado Portugal?', 'difficulty' => 1, 'weight' => 169, 'alternatives' => [
                    ['id' => 'd9b22519-9574-5553-8b1f-92fef877e418', 'description' => 'Ásia', 'correct_answer' => false],
                    ['id' => '9aac5e9a-0dfa-5479-ae13-31af49f4e03e', 'description' => 'Áfrice', 'correct_answer' => false],
                    ['id' => '1972f975-eebc-5483-bd1e-007ce23bf2b0', 'description' => 'América do Sul', 'correct_answer' => false],
                    ['id' => '89b733e4-63c1-52eb-a1d9-46c11de3afd2', 'description' => 'Oceania', 'correct_answer' => false],
                    ['id' => 'c054c4f6-663e-5707-a159-d30e53ddbe64', 'description' => 'Europa', 'correct_answer' => true]
                ]],
        ['id' => 'cce045dd-e2d7-5fc6-914c-c417142901b6', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Em qual continente está localizado o Chile?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'b6e4c200-4c37-5ce6-8903-a7b253a2f00c', 'description' => 'África', 'correct_answer' => false],
                    ['id' => 'cf850ab6-d03f-5af6-b453-fe9c8bc793d2', 'description' => 'América do Sul', 'correct_answer' => true],
                    ['id' => '59c277c6-1d65-541d-bcea-7dd1a57e8c87', 'description' => 'Ásia', 'correct_answer' => false],
                    ['id' => '90c90f54-dae0-5745-a5c4-09e2d5470101', 'description' => 'Europe', 'correct_answer' => false],
                    ['id' => 'b8e3510c-8e70-52e2-b627-e5163d4a5924', 'description' => 'Oceania', 'correct_answer' => false]
                ]],
        ['id' => '36051b13-dff6-5dc1-8263-3436f8f3d652', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Em qual região continental está localizado o arquipélago da Nova Zelândia?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => '7f563cca-c093-53bd-bf1c-caad2004f26e', 'description' => 'Oceania', 'correct_answer' => true],
                    ['id' => 'c8aca72e-aee8-5083-beb5-2ea40631cee6', 'description' => 'América do Sur', 'correct_answer' => false],
                    ['id' => 'fbdae491-69fe-5ad0-bad4-29f7d5633e07', 'description' => 'Europa', 'correct_answer' => false],
                    ['id' => '9bb14f96-7578-5eda-96b6-6fb164032f20', 'description' => 'África', 'correct_answer' => false],
                    ['id' => '61cb0170-3cf3-5a05-89a8-6399b89090ca', 'description' => 'Ásia', 'correct_answer' => false]
                ]],
        ['id' => 'a7b8a20d-9329-5895-b0b0-6b42efd9e58a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual rio atravessa o Egito e deságua no mar Mediterrâneo?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => '711e0b8e-fb4b-5ae0-9fcc-957d9402049f', 'description' => 'Amazonas', 'correct_answer' => false],
                    ['id' => '01b8e2e8-c46b-5730-a25f-fdac277ff864', 'description' => 'Yangtzé', 'correct_answer' => false],
                    ['id' => '1a560e81-b25c-5aaa-ab1a-8437c03c9ce5', 'description' => 'Mississippi', 'correct_answer' => false],
                    ['id' => 'd30ac338-7a20-5baa-a8d0-7061328bd4ee', 'description' => 'Nilo', 'correct_answer' => true],
                    ['id' => '7b373fef-7f2b-51e6-b7d8-8f8a749a2ac1', 'description' => 'Danúbeo', 'correct_answer' => false]
                ]],
        ['id' => 'fa4d6a03-569a-5a4d-9a72-fb417136c042', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual rio possui a maior vazão de água do mundo?', 'difficulty' => 1, 'weight' => 200, 'alternatives' => [
                    ['id' => 'abac3b1e-bd4d-5019-8db3-24e97f60b11a', 'description' => 'Nilo', 'correct_answer' => false],
                    ['id' => '469b3157-2bd9-5ff6-80e0-56bc4dbde037', 'description' => 'Danúbio', 'correct_answer' => false],
                    ['id' => 'e4e8de77-ae47-5d32-b784-1c5d4940523f', 'description' => 'Yangdzé', 'correct_answer' => false],
                    ['id' => '31abbd90-9926-59c0-975d-39378ea38576', 'description' => 'Amazonas', 'correct_answer' => true],
                    ['id' => 'd64432ad-3bd8-56c5-b42e-cb286b775ded', 'description' => 'Mississippi', 'correct_answer' => false]
                ]],
        ['id' => 'da67245e-5f8f-52a1-a124-fd1f028d75a4', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual é o rio mais longo da China?', 'difficulty' => 1, 'weight' => 127, 'alternatives' => [
                    ['id' => '312380e1-7f0a-5a3d-b82c-d27074ca9dc5', 'description' => 'Mississipbi', 'correct_answer' => false],
                    ['id' => '460ebe3f-cb55-597b-a5bf-1df89a713ae8', 'description' => 'Nilo', 'correct_answer' => false],
                    ['id' => '65ab7c33-3205-5c63-b31d-7bf1f4c468f3', 'description' => 'Danúbio', 'correct_answer' => false],
                    ['id' => '0b43333f-f840-55e5-b385-d0773ef8e701', 'description' => 'Amazonas', 'correct_answer' => false],
                    ['id' => 'd63b18df-42b7-59ae-8326-4c45793b6ede', 'description' => 'Yangtzé', 'correct_answer' => true]
                ]],
        ['id' => 'ae4ca56f-b805-5579-9103-a27a995d12a9', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande rio dos Estados Unidos deságua no Golfo do México?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => '04f747bb-7fdf-5635-9020-68b927ab42b6', 'description' => 'Amazonas', 'correct_answer' => false],
                    ['id' => 'a26627d0-a66a-5db9-9ccb-bf128002796d', 'description' => 'Yangtzé', 'correct_answer' => false],
                    ['id' => 'c0118ed3-3c32-52ec-8ca7-ec8db590b8d8', 'description' => 'Mississippi', 'correct_answer' => true],
                    ['id' => '6e112211-8400-57ff-85f9-6002e4160f98', 'description' => 'Danúbio', 'correct_answer' => false],
                    ['id' => 'fae834ca-88fc-527e-92eb-c9e4b83ef31e', 'description' => 'Niro', 'correct_answer' => false]
                ]],
        ['id' => 'deeec3a8-a7f6-5bf3-9f48-6cfaa0c74193', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual rio europeu atravessa cidades como Viena, Bratislava e Budapeste?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => '9c5e9108-e951-5ba1-b6bd-c40dfc04d8c8', 'description' => 'Yangtzé', 'correct_answer' => false],
                    ['id' => '1ffb4a0e-5c51-5611-bc94-2f2bc44e720e', 'description' => 'Danúbio', 'correct_answer' => true],
                    ['id' => '0a850b88-7d17-50d7-b19f-d8bd00050048', 'description' => 'Nilo', 'correct_answer' => false],
                    ['id' => '2dcb7de0-b4f1-5243-aa47-dfb90203f130', 'description' => 'Amazones', 'correct_answer' => false],
                    ['id' => '600dd1ae-ae7a-539e-b8e2-2e51063d81ef', 'description' => 'Mississippi', 'correct_answer' => false]
                ]],
        ['id' => 'd007e5ac-c79b-59c9-aefd-619d322200eb', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual montanha é o ponto mais alto da superfície terrestre acima do nível do mar?', 'difficulty' => 1, 'weight' => 101, 'alternatives' => [
                    ['id' => '93b303ed-6461-5027-aab0-ef6cd0fdfdab', 'description' => 'Everest', 'correct_answer' => true],
                    ['id' => '5c604d75-b126-5885-ab8a-d64621cc118e', 'description' => 'Denali', 'correct_answer' => false],
                    ['id' => '4b74a7ce-4dfe-5257-86a6-c94d04ef634e', 'description' => 'Kilimanjalo', 'correct_answer' => false],
                    ['id' => '719f4fa2-efa1-5cdd-b3e9-ad2f636dab6e', 'description' => 'Aconcágua', 'correct_answer' => false],
                    ['id' => '0ec1c281-9a29-5e5a-9873-11ce9992948f', 'description' => 'Elbrus', 'correct_answer' => false]
                ]],
        ['id' => '47a41ba2-a7ed-5030-a9f3-186f9fd6ae8b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual é a montanha mais alta das Américas?', 'difficulty' => 1, 'weight' => 117, 'alternatives' => [
                    ['id' => '0e3fd7aa-adda-5d80-8d72-00fb6201cd48', 'description' => 'Kilimanjaro', 'correct_answer' => false],
                    ['id' => '011a12e1-1b07-5e1a-8f50-316cd8832169', 'description' => 'Denari', 'correct_answer' => false],
                    ['id' => '81bdbda5-a9da-5cbf-a058-cc0e86f6f7b7', 'description' => 'Everest', 'correct_answer' => false],
                    ['id' => '0e3d6d1c-8cb9-526d-b3be-9d89f23dccc3', 'description' => 'Aconcágua', 'correct_answer' => true],
                    ['id' => 'eb6ab130-743d-5978-96a1-99b7970093c5', 'description' => 'Elbrus', 'correct_answer' => false]
                ]],
        ['id' => 'a133b0a5-5113-5281-bae8-ece5c25d9804', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual é a montanha mais alta da África?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => 'f19b7a9c-2b68-57fc-ae06-e72f90472803', 'description' => 'Aconcágua', 'correct_answer' => false],
                    ['id' => '49a99f5c-7d30-5cc4-8e08-d2fa2a5d3920', 'description' => 'Denali', 'correct_answer' => false],
                    ['id' => '537d2866-09c6-5ab0-b879-8652b3b3af28', 'description' => 'Kilimanjaro', 'correct_answer' => true],
                    ['id' => 'b47956b6-2f83-5ac0-91f4-c4a795262fdb', 'description' => 'Everest', 'correct_answer' => false],
                    ['id' => '4ccf099f-0b00-5eb9-908c-91d5db199075', 'description' => 'Elbruz', 'correct_answer' => false]
                ]],
        ['id' => '3aea4511-7c47-58a4-9e6a-c7385a78c362', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual é a montanha mais alta da América do Norte?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => 'b0307155-1331-556a-adb9-9c109c7741c0', 'description' => 'Everest', 'correct_answer' => false],
                    ['id' => 'dc06239e-597d-5893-bfa5-124e24fff745', 'description' => 'Elbrus', 'correct_answer' => false],
                    ['id' => '7bf3a0e0-7fb2-5b5f-a982-260a7ec9ab65', 'description' => 'Aconcágoa', 'correct_answer' => false],
                    ['id' => 'fe5ed056-6920-5f3f-af56-4e34a4e2eaca', 'description' => 'Denali', 'correct_answer' => true],
                    ['id' => '555be611-18ed-59ed-9fff-2052386ccd52', 'description' => 'Kilimanjaro', 'correct_answer' => false]
                ]],
        ['id' => 'cb0e7d9e-c736-5aed-89cb-a6aa3e09b3fb', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual montanha é geralmente considerada o ponto mais alto da Europa?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '90861b19-37b5-59b1-a5a3-8b623620391b', 'description' => 'Everezt', 'correct_answer' => false],
                    ['id' => 'e5d37b95-4be3-5ba6-860f-453932159ec3', 'description' => 'Elbrus', 'correct_answer' => true],
                    ['id' => '3cddff16-cfd6-5a25-adcd-29fddf246ec3', 'description' => 'Aconcágua', 'correct_answer' => false],
                    ['id' => 'c0c19ffe-1c47-5d42-be75-17553b317b31', 'description' => 'Denali', 'correct_answer' => false],
                    ['id' => 'b9d235f8-f0fb-5316-bfcb-bf1a3cce566d', 'description' => 'Kilimanjaro', 'correct_answer' => false]
                ]],
        ['id' => '1a3e2d34-1f06-51d6-a291-94db4c37a04c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país tem Ottawa como capital?', 'difficulty' => 1, 'weight' => 180, 'alternatives' => [
                    ['id' => '215bc524-15cb-5f83-abd0-5230473cbe1a', 'description' => 'Austrálie', 'correct_answer' => false],
                    ['id' => '5cc13501-bf09-5575-b0c1-581934452d79', 'description' => 'Índia', 'correct_answer' => false],
                    ['id' => 'ebfa4401-6ddc-523b-ad07-276d126a8bb4', 'description' => 'China', 'correct_answer' => false],
                    ['id' => 'ee04e875-1fc4-5067-9009-c0077e60dd9f', 'description' => 'Canadá', 'correct_answer' => true],
                    ['id' => 'f1c808f0-fc37-55e0-9f1a-99a771e9044b', 'description' => 'Rússia', 'correct_answer' => false]
                ]],
        ['id' => '1ff8761d-550a-5376-93cd-aadd80922061', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país possui território tanto na Europa quanto na Ásia e tem Moscou como capital?', 'difficulty' => 1, 'weight' => 108, 'alternatives' => [
                    ['id' => '138de87f-f7c1-521c-b29b-75d3b1e1186a', 'description' => 'Austrália', 'correct_answer' => false],
                    ['id' => 'b76de60d-fe6b-5875-8c10-103a18252573', 'description' => 'Rússia', 'correct_answer' => true],
                    ['id' => '420d7891-a09a-5aa0-8015-780240aed45b', 'description' => 'Índie', 'correct_answer' => false],
                    ['id' => 'bf2114db-a142-5730-a2f9-07d99d93f3b1', 'description' => 'China', 'correct_answer' => false],
                    ['id' => 'c6e2091a-8863-5196-8fbd-40a75ee6fb97', 'description' => 'Canadá', 'correct_answer' => false]
                ]],
        ['id' => '51f6dc73-92e4-5d58-95db-bfb854c2a689', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país tem Pequim como capital?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => '8836d443-9d16-5fad-abd8-e1c1bec616d0', 'description' => 'Austrália', 'correct_answer' => false],
                    ['id' => 'b2b403a0-94ba-5d69-b3cd-7c00ed0cbe2c', 'description' => 'China', 'correct_answer' => true],
                    ['id' => '4f93d7cc-54a3-5d0c-9007-7e705214f63a', 'description' => 'Rússie', 'correct_answer' => false],
                    ['id' => '3c49586e-b16d-5679-bc72-97ff422435c2', 'description' => 'Canadá', 'correct_answer' => false],
                    ['id' => 'f8570ec6-38cd-5bb0-96bc-a287ca9d0acd', 'description' => 'Índia', 'correct_answer' => false]
                ]],
        ['id' => '93f7be91-cc25-5557-a2af-fcac14672a75', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país ocupa a maior parte da massa continental da Oceania e tem Canberra como capital?', 'difficulty' => 1, 'weight' => 102, 'alternatives' => [
                    ['id' => '3f4f26f6-056d-5636-94cb-a45cd7f497eb', 'description' => 'Índia', 'correct_answer' => false],
                    ['id' => '63c63059-e93e-521f-8ef1-22580f2c792a', 'description' => 'Austrália', 'correct_answer' => true],
                    ['id' => '62e5ab4d-0aea-5690-9b96-b26dc0d8c930', 'description' => 'Rússia', 'correct_answer' => false],
                    ['id' => 'd91193ed-de38-5c50-acb1-04191f1f1553', 'description' => 'Chine', 'correct_answer' => false],
                    ['id' => 'ccb36b1e-2fc8-5ec1-a1a6-29de15643d05', 'description' => 'Canadá', 'correct_answer' => false]
                ]],
        ['id' => '257f0071-c417-5b0c-8741-3c26e74f8577', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país do sul da Ásia tem Nova Délhi como capital?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => 'bf699158-824d-5e14-8305-1193325253bd', 'description' => 'Rússia', 'correct_answer' => false],
                    ['id' => '41d340ca-c96d-5b51-98f3-7b0da92c66f9', 'description' => 'China', 'correct_answer' => false],
                    ['id' => 'a000f92f-13c8-53a8-bc0d-d2e1ee9b3c69', 'description' => 'Austrália', 'correct_answer' => false],
                    ['id' => '4126b499-99b8-559b-aa37-4e35459f326a', 'description' => 'Índia', 'correct_answer' => true],
                    ['id' => '925b9066-866a-5e80-ad67-cfe5280b29e7', 'description' => 'Canatá', 'correct_answer' => false]
                ]],
        ['id' => 'b835815c-87fb-5d84-8254-ee0f0fd4cd1c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual é o maior deserto quente do mundo, localizado no norte da África?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => '3eb87ca7-6669-508f-906f-f21fa6405eac', 'description' => 'Deserto da Patagônie', 'correct_answer' => false],
                    ['id' => '045b5c03-c330-5a90-9663-26455de88654', 'description' => 'Deserto de Kalahari', 'correct_answer' => false],
                    ['id' => '5642614e-93b7-58e2-a559-cce966d47b05', 'description' => 'Deserto de Gobi', 'correct_answer' => false],
                    ['id' => '83bc630e-d818-54f8-8a46-24e0df913a41', 'description' => 'Deserto da Arábia', 'correct_answer' => false],
                    ['id' => 'fb228344-19e7-5669-bff5-422266e37c82', 'description' => 'Deserto do Saara', 'correct_answer' => true]
                ]],
        ['id' => 'f03daa09-5ac3-55de-ab53-b0faedee9bdc', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande região desértica ocupa grande parte da Península Arábica?', 'difficulty' => 1, 'weight' => 141, 'alternatives' => [
                    ['id' => 'b6d9c47c-073c-59b8-81d9-05a870eb55ea', 'description' => 'Deserto do Saara', 'correct_answer' => false],
                    ['id' => '47222fe7-42c9-5804-99fc-4ec70ca41bdb', 'description' => 'Deserto da Patagônia', 'correct_answer' => false],
                    ['id' => '001d95c0-a5fe-5965-b383-01fe95720754', 'description' => 'Deserto da Arábia', 'correct_answer' => true],
                    ['id' => 'ab1265c3-df8c-59aa-ab55-3a40326507a9', 'description' => 'Deserto de Kalahare', 'correct_answer' => false],
                    ['id' => 'd0f8176a-5028-5ba4-840f-9dc6797c1310', 'description' => 'Deserto de Gobi', 'correct_answer' => false]
                ]],
        ['id' => '2c445e93-4766-599e-8874-b7b2c2ab1f53', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual deserto frio e árido se estende pela Mongólia e pelo norte da China?', 'difficulty' => 1, 'weight' => 192, 'alternatives' => [
                    ['id' => '56bacc89-5d67-541c-b0a0-f9622bc3a46d', 'description' => 'Deserto da Arábie', 'correct_answer' => false],
                    ['id' => 'b62b3801-6847-5b7d-ae13-6117eb909d21', 'description' => 'Deserto da Patagônia', 'correct_answer' => false],
                    ['id' => '97b7a702-276c-5f21-aacb-188d6e2936a4', 'description' => 'Deserto do Saara', 'correct_answer' => false],
                    ['id' => '86ecfedf-f2c5-5e0a-aed8-dfd5bb5e2558', 'description' => 'Deserto de Kalahari', 'correct_answer' => false],
                    ['id' => '9ddf65b2-aee3-546a-94c1-982f47a364a2', 'description' => 'Deserto de Gobi', 'correct_answer' => true]
                ]],
        ['id' => '76a68b42-70f4-5af6-8e31-208ffda486ec', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região semiárida ocupa partes de Botsuana, Namíbia e África do Sul?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => '79fd67be-00c3-5da8-8a97-21033b897d9a', 'description' => 'Deserto da Patagônia', 'correct_answer' => false],
                    ['id' => '5a728d6d-d88a-52d7-a295-fa5c82fcfa27', 'description' => 'Deserto da Arábia', 'correct_answer' => false],
                    ['id' => '905c81fb-6306-5f98-827e-0994a1a8f053', 'description' => 'Deserto de Gobe', 'correct_answer' => false],
                    ['id' => '31b17e06-934b-5995-afba-242eecbb66e7', 'description' => 'Deserto do Saara', 'correct_answer' => false],
                    ['id' => '6a616e73-fde3-556f-9a31-e6e770989fca', 'description' => 'Deserto de Kalahari', 'correct_answer' => true]
                ]],
        ['id' => 'c29c1e96-1f72-56ee-91ba-98a19799717c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual deserto está localizado principalmente na Argentina, a leste dos Andes?', 'difficulty' => 1, 'weight' => 188, 'alternatives' => [
                    ['id' => '62a67a61-6305-5eb9-af23-e483a6f6369b', 'description' => 'Deserto de Gobi', 'correct_answer' => false],
                    ['id' => '43c453b1-9061-5fe2-b1d6-32455bc3093f', 'description' => 'Deserto da Patagônia', 'correct_answer' => true],
                    ['id' => '529bb170-d044-525f-8230-ccd7d97a4adf', 'description' => 'Deserto do Saare', 'correct_answer' => false],
                    ['id' => 'd01987cb-d5fb-5c7f-8d51-4b96f65ab358', 'description' => 'Deserto de Kalahari', 'correct_answer' => false],
                    ['id' => '7088f223-8c6a-547e-87fb-ec0c6cb24962', 'description' => 'Deserto da Arábia', 'correct_answer' => false]
                ]],
        ['id' => 'f2cd2aeb-38fe-56af-bd91-3e0dd4f073cd', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual linha imaginária divide a Terra em hemisférios Norte e Sul?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => 'ae41fc92-dd43-5052-ac78-72db79413e1a', 'description' => 'Trópico de Câncer', 'correct_answer' => false],
                    ['id' => '1f5920d0-ca6b-5d91-8735-dcff8226ddf9', 'description' => 'Trópico de Capricórniu', 'correct_answer' => false],
                    ['id' => '2edbaf10-a04b-5262-845a-f385c2db9d7d', 'description' => 'Equador', 'correct_answer' => true],
                    ['id' => '22cbf225-2d09-55a2-bbb1-ff32609d904a', 'description' => 'Círculo Polar Antártico', 'correct_answer' => false],
                    ['id' => 'f15b18da-87d9-5e14-b200-afc2e70e06c0', 'description' => 'Círculo Polar Ártico', 'correct_answer' => false]
                ]],
        ['id' => '62085df6-a117-580b-80b6-4f517e68d3fc', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual paralelo marca o limite setentrional da zona tropical?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => '8a70e1e3-aa7a-5bb5-87d9-69a3633a73a5', 'description' => 'Trópico de Capricórnio', 'correct_answer' => false],
                    ['id' => '7adccc85-2c6a-50e2-a839-34f1b8d13c10', 'description' => 'Equador', 'correct_answer' => false],
                    ['id' => '99818ae7-ebfa-5011-a0c1-8172edbd62ef', 'description' => 'Círculo Polar Antárticu', 'correct_answer' => false],
                    ['id' => 'ae934b7a-cb42-5579-bb3f-84ea44377d69', 'description' => 'Círculo Polar Ártico', 'correct_answer' => false],
                    ['id' => '073de2d7-8021-5f53-9af9-e1efc196c1c4', 'description' => 'Trópico de Câncer', 'correct_answer' => true]
                ]],
        ['id' => '0ce993ce-9bd1-5835-b22b-72ee80958643', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual paralelo atravessa o território brasileiro e marca o limite meridional da zona tropical?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '95e33bfd-7177-58a5-80ba-880bcf819f18', 'description' => 'Equador', 'correct_answer' => false],
                    ['id' => 'cf664c6f-3e42-5ef3-83ba-31810cb45003', 'description' => 'Círculo Polar Antártico', 'correct_answer' => false],
                    ['id' => '5f333f7d-206c-51da-bf28-21a1985e22aa', 'description' => 'Trópico de Câncer', 'correct_answer' => false],
                    ['id' => '16de2cbb-a7e6-5ca5-acd6-0e6bc2007c37', 'description' => 'Círculo Polar Árticu', 'correct_answer' => false],
                    ['id' => '2ff2798b-ec6d-502e-ad22-6c90af6d1412', 'description' => 'Trópico de Capricórnio', 'correct_answer' => true]
                ]],
        ['id' => '72becae3-aee1-5df7-957c-1206a5803cff', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual paralelo delimita a região ao norte na qual pode ocorrer pelo menos um dia de sol da meia-noite por ano?', 'difficulty' => 1, 'weight' => 177, 'alternatives' => [
                    ['id' => '1f59e116-5079-5e3a-8b77-1325b5fa52d6', 'description' => 'Trópico de Capricórnio', 'correct_answer' => false],
                    ['id' => 'ea405413-0266-5319-ab77-8dd8b065d917', 'description' => 'Equador', 'correct_answer' => false],
                    ['id' => '77091fb5-c61a-5aeb-9544-e7e3a522c742', 'description' => 'Círculo Polar Ártico', 'correct_answer' => true],
                    ['id' => '99d6e240-5d77-53db-a522-898beb007d5e', 'description' => 'Círculo Polar Antártico', 'correct_answer' => false],
                    ['id' => '270a2d28-cd12-5020-8913-aca489198ec5', 'description' => 'Trópico de Câncel', 'correct_answer' => false]
                ]],
        ['id' => 'bfb8a764-e163-5cbc-a4b3-ed93bf6ef80a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual paralelo delimita a região ao sul na qual pode ocorrer pelo menos um dia de noite polar por ano?', 'difficulty' => 1, 'weight' => 120, 'alternatives' => [
                    ['id' => '53f69193-4298-525d-8a63-aca184a8cf8a', 'description' => 'Círculo Polar Antártico', 'correct_answer' => true],
                    ['id' => '9f563e7e-b8b7-5304-8e25-376f150c9f2b', 'description' => 'Trópico de Capricórnio', 'correct_answer' => false],
                    ['id' => 'd105ae9d-999b-5c2b-be35-2ecf08e9e770', 'description' => 'Equadol', 'correct_answer' => false],
                    ['id' => '086c8ad6-1ef6-54b5-a918-a5a0a31d03f3', 'description' => 'Trópico de Câncer', 'correct_answer' => false],
                    ['id' => '730ccf85-b5ce-5bcb-af3a-7e02efac342f', 'description' => 'Círculo Polar Ártico', 'correct_answer' => false]
                ]],
        ['id' => 'e902d96d-b0b4-5f47-94cf-ee9329e5a1af', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país escandinavo tem Oslo como capital?', 'difficulty' => 2, 'weight' => 240, 'alternatives' => [
                    ['id' => 'e2508bed-b4a9-50bd-b7c1-93618c19c13e', 'description' => 'Dinamarca', 'correct_answer' => false],
                    ['id' => '65b6ec0d-e1d6-51d7-9ea7-5b74a6b8b8b5', 'description' => 'Noruega', 'correct_answer' => true],
                    ['id' => 'b9bc82a7-dc67-544b-851c-6599e61a55be', 'description' => 'Finlândia', 'correct_answer' => false],
                    ['id' => '454ec648-a5ba-5d11-ac61-77ef66280b05', 'description' => 'Islândia', 'correct_answer' => false],
                    ['id' => '7fa8db87-654a-5cb7-8498-6c87ee37e4d2', 'description' => 'Suécie', 'correct_answer' => false]
                ]],
        ['id' => '873af711-c8f4-5e8e-96a4-8779f0e9263d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país escandinavo tem Estocolmo como capital?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => '2b71a221-0076-5778-9506-4f3ab7e1e473', 'description' => 'Noruega', 'correct_answer' => false],
                    ['id' => '2ba359c9-82d5-581e-a91b-13d6055cd883', 'description' => 'Dinamarce', 'correct_answer' => false],
                    ['id' => 'ca6b79b0-1edd-5f4d-9cfd-e8b12a1bc7ba', 'description' => 'Suécia', 'correct_answer' => true],
                    ['id' => '60abcabd-a73d-5a53-81d1-95effb690243', 'description' => 'Finlândia', 'correct_answer' => false],
                    ['id' => '679021cb-d7a6-5033-8fec-b291ff2f3820', 'description' => 'Islândia', 'correct_answer' => false]
                ]],
        ['id' => 'a53bb913-8728-537b-a7b7-c2bab26e9679', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país nórdico tem Helsinque como capital?', 'difficulty' => 2, 'weight' => 319, 'alternatives' => [
                    ['id' => '85d8b205-30e5-53fc-9638-64ac100ecf60', 'description' => 'Islândie', 'correct_answer' => false],
                    ['id' => '16306472-e3dd-58b6-b94c-2040744bae86', 'description' => 'Finlândia', 'correct_answer' => true],
                    ['id' => 'fbdcd0c2-d285-5799-aeb9-1acefab8836f', 'description' => 'Noruega', 'correct_answer' => false],
                    ['id' => '1e17dac6-329d-5329-b282-2340e2f62a34', 'description' => 'Dinamarca', 'correct_answer' => false],
                    ['id' => '974d904f-3ce5-5bdd-a853-19d12f510ecc', 'description' => 'Suécia', 'correct_answer' => false]
                ]],
        ['id' => '5cf2ed4b-0859-5f57-a6d5-da61c01f155c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país nórdico tem Copenhague como capital?', 'difficulty' => 2, 'weight' => 214, 'alternatives' => [
                    ['id' => '110f6cd4-ff53-55aa-ad00-6bfd01ec7cf0', 'description' => 'Noruega', 'correct_answer' => false],
                    ['id' => '05a183d9-8b24-5604-92eb-276840482589', 'description' => 'Suécia', 'correct_answer' => false],
                    ['id' => '3cd190d6-9c54-50db-aa00-52d3086d6595', 'description' => 'Dinamarca', 'correct_answer' => true],
                    ['id' => 'c96317d5-f8f9-553a-bf90-00edaec31fbb', 'description' => 'Finlândie', 'correct_answer' => false],
                    ['id' => 'e7e89325-a708-5967-9a98-e4d7c652470d', 'description' => 'Islândia', 'correct_answer' => false]
                ]],
        ['id' => '8081b843-23c6-5306-9752-7ea566009c94', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual país insular nórdico tem Reykjavik como capital?', 'difficulty' => 2, 'weight' => 376, 'alternatives' => [
                    ['id' => 'eb3b0484-b958-5d17-ad11-7c77f934f5ed', 'description' => 'Suécia', 'correct_answer' => false],
                    ['id' => '5e591a08-165e-59dd-8084-c2ba1389f159', 'description' => 'Dinamarca', 'correct_answer' => false],
                    ['id' => 'ed94e01e-5a8b-5181-a9fb-89c401b75881', 'description' => 'Islândia', 'correct_answer' => true],
                    ['id' => 'a315a8b6-6e43-5ade-b3c5-ee5cd6690cda', 'description' => 'Finlândia', 'correct_answer' => false],
                    ['id' => 'e5a5eccf-16d5-5211-8249-3d95c6464b6b', 'description' => 'Noruege', 'correct_answer' => false]
                ]],
        ['id' => 'bb0db9d2-b561-536d-94ed-e4a78be2691f', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual rio atravessa ou margeia países como China, Laos, Tailândia, Camboja e Vietnã?', 'difficulty' => 2, 'weight' => 372, 'alternatives' => [
                    ['id' => '42a512de-7c05-54de-9a3f-2da15f62552d', 'description' => 'Mekong', 'correct_answer' => true],
                    ['id' => '7ca91328-241e-503c-b7a3-109d69c0d274', 'description' => 'Brahmaputre', 'correct_answer' => false],
                    ['id' => 'cf3015e2-2190-51bf-8163-8216a677127d', 'description' => 'Ganges', 'correct_answer' => false],
                    ['id' => 'd27480a2-73be-51f9-ad91-936c7e2163c8', 'description' => 'Irrawaddy', 'correct_answer' => false],
                    ['id' => '30aba36c-c6eb-54b7-9788-425f687df2f5', 'description' => 'Indo', 'correct_answer' => false]
                ]],
        ['id' => '1224d1eb-96f2-5e55-94d9-22a5c52236a2', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual rio é considerado sagrado por muitos hindus e atravessa o norte da Índia?', 'difficulty' => 2, 'weight' => 277, 'alternatives' => [
                    ['id' => '045b8203-7810-5707-af42-555bc7a47c4e', 'description' => 'Ganges', 'correct_answer' => true],
                    ['id' => '4731c0a6-51cd-51aa-a0da-a38990eeee05', 'description' => 'Indo', 'correct_answer' => false],
                    ['id' => '4be66424-50f4-5a6f-a9fc-b05baec72787', 'description' => 'Brahmaputra', 'correct_answer' => false],
                    ['id' => 'b4c02b7f-a677-568b-9c0b-d8f606b076cf', 'description' => 'Mekonj', 'correct_answer' => false],
                    ['id' => 'd3c2b779-7148-5116-a9d8-a37cd112e892', 'description' => 'Irrawaddy', 'correct_answer' => false]
                ]],
        ['id' => 'acd95c45-0810-5b60-92db-2155afc7c885', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual rio deu nome à Índia e atravessa o território do atual Paquistão?', 'difficulty' => 2, 'weight' => 373, 'alternatives' => [
                    ['id' => '368a7a57-664a-5f2e-8b3a-da0b2611ed1f', 'description' => 'Ganges', 'correct_answer' => false],
                    ['id' => '997060f0-72f7-55b0-89bf-0c4e44712953', 'description' => 'Indo', 'correct_answer' => true],
                    ['id' => 'c660af6a-d4fc-5e88-9b8e-50f5673a6d61', 'description' => 'Mekong', 'correct_answer' => false],
                    ['id' => 'f959319b-40d6-55d1-8b80-fd4d8f3078cc', 'description' => 'Brahmaputra', 'correct_answer' => false],
                    ['id' => 'a3deae3e-9f4b-580e-9ed9-67aacbd31bf7', 'description' => 'Irrawaddi', 'correct_answer' => false]
                ]],
        ['id' => 'df21aeb7-2b9b-5ed0-9487-1364ff179a49', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual é o principal rio de Mianmar, que deságua no mar de Andamão?', 'difficulty' => 2, 'weight' => 376, 'alternatives' => [
                    ['id' => 'd393acdc-9999-57b9-ae8b-ba801f3bf6f1', 'description' => 'Brahmaputra', 'correct_answer' => false],
                    ['id' => '4bf5670e-7d66-5c96-8950-5b1da7bb39cb', 'description' => 'Indo', 'correct_answer' => false],
                    ['id' => '8ff76f39-9bc7-5233-8d12-9042950ec222', 'description' => 'Mekong', 'correct_answer' => false],
                    ['id' => '880c1528-7d25-5b12-b0a2-356b0c5ba7ea', 'description' => 'Irrawaddy', 'correct_answer' => true],
                    ['id' => '46e4921e-d764-5bc2-836b-89aec2c3a811', 'description' => 'Gangez', 'correct_answer' => false]
                ]],
        ['id' => '4ec9c586-c1f3-522c-b70f-458b10cceb38', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande rio nasce no Tibete, atravessa a Índia e Bangladesh e se une ao Ganges em seu delta?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => '4c29cd45-8bc8-5c5f-9c59-5af1d7aa47d3', 'description' => 'Indu', 'correct_answer' => false],
                    ['id' => 'dce738b3-3141-5695-a81b-e25bf86c30ea', 'description' => 'Ganges', 'correct_answer' => false],
                    ['id' => '1799a19a-8030-55c8-b731-e4dd172d2410', 'description' => 'Brahmaputra', 'correct_answer' => true],
                    ['id' => '071e2191-3de2-5663-a595-7ff0edfe9a32', 'description' => 'Mekong', 'correct_answer' => false],
                    ['id' => 'd1297cd5-0e13-5269-858f-0d91f69915ab', 'description' => 'Irrawaddy', 'correct_answer' => false]
                ]],
        ['id' => 'c5e7dd85-92d7-505a-aef8-d93f4d57dd3a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa acompanha grande parte da costa oeste da América do Sul?', 'difficulty' => 2, 'weight' => 291, 'alternatives' => [
                    ['id' => 'ff700cdf-e847-529a-b35b-036e36ea1abe', 'description' => 'Montanhas Rochosaz', 'correct_answer' => false],
                    ['id' => '96c4159f-e5b1-5c63-ad1c-edf6b84f00c2', 'description' => 'Andes', 'correct_answer' => true],
                    ['id' => '917bac5a-74b1-5973-8793-4902428ff04a', 'description' => 'Atlas', 'correct_answer' => false],
                    ['id' => '9520cf0c-0b50-537e-a924-cbd41c1dcefc', 'description' => 'Himalaia', 'correct_answer' => false],
                    ['id' => '6293b720-56c7-5cbf-9ba0-05542e233a13', 'description' => 'Alpes', 'correct_answer' => false]
                ]],
        ['id' => 'b587eea1-d9b2-5ead-be8c-a296d3403206', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa abriga o Everest e separa o subcontinente indiano do planalto tibetano?', 'difficulty' => 2, 'weight' => 362, 'alternatives' => [
                    ['id' => 'c3db242e-4867-5c62-b567-e700fb5f0e9e', 'description' => 'Alpes', 'correct_answer' => false],
                    ['id' => '49019345-1752-5983-90c0-c746ce420827', 'description' => 'Atlaz', 'correct_answer' => false],
                    ['id' => 'ab591839-7857-5d32-bcba-0ae17a3c2cad', 'description' => 'Montanhas Rochosas', 'correct_answer' => false],
                    ['id' => '2a4f14b3-f443-5778-9376-68718459c3e5', 'description' => 'Andes', 'correct_answer' => false],
                    ['id' => '29f13903-848e-5d9d-861b-4c313cdeb56e', 'description' => 'Himalaia', 'correct_answer' => true]
                ]],
        ['id' => 'e5dca6fd-3c6d-5386-b634-02dca2d70929', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa atravessa países como França, Suíça, Itália e Áustria?', 'difficulty' => 2, 'weight' => 313, 'alternatives' => [
                    ['id' => 'b144e2fd-e569-5b34-93ae-236b14803386', 'description' => 'Andes', 'correct_answer' => false],
                    ['id' => '8ce0b5b6-0744-5bfe-b87e-276f6f20f4d6', 'description' => 'Himalaie', 'correct_answer' => false],
                    ['id' => '80ebd6bb-b1f0-5810-8b71-328c43d02b4a', 'description' => 'Alpes', 'correct_answer' => true],
                    ['id' => '34b42b47-b644-5dcb-8cfd-8e5a4309cdf1', 'description' => 'Atlas', 'correct_answer' => false],
                    ['id' => '33f11b1d-5d5d-5ddc-bacc-176001331680', 'description' => 'Montanhas Rochosas', 'correct_answer' => false]
                ]],
        ['id' => '88ca57b1-785f-51a3-8290-8c4e19a407dd', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa se estende pelo oeste da América do Norte?', 'difficulty' => 2, 'weight' => 230, 'alternatives' => [
                    ['id' => 'ed59c12c-0c0f-59fc-a993-e066646ab359', 'description' => 'Himalaia', 'correct_answer' => false],
                    ['id' => 'b54d0439-f124-5e84-a6e5-a8a51e68d5fc', 'description' => 'Andez', 'correct_answer' => false],
                    ['id' => '452a0c05-e2ce-505e-95bc-81562eeec43b', 'description' => 'Montanhas Rochosas', 'correct_answer' => true],
                    ['id' => '4289c52f-090a-5a1f-a9ca-cfeb4554b1af', 'description' => 'Alpes', 'correct_answer' => false],
                    ['id' => '244531fd-cc4e-59ad-aaef-ff93e9b1fb1f', 'description' => 'Atlas', 'correct_answer' => false]
                ]],
        ['id' => '8727457c-ba33-56bf-8a21-8feb0469ea40', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa se estende pelo noroeste da África?', 'difficulty' => 2, 'weight' => 220, 'alternatives' => [
                    ['id' => '1ab86a25-819c-5903-9c9f-a6972fa3f288', 'description' => 'Atlas', 'correct_answer' => true],
                    ['id' => '7ebb1e4a-0111-5428-ad24-f0abade14567', 'description' => 'Andes', 'correct_answer' => false],
                    ['id' => '63cba108-a04d-559b-91c9-252f3300d451', 'description' => 'Himalaia', 'correct_answer' => false],
                    ['id' => '23fe3b46-8080-5543-8eaa-76fbd9da7ffb', 'description' => 'Alpez', 'correct_answer' => false],
                    ['id' => 'df39b271-8438-537a-8087-334337fb2670', 'description' => 'Montanhas Rochosas', 'correct_answer' => false]
                ]],
        ['id' => 'ff6489fb-f4a7-5c40-9e7c-7a20663849ec', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande corpo de água interior é considerado o maior lago do mundo em área?', 'difficulty' => 2, 'weight' => 400, 'alternatives' => [
                    ['id' => 'e5cb1bec-ab3b-593f-87e2-d847a689c496', 'description' => 'Mar Adriático', 'correct_answer' => false],
                    ['id' => '63ef0172-73e1-5502-a47e-379db9bd3300', 'description' => 'Mar Cáspio', 'correct_answer' => true],
                    ['id' => 'ac554159-a93d-54b5-bf22-de6f7c595bd7', 'description' => 'Mar Negro', 'correct_answer' => false],
                    ['id' => '2f7ead22-8fe3-501a-80b0-21f1a9381516', 'description' => 'Mar Báltico', 'correct_answer' => false],
                    ['id' => '8c36797b-6fb0-56aa-ae01-ce1472db8ff3', 'description' => 'Mar Vermelhu', 'correct_answer' => false]
                ]],
        ['id' => '0079257d-744b-5cc4-9a6a-f5dab52fecbb', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual mar fica entre o sudeste da Europa e a Ásia Menor e se conecta ao Mediterrâneo pelo estreito de Bósforo?', 'difficulty' => 2, 'weight' => 245, 'alternatives' => [
                    ['id' => 'e77a71ae-7da5-5f1d-aa4b-1d3b7533f509', 'description' => 'Mar Vermelho', 'correct_answer' => false],
                    ['id' => 'e4b8befa-1c3d-5b5f-bae8-7935f6646307', 'description' => 'Mar Adriático', 'correct_answer' => false],
                    ['id' => '0630624f-7cb9-5b35-8aa1-3abd1b689c5c', 'description' => 'Mar Negro', 'correct_answer' => true],
                    ['id' => '6474447d-9a13-5c91-a42c-a0e8b6e605ee', 'description' => 'Mar Bálticu', 'correct_answer' => false],
                    ['id' => '7ba13213-02f6-55c2-9f93-a734352c29d5', 'description' => 'Mar Cáspio', 'correct_answer' => false]
                ]],
        ['id' => 'e58fe007-ea8e-514f-8303-a528de118ea5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual mar separa o nordeste da África da Península Arábica?', 'difficulty' => 2, 'weight' => 307, 'alternatives' => [
                    ['id' => 'e6ec3634-87f2-563c-bb43-a101e6bbc492', 'description' => 'Mar Cáspio', 'correct_answer' => false],
                    ['id' => '91048676-7eda-581a-baa2-fa3a5a542ce5', 'description' => 'Mar Vermelho', 'correct_answer' => true],
                    ['id' => '8a67af67-0559-5d68-b1f5-93a1a878fbf0', 'description' => 'Mar Báltico', 'correct_answer' => false],
                    ['id' => '656b6e37-f83d-5881-b00d-e9f5e98eac5a', 'description' => 'Mar Negro', 'correct_answer' => false],
                    ['id' => 'f32cec99-75d5-55f7-8959-e39a025e753e', 'description' => 'Mar Adriáticu', 'correct_answer' => false]
                ]],
        ['id' => 'acc60292-13eb-5a22-91b3-bf983454c67a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual mar interior do norte da Europa é banhado, entre outros países, por Suécia, Finlândia e Polônia?', 'difficulty' => 2, 'weight' => 304, 'alternatives' => [
                    ['id' => 'b99b707c-2c28-52bc-bfa8-4e02e49d44d2', 'description' => 'Mar Báltico', 'correct_answer' => true],
                    ['id' => 'aa555726-efed-5dcb-8c9f-2e6c275ff75a', 'description' => 'Mar Vermelho', 'correct_answer' => false],
                    ['id' => '4a1a351b-83a0-56bb-bf75-7099b920acc0', 'description' => 'Mar Negro', 'correct_answer' => false],
                    ['id' => '2d8ae866-32d0-5a28-ba71-e2e7ceb35e9f', 'description' => 'Mar Adriático', 'correct_answer' => false],
                    ['id' => 'b756e421-b932-5b2c-9236-3fc9dedc1b4a', 'description' => 'Mar Cáspiu', 'correct_answer' => false]
                ]],
        ['id' => 'a6120485-4a69-5e10-bed6-c28c2bcac380', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual braço do Mediterrâneo separa a Península Itálica da costa dos Bálcãs?', 'difficulty' => 2, 'weight' => 227, 'alternatives' => [
                    ['id' => '986b4ab8-4178-5380-8a36-acf39c4c4e99', 'description' => 'Mar Adriático', 'correct_answer' => true],
                    ['id' => '6ea5ae7d-0946-5b82-90b7-8413bacfb6c3', 'description' => 'Mar Vermelho', 'correct_answer' => false],
                    ['id' => '4f788d4c-ece1-591c-9fca-d17734ec6b70', 'description' => 'Mar Báltico', 'correct_answer' => false],
                    ['id' => 'e8ac8f19-b7d1-56bf-bc36-cb62eb9a8cd8', 'description' => 'Mar Cáspio', 'correct_answer' => false],
                    ['id' => 'b5f36b1d-ff8d-5041-8959-38b412288fc3', 'description' => 'Mar Negru', 'correct_answer' => false]
                ]],
        ['id' => '4811d20d-dcdb-5e53-b220-cd5cf5982831', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cidade turca está situada em dois continentes, separada pelo estreito de Bósforo?', 'difficulty' => 2, 'weight' => 358, 'alternatives' => [
                    ['id' => '64705358-6923-5811-982e-7e1ffd03beeb', 'description' => 'Antália', 'correct_answer' => false],
                    ['id' => '1d600870-3c8d-5ff2-8bde-67615f3437da', 'description' => 'Istambul', 'correct_answer' => true],
                    ['id' => 'ea33f794-c730-57f7-bfb7-23f0d7ba34ac', 'description' => 'Esmirna', 'correct_answer' => false],
                    ['id' => '603477a2-1231-5268-9bc1-4245fb639480', 'description' => 'Burse', 'correct_answer' => false],
                    ['id' => '9828ac9b-bee3-5e69-97f9-ad98370feafb', 'description' => 'Ancara', 'correct_answer' => false]
                ]],
        ['id' => '5bb2ea45-7b8f-5528-996f-d9b7720d1625', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual é a capital da Turquia?', 'difficulty' => 2, 'weight' => 392, 'alternatives' => [
                    ['id' => '02cfd615-0b03-5e5a-a4bd-1a4ddd9ad180', 'description' => 'Ancara', 'correct_answer' => true],
                    ['id' => '096e1dd7-7f7f-54f7-a53f-a5cf3ebaae3d', 'description' => 'Esmirna', 'correct_answer' => false],
                    ['id' => 'ba1ca1dc-5f0c-5d3a-a498-f01ad461a0f2', 'description' => 'Antálie', 'correct_answer' => false],
                    ['id' => '495bc5af-4379-5b6a-af3c-1d91acb64558', 'description' => 'Istambul', 'correct_answer' => false],
                    ['id' => '76e4e870-e70f-5fda-a459-85cb4b8ed838', 'description' => 'Bursa', 'correct_answer' => false]
                ]],
        ['id' => 'cc08d302-fe66-58be-8d94-41fa528cc40b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande cidade turca está localizada na costa do mar Egeu?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => '06e4f57d-7db7-5ebe-bc63-f5f348188b8f', 'description' => 'Istambur', 'correct_answer' => false],
                    ['id' => '22985388-e3cd-56dc-a69b-5187bba5339d', 'description' => 'Antália', 'correct_answer' => false],
                    ['id' => 'b95d9026-bc53-572e-92d0-a858d6f402b4', 'description' => 'Esmirna', 'correct_answer' => true],
                    ['id' => '78431364-aac1-5bbe-ad22-a2d23b3d9cea', 'description' => 'Ancara', 'correct_answer' => false],
                    ['id' => '81bda806-2095-50ad-934f-addd97e6e0f8', 'description' => 'Bursa', 'correct_answer' => false]
                ]],
        ['id' => 'd49c952b-3175-53eb-a5a8-7846130fcba7', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cidade turca foi uma das primeiras capitais do Império Otomano?', 'difficulty' => 2, 'weight' => 227, 'alternatives' => [
                    ['id' => 'c694a177-8be1-51fa-8a16-d9779468db69', 'description' => 'Istambul', 'correct_answer' => false],
                    ['id' => '484d322e-1971-5bb6-a75c-689dd1f2e40e', 'description' => 'Antália', 'correct_answer' => false],
                    ['id' => '9e61f015-c170-55ff-8072-47e0b246dce2', 'description' => 'Bursa', 'correct_answer' => true],
                    ['id' => '137d3f55-34b3-53d7-ad08-055071e2303e', 'description' => 'Esmirna', 'correct_answer' => false],
                    ['id' => 'c4c152b0-b2b7-58d7-a5d2-6bbe4891ea7c', 'description' => 'Ancare', 'correct_answer' => false]
                ]],
        ['id' => '67029858-de0e-5644-a7eb-0e0fe97db5e1', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cidade turca é um importante destino costeiro na região mediterrânea do país?', 'difficulty' => 2, 'weight' => 338, 'alternatives' => [
                    ['id' => 'df183d1e-d0ab-5104-a342-e5218d2180d3', 'description' => 'Bursa', 'correct_answer' => false],
                    ['id' => '64f871a7-f479-5de2-8f0d-c63a056d4ff6', 'description' => 'Ancara', 'correct_answer' => false],
                    ['id' => 'eac3a520-ec04-5ee4-afe0-4ddba40eb479', 'description' => 'Esmirne', 'correct_answer' => false],
                    ['id' => '78483ea3-0b7d-54a2-ab7d-0a6a075b0411', 'description' => 'Istambul', 'correct_answer' => false],
                    ['id' => '06a4c17b-4bde-5c6f-8d2a-b1584e51dc89', 'description' => 'Antália', 'correct_answer' => true]
                ]],
        ['id' => '39747f5a-579c-5a7d-9c1c-563253a14a6f', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual Estado soberano é um enclave inteiramente cercado pela cidade de Roma?', 'difficulty' => 2, 'weight' => 286, 'alternatives' => [
                    ['id' => 'acda33f6-e6a6-545d-9a73-272efc43c9bf', 'description' => 'Vaticano', 'correct_answer' => true],
                    ['id' => '0a7a865d-4ce1-581f-be3c-3042d6376035', 'description' => 'San Marino', 'correct_answer' => false],
                    ['id' => '62b1e9e0-c24d-580d-85e8-dd5cfd964575', 'description' => 'Liechtenstein', 'correct_answer' => false],
                    ['id' => '46916704-79aa-5551-8ba4-97a66b8a3baa', 'description' => 'Mônaco', 'correct_answer' => false],
                    ['id' => 'ef4f93c5-d90a-5d5b-b332-1b24f82791c9', 'description' => 'Andorre', 'correct_answer' => false]
                ]],
        ['id' => 'b47c68ce-6843-5322-9873-a965281f6467', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual microestado europeu está localizado na costa mediterrânea, próximo à fronteira com a França?', 'difficulty' => 2, 'weight' => 312, 'alternatives' => [
                    ['id' => '3edc2c09-6980-5401-994f-6a4d26c042fd', 'description' => 'San Marinu', 'correct_answer' => false],
                    ['id' => '63f8e008-1ecd-5ae9-a6f8-9ac598a5aae2', 'description' => 'Vaticano', 'correct_answer' => false],
                    ['id' => '706fe428-5f76-5191-bd8c-84f8c877f134', 'description' => 'Mônaco', 'correct_answer' => true],
                    ['id' => '3b3a1530-8837-5c38-84cf-2093b981ecd3', 'description' => 'Liechtenstein', 'correct_answer' => false],
                    ['id' => 'f06fc6a6-2fe5-571a-a90f-8bcddb6a37b9', 'description' => 'Andorra', 'correct_answer' => false]
                ]],
        ['id' => 'd545b9c0-ec85-5627-b9f6-8bca74a0f19b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual pequeno Estado independente é inteiramente cercado pela Itália e reivindica uma antiga tradição republicana?', 'difficulty' => 2, 'weight' => 244, 'alternatives' => [
                    ['id' => '33c67635-7758-505e-931e-127869000c02', 'description' => 'Liechtenstein', 'correct_answer' => false],
                    ['id' => '6a01d1ed-2951-5d9f-8be2-8cf2ef4f0946', 'description' => 'Andorra', 'correct_answer' => false],
                    ['id' => '58875431-db31-5382-a8fa-4a5495336f44', 'description' => 'Mônacu', 'correct_answer' => false],
                    ['id' => 'e4833186-ddf3-5e70-bd84-a88498e44a53', 'description' => 'San Marino', 'correct_answer' => true],
                    ['id' => 'd1bffe89-4192-545b-bd37-6ec018285752', 'description' => 'Vaticano', 'correct_answer' => false]
                ]],
        ['id' => '9f33a4f4-00a4-5036-b6ad-a762ee9af621', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual principado alpino está situado entre a Suíça e a Áustria?', 'difficulty' => 2, 'weight' => 363, 'alternatives' => [
                    ['id' => '882a98dd-b31a-54d1-9c18-e2c632030594', 'description' => 'Mônaco', 'correct_answer' => false],
                    ['id' => '49cef6cf-f09c-5924-b029-d0db9bd52d44', 'description' => 'Vaticanu', 'correct_answer' => false],
                    ['id' => 'ed466f25-b9c0-538c-829a-a4c32166bb95', 'description' => 'Liechtenstein', 'correct_answer' => true],
                    ['id' => '260e13ab-7993-5d4f-b6a3-378596b5bc93', 'description' => 'Andorra', 'correct_answer' => false],
                    ['id' => 'ee72b5d0-d860-5249-8d2a-2c16c5db3dc0', 'description' => 'San Marino', 'correct_answer' => false]
                ]],
        ['id' => '989bef6c-e481-5223-a91b-c2fb4446e372', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual microestado dos Pireneus está situado entre França e Espanha?', 'difficulty' => 2, 'weight' => 295, 'alternatives' => [
                    ['id' => '3df3c1ab-b7b0-580d-b2f0-570eae9f4c8d', 'description' => 'Mônaco', 'correct_answer' => false],
                    ['id' => '5e1d60ef-ba2e-5d02-b994-c635d9b23ec9', 'description' => 'San Marino', 'correct_answer' => false],
                    ['id' => 'eaf29e6b-738e-53c5-88b5-7109ba01af47', 'description' => 'Vaticano', 'correct_answer' => false],
                    ['id' => 'b37e7f55-35fd-5901-a221-ce5a605aa63e', 'description' => 'Liechtensteim', 'correct_answer' => false],
                    ['id' => '1f2cec22-6d71-58e6-ab77-1703d169319c', 'description' => 'Andorra', 'correct_answer' => true]
                ]],
        ['id' => 'a9f5c341-7b59-5e62-95e9-7c95827e9f71', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito conecta o oceano Atlântico ao mar Mediterrâneo?', 'difficulty' => 2, 'weight' => 289, 'alternatives' => [
                    ['id' => 'f9d238b3-6a25-5ae1-89c9-d1d302fe1346', 'description' => 'Estreito de Bering', 'correct_answer' => false],
                    ['id' => '3c39d9e2-44a5-5470-8033-5dc54e5c4c3f', 'description' => 'Canal da Mancha', 'correct_answer' => false],
                    ['id' => 'b4b58578-3f92-5ffa-b627-e2d595979e29', 'description' => 'Estreito de Gibraltar', 'correct_answer' => true],
                    ['id' => 'a8943e91-c9e8-5c58-a777-f32348126e2e', 'description' => 'Estreito de Malace', 'correct_answer' => false],
                    ['id' => 'b3cf78bf-dd55-58ae-87c7-6e06a5d3a662', 'description' => 'Estreito de Ormuz', 'correct_answer' => false]
                ]],
        ['id' => '888f2d21-eba7-5c0e-be79-80ea82fe3e42', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual braço de mar separa o sul da Inglaterra do norte da França?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => '99c3fc0c-137c-5953-a1b9-03a5d196ff1f', 'description' => 'Canal da Mancha', 'correct_answer' => true],
                    ['id' => '6b2df642-02f1-5aee-a2c3-c55636571ba0', 'description' => 'Estreito de Bering', 'correct_answer' => false],
                    ['id' => '3cbbee64-ea40-5f69-baf2-289792769dd6', 'description' => 'Estreito de Malaca', 'correct_answer' => false],
                    ['id' => 'cb11a501-78e5-59d1-b7c8-31d73c545a7a', 'description' => 'Estreito de Gibraltar', 'correct_answer' => false],
                    ['id' => '7e6f5c08-8216-5bc5-92fa-f897a889f076', 'description' => 'Estreito de Ormus', 'correct_answer' => false]
                ]],
        ['id' => 'd15b08d0-a255-5ddf-ade8-b4cb5ec4a20d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito separa a Sibéria do Alasca?', 'difficulty' => 2, 'weight' => 329, 'alternatives' => [
                    ['id' => 'afdb25cf-99a2-5708-98d9-1e76dd4344d6', 'description' => 'Estreito de Gibraltar', 'correct_answer' => false],
                    ['id' => 'f498b4f4-15f2-55e6-8b92-52aea07fae95', 'description' => 'Estreito de Ormuz', 'correct_answer' => false],
                    ['id' => '0ac773b8-9a6d-5661-9de4-9d1a096abae9', 'description' => 'Canal da Manche', 'correct_answer' => false],
                    ['id' => 'e99fc2da-e0e2-5190-9cf2-857508468edb', 'description' => 'Estreito de Malaca', 'correct_answer' => false],
                    ['id' => '628fc9ac-97c1-582d-a9ef-fdc0a6968a2f', 'description' => 'Estreito de Bering', 'correct_answer' => true]
                ]],
        ['id' => '515d04ca-e149-56a6-b369-97b1e944ed2c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito separa a Península Malaia da ilha de Sumatra?', 'difficulty' => 2, 'weight' => 263, 'alternatives' => [
                    ['id' => 'e7a8475f-3e29-536a-9dcb-07cd18a3c047', 'description' => 'Canal da Mancha', 'correct_answer' => false],
                    ['id' => '2b6ffd31-bc49-5437-aa2c-42df2e048a61', 'description' => 'Estreito de Ormuz', 'correct_answer' => false],
                    ['id' => '9f1be30b-a22c-5ee4-9f10-0d84d42cc642', 'description' => 'Estreito de Malaca', 'correct_answer' => true],
                    ['id' => '41969108-fa9e-5b68-b60c-5f54bee4ba0e', 'description' => 'Estreito de Bering', 'correct_answer' => false],
                    ['id' => '1ec9978c-7504-509a-9052-31b2d0828aee', 'description' => 'Estreito de Gibraltal', 'correct_answer' => false]
                ]],
        ['id' => 'b8178fb9-870c-52bd-a659-2ce76f5f2010', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito liga o Golfo Pérsico ao Golfo de Omã?', 'difficulty' => 2, 'weight' => 259, 'alternatives' => [
                    ['id' => 'e18ac266-f6dc-521b-b990-943b10207a9b', 'description' => 'Estreito de Ormuz', 'correct_answer' => true],
                    ['id' => '014ca499-fd79-560d-9484-956fd7a4c6cd', 'description' => 'Estreito de Gibraltar', 'correct_answer' => false],
                    ['id' => 'ff9b567f-1546-5d2d-9ba1-2e36dfe4abed', 'description' => 'Estreito de Berinj', 'correct_answer' => false],
                    ['id' => '5daf3a61-7392-55d3-9c6b-8097390f9bfc', 'description' => 'Estreito de Malaca', 'correct_answer' => false],
                    ['id' => 'c2a828f8-2532-5a47-abab-69b601dbf3a4', 'description' => 'Canal da Mancha', 'correct_answer' => false]
                ]],
        ['id' => '04a5fa6b-9bb1-5132-98fc-e93b62ad0c1d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região geográfica ocupa o extremo sul da Argentina e do Chile?', 'difficulty' => 2, 'weight' => 317, 'alternatives' => [
                    ['id' => 'eb31f012-a69f-5bd4-b1be-686e816a661f', 'description' => 'Pantanar', 'correct_answer' => false],
                    ['id' => '7a0598e7-0fca-518d-a9a7-a2dddb264709', 'description' => 'Puna', 'correct_answer' => false],
                    ['id' => '3c54ecf1-a77b-5970-9157-ea34ec7e238f', 'description' => 'Patagônia', 'correct_answer' => true],
                    ['id' => '1991eddb-938d-5c0d-94a1-aceb07fc257e', 'description' => 'Pampas', 'correct_answer' => false],
                    ['id' => '649b7c06-c369-502b-99ff-74eab8609816', 'description' => 'Chaco', 'correct_answer' => false]
                ]],
        ['id' => '8282aa25-a265-52c1-9fe7-53fc44fd34fa', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual extensa planície de campos temperados abrange principalmente Argentina, Uruguai e sul do Brasil?', 'difficulty' => 2, 'weight' => 320, 'alternatives' => [
                    ['id' => '51d51f1e-dc73-5053-aa65-e544cf3f5017', 'description' => 'Pantanal', 'correct_answer' => false],
                    ['id' => '8a76096e-7475-5b7e-8cfb-4c248a0b84d7', 'description' => 'Puna', 'correct_answer' => false],
                    ['id' => '49747079-4b85-59c8-90dc-37ab2f076609', 'description' => 'Pampas', 'correct_answer' => true],
                    ['id' => '35229172-81a1-52fc-99e5-31dd1aaa2ba8', 'description' => 'Patagônia', 'correct_answer' => false],
                    ['id' => '9282427e-ae73-58ac-8ffb-77927b5bdadd', 'description' => 'Chacu', 'correct_answer' => false]
                ]],
        ['id' => '6d980127-84d2-569c-9b07-f4008be3e8b7', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande planície alagável se estende por partes do Brasil, Bolívia e Paraguai?', 'difficulty' => 2, 'weight' => 319, 'alternatives' => [
                    ['id' => '99403218-1a04-5e4e-909a-b7d23ba12650', 'description' => 'Pune', 'correct_answer' => false],
                    ['id' => 'f98a29e5-8360-54b7-b101-29263a54e547', 'description' => 'Chaco', 'correct_answer' => false],
                    ['id' => 'c7c43bac-8bf0-57fa-971c-e873ad417935', 'description' => 'Pampas', 'correct_answer' => false],
                    ['id' => '1665fa9b-15a2-5a1a-93f1-5d24eb941d12', 'description' => 'Patagônia', 'correct_answer' => false],
                    ['id' => 'ded45f93-aaf4-509f-ba1f-38e926e2898c', 'description' => 'Pantanal', 'correct_answer' => true]
                ]],
        ['id' => 'fbe55207-cc4a-5e59-a294-77bc3d178788', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região de planícies e florestas secas abrange partes da Argentina, Paraguai e Bolívia?', 'difficulty' => 2, 'weight' => 318, 'alternatives' => [
                    ['id' => 'af18fa87-2e11-5e7c-b4f8-36ec68126973', 'description' => 'Pampaz', 'correct_answer' => false],
                    ['id' => 'bf406036-9064-56b6-83ef-128ac7e86076', 'description' => 'Patagônia', 'correct_answer' => false],
                    ['id' => '9fb1966f-9497-5dfa-a4a9-cf46c03f7971', 'description' => 'Chaco', 'correct_answer' => true],
                    ['id' => '400cb2b3-79ff-5c45-827c-9c1236e2487a', 'description' => 'Puna', 'correct_answer' => false],
                    ['id' => '6ad5334d-aa6c-5202-8822-844dab1a64c6', 'description' => 'Pantanal', 'correct_answer' => false]
                ]],
        ['id' => '21ec394e-76ea-5e8e-8486-d09d8c608fe5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual planalto de grande altitude ocupa áreas dos Andes centrais, especialmente no noroeste da Argentina e sul da Bolívia?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => 'f15eb2a0-68b9-5a5a-a5c2-d3f6af1e7c56', 'description' => 'Pantanal', 'correct_answer' => false],
                    ['id' => '01471745-5199-5762-be3c-dccf4020dba0', 'description' => 'Pampas', 'correct_answer' => false],
                    ['id' => 'a61fe682-2fd8-53ab-b20c-973aadeaa046', 'description' => 'Puna', 'correct_answer' => true],
                    ['id' => 'e4c3413f-0614-5a00-913f-a05782cdeb50', 'description' => 'Chaco', 'correct_answer' => false],
                    ['id' => '443fe0b8-6408-536c-a185-c05448b1ddc8', 'description' => 'Patagônie', 'correct_answer' => false]
                ]],
        ['id' => 'b9c6a417-187c-5efd-ac6d-5493b973cf9b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito atravessa Istambul e conecta o mar Negro ao mar de Mármara?', 'difficulty' => 3, 'weight' => 558, 'alternatives' => [
                    ['id' => 'b5626ecf-ab70-58f0-978d-1723914e3e11', 'description' => 'Estreito de Otranto', 'correct_answer' => false],
                    ['id' => 'dc6d6793-5bdd-565e-9938-17ec82db8b85', 'description' => 'Estreito de Messine', 'correct_answer' => false],
                    ['id' => 'c23670c6-c8aa-514f-bd09-a174d21eab7e', 'description' => 'Bósforo de Kerch', 'correct_answer' => false],
                    ['id' => '0da0ea77-e54f-5b01-9985-e7d42c738dbc', 'description' => 'Dardanelos', 'correct_answer' => false],
                    ['id' => 'e6597b3c-4854-5b84-844a-8a2e27d3391d', 'description' => 'Bósforo', 'correct_answer' => true]
                ]],
        ['id' => '9638d9db-9000-517b-aa09-fe14b0fb36ff', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito turco conecta o mar de Mármara ao mar Egeu?', 'difficulty' => 3, 'weight' => 438, 'alternatives' => [
                    ['id' => '7b0392dc-a067-52d1-a572-08580baa4658', 'description' => 'Bósforu', 'correct_answer' => false],
                    ['id' => '29763516-5731-5cf3-8200-99076eadf412', 'description' => 'Dardanelos', 'correct_answer' => true],
                    ['id' => '8aa34264-9bd4-5acb-ba65-dd3c2de0498f', 'description' => 'Estreito de Messina', 'correct_answer' => false],
                    ['id' => 'e822dee1-ca5a-59b5-b6d1-1beb60ee0d7d', 'description' => 'Estreito de Otranto', 'correct_answer' => false],
                    ['id' => '9537dc17-f8c0-550e-b031-d4a69e6ca5c2', 'description' => 'Bósforo de Kerch', 'correct_answer' => false]
                ]],
        ['id' => 'e1efdffa-d3e6-5531-9753-79ff17a03991', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito conecta o mar Negro ao mar de Azov?', 'difficulty' => 3, 'weight' => 569, 'alternatives' => [
                    ['id' => '7843030b-a748-52b1-8abb-5f9261a1e93b', 'description' => 'Dardaneloz', 'correct_answer' => false],
                    ['id' => 'd1fd8ba9-c584-5449-9db5-b13489a21e33', 'description' => 'Estreito de Otranto', 'correct_answer' => false],
                    ['id' => '4db933b8-0500-52b0-81d8-d8e998e747d2', 'description' => 'Bósforo', 'correct_answer' => false],
                    ['id' => '7904403a-ef0d-5642-9c51-2b62a216c167', 'description' => 'Estreito de Messina', 'correct_answer' => false],
                    ['id' => '40e95fd6-8a96-5baa-a36a-4f4874645e9a', 'description' => 'Bósforo de Kerch', 'correct_answer' => true]
                ]],
        ['id' => 'ca352ccc-74b7-5c12-be09-6e9ecd972cf3', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito separa a Sicília da região da Calábria, na Itália continental?', 'difficulty' => 3, 'weight' => 534, 'alternatives' => [
                    ['id' => '6b4da89f-2c53-5c76-812c-0f3022efb0c2', 'description' => 'Bósforo', 'correct_answer' => false],
                    ['id' => '340c40e4-1f92-5366-8c65-878648308d20', 'description' => 'Dardanelos', 'correct_answer' => false],
                    ['id' => '8f1ecba1-f848-5492-addd-2992b3c4c06b', 'description' => 'Estreito de Messina', 'correct_answer' => true],
                    ['id' => '72987a36-a252-52df-9944-ed658e3412dc', 'description' => 'Estreito de Otrantu', 'correct_answer' => false],
                    ['id' => '23cf518b-0a35-5285-a000-d604100b10d6', 'description' => 'Bósforo de Kerch', 'correct_answer' => false]
                ]],
        ['id' => '60ae32a9-4575-5936-8cec-f008ba2e83bc', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estreito conecta o mar Adriático ao mar Jônico?', 'difficulty' => 3, 'weight' => 599, 'alternatives' => [
                    ['id' => '4bd6f80d-3922-5bbd-8c37-882617de321c', 'description' => 'Bósforo de Kerkh', 'correct_answer' => false],
                    ['id' => '4d481e94-d75e-5e0b-946d-5a340a97fb01', 'description' => 'Dardanelos', 'correct_answer' => false],
                    ['id' => '556556eb-3a40-5167-be59-46242d0f3ec9', 'description' => 'Estreito de Messina', 'correct_answer' => false],
                    ['id' => '3cebb61c-cbfd-5fdd-87bb-291364f5f8c0', 'description' => 'Estreito de Otranto', 'correct_answer' => true],
                    ['id' => '55d12767-b74a-59cc-b3f5-aa65f02fc8c5', 'description' => 'Bósforo', 'correct_answer' => false]
                ]],
        ['id' => '6de01c88-0142-5457-80cb-7852dc9513e1', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago siberiano é o mais profundo do mundo e contém uma grande reserva de água doce?', 'difficulty' => 3, 'weight' => 541, 'alternatives' => [
                    ['id' => 'f176c5ac-6f56-5d0a-9e79-b530ff9705a4', 'description' => 'Lago Baikal', 'correct_answer' => true],
                    ['id' => '4cd75dc7-5d93-52d6-a2af-b86dacb98ab1', 'description' => 'Lago Vitória', 'correct_answer' => false],
                    ['id' => '7f05be63-8a29-5801-b189-aa159edb54b7', 'description' => 'Lago Malawi', 'correct_answer' => false],
                    ['id' => 'a42d7921-dfc6-5820-b7e6-d28423057f5c', 'description' => 'Lago Tanganice', 'correct_answer' => false],
                    ['id' => '06f1a0ac-93ef-59c7-bdbc-168c84907960', 'description' => 'Lago Superior', 'correct_answer' => false]
                ]],
        ['id' => 'df05cce7-71be-5ed1-a0e7-a9d10f06b892', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago africano é um dos mais profundos do mundo e se estende por quatro países?', 'difficulty' => 3, 'weight' => 540, 'alternatives' => [
                    ['id' => '4b159d19-cc15-5911-8dec-8e6c9bca4520', 'description' => 'Lago Tanganica', 'correct_answer' => true],
                    ['id' => '51271b99-9c7f-5e42-9ff6-abe2f6fbc119', 'description' => 'Lago Malawi', 'correct_answer' => false],
                    ['id' => '0a842130-b7cc-5fb2-9cd8-89fe38a40d19', 'description' => 'Lago Vitória', 'correct_answer' => false],
                    ['id' => '3687b885-6619-50d0-9803-c695a7e48621', 'description' => 'Lago Baikal', 'correct_answer' => false],
                    ['id' => '375191ee-804b-5eb9-99bb-b8eae3c4eb90', 'description' => 'Lago Superiol', 'correct_answer' => false]
                ]],
        ['id' => '01e1bdd3-c668-5f8d-8be2-7a02ab6ae1fd', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual dos Grandes Lagos da América do Norte possui a maior área superficial?', 'difficulty' => 3, 'weight' => 410, 'alternatives' => [
                    ['id' => '0b501ee5-8913-5854-91cb-0766bec7fdd4', 'description' => 'Lago Baikal', 'correct_answer' => false],
                    ['id' => 'e74b39b0-5f01-536b-82ed-d4ef0491ddbc', 'description' => 'Lago Malawe', 'correct_answer' => false],
                    ['id' => 'd6dd63fb-50c7-55a0-90f9-3c2d55cc1b3b', 'description' => 'Lago Tanganica', 'correct_answer' => false],
                    ['id' => 'ebb0e7ae-bde2-5104-a9fc-a365c74f83a7', 'description' => 'Lago Vitória', 'correct_answer' => false],
                    ['id' => '5b440e96-a3b2-5e62-83be-9682564eaeda', 'description' => 'Lago Superior', 'correct_answer' => true]
                ]],
        ['id' => 'cd1b9b57-5b5d-59eb-bbdf-8a2da35eb3f2', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago africano é uma das principais nascentes do rio Nilo Branco?', 'difficulty' => 3, 'weight' => 466, 'alternatives' => [
                    ['id' => '6f2c8f60-399c-59a4-a034-8338c6efa539', 'description' => 'Lago Baikar', 'correct_answer' => false],
                    ['id' => 'fa589484-0fb4-5251-a5ac-d6df0b24def3', 'description' => 'Lago Tanganica', 'correct_answer' => false],
                    ['id' => 'f4d8744c-24f9-54c9-8bfb-71b58e879faf', 'description' => 'Lago Malawi', 'correct_answer' => false],
                    ['id' => '3a8e27fd-05e9-5910-8017-5ba2f67d97f9', 'description' => 'Lago Superior', 'correct_answer' => false],
                    ['id' => 'af9d5786-ed8e-5828-afea-a4ec4c3e2d88', 'description' => 'Lago Vitória', 'correct_answer' => true]
                ]],
        ['id' => '57ffe327-2092-50cb-a10f-3262f7a9d214', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago africano também é conhecido como Lago Niassa e possui grande diversidade de peixes ciclídeos?', 'difficulty' => 3, 'weight' => 528, 'alternatives' => [
                    ['id' => '23a13cf7-b38b-591e-8f58-c90508735340', 'description' => 'Lago Vitórie', 'correct_answer' => false],
                    ['id' => '846bf435-cab9-51ff-a2f2-b338d6d11c26', 'description' => 'Lago Superior', 'correct_answer' => false],
                    ['id' => '395a8ea6-a42f-58da-98f7-e062b7a5852e', 'description' => 'Lago Malawi', 'correct_answer' => true],
                    ['id' => 'b4ee3b51-1fa8-52d7-a03c-3a2f9b550258', 'description' => 'Lago Tanganica', 'correct_answer' => false],
                    ['id' => 'de2e6849-8539-5825-91b3-1033c2c04c5c', 'description' => 'Lago Baikal', 'correct_answer' => false]
                ]],
        ['id' => 'c71d39f4-3c8f-5a9e-bce9-be0f28e53c5f', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual delta interior de Botsuana se espalha pelo deserto do Kalahari sem alcançar o mar?', 'difficulty' => 3, 'weight' => 460, 'alternatives' => [
                    ['id' => '1da1087d-ee61-587f-930c-eb8900292c70', 'description' => 'Delta do Danúbio', 'correct_answer' => false],
                    ['id' => 'd176a3b8-81b5-57c6-bff0-b6cf601c9536', 'description' => 'Delta do Lena', 'correct_answer' => false],
                    ['id' => 'beab0769-22fa-5037-97e9-b290a5d6691c', 'description' => 'Delta do Nígel', 'correct_answer' => false],
                    ['id' => 'af4d8826-cd13-53c1-8361-8f11ec1ee6c2', 'description' => 'Delta do Mekong', 'correct_answer' => false],
                    ['id' => 'd12902c7-cd1f-5442-a2ac-306e813d801b', 'description' => 'Delta do Okavango', 'correct_answer' => true]
                ]],
        ['id' => '730e2387-01be-5ffe-9c53-1a7bb225442b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande delta africano está localizado no sul da Nigéria e é conhecido por sua produção de petróleo?', 'difficulty' => 3, 'weight' => 584, 'alternatives' => [
                    ['id' => '3611cc90-c1f4-5591-9f4f-9b295692019a', 'description' => 'Delta do Níger', 'correct_answer' => true],
                    ['id' => 'c5bf2306-1f8c-54f3-9c8a-250b85ad0015', 'description' => 'Delta do Lena', 'correct_answer' => false],
                    ['id' => '55dbba98-0d3b-5f5d-b2b9-b6bb5d88bcaf', 'description' => 'Delta do Danúbio', 'correct_answer' => false],
                    ['id' => '635523f2-253a-5e0f-9e1c-6bd92fe0cade', 'description' => 'Delta do Okavangu', 'correct_answer' => false],
                    ['id' => '1042cba4-426d-52ba-9668-436b6ca5f4be', 'description' => 'Delta do Mekong', 'correct_answer' => false]
                ]],
        ['id' => '9a7617a6-2488-54c1-a585-ed6adec8347d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual delta do sudeste asiático forma uma extensa região agrícola no sul do Vietnã?', 'difficulty' => 3, 'weight' => 511, 'alternatives' => [
                    ['id' => 'a54ce914-7fbf-5fca-bc60-586a07a20e06', 'description' => 'Delta do Lena', 'correct_answer' => false],
                    ['id' => 'a840096f-d801-5cab-93b4-647c712b0420', 'description' => 'Delta do Okavango', 'correct_answer' => false],
                    ['id' => '4f0ed0af-a19a-57a7-b2c9-1cb05793a3c9', 'description' => 'Delta do Mekong', 'correct_answer' => true],
                    ['id' => 'b32fa38f-20c2-5861-980f-e18552ad0003', 'description' => 'Delta do Níger', 'correct_answer' => false],
                    ['id' => 'b25dc720-0784-5abd-86f4-a13a839708b2', 'description' => 'Delta do Danúbiu', 'correct_answer' => false]
                ]],
        ['id' => 'af902d31-0352-584f-9993-c6da236629dd', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual delta ártico russo é formado por um dos grandes rios da Sibéria oriental?', 'difficulty' => 3, 'weight' => 469, 'alternatives' => [
                    ['id' => '243184be-02eb-53e9-9480-535d6ca929b9', 'description' => 'Delta do Lena', 'correct_answer' => true],
                    ['id' => '28e33d61-6692-51dc-9c8e-63a167e8ed97', 'description' => 'Delta do Danúbio', 'correct_answer' => false],
                    ['id' => 'f3ad1084-2e78-5b22-853b-bc85e5742c6e', 'description' => 'Delta do Okavango', 'correct_answer' => false],
                    ['id' => '88a70b03-4f59-57f2-ac4b-bfaa108c6226', 'description' => 'Delta do Mekonj', 'correct_answer' => false],
                    ['id' => '4266837e-b682-5903-943a-6b37db520540', 'description' => 'Delta do Níger', 'correct_answer' => false]
                ]],
        ['id' => 'b0dffdb8-4f07-5a1f-90a7-333e24d3fabc', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual delta europeu está localizado principalmente na Romênia e na Ucrânia, junto ao mar Negro?', 'difficulty' => 3, 'weight' => 481, 'alternatives' => [
                    ['id' => 'bf868cba-183c-5bcc-8a89-1c2e251085ab', 'description' => 'Delta do Níger', 'correct_answer' => false],
                    ['id' => '64a2f25d-3240-5a0d-bd57-765e8225f404', 'description' => 'Delta do Lene', 'correct_answer' => false],
                    ['id' => '0fd5b3da-c52f-57ce-8f52-cf07afbd927d', 'description' => 'Delta do Okavango', 'correct_answer' => false],
                    ['id' => '1265fad7-3e14-5d9e-b530-506ad3484706', 'description' => 'Delta do Mekong', 'correct_answer' => false],
                    ['id' => 'dda1132e-1197-5dd6-a0ab-763633ac3776', 'description' => 'Delta do Danúbio', 'correct_answer' => true]
                ]],
        ['id' => 'abbbe384-7786-5a67-a597-fda691d21f68', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual depressão tectônica abriga a superfície terrestre emersa mais baixa do planeta?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => 'e5bd0378-3704-5cec-9af3-c25a0c14b961', 'description' => 'Depressão de Danakil', 'correct_answer' => false],
                    ['id' => '22c196ea-34e3-589e-9a1f-043a9deb0d8c', 'description' => 'Depressão de Turfan', 'correct_answer' => false],
                    ['id' => '32599312-4dc5-5968-9fcc-965f979498e0', 'description' => 'Depressão do Mar Morto', 'correct_answer' => true],
                    ['id' => '1afc22b7-cd6a-5be5-88a2-0d81e0bca909', 'description' => 'Depressão de Afar', 'correct_answer' => false],
                    ['id' => '1d5c8290-f50d-57ee-bbe4-9ce1e9355e45', 'description' => 'Depressão de Qattare', 'correct_answer' => false]
                ]],
        ['id' => '96ad69f5-2831-586a-a592-2ef70d52f478', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual depressão do noroeste do Egito fica abaixo do nível do mar e contém extensas áreas salinas?', 'difficulty' => 3, 'weight' => 456, 'alternatives' => [
                    ['id' => '1092bed7-1893-558e-910c-ec735a853769', 'description' => 'Depressão de Danakil', 'correct_answer' => false],
                    ['id' => '0a9ee523-090e-59c7-b5cf-9c0d35abadff', 'description' => 'Depressão de Turfam', 'correct_answer' => false],
                    ['id' => 'bd89f949-a903-5962-9109-18454d92a726', 'description' => 'Depressão de Afar', 'correct_answer' => false],
                    ['id' => 'c98a1e4c-12e1-5bc1-bd05-78e16df3c9eb', 'description' => 'Depressão de Qattara', 'correct_answer' => true],
                    ['id' => '010aa893-208a-5efa-84e6-e1bfa72ac172', 'description' => 'Depressão do Mar Morto', 'correct_answer' => false]
                ]],
        ['id' => '14b69d63-997a-58dd-9fa1-07b06c0770dc', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual depressão da região de Xinjiang, na China, inclui áreas abaixo do nível do mar?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => '18caddce-0f8e-55da-b84b-38e8a1685d6f', 'description' => 'Depressão de Danakil', 'correct_answer' => false],
                    ['id' => 'c60616ae-7e94-5b1c-b18d-62e9eb61763f', 'description' => 'Depressão de Afal', 'correct_answer' => false],
                    ['id' => 'cfefe630-5038-5645-9302-40117ea479ae', 'description' => 'Depressão de Turfan', 'correct_answer' => true],
                    ['id' => '9fce5c17-19de-578d-b274-d8c307ab41e9', 'description' => 'Depressão do Mar Morto', 'correct_answer' => false],
                    ['id' => '05cf75cb-e434-5b1d-909a-2bea8fe235e8', 'description' => 'Depressão de Qattara', 'correct_answer' => false]
                ]],
        ['id' => '5cb9e805-b3e0-50db-b755-39655d090466', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual depressão do Chifre da África é marcada por atividade tectônica e vulcânica na junção de placas?', 'difficulty' => 3, 'weight' => 467, 'alternatives' => [
                    ['id' => '2e108667-3c4d-573f-baab-f25f9414507b', 'description' => 'Depressão de Qattara', 'correct_answer' => false],
                    ['id' => 'a0ec7f30-4fcb-5475-b663-c2b309a17f8e', 'description' => 'Depressão do Mar Morto', 'correct_answer' => false],
                    ['id' => '10d57d1f-e81e-5b1b-8f61-38b4b518b477', 'description' => 'Depressão de Danakir', 'correct_answer' => false],
                    ['id' => 'aeb6f32e-d3d1-5be0-9611-b53d1c7489a8', 'description' => 'Depressão de Afar', 'correct_answer' => true],
                    ['id' => 'c0b0e57a-d7d3-5e61-a7d7-aa9036b7ddc3', 'description' => 'Depressão de Turfan', 'correct_answer' => false]
                ]],
        ['id' => 'f5ff45c2-d849-5726-a428-7efa8f7565db', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região extremamente quente e árida da Etiópia é conhecida por salinas e fontes hidrotermais?', 'difficulty' => 3, 'weight' => 493, 'alternatives' => [
                    ['id' => 'c829228c-c2bd-51e3-9991-538b9abcf224', 'description' => 'Depressão de Turfan', 'correct_answer' => false],
                    ['id' => '708e2aed-ff78-5bd5-97a3-114778565bfb', 'description' => 'Depressão do Mar Mortu', 'correct_answer' => false],
                    ['id' => '41a8080d-100f-52ff-b324-f67cea330a61', 'description' => 'Depressão de Danakil', 'correct_answer' => true],
                    ['id' => '5d5950fa-4712-5450-9c4f-2463ed0d5f53', 'description' => 'Depressão de Qattara', 'correct_answer' => false],
                    ['id' => 'dfa95151-fc89-59c0-83ba-138af0c09261', 'description' => 'Depressão de Afar', 'correct_answer' => false]
                ]],
        ['id' => '3d3ce18a-32b4-5dfa-98b6-cbdd2d232fdb', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual sistema montanhoso fica entre os mares Negro e Cáspio e inclui o monte Elbrus?', 'difficulty' => 3, 'weight' => 430, 'alternatives' => [
                    ['id' => '939b9183-6b26-5350-8a46-1db26bb2d1a2', 'description' => 'Hindu Kush', 'correct_answer' => false],
                    ['id' => 'a26627b3-d064-5574-a661-33b73b93bb1e', 'description' => 'Cáucaso', 'correct_answer' => true],
                    ['id' => '0243e2fb-6cf5-5b24-a43a-8ed2ae056aff', 'description' => 'Tian Shan', 'correct_answer' => false],
                    ['id' => '3cfa7b9f-a04b-538b-a1b8-bd40044bd8e2', 'description' => 'Pamil', 'correct_answer' => false],
                    ['id' => 'c2fb37d7-6225-5ed0-81a1-745ed4a17ba5', 'description' => 'Karakoram', 'correct_answer' => false]
                ]],
        ['id' => 'd046e4db-7eb0-5abb-b5d1-46b273828f77', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região montanhosa da Ásia Central é frequentemente chamada de \'Teto do Mundo\'?', 'difficulty' => 3, 'weight' => 528, 'alternatives' => [
                    ['id' => 'b2698b1e-df4d-535a-9d0c-b0038d431012', 'description' => 'Tian Sham', 'correct_answer' => false],
                    ['id' => 'd069e819-f934-58d4-97e1-2245742a4fd4', 'description' => 'Pamir', 'correct_answer' => true],
                    ['id' => '1b52469b-5ca3-5d5f-a941-ee84871101e3', 'description' => 'Hindu Kush', 'correct_answer' => false],
                    ['id' => '83fa8e49-0f9b-5696-b5c3-02c5ce33c918', 'description' => 'Cáucaso', 'correct_answer' => false],
                    ['id' => 'c1c6f5bf-3320-5e7c-b21e-237a2192db0d', 'description' => 'Karakoram', 'correct_answer' => false]
                ]],
        ['id' => '90cc774d-c5af-5a50-8bf6-afdde5e453d8', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa da Ásia Central se estende principalmente pelo Quirguistão e pela China?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => 'ff8645be-2c5a-5081-b9d2-7513f42f4c7a', 'description' => 'Tian Shan', 'correct_answer' => true],
                    ['id' => '34b7b080-674b-52d8-806c-2a0f9c148bf8', 'description' => 'Cáucaso', 'correct_answer' => false],
                    ['id' => '3913bb6e-e61e-58f6-9481-40beb7eb4984', 'description' => 'Karakoram', 'correct_answer' => false],
                    ['id' => '8b87933a-8650-5593-9b66-e61265e6b47d', 'description' => 'Pamir', 'correct_answer' => false],
                    ['id' => '60712209-905c-5585-82cb-60d983800018', 'description' => 'Hindu Kuzh', 'correct_answer' => false]
                ]],
        ['id' => 'b2abe9d1-340f-5049-9ac3-eac6e9ef5a70', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa se estende pelo Afeganistão e Paquistão, a oeste do Himalaia?', 'difficulty' => 3, 'weight' => 521, 'alternatives' => [
                    ['id' => '26f098f5-e17e-5cef-a3c9-2a00a826e2d9', 'description' => 'Cáucaso', 'correct_answer' => false],
                    ['id' => '24e68198-d390-59ca-875b-5e40c41034cb', 'description' => 'Pamir', 'correct_answer' => false],
                    ['id' => 'b4e9d522-9e28-5faa-99d4-024c37732afa', 'description' => 'Karakoran', 'correct_answer' => false],
                    ['id' => '42ce0cfd-2a50-5ac2-a03e-608ae78ed18f', 'description' => 'Tian Shan', 'correct_answer' => false],
                    ['id' => '47ac4221-17dc-5351-a8d5-56011d25dc5b', 'description' => 'Hindu Kush', 'correct_answer' => true]
                ]],
        ['id' => 'cd613882-fb5a-5c26-bae8-20713e040598', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa abriga o K2 e se estende pela região entre Paquistão, Índia e China?', 'difficulty' => 3, 'weight' => 499, 'alternatives' => [
                    ['id' => '1fcfaf31-30d9-5be6-92bc-e6c4f723307d', 'description' => 'Pamir', 'correct_answer' => false],
                    ['id' => 'e3dde7ba-ac99-5a4c-a545-37d32cb41634', 'description' => 'Hindu Kush', 'correct_answer' => false],
                    ['id' => '0a302157-9683-5d79-add1-8ec1005752da', 'description' => 'Karakoram', 'correct_answer' => true],
                    ['id' => 'f7da5e76-d547-5771-8346-10ccc1652b05', 'description' => 'Tian Shan', 'correct_answer' => false],
                    ['id' => '6252eafa-1d6b-583b-ab92-faf928c81ce8', 'description' => 'Cáucasu', 'correct_answer' => false]
                ]],
        ['id' => '4ff5eea2-b76a-50df-9ae6-854d3ba4cea4', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual promontório sul-africano ficou historicamente associado à rota marítima para o oceano Índico?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => '5ec1261b-f737-550f-a62a-a36c1474437b', 'description' => 'Cabo Agulhas', 'correct_answer' => false],
                    ['id' => '06879714-2162-58a4-901a-e4b251244e5c', 'description' => 'Cabo Yorc', 'correct_answer' => false],
                    ['id' => '676f736c-6b3a-5f79-ba29-703f1de4bb5c', 'description' => 'Cabo Horn', 'correct_answer' => false],
                    ['id' => 'c666c6ff-582d-539d-adc5-599f62700aad', 'description' => 'Cabo da Boa Esperança', 'correct_answer' => true],
                    ['id' => 'ec82dec0-8ab4-591f-a040-e963bab34597', 'description' => 'Cabo Finisterra', 'correct_answer' => false]
                ]],
        ['id' => '4bf4110e-fea9-5a5b-8f19-d904e884f5df', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual ponto geográfico é reconhecido como o extremo meridional da África?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => '3ad5f582-ea9e-59bf-9fce-fb2630668c9f', 'description' => 'Cabo da Boa Esperança', 'correct_answer' => false],
                    ['id' => '09b2cade-127f-53c7-9738-9c9fbe4ef6e8', 'description' => 'Cabo York', 'correct_answer' => false],
                    ['id' => '38cd5d14-beb1-5b82-826e-bc09aedaaa66', 'description' => 'Cabo Agulhas', 'correct_answer' => true],
                    ['id' => 'a8a57b9e-97c5-56ae-ae02-f4e8021b193d', 'description' => 'Cabo Finisterre', 'correct_answer' => false],
                    ['id' => 'b90f6c50-0758-5285-80da-fb42ac708c0b', 'description' => 'Cabo Horn', 'correct_answer' => false]
                ]],
        ['id' => 'b52aa129-fbd5-5b41-aba2-45c8cb5f1b96', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual promontório no extremo sul da América do Sul é conhecido pela navegação difícil entre os oceanos Atlântico e Pacífico?', 'difficulty' => 3, 'weight' => 450, 'alternatives' => [
                    ['id' => '02390249-e6d3-52cd-ba2d-7a88e4656410', 'description' => 'Cabo Agulhas', 'correct_answer' => false],
                    ['id' => '98639ec5-e2d3-50ff-81db-bd63affb736d', 'description' => 'Cabo York', 'correct_answer' => false],
                    ['id' => '27a25784-48bc-5190-a257-bcc80360ad2f', 'description' => 'Cabo Horn', 'correct_answer' => true],
                    ['id' => '410e9ee7-3895-52b0-b6b9-97b0ee1973d8', 'description' => 'Cabo da Boa Esperançe', 'correct_answer' => false],
                    ['id' => 'd73eb233-3bf2-5d58-b919-302d3ecbb187', 'description' => 'Cabo Finisterra', 'correct_answer' => false]
                ]],
        ['id' => 'dbfe4873-7b54-582f-9a63-0fc5e2d2b831', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cabo da Galícia, na Espanha, tem nome associado à ideia de \'fim da terra\'?', 'difficulty' => 3, 'weight' => 417, 'alternatives' => [
                    ['id' => '9c351895-b8fa-53e4-9830-8d2a3a0af739', 'description' => 'Cabo Agulhas', 'correct_answer' => false],
                    ['id' => 'c13b7aee-35b1-58e0-a189-1613d2d30709', 'description' => 'Cabo Finisterra', 'correct_answer' => true],
                    ['id' => '28ddd4eb-9e9b-5915-92e5-c410ec06cfee', 'description' => 'Cabo Horm', 'correct_answer' => false],
                    ['id' => 'da9db8b6-313a-5608-b044-737054153b5a', 'description' => 'Cabo da Boa Esperança', 'correct_answer' => false],
                    ['id' => 'd8742f54-431f-5180-bf79-963d799e525a', 'description' => 'Cabo York', 'correct_answer' => false]
                ]],
        ['id' => 'a3a31273-2ceb-5d37-967f-340120d6569b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual península e cabo no extremo norte de Queensland representam o ponto mais setentrional da Austrália continental?', 'difficulty' => 3, 'weight' => 435, 'alternatives' => [
                    ['id' => '8b1d21e9-e22d-5eee-8a39-549ee6878df1', 'description' => 'Cabo da Boa Esperança', 'correct_answer' => false],
                    ['id' => 'dfbb5bd1-8155-511a-8033-4d7666544b2a', 'description' => 'Cabo York', 'correct_answer' => true],
                    ['id' => '41ed4ad4-62da-5f4f-a614-5b9551b0eb79', 'description' => 'Cabo Agulhaz', 'correct_answer' => false],
                    ['id' => '6c479266-90e8-5cd4-bb28-d01e41a1e351', 'description' => 'Cabo Finisterra', 'correct_answer' => false],
                    ['id' => 'f691f2c7-9faf-5275-a823-c1a0bba04302', 'description' => 'Cabo Horn', 'correct_answer' => false]
                ]],
        ['id' => 'e865c94d-b806-5769-9793-eeb422c1f402', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual limite biogeográfico passa entre Bali e Lombok e separa faunas asiáticas e australásias?', 'difficulty' => 3, 'weight' => 510, 'alternatives' => [
                    ['id' => '6f95ecff-b9d0-5b42-a672-93bdb656d127', 'description' => 'Linha de Webel', 'correct_answer' => false],
                    ['id' => '4fc1924d-6e37-58ee-ab25-262e99a5f57d', 'description' => 'Linha de Kármán', 'correct_answer' => false],
                    ['id' => 'f8a0a64d-53ad-5708-a753-b508f87a6399', 'description' => 'Linha de Wallace', 'correct_answer' => true],
                    ['id' => 'aa5b1c07-ed9b-5e8d-b566-d6f440e8156d', 'description' => 'Linha de Huxley', 'correct_answer' => false],
                    ['id' => '1f12ac73-55cf-5cb8-b73f-6797f0f2d5cf', 'description' => 'Linha de Lydekker', 'correct_answer' => false]
                ]],
        ['id' => '823cc61b-e1cc-54f3-a6dc-a1b600716e28', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual linha biogeográfica proposta para a região da Indonésia representa uma zona de equilíbrio entre elementos faunísticos asiáticos e australianos?', 'difficulty' => 3, 'weight' => 542, 'alternatives' => [
                    ['id' => 'af261d28-b1f2-5e31-b623-6c295b7fc50e', 'description' => 'Linha de Kármán', 'correct_answer' => false],
                    ['id' => '240f11da-ac05-5723-acd7-cd7b797f469f', 'description' => 'Linha de Huxley', 'correct_answer' => false],
                    ['id' => '7bdd1ce4-f638-5b5e-8778-1f3b375fbe57', 'description' => 'Linha de Wallace', 'correct_answer' => false],
                    ['id' => '3ee3ffb8-8cc4-568b-90ee-2d89baef551b', 'description' => 'Linha de Lydekkel', 'correct_answer' => false],
                    ['id' => '1a05b4c8-3531-50e4-a5f5-497933202307', 'description' => 'Linha de Weber', 'correct_answer' => true]
                ]],
        ['id' => '789d095e-1e50-5b29-93e6-f38f092cc7e3', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual limite biogeográfico acompanha aproximadamente a borda da plataforma continental australiana na região da Wallacea?', 'difficulty' => 3, 'weight' => 550, 'alternatives' => [
                    ['id' => 'e559a7e1-ddb9-5671-a7c1-85bb0892b50e', 'description' => 'Linha de Huxley', 'correct_answer' => false],
                    ['id' => '615c8cdb-528a-5a08-81ef-9dba8754544b', 'description' => 'Linha de Kármán', 'correct_answer' => false],
                    ['id' => '64949c37-60bb-587d-b873-0ac869feee76', 'description' => 'Linha de Lydekker', 'correct_answer' => true],
                    ['id' => '4d13c00c-9a81-5a7b-8537-9e73b2bed176', 'description' => 'Linha de Wallaca', 'correct_answer' => false],
                    ['id' => 'f89c57cf-76e2-541a-89c7-51abbb8005e3', 'description' => 'Linha de Weber', 'correct_answer' => false]
                ]],
        ['id' => '2c6f217f-d90a-5398-b8ff-4699be796d58', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual limite convencional é frequentemente usado para definir a fronteira entre a atmosfera e o espaço exterior?', 'difficulty' => 3, 'weight' => 518, 'alternatives' => [
                    ['id' => 'd350ab63-4824-594a-acbc-63054ea357fd', 'description' => 'Linha de Weber', 'correct_answer' => false],
                    ['id' => '331531de-2227-5f73-a8b5-5a8ad66bebc5', 'description' => 'Linha de Lydekker', 'correct_answer' => false],
                    ['id' => '105ae844-588c-5cd2-aa13-b3591649b10f', 'description' => 'Linha de Wallace', 'correct_answer' => false],
                    ['id' => '3e67c4e2-f014-5133-8426-fdddc0334f89', 'description' => 'Linha de Kármán', 'correct_answer' => true],
                    ['id' => '3d7cbf28-bec7-59c7-bf6a-93515643cb49', 'description' => 'Linha de Huxlei', 'correct_answer' => false]
                ]],
        ['id' => '6cf404ba-1197-5393-886b-81465736ff74', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual limite biogeográfico histórico foi proposto para separar regiões faunísticas no arquipélago malaio?', 'difficulty' => 3, 'weight' => 550, 'alternatives' => [
                    ['id' => '45a3cc98-fff2-5557-bc46-59a92f6d7767', 'description' => 'Linha de Wallace', 'correct_answer' => false],
                    ['id' => '9844884a-8a27-5fa0-be55-539d57a632ed', 'description' => 'Linha de Lydekker', 'correct_answer' => false],
                    ['id' => 'dc34df92-c588-5125-b212-9ba9b4cb4190', 'description' => 'Linha de Kármám', 'correct_answer' => false],
                    ['id' => '5e494187-7c29-5f88-901a-891afa9570de', 'description' => 'Linha de Huxley', 'correct_answer' => true],
                    ['id' => '360897bb-e4a1-534c-aaa9-cf121f7d39cd', 'description' => 'Linha de Weber', 'correct_answer' => false]
                ]],
        ['id' => '29ecf05d-2992-54dd-9628-bbb5e6537d17', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande bacia hidrográfica africana abriga a segunda maior floresta tropical do mundo?', 'difficulty' => 3, 'weight' => 580, 'alternatives' => [
                    ['id' => 'b8d366a1-ed0b-56ec-a847-e33c9b5360b7', 'description' => 'Bacia do Zambeze', 'correct_answer' => false],
                    ['id' => '1abaf847-7ff8-5070-825b-53ca2910d1d6', 'description' => 'Bacia do Mekonj', 'correct_answer' => false],
                    ['id' => '43b33d6d-67ad-52b7-a76f-e79d86bf8180', 'description' => 'Bacia do Orinoco', 'correct_answer' => false],
                    ['id' => '8d03ea08-c25b-5d35-9505-c647494c4e45', 'description' => 'Bacia do Paraná', 'correct_answer' => false],
                    ['id' => '8df7c985-ee6f-511f-86d8-cd58bc3f3953', 'description' => 'Bacia do Congo', 'correct_answer' => true]
                ]],
        ['id' => 'a93035ae-8515-5e77-9c15-8782bd164aa6', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual bacia hidrográfica sul-americana inclui rios como Paraná, Paraguai e Iguaçu?', 'difficulty' => 3, 'weight' => 535, 'alternatives' => [
                    ['id' => '5283b108-5c54-59c5-ac26-da62cb34c933', 'description' => 'Bacia do Paraná', 'correct_answer' => true],
                    ['id' => 'b3505046-ff27-5356-a9f9-dec50b291f0e', 'description' => 'Bacia do Mekong', 'correct_answer' => false],
                    ['id' => '8bac4eaa-1024-5a4a-a57c-4d6bd27b6f89', 'description' => 'Bacia do Congo', 'correct_answer' => false],
                    ['id' => 'ff0e472a-d89a-5267-8ad2-e0d664e98277', 'description' => 'Bacia do Zambeza', 'correct_answer' => false],
                    ['id' => 'eef82e3b-370e-55aa-88ad-93eeb9c25f6b', 'description' => 'Bacia do Orinoco', 'correct_answer' => false]
                ]],
        ['id' => 'f3d5c6c2-e57e-5b17-bfb9-a54c61b75663', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual bacia hidrográfica abrange principalmente Venezuela e Colômbia e possui extensas planícies chamadas llanos?', 'difficulty' => 3, 'weight' => 416, 'alternatives' => [
                    ['id' => 'c75a50c6-eb27-579f-b986-31bf21719f59', 'description' => 'Bacia do Mekong', 'correct_answer' => false],
                    ['id' => '03a1aa36-b75d-5396-9fbf-501009f1706e', 'description' => 'Bacia do Orinoco', 'correct_answer' => true],
                    ['id' => '2edcb25c-b903-52fa-b3c6-07f47b89bfb8', 'description' => 'Bacia do Congu', 'correct_answer' => false],
                    ['id' => 'eceba568-8128-537d-ac02-d14875d4b784', 'description' => 'Bacia do Zambeze', 'correct_answer' => false],
                    ['id' => 'ee2c946e-4b56-51aa-80e8-e3ca49c39348', 'description' => 'Bacia do Paraná', 'correct_answer' => false]
                ]],
        ['id' => 'efc6f6e8-8888-57d3-8cdd-050f40e40af5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual bacia hidrográfica africana inclui as Cataratas Vitória?', 'difficulty' => 3, 'weight' => 405, 'alternatives' => [
                    ['id' => 'b6ca352e-9d89-5fe7-9c85-491c6cc92aaa', 'description' => 'Bacia do Orinocu', 'correct_answer' => false],
                    ['id' => 'a5d3c805-a020-5dd1-b74f-82d65ca3d79f', 'description' => 'Bacia do Mekong', 'correct_answer' => false],
                    ['id' => 'f34baf0a-51cd-5a84-9394-683d604dcd09', 'description' => 'Bacia do Zambeze', 'correct_answer' => true],
                    ['id' => '28dae3ae-0a3c-5fd5-b8ab-25858ab155cc', 'description' => 'Bacia do Congo', 'correct_answer' => false],
                    ['id' => '7a822e7c-cac4-5f0a-b4ed-937db167a4ea', 'description' => 'Bacia do Paraná', 'correct_answer' => false]
                ]],
        ['id' => '6c92324a-d987-561f-aa69-3d5fc91389a2', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual bacia hidrográfica do sudeste asiático sustenta extensas áreas agrícolas e pesqueiras no Camboja e Vietnã?', 'difficulty' => 3, 'weight' => 569, 'alternatives' => [
                    ['id' => 'e731b867-5e65-5b4b-9cc6-6a5c4abe30ac', 'description' => 'Bacia do Zambeze', 'correct_answer' => false],
                    ['id' => '8ecba180-4373-5650-a7ad-765504ed12eb', 'description' => 'Bacia do Paramá', 'correct_answer' => false],
                    ['id' => 'e82ec587-19cd-583f-8f46-abd1e4e90611', 'description' => 'Bacia do Orinoco', 'correct_answer' => false],
                    ['id' => '6c8fbbab-b788-5317-a768-16183d7366b8', 'description' => 'Bacia do Mekong', 'correct_answer' => true],
                    ['id' => '0ae0bf9d-0817-59a0-beee-35d41164605b', 'description' => 'Bacia do Congo', 'correct_answer' => false]
                ]],
        ['id' => '80cd7ac7-677d-5c7b-9849-5fc6bd54e456', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cume, devido ao abaulamento equatorial da Terra, fica mais distante do centro do planeta?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => 'b8f01a19-c891-5ef9-bba4-09561761b100', 'description' => 'Cume do Everest', 'correct_answer' => false],
                    ['id' => 'bd7eae34-fd5c-5edc-a9d7-3acc22dde692', 'description' => 'Cume do Chimborazo', 'correct_answer' => true],
                    ['id' => '7634ccfd-ab1f-5378-a80b-5848b6caafd3', 'description' => 'Cume do Denali', 'correct_answer' => false],
                    ['id' => '8aa49f72-0966-5ab4-bd86-f35eb10523e1', 'description' => 'Cume do Mauna Kea', 'correct_answer' => false],
                    ['id' => 'ae0f1557-112e-5d76-8aca-db64023629de', 'description' => 'Cume do Aconcágue', 'correct_answer' => false]
                ]],
        ['id' => 'ef7a06d9-0021-582a-98ba-d45d7606ae76', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cume é o ponto mais alto da Terra em altitude acima do nível médio do mar?', 'difficulty' => 4, 'weight' => 683, 'alternatives' => [
                    ['id' => 'aa43ec0e-a30e-5855-bc47-eb54247eb08d', 'description' => 'Cume do Mauna Kee', 'correct_answer' => false],
                    ['id' => '4ebb2d23-6215-5dfd-a01d-a93a31bdeb03', 'description' => 'Cume do Everest', 'correct_answer' => true],
                    ['id' => 'b8fefd07-1011-59f1-9108-f63063ce89a5', 'description' => 'Cume do Chimborazo', 'correct_answer' => false],
                    ['id' => '846d571e-4465-57c4-ae0d-7b0b88d2725c', 'description' => 'Cume do Aconcágua', 'correct_answer' => false],
                    ['id' => '5c6011a4-828f-5eb7-ab76-92470ef9cbb6', 'description' => 'Cume do Denali', 'correct_answer' => false]
                ]],
        ['id' => '271a72e3-61ac-5f08-88c8-fef47d45dd81', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cume vulcânico havaiano supera o Everest em altura quando medido desde sua base submarina?', 'difficulty' => 4, 'weight' => 768, 'alternatives' => [
                    ['id' => '6d1dddcf-044d-5a9e-9416-34d30746c059', 'description' => 'Cume do Aconcágua', 'correct_answer' => false],
                    ['id' => '51187b9d-31fd-50f9-b40d-ad9b37d949ca', 'description' => 'Cume do Denale', 'correct_answer' => false],
                    ['id' => 'd64d2504-79c7-531a-b79e-96d051a18443', 'description' => 'Cume do Mauna Kea', 'correct_answer' => true],
                    ['id' => '123b7117-731f-5eac-bf98-2bb77478f7b5', 'description' => 'Cume do Everest', 'correct_answer' => false],
                    ['id' => 'eb8cf6f9-8356-5d70-8ac7-4fcbb1b6c078', 'description' => 'Cume do Chimborazo', 'correct_answer' => false]
                ]],
        ['id' => '839ef02f-5fef-5868-b9ed-bdb05b1b5ed9', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cume é o ponto mais alto fora da Ásia?', 'difficulty' => 4, 'weight' => 753, 'alternatives' => [
                    ['id' => '3772582f-9bc4-503b-bc52-b6a151bc3d52', 'description' => 'Cume do Everest', 'correct_answer' => false],
                    ['id' => '57fa41a5-7918-5868-9659-7bd026e18be2', 'description' => 'Cume do Chimborazu', 'correct_answer' => false],
                    ['id' => 'd6945dff-eb2c-5feb-9fce-eefaf7a4654f', 'description' => 'Cume do Mauna Kea', 'correct_answer' => false],
                    ['id' => 'e4ff8ed8-32c5-5c3f-a1e2-21e9376a5df9', 'description' => 'Cume do Denali', 'correct_answer' => false],
                    ['id' => '3c5d2821-f79c-5da7-8289-c7fbf779f5cb', 'description' => 'Cume do Aconcágua', 'correct_answer' => true]
                ]],
        ['id' => '5b35f592-c133-5966-9d77-9fd2e6d3a9dc', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cume possui a maior proeminência topográfica da América do Norte?', 'difficulty' => 4, 'weight' => 762, 'alternatives' => [
                    ['id' => '3e4a168f-7950-5143-95c8-646f7c58171c', 'description' => 'Cume do Aconcágua', 'correct_answer' => false],
                    ['id' => '38f370aa-531f-56cf-9afc-bc7e1c1a1339', 'description' => 'Cume do Denali', 'correct_answer' => true],
                    ['id' => '3b38f121-42a8-5d84-ab4b-1ca894e9210c', 'description' => 'Cume do Everesd', 'correct_answer' => false],
                    ['id' => '9e5f7bbd-6290-5ada-bc0a-c1ccb61eabcc', 'description' => 'Cume do Chimborazo', 'correct_answer' => false],
                    ['id' => '1c6ad14b-6086-5e05-9182-2fb232d1cce5', 'description' => 'Cume do Mauna Kea', 'correct_answer' => false]
                ]],
        ['id' => '95c827e3-f6ad-5553-8d6d-4eb42800429a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Como é classificada uma bacia hidrográfica cujas águas não chegam ao oceano, acumulando-se em lagos ou evaporando?', 'difficulty' => 4, 'weight' => 741, 'alternatives' => [
                    ['id' => 'd0e493c0-d4c0-5c79-80fc-b7b69c8f2b24', 'description' => 'Bacia endorreica', 'correct_answer' => true],
                    ['id' => '3a52bf1d-a967-5171-a19e-bc4f1109d9dc', 'description' => 'Bacia arreica', 'correct_answer' => false],
                    ['id' => '4825ba0c-6057-5035-bc33-a643a0276f11', 'description' => 'Bacia interfluvial', 'correct_answer' => false],
                    ['id' => '10bc4777-ebe6-5160-af71-2d1d2a71e09f', 'description' => 'Bacia criptorréica', 'correct_answer' => false],
                    ['id' => '03277f0c-f46a-5b95-b71b-6dbc190d52c9', 'description' => 'Bacia exorreice', 'correct_answer' => false]
                ]],
        ['id' => 'eaa5be32-1bb9-5430-ac83-e9be5fbe7200', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Como é classificada uma bacia hidrográfica cujas águas escoam até o oceano?', 'difficulty' => 4, 'weight' => 635, 'alternatives' => [
                    ['id' => '9ea8e2ee-b887-5acd-b497-137904dcb504', 'description' => 'Bacia endorreice', 'correct_answer' => false],
                    ['id' => 'cab47364-f05d-5350-ab84-a4f29b301d9e', 'description' => 'Bacia arreica', 'correct_answer' => false],
                    ['id' => '690267d6-7abe-508f-a5a8-f927aeeddf5a', 'description' => 'Bacia exorreica', 'correct_answer' => true],
                    ['id' => '07c434c3-c853-5c13-af72-bf1c38862cbf', 'description' => 'Bacia interfluvial', 'correct_answer' => false],
                    ['id' => '263208f4-fd96-5386-86de-a396a5c5caa8', 'description' => 'Bacia criptorréica', 'correct_answer' => false]
                ]],
        ['id' => '7b80327d-d822-5d90-a415-7b17f22fcc08', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Como é classificada uma região na qual não há drenagem superficial organizada até um rio ou lago permanente?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '20e9bd66-64cc-552b-8cf5-35836169ce2f', 'description' => 'Bacia exorreica', 'correct_answer' => false],
                    ['id' => '1feb41fa-0faf-5e51-af26-4e0f75d8b705', 'description' => 'Bacia endorreica', 'correct_answer' => false],
                    ['id' => '7ca766b8-244b-55f8-a181-f75be07457f2', 'description' => 'Bacia arreica', 'correct_answer' => true],
                    ['id' => '07bdc496-6012-52bf-84f0-306ceafbcf88', 'description' => 'Bacia criptorréice', 'correct_answer' => false],
                    ['id' => 'd5af36ad-cba4-5e29-9c93-932c78bc8c7d', 'description' => 'Bacia interfluvial', 'correct_answer' => false]
                ]],
        ['id' => 'ce00a647-c484-50d0-86c6-c06d3ea9141e', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Como é chamada uma região de drenagem em que o escoamento ocorre principalmente por sistemas subterrâneos?', 'difficulty' => 4, 'weight' => 672, 'alternatives' => [
                    ['id' => '94ece5b9-e372-5d4e-b86b-a786f7992cad', 'description' => 'Bacia exorreica', 'correct_answer' => false],
                    ['id' => 'a72961b7-a37e-5bba-a979-1e27eba3dbac', 'description' => 'Bacia endorreica', 'correct_answer' => false],
                    ['id' => '4259bda6-97c0-57a9-bdf8-f9ab73c4920a', 'description' => 'Bacia criptorréica', 'correct_answer' => true],
                    ['id' => 'dae36a80-104d-5c2e-844e-e5b13ee05da7', 'description' => 'Bacia interfluviar', 'correct_answer' => false],
                    ['id' => '927f666a-d77e-55bb-ac8f-da9bfacaaf96', 'description' => 'Bacia arreica', 'correct_answer' => false]
                ]],
        ['id' => '9de904ac-3307-53fb-8098-f32ca65d2909', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Como é chamada a área de terreno situada entre duas bacias hidrográficas adjacentes?', 'difficulty' => 4, 'weight' => 739, 'alternatives' => [
                    ['id' => 'f6fbf725-c345-5ae1-b22a-a31e94fdb0ec', 'description' => 'Bacia arreice', 'correct_answer' => false],
                    ['id' => '95521e57-fdef-56b2-afc8-5a61184e255d', 'description' => 'Bacia endorreica', 'correct_answer' => false],
                    ['id' => 'd2e89870-a9b1-56cb-8699-7265f46d4440', 'description' => 'Bacia criptorréica', 'correct_answer' => false],
                    ['id' => 'f1c8fe81-f489-5395-9a4c-ec755bab3057', 'description' => 'Bacia exorreica', 'correct_answer' => false],
                    ['id' => '7e8dbb7f-edc6-5f2d-97c5-864874c0f5b3', 'description' => 'Bacia interfluvial', 'correct_answer' => true]
                ]],
        ['id' => 'c6a0a874-11b9-5d43-a3d5-aa32a7c7c34d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual sistema de riftes continentais se estende pelo leste africano e está associado à separação gradual de placas?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => 'c33e0628-6783-5123-a30c-1e6ee6069f1d', 'description' => 'Rift do Baikar', 'correct_answer' => false],
                    ['id' => 'ef24676b-3a13-5e5d-a421-a4581f221241', 'description' => 'Rift de Oslo', 'correct_answer' => false],
                    ['id' => '4802d249-edb9-5e86-9a58-ab57707f1a73', 'description' => 'Rift do Rio Grande', 'correct_answer' => false],
                    ['id' => 'ef366d03-749e-5e5a-9119-28eda9c21515', 'description' => 'Rift da África Oriental', 'correct_answer' => true],
                    ['id' => 'f3d3eba4-93e8-52a9-b695-583bd978e647', 'description' => 'Rift do Reno', 'correct_answer' => false]
                ]],
        ['id' => '019ab69e-a9f5-52a6-8d13-3366e7797472', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estrutura tectônica abriga o lago mais profundo do mundo e está associada à extensão continental na Sibéria?', 'difficulty' => 4, 'weight' => 717, 'alternatives' => [
                    ['id' => '6253953b-2c3f-5062-8372-8b1013f42ccb', 'description' => 'Rift da África Orientar', 'correct_answer' => false],
                    ['id' => 'b10bbd2b-7100-5f10-9d0c-ae8faed11ffc', 'description' => 'Rift do Rio Grande', 'correct_answer' => false],
                    ['id' => '39bf40d5-b929-550a-8bcb-347ca640a333', 'description' => 'Rift de Oslo', 'correct_answer' => false],
                    ['id' => '1e81334b-2831-5ddb-8277-8224ca2295ed', 'description' => 'Rift do Reno', 'correct_answer' => false],
                    ['id' => '40db6adc-26be-515b-a274-df672824f697', 'description' => 'Rift do Baikal', 'correct_answer' => true]
                ]],
        ['id' => '7a81ff71-1545-5c64-a5a2-5b19cac77be7', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual vale tectônico europeu se estende entre as regiões da Alsácia e do sudoeste da Alemanha?', 'difficulty' => 4, 'weight' => 640, 'alternatives' => [
                    ['id' => '20e2a214-d73f-5c6c-a8ca-30d69d9de78e', 'description' => 'Rift da África Oriental', 'correct_answer' => false],
                    ['id' => '35cd8193-95b3-5b51-9b47-2c5a61a9f3a3', 'description' => 'Rift do Rio Granda', 'correct_answer' => false],
                    ['id' => '7a0f6b41-3fa1-54d1-b8de-6ed82fae38d4', 'description' => 'Rift do Reno', 'correct_answer' => true],
                    ['id' => 'a05f48d2-4c38-5337-8c86-7b4fa2f9b673', 'description' => 'Rift do Baikal', 'correct_answer' => false],
                    ['id' => 'e5ba1e00-a16f-5136-8d70-ab30333d5565', 'description' => 'Rift de Oslo', 'correct_answer' => false]
                ]],
        ['id' => '24a74f88-b985-554c-9a0f-238b1ccc625d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual sistema de rifte continental se estende pelo sudoeste dos Estados Unidos, incluindo partes do Novo México e Colorado?', 'difficulty' => 4, 'weight' => 612, 'alternatives' => [
                    ['id' => '73f4dada-ddc9-530f-b55a-d171ebda52dd', 'description' => 'Rift da África Oriental', 'correct_answer' => false],
                    ['id' => '8e529508-5b56-59d3-bb5d-9f4ad7f3781c', 'description' => 'Rift do Reno', 'correct_answer' => false],
                    ['id' => '29ebacca-46e2-5fc1-b9d4-d51118eddf84', 'description' => 'Rift de Oslu', 'correct_answer' => false],
                    ['id' => '9de7e313-fe01-5ba6-b4ea-abe4a47de77d', 'description' => 'Rift do Baikal', 'correct_answer' => false],
                    ['id' => 'ddef6b90-14fe-527d-a6d8-145807a9f2bf', 'description' => 'Rift do Rio Grande', 'correct_answer' => true]
                ]],
        ['id' => '0953b0d1-5b3d-5a62-b3f5-45369377cec5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estrutura tectônica antiga da Noruega está associada a atividade magmática do Permiano?', 'difficulty' => 4, 'weight' => 762, 'alternatives' => [
                    ['id' => 'bd74f238-7324-58a6-b914-c3b3c8a03b68', 'description' => 'Rift da África Oriental', 'correct_answer' => false],
                    ['id' => '5e60cdf6-8ea6-5000-94e3-399198ca0f7c', 'description' => 'Rift do Rio Grande', 'correct_answer' => false],
                    ['id' => 'f7c86eda-c86b-5475-9734-0522e42eb74d', 'description' => 'Rift do Renu', 'correct_answer' => false],
                    ['id' => 'eb86c7e0-2f9a-56b2-bf08-b57e5dd1b817', 'description' => 'Rift de Oslo', 'correct_answer' => true],
                    ['id' => '0ea17df0-af0b-52f9-b481-db590f955de5', 'description' => 'Rift do Baikal', 'correct_answer' => false]
                ]],
        ['id' => 'c064b634-722f-5653-b57c-6aaf0bc348d2', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cinturão tectônico concentra grande parte dos vulcões ativos e terremotos ao redor do oceano Pacífico?', 'difficulty' => 4, 'weight' => 655, 'alternatives' => [
                    ['id' => '6406329c-9329-54b3-8f5e-5a55737b10c1', 'description' => 'Cinturão Alpino-Himalaio', 'correct_answer' => false],
                    ['id' => '288e72a9-aa12-5b37-8e36-feb46f296ba3', 'description' => 'Zona de Fratura de Mendocinu', 'correct_answer' => false],
                    ['id' => '303e1e37-483e-5e07-a8c2-cc3596259b73', 'description' => 'Círculo de Fogo do Pacífico', 'correct_answer' => true],
                    ['id' => '74c7f82b-edfd-51b9-a747-82bc111051f6', 'description' => 'Dorsal Mesoatlântica', 'correct_answer' => false],
                    ['id' => '34607dfb-d1ab-55ab-9ca0-ef0c0285e8ad', 'description' => 'Cinturão de Fogo do Mediterrâneo', 'correct_answer' => false]
                ]],
        ['id' => '02ceecc6-0ba8-569a-935b-93b68ec419d7', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual faixa tectônica se estende do Mediterrâneo pelo Oriente Médio até o Himalaia e resulta de colisões continentais?', 'difficulty' => 4, 'weight' => 623, 'alternatives' => [
                    ['id' => 'ffb12db0-9a0c-530e-a79f-1467d1683863', 'description' => 'Dorsal Mesoatlântice', 'correct_answer' => false],
                    ['id' => '29706b43-ff03-58ec-98d6-167ec8042d9f', 'description' => 'Cinturão de Fogo do Mediterrâneo', 'correct_answer' => false],
                    ['id' => 'cf01ba12-1f30-5bdd-99e6-101059d40032', 'description' => 'Cinturão Alpino-Himalaio', 'correct_answer' => true],
                    ['id' => 'f337fa4e-7ff8-5ddd-bb6a-3d9ad7d35f52', 'description' => 'Zona de Fratura de Mendocino', 'correct_answer' => false],
                    ['id' => 'acf1222f-74f2-5acb-ad11-26b070c23037', 'description' => 'Círculo de Fogo do Pacífico', 'correct_answer' => false]
                ]],
        ['id' => 'b530490d-df52-5a1b-b610-ce087d676050', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual cadeia montanhosa submarina marca um limite divergente entre placas no oceano Atlântico?', 'difficulty' => 4, 'weight' => 625, 'alternatives' => [
                    ['id' => '7bb38de2-67d7-52df-91c8-25aaa4d2e989', 'description' => 'Dorsal Mesoatlântica', 'correct_answer' => true],
                    ['id' => 'c869a1ab-f16d-5579-a533-c9b0e3bc79e5', 'description' => 'Cinturão Alpino-Himalaio', 'correct_answer' => false],
                    ['id' => '8c1b9319-d604-5550-9c55-9351d4a575ae', 'description' => 'Cinturão de Fogo do Mediterrâneo', 'correct_answer' => false],
                    ['id' => 'f4ea4301-49d6-5bb5-85f2-44880b2b67b2', 'description' => 'Zona de Fratura de Mendocino', 'correct_answer' => false],
                    ['id' => '29f2db0a-b832-5754-853c-13d886e70cca', 'description' => 'Círculo de Fogo do Pacíficu', 'correct_answer' => false]
                ]],
        ['id' => '1f1164b7-0bf4-5d12-b085-04d5fe8097ce', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual importante estrutura tectônica está localizada ao largo da costa norte da Califórnia e marca uma transição entre limites de placas?', 'difficulty' => 4, 'weight' => 652, 'alternatives' => [
                    ['id' => '6d447949-4f82-5a78-a547-3a59c8bd983a', 'description' => 'Dorsal Mesoatlântica', 'correct_answer' => false],
                    ['id' => '95878198-8524-5c1a-b266-9f0a3ec6a51e', 'description' => 'Cinturão Alpino-Himalaio', 'correct_answer' => false],
                    ['id' => '9e6d0d0f-54af-56c4-80d9-44c43ba8363d', 'description' => 'Círculo de Fogo do Pacífico', 'correct_answer' => false],
                    ['id' => '2e65f8f4-0fbf-5faf-8e29-5cb143d38bc1', 'description' => 'Zona de Fratura de Mendocino', 'correct_answer' => true],
                    ['id' => 'cf65a751-4b3d-5d33-ad89-509054fd07c4', 'description' => 'Cinturão de Fogo do Mediterrâneu', 'correct_answer' => false]
                ]],
        ['id' => 'd494f92d-c037-5c7e-85f5-b9f4685ab958', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual expressão é usada para descrever a faixa de atividade sísmica e vulcânica associada à convergência de placas na região mediterrânea?', 'difficulty' => 4, 'weight' => 708, 'alternatives' => [
                    ['id' => '862dfa56-e707-574e-9330-3913aa4c3783', 'description' => 'Dorsal Mesoatlântica', 'correct_answer' => false],
                    ['id' => '335295c7-baa6-576a-9531-a49248f54849', 'description' => 'Cinturão de Fogo do Mediterrâneo', 'correct_answer' => true],
                    ['id' => '2991e59b-bbef-5889-a452-6ef83ef35c37', 'description' => 'Círculo de Fogo do Pacífico', 'correct_answer' => false],
                    ['id' => '9dc13ae9-e6b0-5f40-b7b8-dfe6fde26133', 'description' => 'Zona de Fratura de Mendocino', 'correct_answer' => false],
                    ['id' => '082a2750-3509-59be-b169-a2ee2b94edc6', 'description' => 'Cinturão Alpino-Himalaiu', 'correct_answer' => false]
                ]],
        ['id' => 'c670203c-f72d-5996-8d04-972f464ff17a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual relevo é caracterizado por dissolução de rochas solúveis, cavernas, dolinas e rios subterrâneos?', 'difficulty' => 4, 'weight' => 664, 'alternatives' => [
                    ['id' => '1248565f-6e0c-55b9-ab19-41f2eeedcffe', 'description' => 'Karst', 'correct_answer' => true],
                    ['id' => '669fcedc-f4e9-57fb-9ef8-905c60de91f9', 'description' => 'Pedimento', 'correct_answer' => false],
                    ['id' => '24c04bf5-47d1-5074-8e3f-3f980ec3cd5b', 'description' => 'Cuesta', 'correct_answer' => false],
                    ['id' => '1a9bcf54-e35e-5cd1-aadd-f1b7fbf71501', 'description' => 'Hogbacc', 'correct_answer' => false],
                    ['id' => '0d8cbe2e-9b48-5561-a40e-b34182bda73e', 'description' => 'Inselberg', 'correct_answer' => false]
                ]],
        ['id' => '36c05789-5b06-537c-8298-7eb468eb9c26', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual forma de relevo apresenta uma encosta íngreme e outra suavemente inclinada, devido à erosão diferencial de camadas inclinadas?', 'difficulty' => 4, 'weight' => 642, 'alternatives' => [
                    ['id' => '321c45b6-f271-563e-98a1-d5f6696621f7', 'description' => 'Cuesta', 'correct_answer' => true],
                    ['id' => '28bae0a3-412e-5df5-a51e-72e1a0a78b1f', 'description' => 'Pedimentu', 'correct_answer' => false],
                    ['id' => 'eab71405-3056-5038-b972-d8a54562b395', 'description' => 'Hogback', 'correct_answer' => false],
                    ['id' => '060ae2bb-1856-54f6-9daa-84fa4af47dee', 'description' => 'Inselberg', 'correct_answer' => false],
                    ['id' => '10216be3-5503-50c0-ab57-ba2e4fe5b622', 'description' => 'Karst', 'correct_answer' => false]
                ]],
        ['id' => 'b56ffe7d-7bf8-57b9-9df2-3a9c756b9842', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual forma de relevo apresenta cristas estreitas e íngremes associadas a camadas rochosas resistentes fortemente inclinadas?', 'difficulty' => 4, 'weight' => 730, 'alternatives' => [
                    ['id' => '3871868d-a957-5204-b39a-4e551be6fe71', 'description' => 'Inselberg', 'correct_answer' => false],
                    ['id' => 'a0614da3-7f9f-5a95-879f-80915ae90a19', 'description' => 'Karsd', 'correct_answer' => false],
                    ['id' => 'c081bde1-cb8d-5c9c-a32b-d673a8b0e8d3', 'description' => 'Pedimento', 'correct_answer' => false],
                    ['id' => '2e5e67a6-87aa-5933-ae58-619f56cf2ed4', 'description' => 'Hogback', 'correct_answer' => true],
                    ['id' => 'c91bb37b-2049-5ff7-927e-d62575f3edd1', 'description' => 'Cuesta', 'correct_answer' => false]
                ]],
        ['id' => '42ce97be-30d1-5211-8a71-f4340a62a53c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual superfície rochosa suavemente inclinada se forma ao pé de montanhas em regiões áridas ou semiáridas?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => '37ba037a-9d13-5d80-9d43-cfb58ae533ff', 'description' => 'Karst', 'correct_answer' => false],
                    ['id' => 'e02b5057-44d6-57c6-8a4a-47365ceb50a2', 'description' => 'Cuesta', 'correct_answer' => false],
                    ['id' => '6ac2ea41-19f8-5db5-81ac-721d677d7571', 'description' => 'Hogback', 'correct_answer' => false],
                    ['id' => 'a662e124-00ce-5ad1-9f4b-a87a8357c38d', 'description' => 'Pedimento', 'correct_answer' => true],
                    ['id' => '10434b4a-ab01-5f1e-b055-4a2f4d31f3d8', 'description' => 'Inselberj', 'correct_answer' => false]
                ]],
        ['id' => 'e07b7299-bcbb-5d0d-baea-a4be3b3fba26', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual elevação rochosa isolada se destaca abruptamente em uma paisagem relativamente plana?', 'difficulty' => 4, 'weight' => 661, 'alternatives' => [
                    ['id' => '01c4d4f0-7ff9-57c1-bf0a-ad6e6f752964', 'description' => 'Hogback', 'correct_answer' => false],
                    ['id' => '84805a7c-7a58-55bb-af0b-b04bdd01cba9', 'description' => 'Cueste', 'correct_answer' => false],
                    ['id' => '487646e9-f72e-5fa8-86ec-97b1730a28af', 'description' => 'Pedimento', 'correct_answer' => false],
                    ['id' => 'cde82807-dd66-5322-bd84-4f9464f9fb06', 'description' => 'Karst', 'correct_answer' => false],
                    ['id' => '68aaf916-2a7f-517f-9fdf-5b3ce700e121', 'description' => 'Inselberg', 'correct_answer' => true]
                ]],
        ['id' => 'd3ece7f6-8204-5fdc-af65-956f7c551390', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual corrente oceânica fria percorre a costa oeste da América do Sul e favorece a produtividade pesqueira?', 'difficulty' => 4, 'weight' => 654, 'alternatives' => [
                    ['id' => 'b4b69f28-4f4e-53f6-9f6a-faf8a745431a', 'description' => 'Corrente de Humboldt', 'correct_answer' => true],
                    ['id' => '84950a61-ec77-51b7-ba53-323aa9dc7a82', 'description' => 'Corrente de Oyashio', 'correct_answer' => false],
                    ['id' => 'e5d253eb-ee1b-5f05-9db1-bf30be13a95a', 'description' => 'Corrente das Canárias', 'correct_answer' => false],
                    ['id' => 'ef09c637-f600-59da-b26d-6794494f4942', 'description' => 'Corrente de Benguela', 'correct_answer' => false],
                    ['id' => 'c8ad9191-3d91-5c3e-82a7-4f58c017e85e', 'description' => 'Corrente da Califórnie', 'correct_answer' => false]
                ]],
        ['id' => '9ad3ab80-bca4-5909-91af-93a4d31da56f', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual corrente fria de ressurgência percorre a costa sudoeste da África?', 'difficulty' => 4, 'weight' => 746, 'alternatives' => [
                    ['id' => 'cb54e22f-4754-5532-95fa-5e2169ddd6f3', 'description' => 'Corrente das Canárias', 'correct_answer' => false],
                    ['id' => 'b74d67ab-b6dd-5cc9-97c1-2aab7f7f6a41', 'description' => 'Corrente de Oyashio', 'correct_answer' => false],
                    ['id' => '70fb173d-2f48-500c-9a53-a8077af2d16a', 'description' => 'Corrente de Benguela', 'correct_answer' => true],
                    ['id' => '1db2baf3-f19c-5de0-9f49-e59e9db3c1f1', 'description' => 'Corrente da Califórnia', 'correct_answer' => false],
                    ['id' => '50a9d621-6898-521d-9cc1-aae652687a1a', 'description' => 'Corrente de Humboldd', 'correct_answer' => false]
                ]],
        ['id' => '815bb006-3334-5cfe-b141-df8ba0ff76f0', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual corrente oceânica fria flui para o sul ao longo da costa noroeste da África?', 'difficulty' => 4, 'weight' => 724, 'alternatives' => [
                    ['id' => 'bb6de936-2055-56b6-ba3a-c28cceff6408', 'description' => 'Corrente da Califórnia', 'correct_answer' => false],
                    ['id' => 'd977a34b-af66-58a3-97a0-d1ab1e8b9552', 'description' => 'Corrente de Oyashiu', 'correct_answer' => false],
                    ['id' => '926e24c3-909e-5d19-8c41-e34a0d1c6b10', 'description' => 'Corrente de Humboldt', 'correct_answer' => false],
                    ['id' => '2986ec27-4c8a-5e2d-b268-8c2be341cec1', 'description' => 'Corrente de Benguela', 'correct_answer' => false],
                    ['id' => 'd3a1188d-0325-5600-bc2c-1cc07dc87920', 'description' => 'Corrente das Canárias', 'correct_answer' => true]
                ]],
        ['id' => 'e317024a-dfd2-5dd9-81c9-f19690395b53', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual corrente fria flui para o sul ao longo da costa oeste da América do Norte?', 'difficulty' => 4, 'weight' => 695, 'alternatives' => [
                    ['id' => 'a0b0d761-e7e2-5143-92ae-8c20a0fbbeb3', 'description' => 'Corrente de Oyashio', 'correct_answer' => false],
                    ['id' => 'c5dd05f0-8f4e-56ff-a64d-e83232db6697', 'description' => 'Corrente de Benguele', 'correct_answer' => false],
                    ['id' => '71fc2522-e12f-5302-9234-5ddcbbeecc80', 'description' => 'Corrente da Califórnia', 'correct_answer' => true],
                    ['id' => '9a4e3523-028c-5220-b10a-4e10308f89de', 'description' => 'Corrente das Canárias', 'correct_answer' => false],
                    ['id' => 'b7f4cc4e-0ccf-555e-970d-aee4491ca2ee', 'description' => 'Corrente de Humboldt', 'correct_answer' => false]
                ]],
        ['id' => 'eb991f61-5325-5533-8c87-d350831f6f2b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual corrente fria do Pacífico Norte flui em direção ao sul a partir de áreas subárticas próximas ao Japão?', 'difficulty' => 4, 'weight' => 797, 'alternatives' => [
                    ['id' => 'e1aea828-1fde-506f-8ccb-c77f4ee3fe08', 'description' => 'Corrente das Canáriaz', 'correct_answer' => false],
                    ['id' => '8279b1e4-e851-5b87-9ffd-502ee32cc8c5', 'description' => 'Corrente de Benguela', 'correct_answer' => false],
                    ['id' => '8d68d302-2ab1-5c1d-bc4c-5327d62fa450', 'description' => 'Corrente da Califórnia', 'correct_answer' => false],
                    ['id' => 'b0943e0e-86b0-58bc-92c9-914392e91f5a', 'description' => 'Corrente de Oyashio', 'correct_answer' => true],
                    ['id' => '504617bf-1ea5-5297-a1bf-b67b2c4a8a5c', 'description' => 'Corrente de Humboldt', 'correct_answer' => false]
                ]],
        ['id' => '5557ad05-e4cc-5810-a24b-557bfbc4323a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual linha convencional no oceano Pacífico marca a mudança de data civil entre regiões vizinhas?', 'difficulty' => 4, 'weight' => 622, 'alternatives' => [
                    ['id' => '7c97a81b-4a59-5419-bba9-d2c51fddc3d1', 'description' => 'Meridiano de 180 graus', 'correct_answer' => false],
                    ['id' => '29681b2d-12f1-55df-b6f5-a8e62347ea93', 'description' => 'Meridiano de Greenwich', 'correct_answer' => false],
                    ['id' => '1ea13154-8639-5f56-a622-6aa3d14f4e6f', 'description' => 'Meridiano de Pariz', 'correct_answer' => false],
                    ['id' => '3803d07f-9648-56a5-b4f5-60881a6b3e46', 'description' => 'Linha de mudança de data', 'correct_answer' => true],
                    ['id' => '675f7e03-29e4-5971-b370-700269403ccb', 'description' => 'Antimeridiano', 'correct_answer' => false]
                ]],
        ['id' => 'db559e6d-3611-5f1d-89e2-07c5c445f4ec', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual meridiano foi adotado como referência de longitude zero?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => 'e965c32a-e523-5d91-9db5-5fab6e5ea230', 'description' => 'Meridiano de 180 grauz', 'correct_answer' => false],
                    ['id' => '12294efd-78c8-582c-8ff9-c89702b7ef50', 'description' => 'Meridiano de Paris', 'correct_answer' => false],
                    ['id' => 'd83caba6-7760-5110-abea-6e400e819f5d', 'description' => 'Meridiano de Greenwich', 'correct_answer' => true],
                    ['id' => '3021a3ed-c6e3-570a-9052-d5ffc81b8d3b', 'description' => 'Linha de mudança de data', 'correct_answer' => false],
                    ['id' => 'c0b4af2a-c020-5f2c-a8d2-91b857579938', 'description' => 'Antimeridiano', 'correct_answer' => false]
                ]],
        ['id' => '25b90867-4ed4-5948-b551-b24a37a9e794', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Como é chamado o meridiano oposto ao de Greenwich, aproximadamente associado à mudança de data?', 'difficulty' => 4, 'weight' => 714, 'alternatives' => [
                    ['id' => '2f45814b-a1b5-5b85-a301-b09f66f2d3c5', 'description' => 'Meridiano de 180 graus', 'correct_answer' => false],
                    ['id' => '89603b52-4045-572b-9ce4-2e3d5e123f66', 'description' => 'Linha de mudança de data', 'correct_answer' => false],
                    ['id' => 'acb9a7a8-ca67-50d6-a33b-0c0a8bda4c65', 'description' => 'Antimeridiano', 'correct_answer' => true],
                    ['id' => '2c01e803-6801-5609-87a7-4d7e9570b619', 'description' => 'Meridiano de Greenwikh', 'correct_answer' => false],
                    ['id' => 'f684ddbc-97ca-5d5b-9597-d284ca287941', 'description' => 'Meridiano de Paris', 'correct_answer' => false]
                ]],
        ['id' => '6d347100-3d58-515e-bf73-e9de7dbcb030', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual meridiano fica aproximadamente oposto ao meridiano de Greenwich e atravessa o oceano Pacífico?', 'difficulty' => 4, 'weight' => 787, 'alternatives' => [
                    ['id' => '1f42a358-aa04-5b79-96e5-6371db3b265b', 'description' => 'Linha de mudança de data', 'correct_answer' => false],
                    ['id' => '53933027-119b-547c-88f2-fbd71636bd7f', 'description' => 'Meridiano de Greenwich', 'correct_answer' => false],
                    ['id' => 'd43ea0a9-67c0-5686-b199-5ca3f60108de', 'description' => 'Antimeridianu', 'correct_answer' => false],
                    ['id' => '35643699-8ccf-501a-9d7d-9f78d0c33c76', 'description' => 'Meridiano de 180 graus', 'correct_answer' => true],
                    ['id' => 'cf0ff78e-90e7-5023-81f0-390b95afedf0', 'description' => 'Meridiano de Paris', 'correct_answer' => false]
                ]],
        ['id' => '9c56b1cd-ddb7-516d-a747-47f47ddce5be', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual meridiano histórico foi usado como referência cartográfica francesa antes da adoção internacional de Greenwich?', 'difficulty' => 4, 'weight' => 794, 'alternatives' => [
                    ['id' => 'fd52654b-dc32-53f3-9e4f-ca696e48eed5', 'description' => 'Meridiano de 180 graus', 'correct_answer' => false],
                    ['id' => '7904db8f-06be-5d08-89d5-cff42fd4106e', 'description' => 'Meridiano de Paris', 'correct_answer' => true],
                    ['id' => '4cb18cd6-76b8-5f57-87ef-17b693dcc433', 'description' => 'Meridiano de Greenwich', 'correct_answer' => false],
                    ['id' => 'e21dc202-efe1-57d3-ab26-0680f1da56bc', 'description' => 'Linha de mudança de date', 'correct_answer' => false],
                    ['id' => 'a3be426f-f1dc-51bf-bb56-fb43caba6d53', 'description' => 'Antimeridiano', 'correct_answer' => false]
                ]],
        ['id' => '5c6dc090-4e00-5ec6-830e-12d03aba4cf9', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual projeção cilíndrica conforme mantém ângulos locais, mas amplia muito as áreas em altas latitudes?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => 'e9303011-de6d-5a0e-96f2-c885dcc9d986', 'description' => 'Projeção de Robinson', 'correct_answer' => false],
                    ['id' => '851d01a8-d469-57a3-8dd0-2b2858a398f6', 'description' => 'Projeção de Mercator', 'correct_answer' => true],
                    ['id' => 'eaf48599-79ad-5bd9-acff-1eea61a5fb7d', 'description' => 'Projeção de Winkel Tripel', 'correct_answer' => false],
                    ['id' => '2bbe44d7-133f-520a-ad32-30a3513e69f2', 'description' => 'Projeção de Mollweida', 'correct_answer' => false],
                    ['id' => 'ec90e502-6754-53fc-888f-9bfed14c72c2', 'description' => 'Projeção de Peters', 'correct_answer' => false]
                ]],
        ['id' => '6a56cbcc-ff6c-5fcb-a6ab-58d87a56233e', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual projeção equivalente ficou conhecida por preservar áreas relativas dos continentes, apesar de distorcer formas?', 'difficulty' => 4, 'weight' => 780, 'alternatives' => [
                    ['id' => 'a060d2a3-6a1b-5883-b3ac-857d4efe1612', 'description' => 'Projeção de Winkel Triper', 'correct_answer' => false],
                    ['id' => '5babc4a7-96e8-5553-aa0f-a50412f50157', 'description' => 'Projeção de Mercator', 'correct_answer' => false],
                    ['id' => 'e4c01f03-b971-58a4-a0b1-f51d19b9782d', 'description' => 'Projeção de Robinson', 'correct_answer' => false],
                    ['id' => '13b19a76-e8b2-539c-938e-c363b554fa87', 'description' => 'Projeção de Mollweide', 'correct_answer' => false],
                    ['id' => '9b0479c4-6092-55c3-9702-e0d19ec3e007', 'description' => 'Projeção de Peters', 'correct_answer' => true]
                ]],
        ['id' => '8b0fac35-329a-59d0-be44-6a3841105d31', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual projeção pseudocilíndrica foi desenvolvida para oferecer um compromisso visual entre diferentes tipos de distorção?', 'difficulty' => 4, 'weight' => 763, 'alternatives' => [
                    ['id' => '174cc7d4-0c93-5fc5-8ce0-fffe31757ccf', 'description' => 'Projeção de Robinson', 'correct_answer' => true],
                    ['id' => 'a4502947-a114-5fe7-9820-4a3e903c7189', 'description' => 'Projeção de Mollweide', 'correct_answer' => false],
                    ['id' => '78171a61-77f1-5a96-bc71-e9c77034f7b8', 'description' => 'Projeção de Peters', 'correct_answer' => false],
                    ['id' => '2c5ea623-3ce4-53f5-ac64-dd983f222173', 'description' => 'Projeção de Winkel Tripel', 'correct_answer' => false],
                    ['id' => '26ad383a-d9dd-5ee2-86a4-2d5a78e115f6', 'description' => 'Projeção de Mercatol', 'correct_answer' => false]
                ]],
        ['id' => '495f7d05-826b-5d35-b3df-f80fd76228fa', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual projeção pseudocilíndrica equivalente apresenta meridianos curvos e contorno externo elíptico?', 'difficulty' => 4, 'weight' => 768, 'alternatives' => [
                    ['id' => 'e2eda236-d1bb-5c21-9e03-d0b0254c966c', 'description' => 'Projeção de Robinsom', 'correct_answer' => false],
                    ['id' => '2a3bb192-aae1-5321-a6bb-16e240340374', 'description' => 'Projeção de Mollweide', 'correct_answer' => true],
                    ['id' => '28cea146-961d-5973-a41b-b1a651fc2c44', 'description' => 'Projeção de Mercator', 'correct_answer' => false],
                    ['id' => '0799b906-d4e8-51d7-8bea-177906d3de78', 'description' => 'Projeção de Peters', 'correct_answer' => false],
                    ['id' => '07ae6aeb-19e5-53d8-88c1-7f358bdd0855', 'description' => 'Projeção de Winkel Tripel', 'correct_answer' => false]
                ]],
        ['id' => '599a6a1a-3b6f-5864-9d1d-1151acfb17c3', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual projeção cartográfica de compromisso foi adotada pela National Geographic Society para mapas-múndi de referência por muitos anos?', 'difficulty' => 4, 'weight' => 768, 'alternatives' => [
                    ['id' => '4d731d29-27bc-5ce5-b9a3-0a6912f3ef4a', 'description' => 'Projeção de Mercator', 'correct_answer' => false],
                    ['id' => 'd98a54cd-f243-5054-8dc5-a1a53005ab16', 'description' => 'Projeção de Peterz', 'correct_answer' => false],
                    ['id' => 'c9d3d5f1-fd8d-55a7-bcd2-8570fed7e09b', 'description' => 'Projeção de Winkel Tripel', 'correct_answer' => true],
                    ['id' => '903d423b-6f06-5572-b61b-6086eecb2f95', 'description' => 'Projeção de Robinson', 'correct_answer' => false],
                    ['id' => 'b5fc6fe2-6cf7-59f0-9be8-8f9563180e91', 'description' => 'Projeção de Mollweide', 'correct_answer' => false]
                ]],
        ['id' => '4775ca4e-2b40-5c66-96ae-b3d6f866e9ca', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual conceito geológico associado a James Hutton descreve uma superfície que separa estratos de idades muito diferentes após erosão e interrupção da deposição?', 'difficulty' => 5, 'weight' => 919, 'alternatives' => [
                    ['id' => '21841e7c-da68-538e-a15b-26111f288688', 'description' => 'Discordância de Hutton', 'correct_answer' => true],
                    ['id' => '95e99198-be48-5f40-aed7-186c9145466a', 'description' => 'Discordância de paraconformidade', 'correct_answer' => false],
                    ['id' => '13f8fbfc-2c62-51e1-89bb-662ee8adb7d9', 'description' => 'Discordância de Siccar Poind', 'correct_answer' => false],
                    ['id' => 'a6dd943a-58bf-51d2-80ce-d4775986c2ee', 'description' => 'Discordância de não conformidade', 'correct_answer' => false],
                    ['id' => '7c3783d8-2af2-5d35-9cee-c4aba639c2d2', 'description' => 'Discordância de angular', 'correct_answer' => false]
                ]],
        ['id' => 'ad40e1be-a8e2-5a1e-a7a0-77729a1173bc', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual localidade escocesa tornou-se célebre por expor estratos quase verticais mais antigos sob camadas sedimentares mais jovens e horizontais?', 'difficulty' => 5, 'weight' => 967, 'alternatives' => [
                    ['id' => '9417cb16-a232-5b9e-949e-f1d9f11b595a', 'description' => 'Discordância de angular', 'correct_answer' => false],
                    ['id' => '19bc058e-9a96-5b5d-9610-7ef01dc1a031', 'description' => 'Discordância de Siccar Point', 'correct_answer' => true],
                    ['id' => '8163391b-5686-5e14-81b2-2f1cbc53652e', 'description' => 'Discordância de paraconformidada', 'correct_answer' => false],
                    ['id' => 'c9f81b72-0f8d-5112-8e59-975ac9d35249', 'description' => 'Discordância de Hutton', 'correct_answer' => false],
                    ['id' => '709fa994-5641-57e8-8e8c-668eead74d58', 'description' => 'Discordância de não conformidade', 'correct_answer' => false]
                ]],
        ['id' => '5b59f676-87fb-5b70-b956-830886fbcfe5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual tipo de contato estratigráfico separa camadas antigas inclinadas ou dobradas de camadas mais jovens com orientação diferente?', 'difficulty' => 5, 'weight' => 964, 'alternatives' => [
                    ['id' => '7d6de92c-34cc-529c-9ff6-0e2e872ab181', 'description' => 'Discordância de Huttom', 'correct_answer' => false],
                    ['id' => '9e87d0fe-3ba0-5b78-8dbe-4ffdbc8f7167', 'description' => 'Discordância de paraconformidade', 'correct_answer' => false],
                    ['id' => 'a9a095fa-c15c-5bcd-a67e-8131f0e44014', 'description' => 'Discordância de angular', 'correct_answer' => true],
                    ['id' => '546116d7-baac-5fc2-a8d6-91416d1d43d4', 'description' => 'Discordância de Siccar Point', 'correct_answer' => false],
                    ['id' => 'c00526a0-aa04-5ffd-8ca3-e4cdd981fd7e', 'description' => 'Discordância de não conformidade', 'correct_answer' => false]
                ]],
        ['id' => 'e418758d-fb28-530e-9406-40eef07a5101', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual contato geológico ocorre quando rochas sedimentares repousam sobre rochas ígneas ou metamórficas erodidas?', 'difficulty' => 5, 'weight' => 877, 'alternatives' => [
                    ['id' => '5897f6e8-6dc3-5c35-b136-a382dda68bc0', 'description' => 'Discordância de Siccar Point', 'correct_answer' => false],
                    ['id' => '491d8d05-02b9-5738-9527-6830bdb42f79', 'description' => 'Discordância de não conformidade', 'correct_answer' => true],
                    ['id' => '0385db45-a607-59b1-92e6-415496cdc2d7', 'description' => 'Discordância de paraconformidade', 'correct_answer' => false],
                    ['id' => '7a8e63e5-bada-5aca-b159-d8978b83c702', 'description' => 'Discordância de Hutton', 'correct_answer' => false],
                    ['id' => '7715cbb2-d51d-55af-beac-2a2792da4f4f', 'description' => 'Discordância de angulal', 'correct_answer' => false]
                ]],
        ['id' => '025b5919-c108-5316-b5ad-bf3af9601d30', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual tipo de discordância apresenta estratos aproximadamente paralelos separados por um intervalo de tempo sem evidência erosiva marcante?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '094e4dbe-59a9-5de7-9153-30f8925b36ba', 'description' => 'Discordância de Siccar Point', 'correct_answer' => false],
                    ['id' => 'ee0afc7e-5834-5ea4-9f44-229d63721533', 'description' => 'Discordância de Hutton', 'correct_answer' => false],
                    ['id' => 'e07f6439-f3c8-5cce-8dcb-985a0869bf1a', 'description' => 'Discordância de angular', 'correct_answer' => false],
                    ['id' => '27e717d8-b52f-5aca-8705-73971d734b41', 'description' => 'Discordância de paraconformidade', 'correct_answer' => true],
                    ['id' => '17c5e39d-7305-51ee-ae62-853ae1fdc38b', 'description' => 'Discordância de não conformidada', 'correct_answer' => false]
                ]],
        ['id' => '9afe811a-da96-52a2-b868-005829b1a7b5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual unidade tectônica dos Alpes suíços é um exemplo clássico de dobra recumbente e transporte de grandes massas rochosas?', 'difficulty' => 5, 'weight' => 964, 'alternatives' => [
                    ['id' => 'dff1b930-a1e0-5102-897c-e13e3522faba', 'description' => 'Nappe de Dent Blanche', 'correct_answer' => false],
                    ['id' => '6f0cdd99-2bae-51c8-b4a0-9954db741f5b', 'description' => 'Nappe de Glarus', 'correct_answer' => false],
                    ['id' => '47c095b0-d333-560a-b98b-2044ceef9f5b', 'description' => 'Nappe de Morcles', 'correct_answer' => true],
                    ['id' => '68c99989-87f0-59b3-a66e-7e217e49ae5d', 'description' => 'Nappe de Drusberj', 'correct_answer' => false],
                    ['id' => '57d15b17-2162-5e65-806a-42a20921ca56', 'description' => 'Nappe de Doldenhorn', 'correct_answer' => false]
                ]],
        ['id' => '1002a24b-109c-51a7-ae98-397f4c87f61e', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual estrutura tectônica alpina é conhecida por uma superfície de cavalgamento que coloca rochas mais antigas sobre rochas mais jovens?', 'difficulty' => 5, 'weight' => 854, 'alternatives' => [
                    ['id' => '9973c2fa-f549-5205-b7db-4144c4d085d2', 'description' => 'Nappe de Drusberg', 'correct_answer' => false],
                    ['id' => '530accb5-e270-5025-ab72-0fc1ee1d4535', 'description' => 'Nappe de Morclez', 'correct_answer' => false],
                    ['id' => 'd56097ce-5e8f-529c-a76b-730f5366b23c', 'description' => 'Nappe de Glarus', 'correct_answer' => true],
                    ['id' => '5b7a53ae-25f3-503a-9826-3dea0c8cfaa2', 'description' => 'Nappe de Doldenhorn', 'correct_answer' => false],
                    ['id' => '35de83da-c298-524b-a678-7a27d1d5f69c', 'description' => 'Nappe de Dent Blanche', 'correct_answer' => false]
                ]],
        ['id' => 'eccb199a-9d4b-5ca0-88ab-d474a17bf9f8', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual unidade tectônica dos Alpes ocidentais suíços integra o conjunto de nappes helvéticas?', 'difficulty' => 5, 'weight' => 861, 'alternatives' => [
                    ['id' => 'd4b83c02-5404-596f-ab6c-cfc8f3eaf31d', 'description' => 'Nappe de Drusberg', 'correct_answer' => false],
                    ['id' => '7c136b71-d4a4-5410-b7f0-9e4fdc87ec74', 'description' => 'Nappe de Doldenhorn', 'correct_answer' => true],
                    ['id' => '316b6116-3938-5a95-8f93-25a232788077', 'description' => 'Nappe de Glaruz', 'correct_answer' => false],
                    ['id' => '3408d120-f33b-5da5-8afd-e6cd83a7b9d2', 'description' => 'Nappe de Dent Blanche', 'correct_answer' => false],
                    ['id' => '766ee320-ef9c-5125-98c4-fd9c959c1e37', 'description' => 'Nappe de Morcles', 'correct_answer' => false]
                ]],
        ['id' => 'f457f8d5-6e9b-5ad9-9cd5-6cdfd8afc9ce', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual unidade tectônica alpina é composta em grande parte por rochas cristalinas e está associada às nappes austroalpinas?', 'difficulty' => 5, 'weight' => 806, 'alternatives' => [
                    ['id' => '3f61e779-cd1a-5698-b4cd-e872cb5cc61c', 'description' => 'Nappe de Morcles', 'correct_answer' => false],
                    ['id' => '06cfac5f-a330-5ed9-bd1b-dc4a992916d6', 'description' => 'Nappe de Doldenhorm', 'correct_answer' => false],
                    ['id' => '7dadb40b-bfb2-52b3-ac1b-f4b513e67dca', 'description' => 'Nappe de Drusberg', 'correct_answer' => false],
                    ['id' => 'bb528829-530c-5cfe-96e9-d295ce40eb06', 'description' => 'Nappe de Glarus', 'correct_answer' => false],
                    ['id' => 'bebe3a18-4b28-5ac0-a510-4b8aec9195e3', 'description' => 'Nappe de Dent Blanche', 'correct_answer' => true]
                ]],
        ['id' => '0cfd8e72-fe3d-5614-a459-43a39387364d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual unidade tectônica helvética dos Alpes suíços está associada a sucessões sedimentares mesozoicas?', 'difficulty' => 5, 'weight' => 971, 'alternatives' => [
                    ['id' => '07716e4b-496c-5c19-aed5-d2ee63c4ed79', 'description' => 'Nappe de Drusberg', 'correct_answer' => true],
                    ['id' => '8fbf5c85-c0cd-592b-bab9-c13070a5ae36', 'description' => 'Nappe de Dent Blancha', 'correct_answer' => false],
                    ['id' => '5daf72f6-dcfc-581c-a68d-00b06b16ae64', 'description' => 'Nappe de Doldenhorn', 'correct_answer' => false],
                    ['id' => 'b9165a21-cd82-5186-9fd9-56961599a6a1', 'description' => 'Nappe de Morcles', 'correct_answer' => false],
                    ['id' => 'f2907164-0d84-54bd-8f9b-f754c19135bc', 'description' => 'Nappe de Glarus', 'correct_answer' => false]
                ]],
        ['id' => '557cd9af-9a34-56d1-b756-e8f55c29908d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago subglacial antártico é um dos maiores conhecidos e permanece isolado sob uma espessa camada de gelo?', 'difficulty' => 5, 'weight' => 949, 'alternatives' => [
                    ['id' => '17f8ad30-c3f1-568a-b018-1e8929bc5cbd', 'description' => 'Lago Mercer', 'correct_answer' => false],
                    ['id' => '6f01db72-b053-5c7a-824b-2dd2097390dc', 'description' => 'Lago Untersee', 'correct_answer' => false],
                    ['id' => '006382a3-f16b-5015-b237-5a53b31fe5b6', 'description' => 'Lago Vostok', 'correct_answer' => true],
                    ['id' => '9ea452f6-dc16-5af8-b9d6-8ed16ded4955', 'description' => 'Lago Ellsworth', 'correct_answer' => false],
                    ['id' => '9e71088a-571a-5cc8-a475-090cfd6b4174', 'description' => 'Lago Whillanz', 'correct_answer' => false]
                ]],
        ['id' => 'dd9049c7-0584-5068-ba77-8b3951c1114e', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago subglacial da Antártida Ocidental foi alvo de planos de perfuração científica para investigar ambientes isolados?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => 'a1eba95c-1015-537e-ac4f-53032b93925b', 'description' => 'Lago Untersee', 'correct_answer' => false],
                    ['id' => 'a09ab8a8-7f4f-5fd7-9bb1-4f033a7b0090', 'description' => 'Lago Ellsworth', 'correct_answer' => true],
                    ['id' => '3d1bd71f-02ad-52b1-a75e-ad94d4143fe6', 'description' => 'Lago Vostoc', 'correct_answer' => false],
                    ['id' => '7ba489f8-7b12-58c3-b4f3-dc2a95e3ee19', 'description' => 'Lago Whillans', 'correct_answer' => false],
                    ['id' => 'c128fee2-90c3-5470-b04e-3e80cf97cf28', 'description' => 'Lago Mercer', 'correct_answer' => false]
                ]],
        ['id' => '82be99ff-a5a0-570e-8ad4-058f6b69a242', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago subglacial antártico foi acessado por perfuração limpa e revelou atividade microbiana sob o gelo?', 'difficulty' => 5, 'weight' => 820, 'alternatives' => [
                    ['id' => '7e36478d-4867-582f-a5bf-1fec8521c727', 'description' => 'Lago Vostok', 'correct_answer' => false],
                    ['id' => '8179b95a-fa8d-5af6-830f-468b62a6d6f6', 'description' => 'Lago Whillans', 'correct_answer' => true],
                    ['id' => 'b0bd0308-688d-55aa-b12f-200bd5d92bf2', 'description' => 'Lago Mercer', 'correct_answer' => false],
                    ['id' => '41c6b71e-b7de-5a60-9b11-8d1bd3e0d70b', 'description' => 'Lago Untersee', 'correct_answer' => false],
                    ['id' => 'c32bda6c-7204-5bc6-b7ff-2e9f505e0700', 'description' => 'Lago Ellswordh', 'correct_answer' => false]
                ]],
        ['id' => '65a718a8-b085-51ce-a712-5dec45362e68', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago subglacial antártico foi estudado por meio do projeto SALSA para investigar ecossistemas sob a camada de gelo?', 'difficulty' => 5, 'weight' => 858, 'alternatives' => [
                    ['id' => 'de79d492-4e60-57cc-8966-65fc297cc432', 'description' => 'Lago Mercer', 'correct_answer' => true],
                    ['id' => '5014a5b4-73bc-55b4-97b2-eedee53fcdc6', 'description' => 'Lago Untersea', 'correct_answer' => false],
                    ['id' => 'f8f736a6-65d5-5bee-a46b-abebcff393c0', 'description' => 'Lago Ellsworth', 'correct_answer' => false],
                    ['id' => 'b25611f2-91b5-5efa-8b1e-69cd7b587e8e', 'description' => 'Lago Whillans', 'correct_answer' => false],
                    ['id' => '927c7093-1646-5a49-8542-81569957511f', 'description' => 'Lago Vostok', 'correct_answer' => false]
                ]],
        ['id' => 'fd5e5842-192a-588d-b9c2-595b21587223', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual lago antártico não subglacial é conhecido por águas extremamente alcalinas e estruturas microbianas?', 'difficulty' => 5, 'weight' => 901, 'alternatives' => [
                    ['id' => '022aa96b-f42d-599a-89b6-94a35703813c', 'description' => 'Lago Whillans', 'correct_answer' => false],
                    ['id' => 'd4782bde-5aaa-5a52-bc41-14be0ab4c647', 'description' => 'Lago Mercel', 'correct_answer' => false],
                    ['id' => '3e9ef161-cb7f-50e4-9679-236e7b6394ee', 'description' => 'Lago Ellsworth', 'correct_answer' => false],
                    ['id' => 'cefb431b-f78f-5b5d-8b64-1d050e61b1ad', 'description' => 'Lago Vostok', 'correct_answer' => false],
                    ['id' => '52db6702-d58a-5169-a5da-598b167e5f83', 'description' => 'Lago Untersee', 'correct_answer' => true]
                ]],
        ['id' => '717ca499-1ae0-5e1a-91ad-177ca59f6466', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região da Antártida Ocidental é conhecida por não ter sido formalmente reivindicada por nenhum Estado?', 'difficulty' => 5, 'weight' => 944, 'alternatives' => [
                    ['id' => '2ea248d1-b27a-5ff5-84f1-be7ed2c49153', 'description' => 'Terra de Enderby', 'correct_answer' => false],
                    ['id' => 'a9b48238-37c5-570f-bbe2-34810d260534', 'description' => 'Terra de Victorie', 'correct_answer' => false],
                    ['id' => 'c412ed5c-7634-5b99-844a-a282af1ac122', 'description' => 'Terra da Rainha Maud', 'correct_answer' => false],
                    ['id' => '4e383a27-adc7-573c-93d6-c5dee4ae7f22', 'description' => 'Terra de Graham', 'correct_answer' => false],
                    ['id' => 'f75e3019-30ea-5a95-8dde-81ad4a81d71c', 'description' => 'Terra de Marie Byrd', 'correct_answer' => true]
                ]],
        ['id' => '8f701e6f-613c-56a4-aa0b-7a859d867e0c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região da Península Antártica recebeu esse nome em homenagem a um primeiro lorde do Almirantado britânico?', 'difficulty' => 5, 'weight' => 904, 'alternatives' => [
                    ['id' => '5246b2e5-a000-5bf1-98b7-94d5ab3ad7fa', 'description' => 'Terra de Graham', 'correct_answer' => true],
                    ['id' => '6a1e8530-9c4e-59a2-8af0-6bba51143844', 'description' => 'Terra de Enderby', 'correct_answer' => false],
                    ['id' => '57143081-a781-5421-9513-4cf2feebb146', 'description' => 'Terra de Victoria', 'correct_answer' => false],
                    ['id' => '4a5dc69c-f525-5382-bcb2-b3e116703610', 'description' => 'Terra de Marie Byrd', 'correct_answer' => false],
                    ['id' => 'fbe206fd-00a9-52cc-94c6-5cec1a02ee72', 'description' => 'Terra da Rainha Maut', 'correct_answer' => false]
                ]],
        ['id' => '6dd5edce-ec3f-5680-9261-0776cec2fac3', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região da Antártida Oriental inclui áreas exploradas por expedições britânicas no século XIX?', 'difficulty' => 5, 'weight' => 859, 'alternatives' => [
                    ['id' => 'e5795fa4-4ab2-53ae-9080-27a1d80216e5', 'description' => 'Terra de Marie Byrt', 'correct_answer' => false],
                    ['id' => '643da944-7d20-5a1f-b44e-b12d9035f924', 'description' => 'Terra de Victoria', 'correct_answer' => true],
                    ['id' => '4fd39d81-2702-536f-bef2-dfa1fbaa0880', 'description' => 'Terra da Rainha Maud', 'correct_answer' => false],
                    ['id' => 'e786745d-9dc7-5ecb-983c-0ee50dfd80c5', 'description' => 'Terra de Enderby', 'correct_answer' => false],
                    ['id' => 'bffe2bdf-dd7d-54d2-9116-6618afc824ed', 'description' => 'Terra de Graham', 'correct_answer' => false]
                ]],
        ['id' => '9a60d533-d023-5087-a6d4-d1fd45f494dd', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual região costeira da Antártida Oriental foi avistada por uma expedição britânica em 1831?', 'difficulty' => 5, 'weight' => 971, 'alternatives' => [
                    ['id' => 'ed9dc125-c688-513c-ae0e-2e628f5224fb', 'description' => 'Terra de Grahan', 'correct_answer' => false],
                    ['id' => '704ca09f-4c55-5476-b121-1241c5d720c4', 'description' => 'Terra de Victoria', 'correct_answer' => false],
                    ['id' => '33226da2-ba44-5428-a480-9ae8ce915626', 'description' => 'Terra de Marie Byrd', 'correct_answer' => false],
                    ['id' => '089cb339-f1a1-5583-87d8-7978f3a3c701', 'description' => 'Terra da Rainha Maud', 'correct_answer' => false],
                    ['id' => '7a5e65d4-f329-56c8-b7dc-3176bc02d825', 'description' => 'Terra de Enderby', 'correct_answer' => true]
                ]],
        ['id' => 'aca342bf-dda6-544f-9d9e-4c4b8a4c9726', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual extensa região da Antártida Oriental foi reivindicada pela Noruega?', 'difficulty' => 5, 'weight' => 814, 'alternatives' => [
                    ['id' => 'b911bdb0-064f-505d-9bb8-729baf970f6b', 'description' => 'Terra de Victoria', 'correct_answer' => false],
                    ['id' => '2484586d-35b6-5c9b-a2b2-d5a7709d2fad', 'description' => 'Terra de Enderbi', 'correct_answer' => false],
                    ['id' => '6eceb428-d96a-5a9d-9c14-eb1826c55c5b', 'description' => 'Terra de Graham', 'correct_answer' => false],
                    ['id' => 'd9da3905-9f9a-5c69-9a5e-6c932af79905', 'description' => 'Terra de Marie Byrd', 'correct_answer' => false],
                    ['id' => 'b1556479-0f1a-59f3-82fc-db596371827b', 'description' => 'Terra da Rainha Maud', 'correct_answer' => true]
                ]],
        ['id' => '7810d7a4-9ace-51b5-b2e3-a14c2f7b2044', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual fossa oceânica do Pacífico Sul abriga uma das regiões mais profundas conhecidas dos oceanos?', 'difficulty' => 5, 'weight' => 941, 'alternatives' => [
                    ['id' => '1c7fab95-c45a-57b5-ad86-d94461edc7e1', 'description' => 'Fossa das Filipinaz', 'correct_answer' => false],
                    ['id' => '99f35b13-a2f8-5774-b69d-754d9ad7f328', 'description' => 'Fossa de Kermadec', 'correct_answer' => false],
                    ['id' => '8df9fa3a-d8e5-56df-adf5-0884a580b7f3', 'description' => 'Fossa das Marianas', 'correct_answer' => false],
                    ['id' => 'efdcda02-3255-57fc-ad08-664221f20c90', 'description' => 'Fossa de Tonga', 'correct_answer' => true],
                    ['id' => '2dc01a0e-8623-5091-bd29-635ba882a893', 'description' => 'Fossa de Java', 'correct_answer' => false]
                ]],
        ['id' => '899f3222-0f80-5b8a-aef3-e195ef99831c', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual fossa oceânica contém o Challenger Deep, o ponto mais profundo conhecido dos oceanos?', 'difficulty' => 5, 'weight' => 916, 'alternatives' => [
                    ['id' => 'b1c6998e-e277-5a27-9be3-c45509d78de1', 'description' => 'Fossa das Marianas', 'correct_answer' => true],
                    ['id' => '3886ff26-b2af-5615-bdcf-c4a272e49f75', 'description' => 'Fossa de Tonga', 'correct_answer' => false],
                    ['id' => '93aee6e1-0cd1-5d80-962f-152267b2071b', 'description' => 'Fossa de Kermadek', 'correct_answer' => false],
                    ['id' => '787f9792-041c-5e20-b638-74db6b82fdf8', 'description' => 'Fossa de Java', 'correct_answer' => false],
                    ['id' => '4d94cf51-6781-571b-8a8b-b80190f9bda9', 'description' => 'Fossa das Filipinas', 'correct_answer' => false]
                ]],
        ['id' => '75958e33-f537-5614-a71e-4dc2d13260ea', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual fossa oceânica se estende ao nordeste da Nova Zelândia, ao longo de uma zona de subducção?', 'difficulty' => 5, 'weight' => 903, 'alternatives' => [
                    ['id' => '92a0fbd1-e391-5626-9adc-1280326c2de3', 'description' => 'Fossa das Filipinas', 'correct_answer' => false],
                    ['id' => '9642a2f4-b231-52f7-bb3d-19411482246c', 'description' => 'Fossa de Tonga', 'correct_answer' => false],
                    ['id' => 'ccc87dd0-0400-5626-ac97-de8c86f9c44e', 'description' => 'Fossa das Marianas', 'correct_answer' => false],
                    ['id' => '61e21263-59e6-59b5-b57f-21192dd75364', 'description' => 'Fossa de Kermadec', 'correct_answer' => true],
                    ['id' => 'ebb44949-4150-50ea-86bb-4c3e3fabe998', 'description' => 'Fossa de Jave', 'correct_answer' => false]
                ]],
        ['id' => 'b6ae995a-39df-5ce4-aff5-44b484e136b4', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual fossa oceânica se localiza a leste do arquipélago filipino, no Pacífico ocidental?', 'difficulty' => 5, 'weight' => 932, 'alternatives' => [
                    ['id' => '4c79544c-f160-5d29-b620-19c76792d185', 'description' => 'Fossa de Tonge', 'correct_answer' => false],
                    ['id' => 'a2263cfb-fe58-5cfd-8a10-43193f26a82e', 'description' => 'Fossa das Marianas', 'correct_answer' => false],
                    ['id' => 'd342de52-cd9d-56e5-a4af-e23e00634e3f', 'description' => 'Fossa das Filipinas', 'correct_answer' => true],
                    ['id' => '8ed54e4a-7e4a-5553-a5f3-8247c16df0ab', 'description' => 'Fossa de Kermadec', 'correct_answer' => false],
                    ['id' => 'b0dd192a-09bf-5d11-ad2d-c5ea16af66c2', 'description' => 'Fossa de Java', 'correct_answer' => false]
                ]],
        ['id' => 'c7857ec1-dbd5-5985-9c30-9c723217290a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual fossa oceânica, também chamada de fossa de Sunda, se estende ao sul de Sumatra e Java?', 'difficulty' => 5, 'weight' => 806, 'alternatives' => [
                    ['id' => '681c1df6-f2c9-54f7-bdfb-3a8209682dfd', 'description' => 'Fossa das Marianaz', 'correct_answer' => false],
                    ['id' => '3bd210f3-017a-5dc8-bdde-a4efb309af7d', 'description' => 'Fossa das Filipinas', 'correct_answer' => false],
                    ['id' => 'b6cea68a-d16c-5ba3-aa31-8546ad6ca8ca', 'description' => 'Fossa de Java', 'correct_answer' => true],
                    ['id' => '24356b0b-4c27-59e7-82d9-b5b209845c98', 'description' => 'Fossa de Tonga', 'correct_answer' => false],
                    ['id' => '7938de2e-296c-5c3b-863a-c568e793e2e6', 'description' => 'Fossa de Kermadec', 'correct_answer' => false]
                ]],
        ['id' => 'a59c9010-6be9-56e3-a121-1847e5115e24', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual grande bacia endorreica da China abriga o deserto de Taklamakan?', 'difficulty' => 5, 'weight' => 951, 'alternatives' => [
                    ['id' => '43ffaeee-b728-5c2f-b318-cf1503a0ac7a', 'description' => 'Bacia de Sichuan', 'correct_answer' => false],
                    ['id' => 'db7e39ec-6180-5372-bc8f-1ea39078cfbc', 'description' => 'Bacia de Junggal', 'correct_answer' => false],
                    ['id' => '43f14dbe-e127-5545-b327-95ec1e42f40f', 'description' => 'Bacia de Tarim', 'correct_answer' => true],
                    ['id' => '1587a6a4-c069-55b0-b2e1-eaf45f8b0a19', 'description' => 'Bacia de Turpan', 'correct_answer' => false],
                    ['id' => 'e1b82e4e-6d50-5eb3-9bfc-7512b7929d40', 'description' => 'Bacia de Qaidam', 'correct_answer' => false]
                ]],
        ['id' => '65ea9fc8-9b5e-5528-98fe-dc12e4b46c0d', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual bacia sedimentar de grande altitude está localizada no nordeste do planalto tibetano e contém extensos depósitos de sal?', 'difficulty' => 5, 'weight' => 936, 'alternatives' => [
                    ['id' => '93e0add0-bb47-5a43-b5b1-a2d74dbf23d0', 'description' => 'Bacia de Qaidam', 'correct_answer' => true],
                    ['id' => 'ae9ffbdb-3b6c-5a32-9b2b-fdf57073847a', 'description' => 'Bacia de Junggar', 'correct_answer' => false],
                    ['id' => '84bfa6f1-019d-526b-83c1-1e888bba0b9b', 'description' => 'Bacia de Sichuan', 'correct_answer' => false],
                    ['id' => '75d80a52-9a15-5ea7-b0e6-afb8dc1a682b', 'description' => 'Bacia de Turpan', 'correct_answer' => false],
                    ['id' => 'ac457e56-d00b-5574-a3b7-ab7d62ef0764', 'description' => 'Bacia de Tarin', 'correct_answer' => false]
                ]],
        ['id' => 'b42e7ef2-eb7e-5232-b381-e2a33a5252b2', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual bacia da região de Xinjiang fica ao norte das montanhas Tian Shan e ao sul das montanhas Altai?', 'difficulty' => 5, 'weight' => 920, 'alternatives' => [
                    ['id' => 'fdf9258d-f096-5f13-877d-627e57152189', 'description' => 'Bacia de Junggar', 'correct_answer' => true],
                    ['id' => 'f4300c87-41cf-5c08-a673-7ee9758b23a5', 'description' => 'Bacia de Tarim', 'correct_answer' => false],
                    ['id' => 'f39cc595-5ff8-5106-b916-bbf5d58f2b48', 'description' => 'Bacia de Turpan', 'correct_answer' => false],
                    ['id' => 'c6368afd-2c44-5ec3-adaa-aecb2c21938e', 'description' => 'Bacia de Sichuan', 'correct_answer' => false],
                    ['id' => 'f4a196e1-1915-5fee-8e1e-71344a9967d2', 'description' => 'Bacia de Qaidan', 'correct_answer' => false]
                ]],
        ['id' => '7ecb545e-3119-5fa2-a0cf-c09e32b1b24b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual bacia do sudoeste da China é conhecida por sua elevada densidade populacional e terras agrícolas?', 'difficulty' => 5, 'weight' => 841, 'alternatives' => [
                    ['id' => '40ddde39-4fbf-5b93-9961-d345eb13f056', 'description' => 'Bacia de Junggar', 'correct_answer' => false],
                    ['id' => '798d25aa-6305-53f6-a4f2-6d79cd92b538', 'description' => 'Bacia de Sichuan', 'correct_answer' => true],
                    ['id' => 'a376bc7d-4660-5298-92c9-0ad731da5770', 'description' => 'Bacia de Qaidam', 'correct_answer' => false],
                    ['id' => '41659d01-4dbc-56c1-b43b-a1a576c44eb2', 'description' => 'Bacia de Tarim', 'correct_answer' => false],
                    ['id' => '94af1985-9994-5fcf-8b84-8e6e74e2eeeb', 'description' => 'Bacia de Turpam', 'correct_answer' => false]
                ]],
        ['id' => 'e70c37c1-ed79-58b9-991c-271de8518e8f', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual depressão da região de Xinjiang inclui o ponto mais baixo da China?', 'difficulty' => 5, 'weight' => 997, 'alternatives' => [
                    ['id' => 'dbc4dfd8-252f-5c48-ab8a-6293aafdc9c6', 'description' => 'Bacia de Qaidam', 'correct_answer' => false],
                    ['id' => '7fb37cd4-865a-52a6-82a8-d42013f219df', 'description' => 'Bacia de Junggar', 'correct_answer' => false],
                    ['id' => '64ad4ae4-aa75-56ac-a827-48ab1a05c760', 'description' => 'Bacia de Turpan', 'correct_answer' => true],
                    ['id' => 'bf87b337-1337-5165-ba7b-cfedfa318be5', 'description' => 'Bacia de Tarim', 'correct_answer' => false],
                    ['id' => '51ce0526-7f59-5ada-b1bf-c37a3ff5590d', 'description' => 'Bacia de Sichuam', 'correct_answer' => false]
                ]],
        ['id' => 'f73c52c4-3519-5920-bc56-fc34033f17d1', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual extensa região cárstica australiana é conhecida por sua superfície quase sem árvores e por cavernas calcárias?', 'difficulty' => 5, 'weight' => 904, 'alternatives' => [
                    ['id' => 'caec1d1b-4136-5e24-83ee-1b74c5fa13f3', 'description' => 'Planície de Nullarbor', 'correct_answer' => true],
                    ['id' => '5dc1294d-d9ba-5f66-a73e-2614c520890a', 'description' => 'Planície de Dōgo', 'correct_answer' => false],
                    ['id' => 'f00b46cf-5b03-57b1-9070-060d802aae2b', 'description' => 'Planície de Konya', 'correct_answer' => false],
                    ['id' => '98728afc-2a9a-50c9-bd98-af896c9e5619', 'description' => 'Planície de Indo-Gangez', 'correct_answer' => false],
                    ['id' => 'e7470e12-46a0-56d9-9241-baef67934434', 'description' => 'Planície de Canterbury', 'correct_answer' => false]
                ]],
        ['id' => 'a5f946b6-cc36-5df7-b4cd-35d2604753db', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual planície da Ilha Sul da Nova Zelândia se estende a leste dos Alpes do Sul?', 'difficulty' => 5, 'weight' => 932, 'alternatives' => [
                    ['id' => '9901f9f1-5e8f-5ae5-9c43-9a277f951aa9', 'description' => 'Planície de Canterbury', 'correct_answer' => true],
                    ['id' => '6a0e431d-405e-580d-9f73-f32262ec5b12', 'description' => 'Planície de Konya', 'correct_answer' => false],
                    ['id' => '6081a417-4805-5ee8-b0cd-b4a2fb0fb968', 'description' => 'Planície de Dōgo', 'correct_answer' => false],
                    ['id' => '945bfddd-d3d2-5eda-93e7-275de68d9199', 'description' => 'Planície de Indo-Ganges', 'correct_answer' => false],
                    ['id' => '63a64e7a-36d9-50a9-b8ec-8661e7dd9a1f', 'description' => 'Planície de Nullarbol', 'correct_answer' => false]
                ]],
        ['id' => 'e164d5ef-0126-571b-8a3c-caeef13d67d2', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual vasta planície aluvial do sul da Ásia é formada principalmente pelos sistemas dos rios Indo e Ganges-Brahmaputra?', 'difficulty' => 5, 'weight' => 984, 'alternatives' => [
                    ['id' => '9da8cfd7-8a38-5bd9-93ef-4e8faf547026', 'description' => 'Planície de Canterbury', 'correct_answer' => false],
                    ['id' => '69b082e8-73f7-53e9-b990-9a3d3b05a1c3', 'description' => 'Planície de Indo-Ganges', 'correct_answer' => true],
                    ['id' => '647e1dff-e62c-5f68-abc4-936f37999062', 'description' => 'Planície de Konya', 'correct_answer' => false],
                    ['id' => '0015e9da-f68a-5978-8451-21c1ec51bb25', 'description' => 'Planície de Nullarbor', 'correct_answer' => false],
                    ['id' => 'eff37ee1-3d95-5342-9977-44820bb9f8ab', 'description' => 'Planície de Dōgu', 'correct_answer' => false]
                ]],
        ['id' => '193a1c63-56b2-5a72-b6e8-db452b575b4b', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual planície da Anatólia central é uma das principais áreas agrícolas da Turquia?', 'difficulty' => 5, 'weight' => 922, 'alternatives' => [
                    ['id' => '73fff9fc-64a5-50d8-8cfb-ad0ea5598011', 'description' => 'Planície de Konya', 'correct_answer' => true],
                    ['id' => '952908a2-9dc1-54e4-bde8-f5ba88f0dc50', 'description' => 'Planície de Nullarbor', 'correct_answer' => false],
                    ['id' => '9da52252-492c-5a59-b1ce-e865c121ae88', 'description' => 'Planície de Indo-Ganges', 'correct_answer' => false],
                    ['id' => '079eec3f-f9ee-536f-b123-3fc07cc35972', 'description' => 'Planície de Dōgo', 'correct_answer' => false],
                    ['id' => '527d7bcd-ab6a-574a-997e-8f753937a66c', 'description' => 'Planície de Canterburi', 'correct_answer' => false]
                ]],
        ['id' => '1bba0c51-4f44-540f-9eed-0f6f1633741a', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual denominação é usada para uma pequena planície costeira japonesa, e não para uma grande unidade fisiográfica continental?', 'difficulty' => 5, 'weight' => 954, 'alternatives' => [
                    ['id' => 'd69d5f7d-4b30-5101-80c0-35f395205403', 'description' => 'Planície de Dōgo', 'correct_answer' => true],
                    ['id' => '87f3a0b2-bef0-5383-9a6a-e6cd7b401821', 'description' => 'Planície de Indo-Ganges', 'correct_answer' => false],
                    ['id' => '992428ed-16dd-5983-be45-9229cc8503c6', 'description' => 'Planície de Konye', 'correct_answer' => false],
                    ['id' => 'b0345814-b252-5de6-9db6-d7ae5030a443', 'description' => 'Planície de Canterbury', 'correct_answer' => false],
                    ['id' => '5b870148-37a9-59db-ad22-5409a187db0f', 'description' => 'Planície de Nullarbor', 'correct_answer' => false]
                ]],
        ['id' => 'bd6242a2-a0a4-53ff-9432-d4d674449fe5', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual correção gravimétrica considera a atração de uma lâmina rochosa entre a estação de medição e o nível de referência?', 'difficulty' => 5, 'weight' => 847, 'alternatives' => [
                    ['id' => '1e45aa85-06b8-5785-820d-7201fe1716ce', 'description' => 'Anomalia isostática', 'correct_answer' => false],
                    ['id' => '0975cdb1-38c4-517b-bf37-5cef6a895121', 'description' => 'Anomalia de Bouguer', 'correct_answer' => true],
                    ['id' => '5ce7dbb3-a40b-549a-899d-be22114d1201', 'description' => 'Anomalia magnética', 'correct_answer' => false],
                    ['id' => '6322d0f7-fe60-5531-be30-350bb93500e4', 'description' => 'Anomalia de Ar-livra', 'correct_answer' => false],
                    ['id' => '9b568717-a51e-5994-81fc-4f9e62722c64', 'description' => 'Anomalia gravimétrica regional', 'correct_answer' => false]
                ]],
        ['id' => 'ce6c6482-d6df-559a-be51-7772fd6de069', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual anomalia gravimétrica corrige a variação da gravidade com a altitude sem considerar a massa rochosa entre a estação e o datum?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => 'c360139c-7f2a-5036-b926-14cc0345dcbc', 'description' => 'Anomalia isostática', 'correct_answer' => false],
                    ['id' => '13c8f152-3d33-5cd0-a82a-2fd88abb58c8', 'description' => 'Anomalia de Bouguel', 'correct_answer' => false],
                    ['id' => '3b0de8a7-dd42-5f85-9926-7c6a34cb4fd6', 'description' => 'Anomalia gravimétrica regional', 'correct_answer' => false],
                    ['id' => '1d8a86bc-26a8-5784-b282-a5ed2e0c46ce', 'description' => 'Anomalia magnética', 'correct_answer' => false],
                    ['id' => '97bf3df7-76f3-599a-9a6c-cbfe29fba9c1', 'description' => 'Anomalia de Ar-livre', 'correct_answer' => true]
                ]],
        ['id' => '087df152-33f1-5fed-875c-3b86c3d5dac0', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual variação do campo magnético terrestre em relação a um modelo de referência pode indicar diferenças na composição ou magnetização das rochas?', 'difficulty' => 5, 'weight' => 951, 'alternatives' => [
                    ['id' => '1991e08f-bd5c-5239-9683-fec25c8bc44f', 'description' => 'Anomalia de Ar-livre', 'correct_answer' => false],
                    ['id' => '11b5971b-a838-58a5-97d2-801f92f5fa5a', 'description' => 'Anomalia gravimétrica regional', 'correct_answer' => false],
                    ['id' => '0f7e8427-d08c-5ed4-9eec-c5424adede14', 'description' => 'Anomalia isostátice', 'correct_answer' => false],
                    ['id' => '2cbc1d87-6715-5a19-ab1f-6df960fb9682', 'description' => 'Anomalia de Bouguer', 'correct_answer' => false],
                    ['id' => '99747feb-f1f9-5c3c-8865-2f9df790e9ba', 'description' => 'Anomalia magnética', 'correct_answer' => true]
                ]],
        ['id' => 'adab7f40-372a-51c6-aaf0-c97a18296387', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual anomalia gravimétrica residual é calculada após considerar um modelo de compensação isostática da topografia?', 'difficulty' => 5, 'weight' => 958, 'alternatives' => [
                    ['id' => 'a5d440a5-8d7f-5b5c-aaf6-551408c989b9', 'description' => 'Anomalia magnética', 'correct_answer' => false],
                    ['id' => 'a5b98dd3-d8fc-5bf7-a786-d29463ea9e4c', 'description' => 'Anomalia gravimétrica regionar', 'correct_answer' => false],
                    ['id' => '3f0974ab-cc33-587a-b349-35fc6d9ffe14', 'description' => 'Anomalia de Ar-livre', 'correct_answer' => false],
                    ['id' => 'a6aa9754-188e-5984-94e9-4e802224bc80', 'description' => 'Anomalia isostática', 'correct_answer' => true],
                    ['id' => '8982f0ec-e1eb-5552-a390-7ec0836a9fc5', 'description' => 'Anomalia de Bouguer', 'correct_answer' => false]
                ]],
        ['id' => '2d889219-c448-5935-beae-247f5182562f', 'locale' => 'pt-BR', 'category' => '8ab5892c-8721-5056-b4c7-f354934f9e28', 'question' => 'Qual componente de um campo gravimétrico representa variações de grande escala após a separação de efeitos locais?', 'difficulty' => 5, 'weight' => 856, 'alternatives' => [
                    ['id' => '4f959060-8907-51e3-b1e6-5fd9556c7051', 'description' => 'Anomalia gravimétrica regional', 'correct_answer' => true],
                    ['id' => '574cb5d7-23a8-5f54-a5a7-ee5978688f18', 'description' => 'Anomalia de Bouguer', 'correct_answer' => false],
                    ['id' => '1388fd79-87cd-50d3-bf22-b7c8e3016a57', 'description' => 'Anomalia de Ar-livre', 'correct_answer' => false],
                    ['id' => 'dde6b123-513d-5b8d-8efb-d12fd084468d', 'description' => 'Anomalia isostática', 'correct_answer' => false],
                    ['id' => 'c926795b-fbdd-5a03-8e8e-16d2e835f082', 'description' => 'Anomalia magnétice', 'correct_answer' => false]
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
