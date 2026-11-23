<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrFilmesSeeder extends Seeder
{
    private const CATEGORY = ['id' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'created_by' => 'SYSTEM', 'short_description' => 'filmes', 'description' => 'Filmes'];

    private const QUESTIONS = [
        ['id' => 'a2ae406b-f088-55e0-be66-375ac09640c6', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação apresenta Woody e Buzz Lightyear, brinquedos que ganham vida?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => '3bccb648-8a02-5cf3-b504-73e2a2263a0d', 'description' => 'Harry Potter e a Pedra Filosofal', 'correct_answer' => false],
                    ['id' => '6a106e96-eb74-5c0b-a8d2-de480f373cb7', 'description' => 'Jurassic Park', 'correct_answer' => false],
                    ['id' => '539497ba-a8ad-5e8c-811e-0a3224631c33', 'description' => 'Procurando Nemo', 'correct_answer' => false],
                    ['id' => '77c5b21a-3408-55dc-b912-e1df643b47a6', 'description' => 'Toy Story', 'correct_answer' => true],
                    ['id' => 'e37a8a7d-b654-586f-a772-013c5921170b', 'description' => 'Frozen: Uma Aventura Congelante', 'correct_answer' => false]
                ]],
        ['id' => '60e004ca-d754-58fd-b414-f039c89aff82', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme leva Marty McFly ao passado em um DeLorean transformado em máquina do tempo?', 'difficulty' => 1, 'weight' => 161, 'alternatives' => [
                    ['id' => '167a82d9-50a2-5992-9c9c-6c7a07c26890', 'description' => 'Titanic', 'correct_answer' => false],
                    ['id' => '27912848-b975-5ddf-aedc-736fe7c48302', 'description' => 'O Rei Leão', 'correct_answer' => false],
                    ['id' => '45d78e74-03fa-520f-bcc5-d1b1cfef2834', 'description' => 'Procurando Nemo', 'correct_answer' => false],
                    ['id' => '5c4b887d-0af9-552f-8d17-fe189f3bc894', 'description' => 'Toy Story', 'correct_answer' => false],
                    ['id' => '9c6688e4-ed57-5979-9cdc-c629c87358c7', 'description' => 'De Volta para o Futuro', 'correct_answer' => true]
                ]],
        ['id' => '3e8e542b-d103-50a4-9e20-5aeffed52ec3', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual filme um parque temático com dinossauros clonados sai do controle?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '90c5c486-525e-57c4-9447-0526ccf6b97e', 'description' => 'Frozen: Uma Aventura Congelante', 'correct_answer' => false],
                    ['id' => '021bc75e-aa92-5e44-9d11-276e6c1adf04', 'description' => 'De Volta para o Futuro', 'correct_answer' => false],
                    ['id' => '83638f7b-c063-541a-89ae-ad52e1cd19d8', 'description' => 'Procurando Nemo', 'correct_answer' => false],
                    ['id' => '66cc4719-3a24-5638-a238-e309a7dac86a', 'description' => 'Avatar', 'correct_answer' => false],
                    ['id' => '06c4a722-c24f-536d-b2fa-32db05a57640', 'description' => 'Jurassic Park', 'correct_answer' => true]
                ]],
        ['id' => '4404943a-def7-5a65-9243-bb527eb9f278', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual animação Marlin atravessa o oceano para encontrar seu filho peixe-palhaço?', 'difficulty' => 1, 'weight' => 174, 'alternatives' => [
                    ['id' => '047e95e1-df16-5dbb-9135-7ca94af4d0ef', 'description' => 'Harry Potter e a Pedra Filosofal', 'correct_answer' => false],
                    ['id' => '2f2f394f-9b4d-5371-b873-7db4ef0d38b2', 'description' => 'De Volta para o Futuro', 'correct_answer' => false],
                    ['id' => 'c1a61b85-5f75-5227-8164-6c7ba5cc3cb4', 'description' => 'Procurando Nemo', 'correct_answer' => true],
                    ['id' => '83b6c905-a473-5d73-a6a7-0c3672f9c721', 'description' => 'Frozen: Uma Aventura Congelante', 'correct_answer' => false],
                    ['id' => '19ebe3b1-3337-56a3-a4f7-d44f3c76c6ce', 'description' => 'O Rei Leão', 'correct_answer' => false]
                ]],
        ['id' => '976088f0-4152-5986-8d3d-dc0d655dbda9', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta Harry Potter chegando a Hogwarts pela primeira vez?', 'difficulty' => 1, 'weight' => 119, 'alternatives' => [
                    ['id' => 'e707e782-83a4-5f33-9c87-1773a4db806c', 'description' => 'Avatar', 'correct_answer' => false],
                    ['id' => '27b4aabd-a6ab-5c8f-a3ef-1f60bb96382f', 'description' => 'Jurassic Park', 'correct_answer' => false],
                    ['id' => '7d7e7757-9fd5-5eb8-8de0-93e4def6c744', 'description' => 'Frozen: Uma Aventura Congelante', 'correct_answer' => false],
                    ['id' => 'e8bde220-1093-5ae7-91fe-54d0434b4842', 'description' => 'Harry Potter e a Pedra Filosofal', 'correct_answer' => true],
                    ['id' => '24d01dc5-0293-5c12-b0a0-ff0887c74e87', 'description' => 'Homem-Aranha', 'correct_answer' => false]
                ]],
        ['id' => 'c743b23e-1e01-51d4-b8f5-5fd6f6d7069f', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta os Na\'vi e o planeta fictício Pandora?', 'difficulty' => 1, 'weight' => 138, 'alternatives' => [
                    ['id' => '31aead0f-ffde-530d-86e0-1977c29570c5', 'description' => 'Avatar', 'correct_answer' => true],
                    ['id' => '0aa3bc05-7de7-5e2b-9a9f-4e6d3ec4a586', 'description' => 'Toy Story', 'correct_answer' => false],
                    ['id' => '3b0b581c-fb43-5b4a-966e-1136232c8548', 'description' => 'De Volta para o Futuro', 'correct_answer' => false],
                    ['id' => 'e6893119-eebc-50fd-ae53-303f432f384f', 'description' => 'Frozen: Uma Aventura Congelante', 'correct_answer' => false],
                    ['id' => '52dfd128-1c10-5f1c-b4ac-00f7667e4307', 'description' => 'O Rei Leão', 'correct_answer' => false]
                ]],
        ['id' => '28e59e61-2916-5a8d-aa2a-9037431f9cee', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação acompanha Simba em sua jornada para assumir o lugar de Mufasa?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => '2ff63005-5565-5368-837f-d7f6af69b923', 'description' => 'Avatar', 'correct_answer' => false],
                    ['id' => '50cc6f1b-e01f-50e9-8ce3-c5e908234e7a', 'description' => 'Frozen: Uma Aventura Congelante', 'correct_answer' => false],
                    ['id' => '501700eb-2c81-58e9-9019-84460db615b4', 'description' => 'O Rei Leão', 'correct_answer' => true],
                    ['id' => '7092cf19-d405-55ce-ae70-2659dea2ab73', 'description' => 'Homem-Aranha', 'correct_answer' => false],
                    ['id' => 'df2e312a-4745-5670-87b6-c9e928ea3917', 'description' => 'Jurassic Park', 'correct_answer' => false]
                ]],
        ['id' => 'da8ae5cd-b21d-5635-8d83-793f77e77c4c', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual filme Peter Parker ganha habilidades após ser picado por uma aranha radioativa?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => 'ce447de7-80f1-5e93-90f0-3309cc440acc', 'description' => 'Harry Potter e a Pedra Filosofal', 'correct_answer' => false],
                    ['id' => 'df36a0a7-f127-56a2-ad29-dafd43f5684b', 'description' => 'Titanic', 'correct_answer' => false],
                    ['id' => '2a315baa-e08b-5f1b-bc2e-ada17458a875', 'description' => 'Homem-Aranha', 'correct_answer' => true],
                    ['id' => '02c20265-e310-572e-af1a-0e2813b1588b', 'description' => 'Avatar', 'correct_answer' => false],
                    ['id' => '19a10a63-8b1f-5d91-8c2b-649f77965ada', 'description' => 'Frozen: Uma Aventura Congelante', 'correct_answer' => false]
                ]],
        ['id' => 'cdb0f6e5-21f4-57c6-b879-ebc4b61725e7', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação acompanha um rato que sonha em se tornar chef em Paris?', 'difficulty' => 1, 'weight' => 194, 'alternatives' => [
                    ['id' => 'cbd07576-f8ba-58c1-b0b8-51a8743cf3f9', 'description' => 'Monstros S.A.', 'correct_answer' => false],
                    ['id' => '773873b8-ad6b-55ae-9671-a16288cedf5d', 'description' => 'Ratatouille', 'correct_answer' => true],
                    ['id' => '6d05c4e0-5e02-50b9-b903-f9426a7ae24b', 'description' => 'A Era do Gelo', 'correct_answer' => false],
                    ['id' => '1ee63364-543f-5a8e-a486-b1c8ffa5f785', 'description' => 'Shrek', 'correct_answer' => false],
                    ['id' => '5cbf2df2-b311-5993-8b55-31c89bc20101', 'description' => 'Os Vingadores', 'correct_answer' => false]
                ]],
        ['id' => '38190781-5b94-5c72-b898-1b8597b40de2', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual animação Po, um panda, é escolhido para se tornar o Guerreiro Dragão?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => 'c0016e48-7cbf-5808-a751-80c3f111c574', 'description' => 'Os Incríveis', 'correct_answer' => false],
                    ['id' => '05695a4e-98c9-56cc-9271-c8430f5c812e', 'description' => 'Shrek', 'correct_answer' => false],
                    ['id' => 'dac5a953-8f21-56ec-bb01-426b29b0dc04', 'description' => 'Kung Fu Panda', 'correct_answer' => true],
                    ['id' => 'ec0042e9-bf0f-5034-93da-be116de6c822', 'description' => 'Os Vingadores', 'correct_answer' => false],
                    ['id' => '378962ee-139f-5f36-88ff-4ea9a5d94cca', 'description' => 'Piratas do Caribe: A Maldição do Pérola Negra', 'correct_answer' => false]
                ]],
        ['id' => '0eed847a-d11a-5922-93da-9eb5b5899ceb', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação acompanha uma família de super-heróis que tenta viver discretamente?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => 'e2f61752-894b-5254-80c6-dbe86b89aed5', 'description' => 'Piratas do Caribe: A Maldição do Pérola Negra', 'correct_answer' => false],
                    ['id' => '1b1671d6-e712-5e8b-87ea-0c676f743f9b', 'description' => 'Kung Fu Panda', 'correct_answer' => false],
                    ['id' => 'fa167631-5cd4-508c-b1b4-c44c84cc6868', 'description' => 'O Senhor dos Anéis: A Sociedade do Anel', 'correct_answer' => false],
                    ['id' => 'f9e1bd28-574f-5e3a-a851-07d81656e6f0', 'description' => 'Os Incríveis', 'correct_answer' => true],
                    ['id' => '387a2de4-7fef-5ee5-b849-f8ffc04c89fa', 'description' => 'Star Wars: Uma Nova Esperança', 'correct_answer' => false]
                ]],
        ['id' => '62b53d73-9827-5fe6-80ed-7dea2a706f15', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual animação um ogro parte para resgatar a princesa Fiona?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => 'a0d1811e-6710-55e4-80a8-bea86ab6ab34', 'description' => 'O Senhor dos Anéis: A Sociedade do Anel', 'correct_answer' => false],
                    ['id' => '3ff0ac3a-01f1-51ac-92fa-c9d71497663a', 'description' => 'Shrek', 'correct_answer' => true],
                    ['id' => '44d9a0de-982b-51f8-ad67-b12fde9c0c89', 'description' => 'A Era do Gelo', 'correct_answer' => false],
                    ['id' => '28e6938a-0f62-5343-9820-7050bd095bf1', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => '6b7fc6bb-706e-56ba-9c87-554373aa6eec', 'description' => 'Os Incríveis', 'correct_answer' => false]
                ]],
        ['id' => '9fa037cd-e936-5c96-a7a6-5fc07d60cf6d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual filme Luke Skywalker recebe a mensagem holográfica da Princesa Leia?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => 'b718618d-8367-5a34-a248-b6d5a7fb8224', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => '220b98de-282c-54e1-81a2-11308152df58', 'description' => 'Star Wars: Uma Nova Esperança', 'correct_answer' => true],
                    ['id' => '831f097a-9cb0-55b2-b9d5-d010e76b1f81', 'description' => 'Os Vingadores', 'correct_answer' => false],
                    ['id' => '2ae325f3-5aaf-53e1-95fe-1af3ce27e81a', 'description' => 'A Era do Gelo', 'correct_answer' => false],
                    ['id' => 'e476996c-f39b-5cf6-9f9e-e7e9a1d9008c', 'description' => 'Shrek', 'correct_answer' => false]
                ]],
        ['id' => 'ac3ee210-1248-51f2-9207-f096bc951310', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme reúne Homem de Ferro, Capitão América, Thor e Hulk para enfrentar Loki?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => '3a256352-ea8a-569e-96b9-4b942931f2d3', 'description' => 'O Senhor dos Anéis: A Sociedade do Anel', 'correct_answer' => false],
                    ['id' => 'cabd065a-b97a-5818-a788-37e6c4412c09', 'description' => 'Monstros S.A.', 'correct_answer' => false],
                    ['id' => '3fc38105-d3b9-5239-9a08-67bee7021c11', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => '0da58a09-1905-5d92-8d5b-d06212f6c728', 'description' => 'Os Vingadores', 'correct_answer' => true],
                    ['id' => 'e5163077-2f51-5ce7-b9aa-f14690980777', 'description' => 'Star Wars: Uma Nova Esperança', 'correct_answer' => false]
                ]],
        ['id' => 'd9bb4cba-7e23-5583-bff8-b837159eb2e2', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual franquia Manny, Sid e Diego atravessam a era glacial?', 'difficulty' => 1, 'weight' => 174, 'alternatives' => [
                    ['id' => '09016085-c76b-59fd-aad1-27b1338a9351', 'description' => 'A Era do Gelo', 'correct_answer' => true],
                    ['id' => '3b2a7890-275f-5eaa-a06c-91bf69ef6070', 'description' => 'Kung Fu Panda', 'correct_answer' => false],
                    ['id' => '928340c4-1c9f-52d4-b0b3-abd134be1101', 'description' => 'Star Wars: Uma Nova Esperança', 'correct_answer' => false],
                    ['id' => 'e9dc2642-94a1-5553-a8da-7b4a20153e85', 'description' => 'Piratas do Caribe: A Maldição do Pérola Negra', 'correct_answer' => false],
                    ['id' => '3b095144-7ebb-5181-9f0f-b9af2b9a74a7', 'description' => 'Os Vingadores', 'correct_answer' => false]
                ]],
        ['id' => '1689d21a-b35a-5249-863c-d0993fccf39e', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta o pirata Jack Sparrow em busca do Pérola Negra?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => 'f3fc3b44-0a12-5531-abbd-2dd56dd156ae', 'description' => 'A Era do Gelo', 'correct_answer' => false],
                    ['id' => 'f2030cb9-cfdd-5e43-aecd-924fc0376042', 'description' => 'Piratas do Caribe: A Maldição do Pérola Negra', 'correct_answer' => true],
                    ['id' => 'e4a31ab1-6820-5d9c-bee8-3ffe98274973', 'description' => 'Os Incríveis', 'correct_answer' => false],
                    ['id' => 'c58a72ca-7d52-536c-a7b5-d446280cf9ff', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => 'c8732cb1-478d-5623-965b-ff028ec433b8', 'description' => 'Monstros S.A.', 'correct_answer' => false]
                ]],
        ['id' => 'c74b6fbf-2495-5d16-a207-8cd0d2e64af9', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual animação um leão, uma zebra, uma girafa e um hipopótamo escapam do zoológico?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => 'f7d88394-4005-5fbd-a577-dfdf5b65bee4', 'description' => 'O Máskara', 'correct_answer' => false],
                    ['id' => '79ac88d2-dc16-5c57-a843-faea1cf96b96', 'description' => 'Madagascar', 'correct_answer' => true],
                    ['id' => '818837fc-e78a-5a23-bf84-8c95e2265a68', 'description' => 'Esqueceram de Mim', 'correct_answer' => false],
                    ['id' => '5b495e97-104b-5887-b1a1-ed4082e4c170', 'description' => 'O Grinch', 'correct_answer' => false],
                    ['id' => 'aadcfb13-4e0f-571e-8ef0-587fb8a02770', 'description' => 'A Fantástica Fábrica de Chocolate', 'correct_answer' => false]
                ]],
        ['id' => '1ad28c10-105c-579f-9550-99820477b31c', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha Charlie em uma visita à fábrica de Willy Wonka?', 'difficulty' => 1, 'weight' => 152, 'alternatives' => [
                    ['id' => '2ca41a28-33b7-51e8-b1cc-425d202cffcb', 'description' => 'O Máskara', 'correct_answer' => false],
                    ['id' => '4d42a7c2-8e48-5d3e-bcc4-eeb4d49e8648', 'description' => 'O Grinch', 'correct_answer' => false],
                    ['id' => '9b16286f-f165-5f49-816a-26824535391c', 'description' => 'Esqueceram de Mim', 'correct_answer' => false],
                    ['id' => '4f794115-77cf-5dce-affb-fbb4877f1f79', 'description' => 'Up: Altas Aventuras', 'correct_answer' => false],
                    ['id' => '743e58c1-bc84-5827-8dff-21675cf3e95b', 'description' => 'A Fantástica Fábrica de Chocolate', 'correct_answer' => true]
                ]],
        ['id' => 'd2a92263-fcc3-5962-b00f-33228b9248c3', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual comédia Jim Carrey encontra uma máscara que lhe dá poderes e altera sua personalidade?', 'difficulty' => 1, 'weight' => 130, 'alternatives' => [
                    ['id' => 'a82df84b-b245-5b18-897a-6054a1f05ed7', 'description' => 'Up: Altas Aventuras', 'correct_answer' => false],
                    ['id' => '5946b59e-9b3c-58a1-a3cb-fa3bda2e7c18', 'description' => 'Madagascar', 'correct_answer' => false],
                    ['id' => 'dff28c33-986c-5b2f-befc-a908ae76ec06', 'description' => 'WALL-E', 'correct_answer' => false],
                    ['id' => '7f49f07b-a0b1-50b0-86c5-68c7ef78df48', 'description' => 'O Máskara', 'correct_answer' => true],
                    ['id' => '58de1895-8fac-502d-aab6-7a54a1007212', 'description' => 'E.T. — O Extraterrestre', 'correct_answer' => false]
                ]],
        ['id' => 'ce0165bf-470a-5069-b583-c7086e87ff3b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme leva Dorothy e seu cachorro Totó à Cidade das Esmeraldas?', 'difficulty' => 1, 'weight' => 166, 'alternatives' => [
                    ['id' => '11a95a52-c5da-5188-8910-37d10633f6d2', 'description' => 'Esqueceram de Mim', 'correct_answer' => false],
                    ['id' => 'fbfa891e-47d8-5ae7-b234-35899d67b092', 'description' => 'WALL-E', 'correct_answer' => false],
                    ['id' => 'ca9f1876-0137-5aee-99e3-658697816593', 'description' => 'Carros', 'correct_answer' => false],
                    ['id' => '0293402c-5a78-5bc6-986f-77f9d1f8dbb7', 'description' => 'E.T. — O Extraterrestre', 'correct_answer' => false],
                    ['id' => 'fc36bd23-fd38-5bde-93c0-81ba970e4268', 'description' => 'O Mágico de Oz', 'correct_answer' => true]
                ]],
        ['id' => 'ebac1307-10ab-5ec5-908e-d1bee1a09103', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação começa com um idoso levando sua casa pelos ares com milhares de balões?', 'difficulty' => 1, 'weight' => 126, 'alternatives' => [
                    ['id' => 'd7e028c7-2a34-54cb-bb32-84661f08de8b', 'description' => 'A Fantástica Fábrica de Chocolate', 'correct_answer' => false],
                    ['id' => 'f72c6f97-e8fa-53d3-abd4-d05ad98ce413', 'description' => 'O Grinch', 'correct_answer' => false],
                    ['id' => 'c8ef0227-8956-5dba-b5f7-5c4bdf719715', 'description' => 'Madagascar', 'correct_answer' => false],
                    ['id' => '59a88188-89b4-5e3f-8dd4-29dd6fb994e7', 'description' => 'Up: Altas Aventuras', 'correct_answer' => true],
                    ['id' => '903f5dfb-0932-58b5-b9da-5d12532489a8', 'description' => 'O Mágico de Oz', 'correct_answer' => false]
                ]],
        ['id' => '4c10f752-ff71-514e-afca-e9ee744e51f7', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha um garoto que faz amizade com um extraterrestre perdido na Terra?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => 'f86e94e2-a3f2-5a57-82ea-4da1589e77c6', 'description' => 'O Máskara', 'correct_answer' => false],
                    ['id' => '5878eb8a-9f17-52c9-bf21-a3da10970963', 'description' => 'E.T. — O Extraterrestre', 'correct_answer' => true],
                    ['id' => '71231e3e-6dc7-5433-a1de-c2c8d3cb4284', 'description' => 'Esqueceram de Mim', 'correct_answer' => false],
                    ['id' => '8e0a8779-08f5-5618-8648-b8820728657c', 'description' => 'Carros', 'correct_answer' => false],
                    ['id' => 'e65c7619-e6b7-549d-a17a-d6d912ec4639', 'description' => 'O Grinch', 'correct_answer' => false]
                ]],
        ['id' => '53ebb57a-c289-5fce-b99c-aa93188954e0', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação tem Relâmpago McQueen como protagonista em um mundo de veículos falantes?', 'difficulty' => 1, 'weight' => 135, 'alternatives' => [
                    ['id' => '42a102c4-d1cf-57cc-8113-72e764744e61', 'description' => 'O Mágico de Oz', 'correct_answer' => false],
                    ['id' => 'ad842207-0a23-539f-8d1a-258e40457326', 'description' => 'O Grinch', 'correct_answer' => false],
                    ['id' => 'c8476e94-2725-52ac-9eb1-5407841a8c34', 'description' => 'A Fantástica Fábrica de Chocolate', 'correct_answer' => false],
                    ['id' => '976e35f4-7a0f-54c2-928a-9e820a4bb894', 'description' => 'Carros', 'correct_answer' => true],
                    ['id' => '0548b300-2d02-5520-9db9-047d9c20e4ef', 'description' => 'Madagascar', 'correct_answer' => false]
                ]],
        ['id' => 'aa6bb439-6249-5207-beb9-241958fc16eb', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme deixa Kevin McCallister sozinho em casa durante as festas de Natal?', 'difficulty' => 1, 'weight' => 192, 'alternatives' => [
                    ['id' => '6c55241c-7cad-52e8-9bb3-67f10c4f1499', 'description' => 'Madagascar', 'correct_answer' => false],
                    ['id' => 'a8446bec-e37c-56a0-896b-b35d29c3e517', 'description' => 'Up: Altas Aventuras', 'correct_answer' => false],
                    ['id' => 'b39894e3-579b-52dd-a4d7-c69fba968a82', 'description' => 'O Grinch', 'correct_answer' => false],
                    ['id' => 'b13f023a-f7e6-5b04-9f94-94948ece909f', 'description' => 'Carros', 'correct_answer' => false],
                    ['id' => '9e81f9d3-61dd-5372-8523-e395dc8424ca', 'description' => 'Esqueceram de Mim', 'correct_answer' => true]
                ]],
        ['id' => '1af50f50-0821-5b0b-897c-da573e6fa2ec', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme clássico apresenta um gorila gigante capturado e levado a uma grande cidade?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => 'e223e720-f61e-58c8-8a60-f5603d3fa0d7', 'description' => 'King Kong', 'correct_answer' => true],
                    ['id' => 'b88df700-4f0e-5eff-b812-22b980496b00', 'description' => 'A Máscara do Zorro', 'correct_answer' => false],
                    ['id' => '432b5937-d004-54d8-bff9-5054763ee8e4', 'description' => 'O Exterminador do Futuro 2: O Julgamento Final', 'correct_answer' => false],
                    ['id' => '54bd4ccb-325a-56cc-b06f-8e7b1587c9a5', 'description' => 'Jumanji', 'correct_answer' => false],
                    ['id' => 'aa0cb873-6b5c-586d-8434-f292a8f4ec04', 'description' => 'Matrix', 'correct_answer' => false]
                ]],
        ['id' => 'fb1b5e30-b20d-539e-b6f8-956ab32b727c', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual franquia de espionagem tem Ethan Hunt como protagonista?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => 'c4365a98-8a0e-5aee-b293-8530ea65bf29', 'description' => 'Indiana Jones e os Caçadores da Arca Perdida', 'correct_answer' => false],
                    ['id' => '3394dd9d-e7a7-5c52-9a01-27f632f886a5', 'description' => 'Godzilla', 'correct_answer' => false],
                    ['id' => '4f874c0c-b3ed-529a-9de6-a63ce7dcfb0c', 'description' => 'O Exterminador do Futuro 2: O Julgamento Final', 'correct_answer' => false],
                    ['id' => '069f8ec7-2e23-572c-8d93-8b5e010df38b', 'description' => 'Missão: Impossível', 'correct_answer' => true],
                    ['id' => 'd70200d9-3964-5376-87f3-988ed60633db', 'description' => 'Jumanji', 'correct_answer' => false]
                ]],
        ['id' => 'ed0a561d-7a21-5cb4-aae2-062489ce85cb', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta um ciborgue enviado para proteger o jovem John Connor?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '3ee78956-1cea-5b67-8a73-ea31e23b2b88', 'description' => 'Indiana Jones e os Caçadores da Arca Perdida', 'correct_answer' => false],
                    ['id' => 'bf8d46b4-8235-583e-b5b8-14dfeac5a2d2', 'description' => 'A Máscara do Zorro', 'correct_answer' => false],
                    ['id' => '014aa38e-8de2-5c27-9934-c658f035c8e3', 'description' => 'O Exterminador do Futuro 2: O Julgamento Final', 'correct_answer' => true],
                    ['id' => 'd60cddfb-68ca-5850-8193-d960b9959d13', 'description' => 'Missão: Impossível', 'correct_answer' => false],
                    ['id' => 'ab46c6e1-d19e-562c-ac43-6fee0c8746f8', 'description' => 'Jumanji', 'correct_answer' => false]
                ]],
        ['id' => 'af576464-bec1-59fa-93cc-7fe0c9f3602d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual aventura apresenta um herói mascarado que luta contra a tirania usando espada e chicote?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => '2ebb3f78-f3fe-5c7b-9f6e-a314757fb3a4', 'description' => 'A Máscara do Zorro', 'correct_answer' => true],
                    ['id' => '6b16145d-7da2-5984-af44-ddb7a82f73b5', 'description' => 'Velozes e Furiosos', 'correct_answer' => false],
                    ['id' => 'beac50ef-c686-5b48-a801-e778f040c7df', 'description' => 'Indiana Jones e os Caçadores da Arca Perdida', 'correct_answer' => false],
                    ['id' => '30afd094-f37d-5f73-aa33-60e131551546', 'description' => 'Godzilla', 'correct_answer' => false],
                    ['id' => 'fbb8271e-5597-5f4e-9904-a6ff475e8092', 'description' => 'Missão: Impossível', 'correct_answer' => false]
                ]],
        ['id' => 'df39bb34-5797-52a7-95c4-84be40070527', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual franquia de ação começou com corridas de rua e tem Dominic Toretto como personagem central?', 'difficulty' => 1, 'weight' => 164, 'alternatives' => [
                    ['id' => '9e8ecdb0-6078-50ae-9e14-3ddcf0cf80c1', 'description' => 'Jumanji', 'correct_answer' => false],
                    ['id' => 'c9f5a6aa-4e8b-5672-b249-82adfeb8c4ba', 'description' => 'A Máscara do Zorro', 'correct_answer' => false],
                    ['id' => 'ba61673f-14f9-5b0c-b1e9-65753d6ea2e7', 'description' => 'Matrix', 'correct_answer' => false],
                    ['id' => 'b5b913a2-91cc-56cc-962a-35b87b69f437', 'description' => 'Velozes e Furiosos', 'correct_answer' => true],
                    ['id' => '06f4d126-7cf8-5710-bfdb-3c1b92ed9fde', 'description' => 'Uma Noite no Museu', 'correct_answer' => false]
                ]],
        ['id' => '40c1f94d-5f95-54d9-959f-69e371eba2f2', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta pela primeira vez o arqueólogo Indiana Jones no cinema?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => '0fe2b7ae-48b8-56df-9b39-7bb06e19dd56', 'description' => 'Velozes e Furiosos', 'correct_answer' => false],
                    ['id' => '4ccced0a-56cb-514a-b27a-9ea998a80080', 'description' => 'Indiana Jones e os Caçadores da Arca Perdida', 'correct_answer' => true],
                    ['id' => 'caa62873-232a-5cde-bd44-1f5c204a4bb2', 'description' => 'King Kong', 'correct_answer' => false],
                    ['id' => '8d3b34cd-20f8-557b-9046-46bc445f9931', 'description' => 'O Exterminador do Futuro 2: O Julgamento Final', 'correct_answer' => false],
                    ['id' => '2a83e6e5-3332-58a8-a6cd-1fc9f8f212dd', 'description' => 'A Máscara do Zorro', 'correct_answer' => false]
                ]],
        ['id' => '6e9856b1-0bb1-5600-a939-0d39ed5f0e78', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual comédia as peças de um museu ganham vida durante a noite?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => 'c8ac14eb-99dd-5c2d-9628-8aac47ceb579', 'description' => 'Godzilla', 'correct_answer' => false],
                    ['id' => '676f5669-2449-5333-9404-1e91a39c9fbd', 'description' => 'Uma Noite no Museu', 'correct_answer' => true],
                    ['id' => '906e0fd2-5ae5-5eea-b026-8dde4531393e', 'description' => 'Missão: Impossível', 'correct_answer' => false],
                    ['id' => 'c598872b-8420-5af0-9b08-fcf93b6e11f4', 'description' => 'Indiana Jones e os Caçadores da Arca Perdida', 'correct_answer' => false],
                    ['id' => '9762b735-d6bf-58df-b608-7b8383eec52d', 'description' => 'Velozes e Furiosos', 'correct_answer' => false]
                ]],
        ['id' => 'b08abf16-6fe4-5412-9002-3fe4de27158e', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta um jogo de tabuleiro cujos perigos passam para o mundo real?', 'difficulty' => 1, 'weight' => 119, 'alternatives' => [
                    ['id' => '995e5db1-186e-5354-87a1-b62c7d3374a1', 'description' => 'Jumanji', 'correct_answer' => true],
                    ['id' => 'c7069629-e168-56a3-9ec3-b71ca5463bb6', 'description' => 'Uma Noite no Museu', 'correct_answer' => false],
                    ['id' => '00447696-fb72-535a-9fc1-9e7d28dbb37b', 'description' => 'Matrix', 'correct_answer' => false],
                    ['id' => '5e7ae0d3-06a2-517c-b48c-89e8ec4e4b2e', 'description' => 'Indiana Jones e os Caçadores da Arca Perdida', 'correct_answer' => false],
                    ['id' => '2f0c8710-101d-5244-8915-a7c0d3b5cdfa', 'description' => 'A Máscara do Zorro', 'correct_answer' => false]
                ]],
        ['id' => '41485da7-a276-5cde-950b-6546cd33e3f2', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha um homem que, sem planejar, participa de diversos acontecimentos históricos dos Estados Unidos?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => '218140e1-210c-5711-8141-c49845855553', 'description' => 'O Náufrago', 'correct_answer' => false],
                    ['id' => '6a50df82-90c7-5857-95c8-8fa5a4d91f6d', 'description' => 'O Diabo Veste Prada', 'correct_answer' => false],
                    ['id' => 'd6fc99a5-ee93-582e-876b-afb903ab2980', 'description' => 'Uma Linda Mulher', 'correct_answer' => false],
                    ['id' => '29d8fc4c-ff03-5f77-a0ff-bbcf3d0e2a38', 'description' => 'Dirty Dancing: Ritmo Quente', 'correct_answer' => false],
                    ['id' => '1c09a1c3-c0aa-5bcb-84a2-869e4b10bc2c', 'description' => 'Forrest Gump', 'correct_answer' => true]
                ]],
        ['id' => '5f7134e2-9a54-5c94-aa97-034d42a057ab', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha um funcionário da FedEx que fica isolado em uma ilha deserta?', 'difficulty' => 1, 'weight' => 161, 'alternatives' => [
                    ['id' => '9aa422be-ae3e-5588-a8e4-2ecfd926c28c', 'description' => 'Mamma Mia!', 'correct_answer' => false],
                    ['id' => '0d3ef5f2-e015-53e6-b48e-7ee9b50d048c', 'description' => 'O Guarda-Costas', 'correct_answer' => false],
                    ['id' => 'b8d8a8c5-a36a-5cfe-a69d-4687705a08eb', 'description' => 'O Diabo Veste Prada', 'correct_answer' => false],
                    ['id' => 'a8becd26-0d23-51bd-8dee-44d27fd7be95', 'description' => 'O Náufrago', 'correct_answer' => true],
                    ['id' => 'c4ccdec4-e7e1-5c67-beb6-6ed207c68b59', 'description' => 'Uma Linda Mulher', 'correct_answer' => false]
                ]],
        ['id' => '14b55c6b-2f1f-5295-aaaa-b2744a8ab1fa', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual comédia romântica aproxima um empresário rico de uma acompanhante em Los Angeles?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '4e9dec83-98c6-5efc-9ccc-b4394623200c', 'description' => 'Mamma Mia!', 'correct_answer' => false],
                    ['id' => '8c914c59-fabc-5630-a897-5bb60aadfd34', 'description' => 'O Náufrago', 'correct_answer' => false],
                    ['id' => 'b9295f0e-71e2-51bc-89f2-7f20ba829271', 'description' => 'À Procura da Felicidade', 'correct_answer' => false],
                    ['id' => 'a563d58a-6e54-595b-bfb8-32c4e0cf12a3', 'description' => 'Uma Linda Mulher', 'correct_answer' => true],
                    ['id' => 'e134637c-a3e1-5055-ae43-b0269bf901e6', 'description' => 'O Guarda-Costas', 'correct_answer' => false]
                ]],
        ['id' => 'e89239b6-cd79-5a59-9cc6-12c48f1e0b89', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual romance apresenta um homem assassinado que tenta se comunicar com sua amada por meio de uma médium?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '49270bae-209f-5991-ae9d-68439efc0a32', 'description' => 'O Diabo Veste Prada', 'correct_answer' => false],
                    ['id' => '40e9d7d0-a4b6-53f1-922e-822dd98d228f', 'description' => 'O Náufrago', 'correct_answer' => false],
                    ['id' => 'c47c9df8-af1f-5c89-b760-c4c95273d04e', 'description' => 'O Guarda-Costas', 'correct_answer' => false],
                    ['id' => '4793012f-ac4b-56f3-86a3-97f803cd4dc2', 'description' => 'Dirty Dancing: Ritmo Quente', 'correct_answer' => false],
                    ['id' => '2d60725e-9d8f-5263-9cb6-3e569ec3f8de', 'description' => 'Ghost: Do Outro Lado da Vida', 'correct_answer' => true]
                ]],
        ['id' => 'e96bb07d-7372-5bc1-ad62-a569c7fe5aee', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual musical acompanha Sandy e Danny em um colégio norte-americano dos anos 1950?', 'difficulty' => 1, 'weight' => 146, 'alternatives' => [
                    ['id' => 'a51c4bef-ca72-56f6-9bd4-dca4a3869a65', 'description' => 'Mamma Mia!', 'correct_answer' => false],
                    ['id' => '259b27fd-045a-555c-a3de-d27f80caaffd', 'description' => 'O Diabo Veste Prada', 'correct_answer' => false],
                    ['id' => 'f0f8303a-ac56-519c-9a21-75dceec2d980', 'description' => 'À Procura da Felicidade', 'correct_answer' => false],
                    ['id' => 'f8bc0aa1-be31-5946-a821-71bd97f5196a', 'description' => 'O Náufrago', 'correct_answer' => false],
                    ['id' => '19cbf8a7-c0c5-5e67-905f-e2e468d76f59', 'description' => 'Grease: Nos Tempos da Brilhantina', 'correct_answer' => true]
                ]],
        ['id' => '22bc02ce-2fb6-510a-9c7b-29ea1c8763c2', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual romance tem como cenário um resort de férias e aulas de dança?', 'difficulty' => 1, 'weight' => 161, 'alternatives' => [
                    ['id' => '2cda61ab-7652-5979-a1be-09ba43d803aa', 'description' => 'Forrest Gump', 'correct_answer' => false],
                    ['id' => 'a66c6842-a39e-572b-8416-5b3e473c41f0', 'description' => 'Dirty Dancing: Ritmo Quente', 'correct_answer' => true],
                    ['id' => 'f57257be-e160-5dd6-80a4-ac19fbbf4071', 'description' => 'O Diabo Veste Prada', 'correct_answer' => false],
                    ['id' => '3eeb72d3-e8af-5772-a1b8-383f6faa6449', 'description' => 'O Náufrago', 'correct_answer' => false],
                    ['id' => '05188231-a34f-5194-b0fe-ce239d94a792', 'description' => 'Mamma Mia!', 'correct_answer' => false]
                ]],
        ['id' => '712cdfcc-9ae8-5437-b35e-9b3eda4c0cb9', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha uma jovem que começa a trabalhar para a poderosa editora Miranda Priestly?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '3307148b-93ac-5d4c-902c-cb70cc8ae998', 'description' => 'O Guarda-Costas', 'correct_answer' => false],
                    ['id' => '11ed8711-1763-55b9-b428-bf4f58c8a98a', 'description' => 'Dirty Dancing: Ritmo Quente', 'correct_answer' => false],
                    ['id' => '1417fb83-cacf-5480-a723-7013f3fa250d', 'description' => 'Uma Linda Mulher', 'correct_answer' => false],
                    ['id' => '77ca6119-038e-542d-92a6-ef399c7371ee', 'description' => 'O Diabo Veste Prada', 'correct_answer' => true],
                    ['id' => 'dab5e0cf-fc18-563f-8923-df245e393c7e', 'description' => 'Grease: Nos Tempos da Brilhantina', 'correct_answer' => false]
                ]],
        ['id' => 'bc32ce87-dcd3-5ece-b993-082ab0be6e2b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual musical utiliza canções do ABBA em uma história ambientada em uma ilha grega?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'ef5573b4-de41-54f9-883e-acd479f3a945', 'description' => 'Mamma Mia!', 'correct_answer' => true],
                    ['id' => 'a31b2433-f965-5498-b33b-0098d9a84557', 'description' => 'Ghost: Do Outro Lado da Vida', 'correct_answer' => false],
                    ['id' => 'dc74f241-7fee-5543-8f04-bcc274f4373b', 'description' => 'Forrest Gump', 'correct_answer' => false],
                    ['id' => '1aea5bfa-5e66-5f92-88a5-20d01abe512a', 'description' => 'Dirty Dancing: Ritmo Quente', 'correct_answer' => false],
                    ['id' => 'd3b84025-23dc-5805-80b7-8633b4cef86b', 'description' => 'O Náufrago', 'correct_answer' => false]
                ]],
        ['id' => 'cca36479-e073-5576-91b0-b5faa9375695', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Christopher Nolan acompanha a rivalidade entre dois ilusionistas na era vitoriana?', 'difficulty' => 2, 'weight' => 313, 'alternatives' => [
                    ['id' => '4ba88ca2-fd24-5406-b783-eae884d695d5', 'description' => 'Gravidade', 'correct_answer' => false],
                    ['id' => '86e29c77-beb8-5b6b-bcba-6411d9b091b9', 'description' => 'Contato', 'correct_answer' => false],
                    ['id' => '8cb101dd-b2e0-5bc2-ae5c-e343700e5f56', 'description' => 'Blade Runner 2049', 'correct_answer' => false],
                    ['id' => 'eb97d17a-6d3b-54e4-8f8f-9d5df48423e5', 'description' => 'A Chegada', 'correct_answer' => false],
                    ['id' => '2c7c7e74-2745-5544-86b3-aa5e36f8ee64', 'description' => 'O Grande Truque', 'correct_answer' => true]
                ]],
        ['id' => '389d34db-6790-5b4d-9d3d-816d92498460', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Em qual filme Dom Cobb invade sonhos para extrair ou implantar ideias?', 'difficulty' => 2, 'weight' => 330, 'alternatives' => [
                    ['id' => '991ffd13-6cb7-5502-b287-b4fe463ce566', 'description' => 'A Origem', 'correct_answer' => true],
                    ['id' => 'f859298c-a70b-5496-a9fe-d3201ed7847a', 'description' => 'Perdido em Marte', 'correct_answer' => false],
                    ['id' => '9dad7547-3bb0-5c50-b3ed-4614f9918137', 'description' => 'Distrito 9', 'correct_answer' => false],
                    ['id' => 'a5b119d8-e9e2-5500-a85b-f77294c5d99f', 'description' => 'Interestelar', 'correct_answer' => false],
                    ['id' => 'c4a160d0-d117-53c3-bab5-050a90f7656b', 'description' => 'Ex Machina', 'correct_answer' => false]
                ]],
        ['id' => '693092ff-5bbf-584d-8796-033d3712db0a', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha uma missão espacial que busca um novo lar para a humanidade e explora um buraco de minhoca?', 'difficulty' => 2, 'weight' => 315, 'alternatives' => [
                    ['id' => 'c49088db-4a59-5aec-9400-349fa041a8af', 'description' => 'Gravidade', 'correct_answer' => false],
                    ['id' => '347aa354-cc23-535e-b08e-0e5ec195d2ea', 'description' => 'Blade Runner 2049', 'correct_answer' => false],
                    ['id' => 'b160cc2c-06df-5b41-ba65-529593a247d9', 'description' => 'A Origem', 'correct_answer' => false],
                    ['id' => '87209706-6442-5ce9-b53b-c007bb863ebc', 'description' => 'Interestelar', 'correct_answer' => true],
                    ['id' => 'b1dfa251-11c2-599f-bfb4-9cabc06a147a', 'description' => 'Ex Machina', 'correct_answer' => false]
                ]],
        ['id' => 'aa03a990-4a41-5a51-a287-4b2f51f63e83', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha um programador que avalia a inteligência de uma androide chamada Ava?', 'difficulty' => 2, 'weight' => 389, 'alternatives' => [
                    ['id' => '8bb2a7a5-b9a6-5068-9453-33539ba9cd64', 'description' => 'Ex Machina', 'correct_answer' => true],
                    ['id' => '97fd7cd5-0cb1-5078-aaf2-b49af263537c', 'description' => 'Distrito 9', 'correct_answer' => false],
                    ['id' => 'c804ce26-22d8-582d-818d-6d1efbc9d77e', 'description' => 'A Origem', 'correct_answer' => false],
                    ['id' => '300571e5-7e9d-5d44-b070-608bfd590060', 'description' => 'Contato', 'correct_answer' => false],
                    ['id' => '67a9e859-eea0-5eeb-95f5-7cd9f252e9a9', 'description' => 'O Grande Truque', 'correct_answer' => false]
                ]],
        ['id' => '3a3a1226-7393-53ee-9db5-7fab5a87b77a', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha o replicante K em uma investigação ligada ao desaparecimento de Rick Deckard?', 'difficulty' => 2, 'weight' => 301, 'alternatives' => [
                    ['id' => '37963f85-4580-5700-89ac-a7d7730b6845', 'description' => 'Blade Runner 2049', 'correct_answer' => true],
                    ['id' => '54e7bb1e-124a-5b7b-a144-db39d8ed53d1', 'description' => 'O Grande Truque', 'correct_answer' => false],
                    ['id' => '3a32516b-ba05-52be-b7ad-c3318bde0471', 'description' => 'Contato', 'correct_answer' => false],
                    ['id' => 'bc039e5e-b526-55ef-8797-f254b7d00511', 'description' => 'A Origem', 'correct_answer' => false],
                    ['id' => '657635f1-1f57-56dd-9211-3f16faaac203', 'description' => 'Distrito 9', 'correct_answer' => false]
                ]],
        ['id' => '7b01e45e-0d1a-5cd8-becd-02436f6c39f7', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha astronautas à deriva após a destruição de um ônibus espacial?', 'difficulty' => 2, 'weight' => 278, 'alternatives' => [
                    ['id' => '44908b51-1d6b-58cc-8b0c-b9600e70cf06', 'description' => 'Gravidade', 'correct_answer' => true],
                    ['id' => '43e001bd-40c2-52e8-8344-e4ecf2ef52e1', 'description' => 'Blade Runner 2049', 'correct_answer' => false],
                    ['id' => '72dd244b-ae78-5bc8-9c92-12e7e0791656', 'description' => 'A Origem', 'correct_answer' => false],
                    ['id' => '480d11e8-84a7-54d1-9cad-1f31006665dd', 'description' => 'O Grande Truque', 'correct_answer' => false],
                    ['id' => 'b3caaa4c-4606-5c3e-8297-2ec8fcf6a2f2', 'description' => 'Interestelar', 'correct_answer' => false]
                ]],
        ['id' => '8881a087-d050-5d58-b008-e6e5d47e3164', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha uma cientista que recebe um sinal de origem extraterrestre?', 'difficulty' => 2, 'weight' => 262, 'alternatives' => [
                    ['id' => '28ef7236-d35d-582d-9b24-5ef647aaec66', 'description' => 'Perdido em Marte', 'correct_answer' => false],
                    ['id' => '9bd54106-bba5-5373-a917-78749a065d61', 'description' => 'Distrito 9', 'correct_answer' => false],
                    ['id' => 'f88b8242-cd55-56b1-9646-2561d232953a', 'description' => 'Contato', 'correct_answer' => true],
                    ['id' => '6d0cc856-c0a5-56e6-b4db-8c710411cd8b', 'description' => 'A Origem', 'correct_answer' => false],
                    ['id' => '5a8f25b9-da7f-50e3-a3ea-baa461b83b66', 'description' => 'A Chegada', 'correct_answer' => false]
                ]],
        ['id' => '79a5287e-6206-53ca-983f-5e5e508fa8fd', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual ficção científica apresenta uma linguista tentando decifrar a linguagem de visitantes extraterrestres?', 'difficulty' => 2, 'weight' => 394, 'alternatives' => [
                    ['id' => 'a98a5e06-59b6-59b1-9814-b6c2afc586a4', 'description' => 'Distrito 9', 'correct_answer' => false],
                    ['id' => '0d674dd3-9643-5a71-a905-156fbd91d64a', 'description' => 'Gravidade', 'correct_answer' => false],
                    ['id' => '970231a3-a141-5b31-b0fe-360cbd4e436c', 'description' => 'A Chegada', 'correct_answer' => true],
                    ['id' => '00a71d68-99e1-582a-8d0e-bf560926c7db', 'description' => 'Interestelar', 'correct_answer' => false],
                    ['id' => '6f87144d-c612-5929-ad00-ef2ecce0dfe7', 'description' => 'Contato', 'correct_answer' => false]
                ]],
        ['id' => '059f85af-545e-5de3-9281-0b7a67cf0ee0', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme dramatiza a criação do Facebook e os conflitos judiciais envolvendo seus fundadores?', 'difficulty' => 2, 'weight' => 395, 'alternatives' => [
                    ['id' => '7f104419-1898-5313-994f-15f9d2522234', 'description' => 'A Rede Social', 'correct_answer' => true],
                    ['id' => 'b1aadc47-2e20-5b20-a406-2eb6aecc9bc4', 'description' => 'Whiplash: Em Busca da Perfeição', 'correct_answer' => false],
                    ['id' => '7a774165-88fd-53a6-badf-761e764128b8', 'description' => 'O Discurso do Rei', 'correct_answer' => false],
                    ['id' => 'c54dd9d7-79a6-5aaa-9312-0666cf9a7b96', 'description' => 'Capitão Phillips', 'correct_answer' => false],
                    ['id' => 'b35200e0-27d6-58e2-9599-b6db3eba62fa', 'description' => 'Cisne Negro', 'correct_answer' => false]
                ]],
        ['id' => '727ae156-7250-5952-ac56-b1974342362f', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual drama histórico acompanha o rei George VI em seu esforço para superar a gagueira?', 'difficulty' => 2, 'weight' => 339, 'alternatives' => [
                    ['id' => '5ed74121-817b-5781-ad9a-5720c11e51f1', 'description' => 'O Jogo da Imitação', 'correct_answer' => false],
                    ['id' => 'f1d8ce90-e5bd-561c-add8-5747f49167ba', 'description' => 'Capitão Phillips', 'correct_answer' => false],
                    ['id' => '7e6e2ed1-627c-509f-8ee0-8895a6985994', 'description' => 'O Discurso do Rei', 'correct_answer' => true],
                    ['id' => '7400a006-2b7c-5ac4-83f8-263628dacf69', 'description' => 'A Rede Social', 'correct_answer' => false],
                    ['id' => 'a1841308-ba83-56fb-8fc5-a3b5d886750c', 'description' => 'Cisne Negro', 'correct_answer' => false]
                ]],
        ['id' => 'f45de789-df86-5c7d-9d0f-0b8aee506eea', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme dramatiza o sequestro de um navio cargueiro por piratas somalis?', 'difficulty' => 2, 'weight' => 228, 'alternatives' => [
                    ['id' => '9fef3119-7acf-592a-935a-1019bfeb961a', 'description' => 'Erin Brockovich: Uma Mulher de Talento', 'correct_answer' => false],
                    ['id' => '4d8fcd7d-f0f5-5a41-8ca9-7debc8b55246', 'description' => 'Sully: O Herói do Rio Hudson', 'correct_answer' => false],
                    ['id' => 'eec794d1-8013-5f67-b5b2-c1656c618a83', 'description' => 'Whiplash: Em Busca da Perfeição', 'correct_answer' => false],
                    ['id' => '0023d4d7-a99f-5f4f-a5f2-a5f2dffa85c1', 'description' => 'Capitão Phillips', 'correct_answer' => true],
                    ['id' => 'd2c173dc-5020-5298-93f8-b6f816d3b03f', 'description' => 'O Discurso do Rei', 'correct_answer' => false]
                ]],
        ['id' => '89c68380-e1b8-560c-b4d6-fb4f45d55355', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme retrata o uso de análise estatística para montar uma equipe de beisebol competitiva?', 'difficulty' => 2, 'weight' => 368, 'alternatives' => [
                    ['id' => '8635708d-62c5-5206-8744-da1bc7458aba', 'description' => 'Capitão Phillips', 'correct_answer' => false],
                    ['id' => '801933e6-006f-5342-be08-8a77f41169a6', 'description' => 'Sully: O Herói do Rio Hudson', 'correct_answer' => false],
                    ['id' => '5e6c320c-3ec8-5a8c-a78e-85fe1cbc9413', 'description' => 'Whiplash: Em Busca da Perfeição', 'correct_answer' => false],
                    ['id' => 'c82c3fd9-a5a2-5572-8681-2eee630bfb58', 'description' => 'O Homem que Mudou o Jogo', 'correct_answer' => true],
                    ['id' => 'c13b34f8-e89f-55be-80a0-25e191a59321', 'description' => 'O Discurso do Rei', 'correct_answer' => false]
                ]],
        ['id' => '1b1d20af-022d-5b6a-b0b4-483107607eb4', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha o piloto Chesley Sullenberger após um pouso de emergência no rio Hudson?', 'difficulty' => 2, 'weight' => 233, 'alternatives' => [
                    ['id' => '1e06c376-893a-557c-92a7-f7ef0b19964f', 'description' => 'Erin Brockovich: Uma Mulher de Talento', 'correct_answer' => false],
                    ['id' => '8284ca3e-6ffa-539a-b4e2-7441dc69ca53', 'description' => 'O Jogo da Imitação', 'correct_answer' => false],
                    ['id' => 'c8ebc828-2cf7-5a8e-9022-8815f135313e', 'description' => 'Capitão Phillips', 'correct_answer' => false],
                    ['id' => '4762aaeb-beef-5cce-b8f2-185a5eeaa5c6', 'description' => 'Sully: O Herói do Rio Hudson', 'correct_answer' => true],
                    ['id' => '7c6b3b8a-2a7c-5613-8222-790701af024d', 'description' => 'A Rede Social', 'correct_answer' => false]
                ]],
        ['id' => '04c69821-161d-5f60-9e5e-0458015a1f7d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha jornalistas do Boston Globe investigando abusos na Igreja Católica?', 'difficulty' => 2, 'weight' => 289, 'alternatives' => [
                    ['id' => '2605d8e7-8b94-5b34-8cae-72e038aacf84', 'description' => 'A Rede Social', 'correct_answer' => false],
                    ['id' => '16611099-f828-5f02-bcfd-ec280c7f6222', 'description' => 'O Discurso do Rei', 'correct_answer' => false],
                    ['id' => '0e9443a6-0b28-5320-b63c-f6c1443b807e', 'description' => 'Cisne Negro', 'correct_answer' => false],
                    ['id' => 'bec257bf-fd73-55f1-95b8-ee9a331d4a7e', 'description' => 'Spotlight: Segredos Revelados', 'correct_answer' => true],
                    ['id' => 'afbfe8ed-f660-54df-b77b-803f2ec8c50a', 'description' => 'Sully: O Herói do Rio Hudson', 'correct_answer' => false]
                ]],
        ['id' => '906fda98-0ac1-54c2-bc9a-651b5e5c6e63', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual drama acompanha um jovem baterista submetido ao método abusivo de um exigente professor de jazz?', 'difficulty' => 2, 'weight' => 325, 'alternatives' => [
                    ['id' => '8d53a652-04b8-5418-946f-d18a4aded02d', 'description' => 'O Jogo da Imitação', 'correct_answer' => false],
                    ['id' => 'd2e2ef27-0172-51c4-927a-65506f62d0c5', 'description' => 'Capitão Phillips', 'correct_answer' => false],
                    ['id' => 'ea4b8948-dc6c-5320-8c40-6ec971c34a97', 'description' => 'Spotlight: Segredos Revelados', 'correct_answer' => false],
                    ['id' => '58665c8c-37d0-5349-98ee-a58826f5e6b9', 'description' => 'Whiplash: Em Busca da Perfeição', 'correct_answer' => true],
                    ['id' => '88042b0f-2b58-5068-ae88-6b007ee6ffa1', 'description' => 'Sully: O Herói do Rio Hudson', 'correct_answer' => false]
                ]],
        ['id' => '0d82d1a1-da26-506a-9c01-b18660200c7b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha uma bailarina que disputa o papel principal em uma montagem de O Lago dos Cisnes?', 'difficulty' => 2, 'weight' => 250, 'alternatives' => [
                    ['id' => '5b2b37e2-d6c6-5fda-813c-d6f8628a5236', 'description' => 'Cisne Negro', 'correct_answer' => true],
                    ['id' => '0f9d1942-5fec-5903-9587-de6dc9b1a821', 'description' => 'Sully: O Herói do Rio Hudson', 'correct_answer' => false],
                    ['id' => '0078eb6c-fbff-5b6d-a66c-58c04d219640', 'description' => 'O Jogo da Imitação', 'correct_answer' => false],
                    ['id' => 'd9e6029c-2f36-5dca-8676-64e893ef5fc8', 'description' => 'Erin Brockovich: Uma Mulher de Talento', 'correct_answer' => false],
                    ['id' => 'd75c6675-a403-58db-9aef-63011cda4363', 'description' => 'A Rede Social', 'correct_answer' => false]
                ]],
        ['id' => 'df75a378-efaf-5dc9-8858-ef7d93dbc907', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta uma funcionária muda que cria um vínculo com uma criatura aquática mantida em um laboratório?', 'difficulty' => 2, 'weight' => 272, 'alternatives' => [
                    ['id' => 'e166eee7-e899-5c66-9550-753e7092bcf8', 'description' => 'Meu Amigo Totoro', 'correct_answer' => false],
                    ['id' => '563f8615-0cad-5f16-8134-b8791110068b', 'description' => 'A Viagem de Chihiro', 'correct_answer' => false],
                    ['id' => '6a26c220-5e6e-56f4-bcf2-f52209f7b4c6', 'description' => 'A Forma da Água', 'correct_answer' => true],
                    ['id' => '9ca2c5f5-8422-5791-92fa-d489fcdfe48a', 'description' => 'A Canção do Mar', 'correct_answer' => false],
                    ['id' => '64e5fa17-d0b3-5128-bdff-bfeb9878d395', 'description' => 'A Noiva-Cadáver', 'correct_answer' => false]
                ]],
        ['id' => '81a30f86-01ba-5ad0-b470-3b5e90662c65', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação irlandesa acompanha Ben e sua irmã Saoirse, ligada ao folclore das selkies?', 'difficulty' => 2, 'weight' => 304, 'alternatives' => [
                    ['id' => '21ef2c63-538a-5220-897c-08884ed0a9c0', 'description' => 'Kubo e as Cordas Mágicas', 'correct_answer' => false],
                    ['id' => 'e3d8a1e3-6c59-517a-a554-27b40b3903f0', 'description' => 'O Castelo Animado', 'correct_answer' => false],
                    ['id' => '5063b4fa-751c-5d19-9fbe-a0e6ac13bfe0', 'description' => 'Princesa Mononoke', 'correct_answer' => false],
                    ['id' => '84220def-781c-522c-97a8-47c9d29a6a88', 'description' => 'A Canção do Mar', 'correct_answer' => true],
                    ['id' => 'a1d57335-78dc-58e5-b7e3-23bd7289ab1b', 'description' => 'Coraline e o Mundo Secreto', 'correct_answer' => false]
                ]],
        ['id' => '264c9f71-00c5-5602-9188-7797fd37ee0a', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação em stop-motion apresenta uma menina que encontra uma versão alternativa de sua casa?', 'difficulty' => 2, 'weight' => 241, 'alternatives' => [
                    ['id' => 'dc0f3e86-7a46-5999-8bfd-078b8ffe1ecb', 'description' => 'A Canção do Mar', 'correct_answer' => false],
                    ['id' => 'a5680724-7570-5397-96b7-4cbca97e579d', 'description' => 'Kubo e as Cordas Mágicas', 'correct_answer' => false],
                    ['id' => '124b72de-b39d-58df-b161-7ccb51d8647b', 'description' => 'Meu Amigo Totoro', 'correct_answer' => false],
                    ['id' => '6ce8ceca-a165-5dc3-abd9-2b5da3e8aad2', 'description' => 'Coraline e o Mundo Secreto', 'correct_answer' => true],
                    ['id' => '174e1480-f328-5bf9-8d58-7999ff686ab2', 'description' => 'A Forma da Água', 'correct_answer' => false]
                ]],
        ['id' => '7b41c267-dd65-56c8-a9e5-08d88076ee47', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação de Hayao Miyazaki acompanha uma menina presa em um mundo de espíritos?', 'difficulty' => 2, 'weight' => 379, 'alternatives' => [
                    ['id' => '16e8c47a-b1f1-5449-af04-ec546b21ee21', 'description' => 'A Viagem de Chihiro', 'correct_answer' => true],
                    ['id' => 'dc62cd33-4047-578c-829d-c9302e168c46', 'description' => 'A Forma da Água', 'correct_answer' => false],
                    ['id' => 'bafd1dbb-5779-5c6c-9cc6-c7a5b7d6799f', 'description' => 'O Castelo Animado', 'correct_answer' => false],
                    ['id' => 'd11e10a3-28aa-5ffc-b5fd-33c77f0d7f0a', 'description' => 'O Labirinto do Fauno', 'correct_answer' => false],
                    ['id' => '29e77db4-3276-51ef-b8b4-c4796c401548', 'description' => 'Coraline e o Mundo Secreto', 'correct_answer' => false]
                ]],
        ['id' => '4b5b9142-1b73-58d8-8575-c2d05457d2bd', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação acompanha Ashitaka em um conflito entre forças da floresta e uma comunidade mineradora?', 'difficulty' => 2, 'weight' => 227, 'alternatives' => [
                    ['id' => '8dbbd0a8-1e55-562f-9558-07fb0c259a35', 'description' => 'Princesa Mononoke', 'correct_answer' => true],
                    ['id' => '0840de04-5592-5ed5-b5d6-11c5ec8b814f', 'description' => 'A Canção do Mar', 'correct_answer' => false],
                    ['id' => 'aec776cd-9ad7-5a58-8cd9-00e4b74bc5fa', 'description' => 'Coraline e o Mundo Secreto', 'correct_answer' => false],
                    ['id' => 'fc680c25-47df-5276-8efb-a2e6afce4c91', 'description' => 'Kubo e as Cordas Mágicas', 'correct_answer' => false],
                    ['id' => '7cae7d2d-1087-5f33-a1cf-a30d9e743fcb', 'description' => 'Meu Amigo Totoro', 'correct_answer' => false]
                ]],
        ['id' => '61cccfe9-21e1-5fe4-9cfe-13da4d4dd531', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação apresenta Sophie, transformada em idosa, e o misterioso mago Howl?', 'difficulty' => 2, 'weight' => 328, 'alternatives' => [
                    ['id' => 'bc5a9e20-9f48-5570-8067-1d07d8640cdd', 'description' => 'O Castelo Animado', 'correct_answer' => true],
                    ['id' => '4c521c51-4796-52f9-8257-ee6b87e10c71', 'description' => 'Coraline e o Mundo Secreto', 'correct_answer' => false],
                    ['id' => '139499b1-e6dd-5a17-b7d8-a736967a9291', 'description' => 'O Labirinto do Fauno', 'correct_answer' => false],
                    ['id' => '5119f180-f524-50ed-8964-4351263123de', 'description' => 'A Canção do Mar', 'correct_answer' => false],
                    ['id' => 'a68279d2-a972-589a-b688-7243a030d9b5', 'description' => 'A Viagem de Chihiro', 'correct_answer' => false]
                ]],
        ['id' => 'c5fb54ce-37a7-54f7-8570-41d9d22ee2b2', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação em stop-motion acompanha um menino que usa música e origami em uma jornada fantástica?', 'difficulty' => 2, 'weight' => 389, 'alternatives' => [
                    ['id' => '95ff3995-4b51-5acb-a1ad-885b51117b08', 'description' => 'Kubo e as Cordas Mágicas', 'correct_answer' => true],
                    ['id' => '4e8ac04d-87a9-5339-92a9-0f31231f8f2b', 'description' => 'O Castelo Animado', 'correct_answer' => false],
                    ['id' => 'c87bc730-603f-54ad-80a4-74440d316824', 'description' => 'A Forma da Água', 'correct_answer' => false],
                    ['id' => '2be6c357-5d9c-5528-b1ee-441ee7d6111a', 'description' => 'Princesa Mononoke', 'correct_answer' => false],
                    ['id' => 'a5a0f5d3-59dc-5848-a08a-2b787daaf1d5', 'description' => 'Meu Amigo Totoro', 'correct_answer' => false]
                ]],
        ['id' => '1862f130-dfef-530b-975f-be536a361bb1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual animação de Miyazaki apresenta duas irmãs que encontram uma criatura gigantesca e gentil na floresta?', 'difficulty' => 2, 'weight' => 256, 'alternatives' => [
                    ['id' => 'aac8d7e3-9665-5ea7-a21c-33c72a3f3b9f', 'description' => 'A Canção do Mar', 'correct_answer' => false],
                    ['id' => '72b99934-15cd-5370-bbe7-22d1c82cfec8', 'description' => 'O Labirinto do Fauno', 'correct_answer' => false],
                    ['id' => 'ce0b76b6-6df1-5e3e-a4d6-166f09a6a79e', 'description' => 'A Viagem de Chihiro', 'correct_answer' => false],
                    ['id' => '69ac41c4-548f-503c-99d3-ed7747cd5fd5', 'description' => 'Meu Amigo Totoro', 'correct_answer' => true],
                    ['id' => '6bac4d08-6f43-5e2a-984d-ae40fc594163', 'description' => 'A Forma da Água', 'correct_answer' => false]
                ]],
        ['id' => '0c9ad382-4489-5202-ac1b-904a74fe3714', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha jornalistas e investigadores obcecados em identificar um assassino que envia cartas cifradas?', 'difficulty' => 2, 'weight' => 355, 'alternatives' => [
                    ['id' => 'd51e0179-b83e-53ec-84f1-9a741037e7ab', 'description' => 'Zodíaco', 'correct_answer' => true],
                    ['id' => '4b7e15a0-e3b3-567d-9c3d-fb1f0eb9a101', 'description' => 'Incêndios', 'correct_answer' => false],
                    ['id' => '7e5d7c11-41d2-5b9f-b27e-c8aa9a12e019', 'description' => 'Memórias de um Assassino', 'correct_answer' => false],
                    ['id' => 'c1b96f4d-e706-54a3-94cb-e420c6cc493d', 'description' => 'Oldboy', 'correct_answer' => false],
                    ['id' => '8122bcc1-c56b-5d9f-9c87-79d49bf288f5', 'description' => 'Seven: Os Sete Crimes Capitais', 'correct_answer' => false]
                ]],
        ['id' => 'a63137f9-63c0-5c0a-90bd-eb1d1c1728f5', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Martin Scorsese acompanha um policial infiltrado em uma organização criminosa e um criminoso infiltrado na polícia?', 'difficulty' => 2, 'weight' => 386, 'alternatives' => [
                    ['id' => 'efe0dfe0-9364-534c-985f-e8e4974713b9', 'description' => 'Memórias de um Assassino', 'correct_answer' => false],
                    ['id' => '9baecaa8-5fb9-5a34-8bea-3f7d861bdbf4', 'description' => 'Os Suspeitos', 'correct_answer' => false],
                    ['id' => '78834a62-32b1-5ef6-a662-b1e8cfb21cd4', 'description' => 'Oldboy', 'correct_answer' => false],
                    ['id' => '45534b59-96e4-573a-9767-3a2b92114052', 'description' => 'Os Infiltrados', 'correct_answer' => true],
                    ['id' => '289208d8-83d0-56a9-9b25-0184705d45f5', 'description' => 'O Segredo dos Seus Olhos', 'correct_answer' => false]
                ]],
        ['id' => '9abbc8a4-2827-5a82-8d42-8e0e1a373afc', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual thriller sul-coreano acompanha um homem mantido em cativeiro por quinze anos sem saber o motivo?', 'difficulty' => 2, 'weight' => 297, 'alternatives' => [
                    ['id' => '2560c491-dba2-52f6-b0fc-c8c1540c6a41', 'description' => 'Os Suspeitos', 'correct_answer' => false],
                    ['id' => '34e3df96-92bb-5feb-9eb4-f722086a6423', 'description' => 'Ilha do Medo', 'correct_answer' => false],
                    ['id' => 'b0295577-81f1-5fbe-a2c0-2d5868cbdbfe', 'description' => 'Oldboy', 'correct_answer' => true],
                    ['id' => '398f5e76-fc53-5fcd-99f5-b6bd546f9a81', 'description' => 'Memórias de um Assassino', 'correct_answer' => false],
                    ['id' => 'aa9a1295-bf36-5b28-811f-35c3aadd2c4b', 'description' => 'Os Infiltrados', 'correct_answer' => false]
                ]],
        ['id' => 'b2527fdc-f43d-5a54-a40f-a5d256151530', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme argentino acompanha um funcionário judicial que revisita um caso de assassinato não resolvido?', 'difficulty' => 2, 'weight' => 299, 'alternatives' => [
                    ['id' => '3205478a-5902-510e-8228-ad49a81f23b8', 'description' => 'Incêndios', 'correct_answer' => false],
                    ['id' => '49103a51-8977-5c4a-b0f2-b5adf6b1a841', 'description' => 'Garota Exemplar', 'correct_answer' => false],
                    ['id' => '978ae861-0b4a-567c-b98a-9143f74f576b', 'description' => 'Seven: Os Sete Crimes Capitais', 'correct_answer' => false],
                    ['id' => '4de28c3f-cfea-5a0b-b7d4-65004bf9dcf6', 'description' => 'O Segredo dos Seus Olhos', 'correct_answer' => true],
                    ['id' => 'e7750b91-a201-5d0a-a13f-75df2158c8e9', 'description' => 'Oldboy', 'correct_answer' => false]
                ]],
        ['id' => '363d0154-f1cd-5356-9d52-0c048ae628c6', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha dois agentes federais investigando o desaparecimento de uma paciente em um hospital psiquiátrico insular?', 'difficulty' => 2, 'weight' => 205, 'alternatives' => [
                    ['id' => '46395183-f6bb-517c-bd93-7f194b4f8cf9', 'description' => 'Os Infiltrados', 'correct_answer' => false],
                    ['id' => 'e3b10f26-a23b-58a3-bfd9-527490cd6c1c', 'description' => 'Garota Exemplar', 'correct_answer' => false],
                    ['id' => '9b1b92b0-163d-5ded-90a8-636b9480b955', 'description' => 'Oldboy', 'correct_answer' => false],
                    ['id' => '66d44abc-5d5f-57f8-b2c2-e4f1fd3a37a8', 'description' => 'Ilha do Medo', 'correct_answer' => true],
                    ['id' => '341205ce-94d6-562e-88c9-97a0d6d34433', 'description' => 'Memórias de um Assassino', 'correct_answer' => false]
                ]],
        ['id' => 'e09b281b-f457-5445-8b2a-1bc789136a0b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual suspense acompanha o desaparecimento de Amy Dunne e a crescente suspeita sobre seu marido?', 'difficulty' => 2, 'weight' => 212, 'alternatives' => [
                    ['id' => '201d22a2-fc15-5b1b-acb8-21df22f8788c', 'description' => 'Memórias de um Assassino', 'correct_answer' => false],
                    ['id' => '5ddcea40-abcd-5f58-8654-a427aa04e321', 'description' => 'Seven: Os Sete Crimes Capitais', 'correct_answer' => false],
                    ['id' => '9329ef19-7188-5390-8d5b-c57ba22359a7', 'description' => 'Zodíaco', 'correct_answer' => false],
                    ['id' => 'b3de8043-8b60-5bf8-b667-6f4162b4a743', 'description' => 'Incêndios', 'correct_answer' => false],
                    ['id' => 'd3afbf3c-a2c9-550f-91f2-963698335ce1', 'description' => 'Garota Exemplar', 'correct_answer' => true]
                ]],
        ['id' => 'd1a53fda-1e19-58b0-81a8-5de7306cb794', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual suspense acompanha a investigação do desaparecimento de duas meninas e o sequestro de um suspeito?', 'difficulty' => 2, 'weight' => 317, 'alternatives' => [
                    ['id' => 'c61e8d3f-761e-52f1-b16a-2b7d3421a5f4', 'description' => 'Incêndios', 'correct_answer' => false],
                    ['id' => '2bcc2074-2508-554a-8e44-d1042d0d153e', 'description' => 'Os Suspeitos', 'correct_answer' => true],
                    ['id' => '9f1c0934-88f1-5b19-b2fc-b80b82ad56ca', 'description' => 'Oldboy', 'correct_answer' => false],
                    ['id' => 'a41ec872-491e-5a3f-9f9d-fb4168acd275', 'description' => 'Ilha do Medo', 'correct_answer' => false],
                    ['id' => '209765a9-60a3-5fed-989f-a4cf064bb1f7', 'description' => 'Garota Exemplar', 'correct_answer' => false]
                ]],
        ['id' => 'b90b2d29-23f7-5e93-96d4-920a0d377069', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual suspense acompanha dois detetives em uma investigação inspirada nos sete pecados capitais?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => 'cef0cc8f-5dd2-5d9a-8c98-f7ead113e125', 'description' => 'Memórias de um Assassino', 'correct_answer' => false],
                    ['id' => '90acda43-e1e5-55c3-a160-87f8840bc1ef', 'description' => 'Incêndios', 'correct_answer' => false],
                    ['id' => '9f12f30d-4db6-5633-a05d-43ef85ba40fe', 'description' => 'Seven: Os Sete Crimes Capitais', 'correct_answer' => true],
                    ['id' => 'ee2fd74a-22c4-574e-bad1-2a80130ce565', 'description' => 'Os Suspeitos', 'correct_answer' => false],
                    ['id' => 'c634daf8-329b-5729-8968-febb142b4923', 'description' => 'Zodíaco', 'correct_answer' => false]
                ]],
        ['id' => 'f22b0347-7037-5f44-8238-dd5a199b4539', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha uma adolescente de Sacramento em conflito com a mãe durante o último ano escolar?', 'difficulty' => 2, 'weight' => 369, 'alternatives' => [
                    ['id' => '26e2c65a-eb73-52f6-9fdb-6980611687a5', 'description' => 'Encontros e Desencontros', 'correct_answer' => false],
                    ['id' => '460c28e6-74e7-5cf7-a52b-09932a2ae42c', 'description' => 'Lady Bird: A Hora de Voar', 'correct_answer' => true],
                    ['id' => 'c0c84d8b-10b4-5c54-bab1-19d0e8107d3f', 'description' => 'Boyhood: Da Infância à Juventude', 'correct_answer' => false],
                    ['id' => '75c652ed-8078-504d-b8d9-2ae6b009e4a1', 'description' => 'Pequena Miss Sunshine', 'correct_answer' => false],
                    ['id' => 'd7eda621-9658-5ed4-b4b0-c7dc08b4900c', 'description' => 'Meia-Noite em Paris', 'correct_answer' => false]
                ]],
        ['id' => '3150165a-b8a9-5f1b-a4f2-a1cd4c66749a', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Richard Linklater foi rodado ao longo de doze anos com o mesmo elenco principal?', 'difficulty' => 2, 'weight' => 308, 'alternatives' => [
                    ['id' => 'ded5a2fc-aa15-5078-bf47-dbe2d820fc26', 'description' => 'Antes do Amanhecer', 'correct_answer' => false],
                    ['id' => '03f8c20a-107e-5380-be71-3466c6f98d99', 'description' => 'Questão de Tempo', 'correct_answer' => false],
                    ['id' => 'e42144e9-9b7c-54cc-a7a0-d412c1b08f1d', 'description' => 'Lady Bird: A Hora de Voar', 'correct_answer' => false],
                    ['id' => '2d278ae3-0f9b-5bdf-9f72-36cca482f369', 'description' => 'Encontros e Desencontros', 'correct_answer' => false],
                    ['id' => 'aab8efd5-e093-55da-9fe1-22afd85e9923', 'description' => 'Boyhood: Da Infância à Juventude', 'correct_answer' => true]
                ]],
        ['id' => '126521d1-779f-5c76-8156-f7a1a689b933', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual comédia dramática acompanha uma família em uma viagem de van para um concurso infantil de beleza?', 'difficulty' => 2, 'weight' => 368, 'alternatives' => [
                    ['id' => 'dc9471a1-2c97-556b-91d4-f3bc6ef03c59', 'description' => 'Antes do Amanhecer', 'correct_answer' => false],
                    ['id' => 'f023618c-bf98-53c5-afc5-a976338dc1b0', 'description' => 'Lady Bird: A Hora de Voar', 'correct_answer' => false],
                    ['id' => '1d85d048-0bba-5c56-86cb-c5d74cf2988b', 'description' => 'Pequena Miss Sunshine', 'correct_answer' => true],
                    ['id' => '68c60db2-b7ea-5ce6-b1e3-5f41a8a89bba', 'description' => 'Brilho Eterno de uma Mente sem Lembranças', 'correct_answer' => false],
                    ['id' => 'b9809f59-198f-5cb5-b091-57976e0d0b1a', 'description' => '500 Dias com Ela', 'correct_answer' => false]
                ]],
        ['id' => '7fc3cbd0-e5cf-5442-afa1-5213ebd017ba', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha Theodore, que desenvolve um relacionamento com um sistema operacional chamado Samantha?', 'difficulty' => 2, 'weight' => 219, 'alternatives' => [
                    ['id' => 'dd960690-e98b-5833-b420-0af047a80b8b', 'description' => 'Boyhood: Da Infância à Juventude', 'correct_answer' => false],
                    ['id' => '25e65633-984a-596d-b555-9b7c472c9c1f', 'description' => 'Meia-Noite em Paris', 'correct_answer' => false],
                    ['id' => '52781957-7a3a-5e2a-84b6-42e9260630d2', 'description' => '500 Dias com Ela', 'correct_answer' => false],
                    ['id' => '488734c2-2b4b-59ec-af44-43e3352a0c01', 'description' => 'Her', 'correct_answer' => true],
                    ['id' => '9b0bc48f-0a8c-5563-889b-3ede84f2b147', 'description' => 'Lady Bird: A Hora de Voar', 'correct_answer' => false]
                ]],
        ['id' => 'e5db3a9e-0923-5079-bbff-e244ab0e5d95', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual romance acompanha Tim, que descobre que os homens de sua família podem viajar no tempo?', 'difficulty' => 2, 'weight' => 333, 'alternatives' => [
                    ['id' => 'fc181538-0571-5761-ad3d-8270a5a262e0', 'description' => 'Encontros e Desencontros', 'correct_answer' => false],
                    ['id' => '4032c9ea-d403-58aa-a34c-5d976302e4bc', 'description' => 'Pequena Miss Sunshine', 'correct_answer' => false],
                    ['id' => 'b8e4f3f1-943f-5211-a269-2093b7c7cd78', 'description' => 'Lady Bird: A Hora de Voar', 'correct_answer' => false],
                    ['id' => '4a767ebb-8b56-5599-b137-06377237fee7', 'description' => 'Questão de Tempo', 'correct_answer' => true],
                    ['id' => '11c0c42e-041e-5903-aabd-f25a8eb31290', 'description' => 'Meia-Noite em Paris', 'correct_answer' => false]
                ]],
        ['id' => '8be641b2-9c73-5f02-928a-3a53b834ba36', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha um casal que tenta apagar as memórias do relacionamento?', 'difficulty' => 2, 'weight' => 378, 'alternatives' => [
                    ['id' => 'ed604101-4791-5eb3-9753-d1bef7db855f', 'description' => '500 Dias com Ela', 'correct_answer' => false],
                    ['id' => '7e8e54eb-6e4a-548a-9cb0-841d7f0590b3', 'description' => 'Meia-Noite em Paris', 'correct_answer' => false],
                    ['id' => '3356ca15-8050-5363-bfbc-5805a08e1372', 'description' => 'Brilho Eterno de uma Mente sem Lembranças', 'correct_answer' => true],
                    ['id' => '5922b834-9c2b-578d-9f03-ceae112a32b1', 'description' => 'Questão de Tempo', 'correct_answer' => false],
                    ['id' => '72591cfe-3632-581a-a9fc-18f7911a16a2', 'description' => 'Antes do Amanhecer', 'correct_answer' => false]
                ]],
        ['id' => '29b49a86-601c-55ab-8962-e15b0b6b7081', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme apresenta a relação de Tom e Summer de forma não linear?', 'difficulty' => 2, 'weight' => 355, 'alternatives' => [
                    ['id' => 'ec4d2168-3730-5095-8afd-af1e1889f7bf', 'description' => 'Her', 'correct_answer' => false],
                    ['id' => '9e09f649-bb1a-5780-8785-6a4a49a7b6d2', 'description' => 'Boyhood: Da Infância à Juventude', 'correct_answer' => false],
                    ['id' => 'a762cb7e-fe31-5122-804e-7375c7bd3fdc', 'description' => 'Meia-Noite em Paris', 'correct_answer' => false],
                    ['id' => '61121936-2c6c-5988-a12b-9fbfd668cecc', 'description' => '500 Dias com Ela', 'correct_answer' => true],
                    ['id' => 'fa27518a-8538-5bfe-8040-b98fc4881c16', 'description' => 'Questão de Tempo', 'correct_answer' => false]
                ]],
        ['id' => 'fb488bae-267e-5bf0-9dcd-190e4fb99f8b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Sofia Coppola aproxima um ator e uma jovem em Tóquio?', 'difficulty' => 2, 'weight' => 210, 'alternatives' => [
                    ['id' => '31c39746-b337-5b5e-af01-144fe39bfe94', 'description' => 'Lady Bird: A Hora de Voar', 'correct_answer' => false],
                    ['id' => '22871f34-34d1-5864-bb14-4e12eeb02ea3', 'description' => 'Antes do Amanhecer', 'correct_answer' => false],
                    ['id' => 'ec468569-e820-57d8-8571-af5dfa6b15a1', 'description' => 'Pequena Miss Sunshine', 'correct_answer' => false],
                    ['id' => 'b4f829b5-6315-50d2-be9d-ae00e11b6c83', 'description' => 'Questão de Tempo', 'correct_answer' => false],
                    ['id' => '07a9bdc5-fbc0-5fa7-988f-bf0034196cbf', 'description' => 'Encontros e Desencontros', 'correct_answer' => true]
                ]],
        ['id' => '318ea9fc-75d2-502c-acd1-43cbd9a61ba8', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Akira Kurosawa apresenta versões conflitantes de um mesmo crime narradas por diferentes envolvidos?', 'difficulty' => 3, 'weight' => 581, 'alternatives' => [
                    ['id' => '5b948394-2c08-589f-9276-9b7cb195b3d1', 'description' => 'O Samurai', 'correct_answer' => false],
                    ['id' => 'a097ece4-1ee3-5fa4-b880-b297a22e58cf', 'description' => 'A Fortaleza Escondida', 'correct_answer' => false],
                    ['id' => '7c4a3d9e-c6f6-50a6-a072-151892699484', 'description' => 'Yojimbo', 'correct_answer' => false],
                    ['id' => '311885c2-8699-5294-8ede-821f0a9b2d00', 'description' => 'Ran', 'correct_answer' => false],
                    ['id' => '0529c2a6-a9a9-5910-b481-945e2beecbeb', 'description' => 'Rashomon', 'correct_answer' => true]
                ]],
        ['id' => 'd5cf2b24-c6d2-5040-89fd-cd0fe69d07db', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Kurosawa apresenta um ronin que manipula duas facções criminosas rivais?', 'difficulty' => 3, 'weight' => 401, 'alternatives' => [
                    ['id' => 'cbd93594-9e90-509c-9ce7-288ce057a148', 'description' => 'Ran', 'correct_answer' => false],
                    ['id' => '04178d3f-b991-5369-bd7a-2ef9006ca7c5', 'description' => 'Harakiri', 'correct_answer' => false],
                    ['id' => 'b13fc178-a7a0-5c88-95b5-1c4036aa6c05', 'description' => 'Era Uma Vez no Oeste', 'correct_answer' => false],
                    ['id' => 'c0f5fde3-9e8f-571b-8191-bf653b32c7ce', 'description' => 'O Bom, o Mau e o Feio', 'correct_answer' => false],
                    ['id' => 'eb8b9081-39fd-52f9-b675-3fd9dacf998b', 'description' => 'Yojimbo', 'correct_answer' => true]
                ]],
        ['id' => '0e36b4fa-01fd-5760-83fe-c8260f51e287', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual aventura de Kurosawa acompanha dois camponeses que escoltam uma princesa e um general?', 'difficulty' => 3, 'weight' => 576, 'alternatives' => [
                    ['id' => '6706341b-103d-5e2a-ae21-03ef6b88c129', 'description' => 'Ran', 'correct_answer' => false],
                    ['id' => 'dc2526ba-238a-57af-a2d4-30fa082dd7a1', 'description' => 'Yojimbo', 'correct_answer' => false],
                    ['id' => 'e8766492-4da2-5282-a81f-a554e36e5063', 'description' => 'Rashomon', 'correct_answer' => false],
                    ['id' => 'dc06415a-a361-5417-a284-39db934922a0', 'description' => 'A Fortaleza Escondida', 'correct_answer' => true],
                    ['id' => '738458fd-426f-5b87-837d-222eec8c781b', 'description' => 'Era Uma Vez no Oeste', 'correct_answer' => false]
                ]],
        ['id' => '3f4b31ba-26b9-517a-9c31-0707da6e5e0b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual western de Sergio Leone acompanha três homens em busca de um tesouro confederado?', 'difficulty' => 3, 'weight' => 505, 'alternatives' => [
                    ['id' => '6cfcfe18-8e7c-5f0c-bffa-5c085bdf6d44', 'description' => 'O Bom, o Mau e o Feio', 'correct_answer' => true],
                    ['id' => 'd01c9eb2-4832-56d1-9e14-b027a7eaeb81', 'description' => 'O Samurai', 'correct_answer' => false],
                    ['id' => '0c3f8bcc-132f-50b2-8175-4ff2779e232a', 'description' => 'A Fortaleza Escondida', 'correct_answer' => false],
                    ['id' => '43c4a5c0-d4c8-5ec1-a4b7-b1be9b476b3f', 'description' => 'Ran', 'correct_answer' => false],
                    ['id' => '706c888d-308c-5f8f-b14c-7db9d1bf5ca4', 'description' => 'Harakiri', 'correct_answer' => false]
                ]],
        ['id' => 'e08d97ff-4508-5fb4-bf86-2dfb8474206f', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Kurosawa acompanha guerreiros contratados por camponeses para defendê-los de saqueadores?', 'difficulty' => 3, 'weight' => 543, 'alternatives' => [
                    ['id' => 'e35aa887-6b27-58dc-98bf-77acda985edc', 'description' => 'A Fortaleza Escondida', 'correct_answer' => false],
                    ['id' => '972d8b66-ef3e-5fb7-94f5-9fbd5e45922e', 'description' => 'Yojimbo', 'correct_answer' => false],
                    ['id' => '875a93de-5d6c-5a87-9343-7ade8fe493fe', 'description' => 'O Círculo Vermelho', 'correct_answer' => false],
                    ['id' => '843cf0b6-0eac-538c-a805-a7e1a4c84b4c', 'description' => 'O Samurai', 'correct_answer' => false],
                    ['id' => '06af4cf6-1f9b-56b8-971e-e6912d04ede2', 'description' => 'Os Sete Samurais', 'correct_answer' => true]
                ]],
        ['id' => 'efe63519-e2c8-56d5-9b82-b1ee085d63ec', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Masaki Kobayashi critica o código de honra samurai por meio da história de um ronin?', 'difficulty' => 3, 'weight' => 442, 'alternatives' => [
                    ['id' => '9304e67d-2010-5f15-8053-e2b0c626beab', 'description' => 'Rashomon', 'correct_answer' => false],
                    ['id' => '63722062-34c7-5943-b76a-833d5ee6db31', 'description' => 'Era Uma Vez no Oeste', 'correct_answer' => false],
                    ['id' => '20d30dbb-c5f4-538b-9778-bd4976580652', 'description' => 'Os Sete Samurais', 'correct_answer' => false],
                    ['id' => 'a6499257-3f4b-52bf-8759-6fff3802ba45', 'description' => 'Ran', 'correct_answer' => false],
                    ['id' => '673f5a3f-f23f-5a47-952f-683c19e65c89', 'description' => 'Harakiri', 'correct_answer' => true]
                ]],
        ['id' => '5f2c19b3-cc76-55ab-b80e-110ed7dd4d4d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual épico de Kurosawa adapta Rei Lear para o Japão feudal?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => '2e8bf029-3b52-56a8-95e6-67974600109d', 'description' => 'Ran', 'correct_answer' => true],
                    ['id' => 'f40fbc99-2ed2-59f4-8816-f3baf1d9ad40', 'description' => 'Harakiri', 'correct_answer' => false],
                    ['id' => 'ec8fb303-c5db-5884-bcf8-298339516d38', 'description' => 'Era Uma Vez no Oeste', 'correct_answer' => false],
                    ['id' => '2a426f27-52bf-5032-bb95-d08f8738532e', 'description' => 'Rashomon', 'correct_answer' => false],
                    ['id' => '83569387-bb25-53c9-88b3-50ed517c0f5e', 'description' => 'O Bom, o Mau e o Feio', 'correct_answer' => false]
                ]],
        ['id' => '6282a89a-71fe-53e5-84ea-3aa0b9f918c7', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme policial de Jean-Pierre Melville acompanha um assalto cuidadosamente planejado a uma joalheria?', 'difficulty' => 3, 'weight' => 532, 'alternatives' => [
                    ['id' => 'e0060195-b913-5f67-bfc8-ad63dca7fe29', 'description' => 'Rashomon', 'correct_answer' => false],
                    ['id' => '7729091c-6de5-5d0a-b149-c8140e9cc77b', 'description' => 'Os Sete Samurais', 'correct_answer' => false],
                    ['id' => '33133827-cabd-59fd-b8e5-2548924816b7', 'description' => 'Ran', 'correct_answer' => false],
                    ['id' => 'a38ae457-dc9c-58a1-88ae-add2778f432b', 'description' => 'O Samurai', 'correct_answer' => false],
                    ['id' => '7b351681-8605-59e0-9ceb-5f326a1c3439', 'description' => 'O Círculo Vermelho', 'correct_answer' => true]
                ]],
        ['id' => 'a7c1c187-b3ed-53c0-9120-bc5f586c951d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Andrei Tarkóvski acompanha um homem que promete renunciar a tudo para evitar uma catástrofe nuclear?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => '058c77cf-973f-5837-b89c-6e58c4728d9f', 'description' => 'O Espelho', 'correct_answer' => false],
                    ['id' => '2f0a36f9-054b-5897-ae8a-8c79672fc1e3', 'description' => 'O Sacrifício', 'correct_answer' => true],
                    ['id' => '6cf1bd85-07c2-51cb-bb61-ec3fc858c8bc', 'description' => 'Stalker', 'correct_answer' => false],
                    ['id' => 'f1dfecdd-c8ae-5d26-a8fb-935e9ac89857', 'description' => 'Andrei Rublev', 'correct_answer' => false],
                    ['id' => 'c5b73c26-fd2b-5d83-b30e-4b9398131cfb', 'description' => 'O Sétimo Selo', 'correct_answer' => false]
                ]],
        ['id' => '90ab0fcb-b1f8-5c4f-8ff4-341da5759e47', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Bergman apresenta um cavaleiro medieval que joga xadrez com a Morte?', 'difficulty' => 3, 'weight' => 447, 'alternatives' => [
                    ['id' => 'a957c3e0-b671-5296-9aba-2187f89667cb', 'description' => 'Morangos Silvestres', 'correct_answer' => false],
                    ['id' => '52d6f2d2-2a2c-58e8-8258-7042a0d44d46', 'description' => 'Solaris', 'correct_answer' => false],
                    ['id' => 'b9ff518f-f110-5231-9e90-cd3fb187460f', 'description' => 'O Sacrifício', 'correct_answer' => false],
                    ['id' => '9a774411-c9e3-5131-91a9-4f1ea0d48c2e', 'description' => 'Andrei Rublev', 'correct_answer' => false],
                    ['id' => '0772e40d-8cc1-5707-91b1-51b651bd15bf', 'description' => 'O Sétimo Selo', 'correct_answer' => true]
                ]],
        ['id' => '28ae3c00-a793-567c-b072-d7458f670430', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual épico de Tarkóvski acompanha um pintor de ícones na Rússia medieval?', 'difficulty' => 3, 'weight' => 413, 'alternatives' => [
                    ['id' => 'a80342d9-4f3d-5aa0-8d1f-2abadda8f4e5', 'description' => 'O Sétimo Selo', 'correct_answer' => false],
                    ['id' => 'd064c5f2-527f-5efa-9d7b-47b55001a450', 'description' => 'Através de um Espelho', 'correct_answer' => false],
                    ['id' => 'defde41c-8b81-5d92-97be-3bda2a4d2047', 'description' => 'O Sacrifício', 'correct_answer' => false],
                    ['id' => 'b47570da-e6b0-52a2-a5a1-62d9f798cd54', 'description' => 'Andrei Rublev', 'correct_answer' => true],
                    ['id' => '0a928ea1-a6e7-533e-9800-7546a776a415', 'description' => 'Persona', 'correct_answer' => false]
                ]],
        ['id' => 'eb11aa8d-8bcd-5d7d-bdc7-5074b7576f1b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Tarkóvski mistura memórias autobiográficas, sonhos e imagens históricas em estrutura não linear?', 'difficulty' => 3, 'weight' => 412, 'alternatives' => [
                    ['id' => 'abce0034-6265-5b76-b887-e532753b74f6', 'description' => 'O Espelho', 'correct_answer' => true],
                    ['id' => '58eb71bb-59af-5631-9dc4-7bdf6f0bfe4c', 'description' => 'Andrei Rublev', 'correct_answer' => false],
                    ['id' => '17ce44e9-c754-5cde-9a89-b1a07e55bb4f', 'description' => 'Persona', 'correct_answer' => false],
                    ['id' => 'b5c398c4-e8d1-58ec-b46d-d74479127b4b', 'description' => 'O Sacrifício', 'correct_answer' => false],
                    ['id' => '56b6091e-0671-558a-bbb4-c21527ce0d3e', 'description' => 'O Sétimo Selo', 'correct_answer' => false]
                ]],
        ['id' => '58d4bf64-1c37-5b8d-b4da-342a22f5fcc8', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Tarkóvski acompanha um guia que conduz dois homens por uma região proibida chamada Zona?', 'difficulty' => 3, 'weight' => 558, 'alternatives' => [
                    ['id' => '8dd313f3-d42f-5586-98b6-e1ca5beef252', 'description' => 'O Sétimo Selo', 'correct_answer' => false],
                    ['id' => '390eb0e7-c5aa-5657-9a0a-f5cf56e59c6d', 'description' => 'Através de um Espelho', 'correct_answer' => false],
                    ['id' => '8dd6cf10-dc23-5d1a-8f08-872622fbd1fd', 'description' => 'Stalker', 'correct_answer' => true],
                    ['id' => '3160169b-0086-54d4-9abd-6d0332782b6e', 'description' => 'Solaris', 'correct_answer' => false],
                    ['id' => 'a8d84304-bbc9-5d25-992d-32de747053a7', 'description' => 'Morangos Silvestres', 'correct_answer' => false]
                ]],
        ['id' => '5a0c4305-2a2f-5071-a4d9-a6d51da1da36', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Tarkóvski acompanha uma estação espacial afetada por manifestações ligadas a um oceano extraterrestre?', 'difficulty' => 3, 'weight' => 438, 'alternatives' => [
                    ['id' => 'e6f1fdc1-a37f-569b-8827-6b4ae6207ae7', 'description' => 'Andrei Rublev', 'correct_answer' => false],
                    ['id' => '63c7a9fc-89a3-53c4-8066-974be8dbccbe', 'description' => 'Solaris', 'correct_answer' => true],
                    ['id' => '5669df5b-55ea-53c4-b7d5-ab28972c82b5', 'description' => 'Persona', 'correct_answer' => false],
                    ['id' => '36e70521-36d6-53df-b490-cb3bddadabb1', 'description' => 'A Infância de Ivan', 'correct_answer' => false],
                    ['id' => 'dff32205-3adb-5400-8deb-465b358d59d1', 'description' => 'O Sétimo Selo', 'correct_answer' => false]
                ]],
        ['id' => 'f0ddfb1e-60d9-5c30-b6da-f50450d05aee', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Bergman acompanha uma família em uma ilha e a deterioração psíquica de Karin?', 'difficulty' => 3, 'weight' => 496, 'alternatives' => [
                    ['id' => 'f5d95c14-405a-5b24-9eb7-fc15e6ecd66b', 'description' => 'Solaris', 'correct_answer' => false],
                    ['id' => 'addcb4c2-990d-5710-922f-c7df4a800cc0', 'description' => 'Stalker', 'correct_answer' => false],
                    ['id' => '08354624-94f2-5219-8764-c4c56df7a7fb', 'description' => 'Através de um Espelho', 'correct_answer' => true],
                    ['id' => '983d1e54-dbd3-5c19-afcf-7f3731f4b36a', 'description' => 'O Espelho', 'correct_answer' => false],
                    ['id' => 'd28d2406-4d5c-55e7-b0c7-a147794de881', 'description' => 'O Sétimo Selo', 'correct_answer' => false]
                ]],
        ['id' => 'ceab3343-3a8d-54dd-988b-bc6553e26695', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Ingmar Bergman acompanha uma atriz que deixa de falar e a enfermeira encarregada de cuidar dela?', 'difficulty' => 3, 'weight' => 566, 'alternatives' => [
                    ['id' => 'bf0f5b48-755d-5760-b23c-ed565519460a', 'description' => 'O Espelho', 'correct_answer' => false],
                    ['id' => '91c702d1-122e-57e0-8266-9f2e485d8be1', 'description' => 'A Infância de Ivan', 'correct_answer' => false],
                    ['id' => 'b670af07-819d-5250-9800-789b846b5a49', 'description' => 'O Sacrifício', 'correct_answer' => false],
                    ['id' => 'caf39d40-1b1e-58c1-ba76-70b975efcc9a', 'description' => 'Morangos Silvestres', 'correct_answer' => false],
                    ['id' => '93fea09e-af10-57fa-842f-033ce971ff77', 'description' => 'Persona', 'correct_answer' => true]
                ]],
        ['id' => 'e1968345-8dd1-57af-90c2-74546a2baeec', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Kiarostami acompanha um menino que tenta devolver o caderno de um colega?', 'difficulty' => 3, 'weight' => 490, 'alternatives' => [
                    ['id' => 'cc8dbb78-ca55-5774-96a3-59dd5e0ecb5e', 'description' => 'A Professora de Piano', 'correct_answer' => false],
                    ['id' => '4520dbd0-19e0-5c2b-9c85-ffca561170bb', 'description' => 'O Apartamento', 'correct_answer' => false],
                    ['id' => '47deb660-f529-5c29-9327-21edbac24dec', 'description' => 'Onde Fica a Casa do Meu Amigo?', 'correct_answer' => true],
                    ['id' => 'e902adc7-ef46-54b1-8eab-f214e7361982', 'description' => 'Gosto de Cereja', 'correct_answer' => false],
                    ['id' => '8654e2bc-9b91-5ae4-88b0-49e2c9f08daf', 'description' => 'Close-Up', 'correct_answer' => false]
                ]],
        ['id' => '65ec2da4-96f5-5c4a-acde-5b5798361a68', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual suspense de Haneke gira em torno de fitas de vídeo anônimas enviadas a uma família parisiense?', 'difficulty' => 3, 'weight' => 412, 'alternatives' => [
                    ['id' => '93444509-f3ea-50aa-ab50-ed7495074aec', 'description' => 'A Professora de Piano', 'correct_answer' => false],
                    ['id' => 'efffd9d8-808b-5896-b790-7ad84ca0d08f', 'description' => 'Onde Fica a Casa do Meu Amigo?', 'correct_answer' => false],
                    ['id' => '713647f6-32c2-5316-9615-a4789909772d', 'description' => 'Caché', 'correct_answer' => true],
                    ['id' => '271dde74-67e4-55bf-a6c9-659963381b93', 'description' => 'Gosto de Cereja', 'correct_answer' => false],
                    ['id' => 'e8c46832-bef6-5281-a916-a14145614c42', 'description' => 'Close-Up', 'correct_answer' => false]
                ]],
        ['id' => '349db47c-5ca2-5f5a-ae92-40bfd066ada9', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Kiarostami acompanha um homem que procura alguém disposto a ajudá-lo após sua morte?', 'difficulty' => 3, 'weight' => 538, 'alternatives' => [
                    ['id' => 'fcd5e287-e55a-5670-b27c-bb8ae8a991a9', 'description' => 'A Separação', 'correct_answer' => false],
                    ['id' => '89ee591a-95cf-52c3-a1b7-7a5b165a5b21', 'description' => 'Gosto de Cereja', 'correct_answer' => true],
                    ['id' => '01ff7cef-57fd-5c8e-aaf8-02ae8cd4abd1', 'description' => 'A Fita Branca', 'correct_answer' => false],
                    ['id' => '11b9d93f-c45c-53bf-a7ae-ec818d7f1df9', 'description' => 'Caché', 'correct_answer' => false],
                    ['id' => '340fc0c4-c0c3-5781-850d-bcd0453cc639', 'description' => 'A Professora de Piano', 'correct_answer' => false]
                ]],
        ['id' => 'd0a3a79e-2fdb-5f11-b3a5-0dbcad1a0ae0', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha um prisioneiro de Sonderkommando em Auschwitz que tenta dar sepultamento a um menino?', 'difficulty' => 3, 'weight' => 539, 'alternatives' => [
                    ['id' => 'e38a9609-11a8-591e-899e-92c3c93702a4', 'description' => 'A Fita Branca', 'correct_answer' => false],
                    ['id' => '4b627899-210d-5d07-9efe-b3cf5a44a59d', 'description' => 'A Professora de Piano', 'correct_answer' => false],
                    ['id' => '84573ec7-7e6a-5192-af67-c979c8f5c4d1', 'description' => 'Onde Fica a Casa do Meu Amigo?', 'correct_answer' => false],
                    ['id' => 'd18e5567-aa85-5143-9e59-304ff866c1e5', 'description' => 'Close-Up', 'correct_answer' => false],
                    ['id' => '26a540da-d5dc-591a-8317-8fef32cd5374', 'description' => 'O Filho de Saul', 'correct_answer' => true]
                ]],
        ['id' => '7bdbe90a-6b14-5088-9cd1-6eef52fa1904', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Haneke retrata acontecimentos inquietantes em uma aldeia alemã às vésperas da Primeira Guerra Mundial?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => 'c8e42780-32cf-550c-b94e-d3470b3fef52', 'description' => 'A Fita Branca', 'correct_answer' => true],
                    ['id' => 'e9d94250-c4b0-5d3a-9287-dfc0d3f85058', 'description' => 'Close-Up', 'correct_answer' => false],
                    ['id' => '46760467-57c5-5dea-a3f6-c1456ada0b0a', 'description' => 'O Apartamento', 'correct_answer' => false],
                    ['id' => '89bf80af-6d86-5282-8b1d-927d53fadc92', 'description' => 'A Professora de Piano', 'correct_answer' => false],
                    ['id' => 'ba90bd5a-71a9-5a25-ae5c-522db544a434', 'description' => 'Caché', 'correct_answer' => false]
                ]],
        ['id' => '4dcd3158-f3b5-51ab-b05d-ca6e817c0ba0', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme iraniano de Farhadi conecta uma montagem teatral de A Morte do Caixeiro-Viajante a um ataque contra uma mulher?', 'difficulty' => 3, 'weight' => 424, 'alternatives' => [
                    ['id' => '1a060b95-2153-5878-aa5b-9615a485a795', 'description' => 'A Separação', 'correct_answer' => false],
                    ['id' => '8b5fbb58-edc6-558a-a63a-6d786d104195', 'description' => 'O Filho de Saul', 'correct_answer' => false],
                    ['id' => '1131193f-dfe5-59c0-a9cd-3b2fe77ceb77', 'description' => 'Onde Fica a Casa do Meu Amigo?', 'correct_answer' => false],
                    ['id' => 'cad978b5-31c8-5143-8b33-fee280af94b4', 'description' => 'O Apartamento', 'correct_answer' => true],
                    ['id' => 'fb208724-7bc5-565b-b472-19325e29e1c0', 'description' => 'A Professora de Piano', 'correct_answer' => false]
                ]],
        ['id' => '81f8fd4e-afa8-5523-885f-e06471218dfd', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Haneke acompanha um casal de idosos após a mulher sofrer um derrame?', 'difficulty' => 3, 'weight' => 587, 'alternatives' => [
                    ['id' => '5fc958e2-fd0d-5c3c-afe0-a9358fb6c115', 'description' => 'Onde Fica a Casa do Meu Amigo?', 'correct_answer' => false],
                    ['id' => '98f3310b-ddc1-529e-98d9-b9b2e1fa397a', 'description' => 'O Apartamento', 'correct_answer' => false],
                    ['id' => '5572f2f1-a1aa-5864-9e26-350575cbbb2b', 'description' => 'Amor', 'correct_answer' => true],
                    ['id' => '80ba0239-e7d8-5325-ad39-45bc77ae0d83', 'description' => 'Close-Up', 'correct_answer' => false],
                    ['id' => 'edf07c5d-5ba4-5c42-853a-2ae88527affa', 'description' => 'A Fita Branca', 'correct_answer' => false]
                ]],
        ['id' => '42c0f5f1-9427-5d3b-9b34-1e85c25a0485', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Michael Haneke acompanha uma professora de piano vienense com uma relação complexa com um aluno?', 'difficulty' => 3, 'weight' => 415, 'alternatives' => [
                    ['id' => 'f1a34acd-4907-5260-9fe1-b782ec6282fc', 'description' => 'A Professora de Piano', 'correct_answer' => true],
                    ['id' => '968dfd19-d72e-52bc-ab0d-590327696d8f', 'description' => 'A Separação', 'correct_answer' => false],
                    ['id' => 'a8ab76eb-fa86-510a-bfaf-5dbd63825bf7', 'description' => 'Onde Fica a Casa do Meu Amigo?', 'correct_answer' => false],
                    ['id' => '55e504b0-5d4a-5e67-b016-b7b5fae90f16', 'description' => 'Close-Up', 'correct_answer' => false],
                    ['id' => '020d5273-815a-5b37-bd80-14aae7c3cc26', 'description' => 'Amor', 'correct_answer' => false]
                ]],
        ['id' => 'a7eff119-10e0-53fc-a131-9aaef2c0a1aa', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Christopher Nolan acompanha Leonard Shelby, que não consegue formar novas memórias, em busca do assassino da esposa?', 'difficulty' => 3, 'weight' => 471, 'alternatives' => [
                    ['id' => 'd46f2648-16b3-5211-b942-02b1a7283f20', 'description' => 'O Homem Duplicado', 'correct_answer' => false],
                    ['id' => '7d1d839f-f242-54c6-8009-c80be7151165', 'description' => 'Amnésia', 'correct_answer' => true],
                    ['id' => 'b025f130-4dfc-52f3-b478-9f6e1cfd3bdb', 'description' => 'Insônia', 'correct_answer' => false],
                    ['id' => '58dcf7a4-b4eb-5e71-b576-f64e37d20387', 'description' => 'Primer', 'correct_answer' => false],
                    ['id' => 'c09369f1-54e3-5ab1-943f-f00051c8f867', 'description' => 'O Operário', 'correct_answer' => false]
                ]],
        ['id' => '3efbf653-4993-5643-b234-908a3b4060cb', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de ficção científica acompanha amigos durante um jantar na noite em que um cometa passa pela Terra?', 'difficulty' => 3, 'weight' => 541, 'alternatives' => [
                    ['id' => '1db346b4-eccb-5987-a278-809818fb189e', 'description' => 'Coherence', 'correct_answer' => true],
                    ['id' => 'a249de4e-20f4-5534-81f1-f13859c68144', 'description' => 'Primer', 'correct_answer' => false],
                    ['id' => '5d551a0f-513d-5d68-91a8-8ae995bee17d', 'description' => 'O Homem Duplicado', 'correct_answer' => false],
                    ['id' => '9416eea7-c778-5c8a-9e2c-655ddbe27250', 'description' => 'O Predestinado', 'correct_answer' => false],
                    ['id' => '8b5f9072-e2e9-5e3f-b577-41d1976d61f5', 'description' => 'Insônia', 'correct_answer' => false]
                ]],
        ['id' => '30971484-0147-5196-a22e-98387918970e', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual longa de estreia de Christopher Nolan acompanha um escritor que passa a seguir desconhecidos pelas ruas de Londres?', 'difficulty' => 3, 'weight' => 540, 'alternatives' => [
                    ['id' => '0c39154e-c4a9-5ebc-b31c-c9a583e737a2', 'description' => 'Insônia', 'correct_answer' => false],
                    ['id' => 'd0dc3105-5b7a-5532-85ff-5b5ac5d53b66', 'description' => 'Timecrimes', 'correct_answer' => false],
                    ['id' => 'babf2438-fa79-5ce3-9c84-acb003bf8b4a', 'description' => 'O Operário', 'correct_answer' => false],
                    ['id' => '8474beaa-4ba4-5197-9115-898e2075a41e', 'description' => 'Coherence', 'correct_answer' => false],
                    ['id' => 'dbb9874d-79a7-57e7-b005-a4e302b80d85', 'description' => 'Following', 'correct_answer' => true]
                ]],
        ['id' => 'e82cfe9f-4b80-544e-9d23-f79bb4caa21c', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme espanhol acompanha um homem que entra em um ciclo temporal após encontrar uma figura misteriosa na floresta?', 'difficulty' => 3, 'weight' => 410, 'alternatives' => [
                    ['id' => 'c2adb95b-0177-5a13-a4a0-c03e38b64a44', 'description' => 'O Homem Duplicado', 'correct_answer' => false],
                    ['id' => 'e1a85fb3-9032-58b0-bebc-0cf6d8adf858', 'description' => 'Coherence', 'correct_answer' => false],
                    ['id' => 'b917841d-8502-504f-9d1d-c0f31accbb8a', 'description' => 'Timecrimes', 'correct_answer' => true],
                    ['id' => 'fc10fb96-19d9-525b-83d4-8d84ca1b1ed8', 'description' => 'O Operário', 'correct_answer' => false],
                    ['id' => 'a3c45117-9d74-5247-8a05-5f35d0f35295', 'description' => 'A Máquina do Tempo', 'correct_answer' => false]
                ]],
        ['id' => '3b60d868-4d32-5a92-bb8f-66a463641e99', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Nolan acompanha dois detetives investigando um assassinato em uma cidade do Alasca durante o sol da meia-noite?', 'difficulty' => 3, 'weight' => 552, 'alternatives' => [
                    ['id' => '6dac3051-1109-5a39-9b18-49f33aaf515e', 'description' => 'Primer', 'correct_answer' => false],
                    ['id' => '7bf0f3db-52bb-525b-8654-682839c976be', 'description' => 'Amnésia', 'correct_answer' => false],
                    ['id' => 'ebf09930-1193-5880-8dcc-12d0ccb70349', 'description' => 'Timecrimes', 'correct_answer' => false],
                    ['id' => 'f47dd475-9178-5a18-b0b9-9e24c5f50f53', 'description' => 'A Máquina do Tempo', 'correct_answer' => false],
                    ['id' => '65f2ff39-49ec-5cdb-a4a6-b8b3979c3c3e', 'description' => 'Insônia', 'correct_answer' => true]
                ]],
        ['id' => '1ba5d3e8-4b06-512b-b017-28389b4614a1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual adaptação cinematográfica de H. G. Wells acompanha um inventor que viaja a um futuro distante dividido entre Eloi e Morlocks?', 'difficulty' => 3, 'weight' => 442, 'alternatives' => [
                    ['id' => '4756c73a-a6e5-5a51-aa2b-fb4271af9d1b', 'description' => 'O Homem Duplicado', 'correct_answer' => false],
                    ['id' => '69efe20f-06e9-5efb-8d38-fd54bd229bb7', 'description' => 'A Máquina do Tempo', 'correct_answer' => true],
                    ['id' => 'ab85efbc-9add-5f2e-8729-84e40f781589', 'description' => 'Coherence', 'correct_answer' => false],
                    ['id' => 'c9b495a1-b021-57d6-84af-a13e22a4efd0', 'description' => 'Following', 'correct_answer' => false],
                    ['id' => 'd87b8a0e-e16d-5f89-94ec-47fba7f5b300', 'description' => 'Timecrimes', 'correct_answer' => false]
                ]],
        ['id' => 'fd87090c-7b5b-57f4-b83f-c1c7b7a28b1f', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual ficção científica independente acompanha dois engenheiros que descobrem acidentalmente uma forma de viagem no tempo?', 'difficulty' => 3, 'weight' => 502, 'alternatives' => [
                    ['id' => 'fae8b032-6b9f-5e61-b1ef-66a2fb9788d6', 'description' => 'Coherence', 'correct_answer' => false],
                    ['id' => 'bf19f49a-b20d-51bb-832b-ab6cb71ed813', 'description' => 'O Operário', 'correct_answer' => false],
                    ['id' => 'f3b0a5ef-dc88-5a81-be4b-b072cc6a8a0e', 'description' => 'O Predestinado', 'correct_answer' => false],
                    ['id' => '45ff3a45-58e3-5175-82b0-e16fac705e99', 'description' => 'Insônia', 'correct_answer' => false],
                    ['id' => 'df83f3b3-e322-5e7e-90cd-700def80e776', 'description' => 'Primer', 'correct_answer' => true]
                ]],
        ['id' => '26d8e3ff-069e-5194-bdd8-0fd886d8e069', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Denis Villeneuve acompanha um professor que encontra um ator fisicamente idêntico a si?', 'difficulty' => 3, 'weight' => 552, 'alternatives' => [
                    ['id' => 'f948ab14-2b59-56bf-ae36-9df032e4b7df', 'description' => 'Primer', 'correct_answer' => false],
                    ['id' => '380ad0b7-a622-59ab-8cfb-a7db36ff5e39', 'description' => 'Following', 'correct_answer' => false],
                    ['id' => 'e95f8d06-e211-562d-b24d-14fcacd03745', 'description' => 'Coherence', 'correct_answer' => false],
                    ['id' => '400b3471-fab6-5789-b2b9-4db7e480aadd', 'description' => 'Timecrimes', 'correct_answer' => false],
                    ['id' => '766990a4-95dc-5126-9d31-d3da1adba866', 'description' => 'O Homem Duplicado', 'correct_answer' => true]
                ]],
        ['id' => '014076d9-b32b-53aa-a4d8-ab8d3f654b7d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme brasileiro retrata um povoado do sertão que desaparece dos mapas e enfrenta invasores estrangeiros?', 'difficulty' => 3, 'weight' => 562, 'alternatives' => [
                    ['id' => '13b986af-9b00-5b7e-b098-29f4d1188663', 'description' => 'Bacurau', 'correct_answer' => true],
                    ['id' => '98a85a65-f6c5-5570-a57e-2d1eff5e6a73', 'description' => 'O Som ao Redor', 'correct_answer' => false],
                    ['id' => 'e71c740b-9668-5d80-93c6-4635f1781710', 'description' => 'Cidade de Deus', 'correct_answer' => false],
                    ['id' => 'd8eb19cc-a796-5673-8234-dd399585a45a', 'description' => 'Pixote: A Lei do Mais Fraco', 'correct_answer' => false],
                    ['id' => '9d9f56dd-aef5-5b95-9587-8a110f5d3b59', 'description' => 'Eles Não Usam Black-Tie', 'correct_answer' => false]
                ]],
        ['id' => 'cead0d10-75c9-5d47-952d-5aafad4df080', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme brasileiro acompanha João Grilo e Chicó em aventuras no sertão nordestino?', 'difficulty' => 3, 'weight' => 434, 'alternatives' => [
                    ['id' => '23b646f3-eb16-503c-8b7a-c1ea1defbae4', 'description' => 'O Auto da Compadecida', 'correct_answer' => true],
                    ['id' => '19edc42e-7502-5533-9874-ade999085894', 'description' => 'Carandiru', 'correct_answer' => false],
                    ['id' => '5cfa9b9f-06cd-5c4f-8e27-f0ed21b4e85d', 'description' => 'Bacurau', 'correct_answer' => false],
                    ['id' => '1fe3953b-b516-58ec-aff9-f01a5aab946e', 'description' => 'Aquarius', 'correct_answer' => false],
                    ['id' => 'f4b6078a-b3ab-5d57-994a-9ecf79ab0c43', 'description' => 'Eles Não Usam Black-Tie', 'correct_answer' => false]
                ]],
        ['id' => '56948810-4f11-5a33-a76f-7f85838e805e', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme acompanha a empregada doméstica Val e a chegada de sua filha Jéssica à casa dos patrões?', 'difficulty' => 3, 'weight' => 460, 'alternatives' => [
                    ['id' => '209db9bf-72fc-56f3-baaa-76157c0971e8', 'description' => 'Que Horas Ela Volta?', 'correct_answer' => true],
                    ['id' => 'b71d86a7-949b-5e5a-875a-9967a04faf88', 'description' => 'Central do Brasil', 'correct_answer' => false],
                    ['id' => 'cd85207d-d4f7-50e1-87dc-8ec0bfc3efc9', 'description' => 'Carandiru', 'correct_answer' => false],
                    ['id' => 'ceee3437-433c-5a62-953b-e9a4cad4b2ae', 'description' => 'Bacurau', 'correct_answer' => false],
                    ['id' => 'b563d181-af13-578b-ab35-cda8a3f4499e', 'description' => 'O Auto da Compadecida', 'correct_answer' => false]
                ]],
        ['id' => 'a10ea717-e79d-58aa-b5be-55392d9e8bb4', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme brasileiro acompanha Buscapé e a expansão da criminalidade em uma comunidade carioca?', 'difficulty' => 3, 'weight' => 419, 'alternatives' => [
                    ['id' => '3b0d016e-ce3e-5573-ad4c-2cd64cb6ef5c', 'description' => 'Carandiru', 'correct_answer' => false],
                    ['id' => 'c99ab14c-154f-5c6c-ab32-382716ab5e28', 'description' => 'Cidade de Deus', 'correct_answer' => true],
                    ['id' => 'ef5e63e2-eed1-59cc-8fe9-4f05799c26ec', 'description' => 'O Som ao Redor', 'correct_answer' => false],
                    ['id' => '45682c7d-71e8-5263-840b-34e0546f278f', 'description' => 'Eles Não Usam Black-Tie', 'correct_answer' => false],
                    ['id' => '3e6ac144-aea0-5765-81cf-75b2569999ef', 'description' => 'Aquarius', 'correct_answer' => false]
                ]],
        ['id' => '591b6511-78e6-5c66-94b7-bfdab85533b7', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Hector Babenco acompanha um menino em situação de rua envolvido em violência e exploração?', 'difficulty' => 3, 'weight' => 491, 'alternatives' => [
                    ['id' => '960c6ef3-0417-5b4e-bace-9be26ead4a16', 'description' => 'Bacurau', 'correct_answer' => false],
                    ['id' => 'bec754ba-1bce-511e-84d0-c1acd24854d5', 'description' => 'Pixote: A Lei do Mais Fraco', 'correct_answer' => true],
                    ['id' => '07b728a8-61ad-5c34-93ec-efa9432716b2', 'description' => 'O Auto da Compadecida', 'correct_answer' => false],
                    ['id' => '3f00db59-d233-59eb-829c-0406fec1b3ce', 'description' => 'Cidade de Deus', 'correct_answer' => false],
                    ['id' => '2e005f53-0881-52ba-90e0-37b9e6b7982f', 'description' => 'Eles Não Usam Black-Tie', 'correct_answer' => false]
                ]],
        ['id' => '498584f7-4ebf-5f37-9e1b-0d0d9442bf39', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme brasileiro acompanha Dora e o menino Josué em uma viagem pelo interior do país?', 'difficulty' => 3, 'weight' => 547, 'alternatives' => [
                    ['id' => '83c80097-f757-5e6d-b7cf-862a8f9f7517', 'description' => 'Central do Brasil', 'correct_answer' => true],
                    ['id' => 'b5fc4666-cd8c-5d92-80ed-fbe2464b4cfd', 'description' => 'Bacurau', 'correct_answer' => false],
                    ['id' => '0ee04348-866d-5674-a8cb-32b0ccc5d363', 'description' => 'Eles Não Usam Black-Tie', 'correct_answer' => false],
                    ['id' => '4aa84a14-749c-502f-a30a-1f8fd046e701', 'description' => 'Carandiru', 'correct_answer' => false],
                    ['id' => 'f904b2a7-ad36-5240-85c8-6fdc982e5e29', 'description' => 'Aquarius', 'correct_answer' => false]
                ]],
        ['id' => 'd8326b0d-14bd-5642-a170-ce6428f516a0', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Hector Babenco retrata histórias de detentos em um presídio de São Paulo?', 'difficulty' => 3, 'weight' => 598, 'alternatives' => [
                    ['id' => 'efdca94d-a82f-51e8-bf83-23ecc97bb56f', 'description' => 'Carandiru', 'correct_answer' => true],
                    ['id' => 'cac824cc-b943-5c8f-aff4-474dbf9ec5fa', 'description' => 'Aquarius', 'correct_answer' => false],
                    ['id' => '98b3b22c-367f-52fd-b710-15f076c1e31b', 'description' => 'Central do Brasil', 'correct_answer' => false],
                    ['id' => '0cef63fc-7789-5e85-8d7c-412d59891d4d', 'description' => 'Eles Não Usam Black-Tie', 'correct_answer' => false],
                    ['id' => '2f97fbc4-989d-5f71-b855-18def8075ee6', 'description' => 'O Auto da Compadecida', 'correct_answer' => false]
                ]],
        ['id' => 'b4dc8ae4-28bf-5ec7-b6f4-89974e3d7f54', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Kleber Mendonça Filho retrata tensões sociais em uma rua de classe média no Recife?', 'difficulty' => 3, 'weight' => 563, 'alternatives' => [
                    ['id' => '829c1f11-bb81-5280-aadd-716b3efb0872', 'description' => 'Pixote: A Lei do Mais Fraco', 'correct_answer' => false],
                    ['id' => '6c0a6211-1b67-5c9a-a843-1877cef44080', 'description' => 'O Som ao Redor', 'correct_answer' => true],
                    ['id' => '13cc63bd-45a3-5f04-b304-031fdefa6190', 'description' => 'Que Horas Ela Volta?', 'correct_answer' => false],
                    ['id' => '364e0e61-e932-5567-b831-988e8083e1b5', 'description' => 'Central do Brasil', 'correct_answer' => false],
                    ['id' => '26ed12c6-6797-5dee-a46b-d6445527bb69', 'description' => 'Bacurau', 'correct_answer' => false]
                ]],
        ['id' => 'e7d6364e-d116-5682-8b73-1b2579223fcd', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Renoir acompanha oficiais franceses prisioneiros durante a Primeira Guerra Mundial?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '7663c491-1bcb-5f63-b0fb-f7de43a27c74', 'description' => 'O Testamento do Dr. Mabuse', 'correct_answer' => false],
                    ['id' => '601d2679-6d3f-56f5-9637-9181d2a80161', 'description' => 'A Paixão de Joana d\'Arc', 'correct_answer' => false],
                    ['id' => '7dc2e0ad-560d-5069-83b0-d66fd379ef7e', 'description' => 'Aurora', 'correct_answer' => false],
                    ['id' => '8ad758f5-e201-554f-9487-963b8e407519', 'description' => 'M, o Vampiro de Düsseldorf', 'correct_answer' => false],
                    ['id' => 'ec51b969-342c-564a-bc4d-6523a40bf585', 'description' => 'A Grande Ilusão', 'correct_answer' => true]
                ]],
        ['id' => '7d7b438a-187f-54dd-9d62-718f7b4ba122', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual sátira de Jean Renoir retrata as relações entre aristocratas e empregados durante uma caçada em uma propriedade rural?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => '09822b83-d476-57d5-b329-ce0a77f3c445', 'description' => 'A Paixão de Joana d\'Arc', 'correct_answer' => false],
                    ['id' => 'a71ed9c0-03b2-5685-a903-cac7bb65c609', 'description' => 'O Atalante', 'correct_answer' => false],
                    ['id' => 'c1c8c960-7920-59be-8dc1-dc0cebdeb77a', 'description' => 'Aurora', 'correct_answer' => false],
                    ['id' => 'fb6a8ffc-e97d-5a8b-8d3d-ea93fa1746d8', 'description' => 'A Regra do Jogo', 'correct_answer' => true],
                    ['id' => '460f38f0-aa05-53ca-89fa-c15aaeae5423', 'description' => 'M, o Vampiro de Düsseldorf', 'correct_answer' => false]
                ]],
        ['id' => '91edae31-341f-53bf-8591-d2f156831abd', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Fritz Lang acompanha a perseguição policial e criminosa a um assassino de crianças?', 'difficulty' => 4, 'weight' => 609, 'alternatives' => [
                    ['id' => '3f03bc53-5599-55a0-ba52-854479526ca2', 'description' => 'Aurora', 'correct_answer' => false],
                    ['id' => '7e920734-69a0-5f65-a953-0633b36d285e', 'description' => 'O Atalante', 'correct_answer' => false],
                    ['id' => '29d3064a-e7e3-5317-808d-a6d75658c339', 'description' => 'A Paixão de Joana d\'Arc', 'correct_answer' => false],
                    ['id' => 'fb7fd216-fc1a-54b2-88b6-43a4bdbb6d6f', 'description' => 'M, o Vampiro de Düsseldorf', 'correct_answer' => true],
                    ['id' => 'dc7ce8c4-0026-5712-a7b9-7ec303c98547', 'description' => 'A Caixa de Pandora', 'correct_answer' => false]
                ]],
        ['id' => 'ca869a36-4bdd-5e18-b4bb-bb2c1bebccb9', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Murnau acompanha um porteiro de hotel rebaixado de função e privado de seu prestígio?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => '321e910d-42b0-5d96-a839-bd2705d4d8a8', 'description' => 'M, o Vampiro de Düsseldorf', 'correct_answer' => false],
                    ['id' => '1bb3d37f-d41c-5f18-a286-4d4cf58c7cb8', 'description' => 'A Paixão de Joana d\'Arc', 'correct_answer' => false],
                    ['id' => '3fc23a1a-1b4a-5a8f-9336-c058678e9995', 'description' => 'O Atalante', 'correct_answer' => false],
                    ['id' => '4ce1cd21-7840-56af-8c03-f2941f9b1ea4', 'description' => 'O Testamento do Dr. Mabuse', 'correct_answer' => false],
                    ['id' => '931ac0d5-969f-5ed7-b7e2-3cbb4ea855b6', 'description' => 'O Último dos Homens', 'correct_answer' => true]
                ]],
        ['id' => '2d0dd4bd-3511-5411-a7cc-4367a7c19a63', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de F. W. Murnau acompanha um fazendeiro manipulado para tentar matar a própria esposa?', 'difficulty' => 4, 'weight' => 789, 'alternatives' => [
                    ['id' => 'c233b77d-22f8-51a2-a166-3276e008b3d9', 'description' => 'A Regra do Jogo', 'correct_answer' => false],
                    ['id' => 'c06768b4-a1da-5dc5-8166-0e774c32237b', 'description' => 'O Atalante', 'correct_answer' => false],
                    ['id' => 'c3447f42-f5cc-52b0-b492-160a48f68545', 'description' => 'A Caixa de Pandora', 'correct_answer' => false],
                    ['id' => '0ee94f7c-0d20-5867-843b-36791761064b', 'description' => 'O Testamento do Dr. Mabuse', 'correct_answer' => false],
                    ['id' => '03318f72-9413-5815-a515-7a8b6d8520f5', 'description' => 'Aurora', 'correct_answer' => true]
                ]],
        ['id' => 'd37d8a0a-68d6-517e-a095-edf012be039b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Jean Vigo acompanha um casal recém-casado que vive em uma barcaça no rio Sena?', 'difficulty' => 4, 'weight' => 795, 'alternatives' => [
                    ['id' => '15526ba2-62a2-5e67-88c0-617558b6d192', 'description' => 'O Atalante', 'correct_answer' => true],
                    ['id' => '8d884339-f550-50db-a978-dd795b8bebd0', 'description' => 'A Caixa de Pandora', 'correct_answer' => false],
                    ['id' => 'be60b2b3-5093-5aac-a63e-35697fa079b2', 'description' => 'O Último dos Homens', 'correct_answer' => false],
                    ['id' => '61c633ed-bf32-5109-94fd-5af96815a0dc', 'description' => 'O Testamento do Dr. Mabuse', 'correct_answer' => false],
                    ['id' => '68f01e1d-ed46-5444-a77f-0a7d915c7419', 'description' => 'A Paixão de Joana d\'Arc', 'correct_answer' => false]
                ]],
        ['id' => 'c5e8d115-694b-5398-a743-0bb20ed75d50', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de G. W. Pabst tem Louise Brooks no papel de Lulu?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => '7a72ab86-f75f-5cc1-ac31-cc9fdef4e190', 'description' => 'A Regra do Jogo', 'correct_answer' => false],
                    ['id' => '3c17e584-8265-5b94-bba1-ec1e08bb9760', 'description' => 'A Paixão de Joana d\'Arc', 'correct_answer' => false],
                    ['id' => 'f6665524-dc71-51a3-99ff-177dbecf14f3', 'description' => 'A Caixa de Pandora', 'correct_answer' => true],
                    ['id' => 'bab23a1e-5f5a-5271-a19c-3f5e4a0e0419', 'description' => 'A Grande Ilusão', 'correct_answer' => false],
                    ['id' => 'a96e8860-8dc4-508b-b5a4-1b4b7fd43add', 'description' => 'Zero em Comportamento', 'correct_answer' => false]
                ]],
        ['id' => 'c76ecdca-5ff2-5d04-9aad-6cf4c865e9b5', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Carl Theodor Dreyer é conhecido pelos primeiros planos do julgamento de Joana d\'Arc?', 'difficulty' => 4, 'weight' => 792, 'alternatives' => [
                    ['id' => '4ef02092-acc8-5859-b113-e2b5934847e6', 'description' => 'Aurora', 'correct_answer' => false],
                    ['id' => 'acb33d3d-2296-50d2-882a-753d64c7aa65', 'description' => 'A Caixa de Pandora', 'correct_answer' => false],
                    ['id' => 'f640e768-1f8b-5b78-83eb-15f4af170d10', 'description' => 'A Paixão de Joana d\'Arc', 'correct_answer' => true],
                    ['id' => '025f019c-e78a-5e90-9351-2e81675fa6eb', 'description' => 'O Último dos Homens', 'correct_answer' => false],
                    ['id' => 'c20b09ef-c92e-5d33-be87-b9a0028d6408', 'description' => 'A Regra do Jogo', 'correct_answer' => false]
                ]],
        ['id' => '40846eb5-8325-51ba-9d57-15e0039805f8', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Alain Resnais apresenta personagens em um hotel que discutem se já se encontraram antes?', 'difficulty' => 4, 'weight' => 643, 'alternatives' => [
                    ['id' => 'af1d4ca7-aee6-5703-9c69-d41bbc6dda08', 'description' => 'A Noite', 'correct_answer' => false],
                    ['id' => '2b2ec3b1-e16c-587f-8f41-f351e1409efd', 'description' => 'A Aventura', 'correct_answer' => false],
                    ['id' => '1c20067d-6df7-533c-8fb3-4d7f2c15abb8', 'description' => 'O Ano Passado em Marienbad', 'correct_answer' => true],
                    ['id' => 'b2b6574e-3134-5fe0-8410-e020394f131d', 'description' => '8½', 'correct_answer' => false],
                    ['id' => 'c4621b0d-d5f7-5dca-bfaa-ff54ea9a1395', 'description' => 'O Eclipse', 'correct_answer' => false]
                ]],
        ['id' => 'f02b6962-aa65-59d4-a8f8-9e031a06ad7b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Alain Resnais combina um breve romance em Hiroshima com lembranças da ocupação nazista na França?', 'difficulty' => 4, 'weight' => 611, 'alternatives' => [
                    ['id' => '067d80f7-1292-54dc-9ded-dbf69369000b', 'description' => 'Blow-Up: Depois Daquele Beijo', 'correct_answer' => false],
                    ['id' => '9af28766-9b90-5aa9-b659-1a713eabb932', 'description' => 'A Doce Vida', 'correct_answer' => false],
                    ['id' => 'f461367f-a6e3-5b07-8a3f-841b3fc1c289', 'description' => 'Hiroshima, Meu Amor', 'correct_answer' => true],
                    ['id' => '404d25d7-5436-5b47-a16c-12bfb16f5f66', 'description' => 'A Aventura', 'correct_answer' => false],
                    ['id' => '954444d3-bc73-57e0-a118-a452c28bd72e', 'description' => 'A Noite', 'correct_answer' => false]
                ]],
        ['id' => '0d820ad8-ab59-5bc5-a64d-3e3fbe603472', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Federico Fellini acompanha o jornalista Marcello Rubini na vida noturna de Roma?', 'difficulty' => 4, 'weight' => 709, 'alternatives' => [
                    ['id' => 'cbfff18f-8d0b-51e3-9b6e-edb7b39db6ef', 'description' => 'Acossado', 'correct_answer' => false],
                    ['id' => 'e37655cf-935e-593e-a9ac-a2f5aec0f37f', 'description' => 'O Eclipse', 'correct_answer' => false],
                    ['id' => 'ba8c2c94-c0e6-58e1-89aa-073af800ae1f', 'description' => 'A Noite', 'correct_answer' => false],
                    ['id' => 'debf562c-3610-5f1a-99a3-3fb6f0ba08dc', 'description' => 'Hiroshima, Meu Amor', 'correct_answer' => false],
                    ['id' => 'dd1d3928-7af5-5288-88d5-95e46e4fc3f9', 'description' => 'A Doce Vida', 'correct_answer' => true]
                ]],
        ['id' => '09cd5af2-8aa2-5f77-a1dd-67d153129540', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Fellini acompanha um cineasta em crise criativa durante a preparação de seu próximo longa?', 'difficulty' => 4, 'weight' => 701, 'alternatives' => [
                    ['id' => 'd41ed22c-28f4-5dd5-8ae7-641b8b55fab8', 'description' => 'A Noite', 'correct_answer' => false],
                    ['id' => 'a5eefd2a-cac5-5793-bca5-9a5a549ba6dd', 'description' => 'O Desprezo', 'correct_answer' => false],
                    ['id' => '9bf15d82-0521-5db0-9ef1-8c008f7a1f09', 'description' => 'O Ano Passado em Marienbad', 'correct_answer' => false],
                    ['id' => '7db077a0-b3d3-5b08-a398-5b12ba5dc377', 'description' => 'Blow-Up: Depois Daquele Beijo', 'correct_answer' => false],
                    ['id' => 'f27c9bdf-7840-5479-ab6c-b5c1811d8513', 'description' => '8½', 'correct_answer' => true]
                ]],
        ['id' => '7ab58ba7-3583-5e4f-af14-5948b4c5cd7b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Godard acompanha Michel, um criminoso em fuga, e Patricia, uma estudante norte-americana em Paris?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => '1fb344ab-c438-557a-8287-b6ed9a48a44c', 'description' => 'A Doce Vida', 'correct_answer' => false],
                    ['id' => 'cf3cf51c-c6ad-5202-8d34-25ac02a10f5e', 'description' => 'Hiroshima, Meu Amor', 'correct_answer' => false],
                    ['id' => '30328e51-44a2-538b-84c0-bed04e059b90', 'description' => 'O Ano Passado em Marienbad', 'correct_answer' => false],
                    ['id' => '81084c43-20ca-595b-80ba-5fec25dccb13', 'description' => 'Acossado', 'correct_answer' => true],
                    ['id' => '8a22b103-553e-5daf-a530-111a66f33f67', 'description' => 'A Aventura', 'correct_answer' => false]
                ]],
        ['id' => 'fe1fae46-b7c8-5425-a89e-af662b7ce4a1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Antonioni acompanha um fotógrafo londrino que acredita ter registrado um assassinato?', 'difficulty' => 4, 'weight' => 711, 'alternatives' => [
                    ['id' => '18b47829-bb2c-5a81-9cfb-f788027fb580', 'description' => 'O Desprezo', 'correct_answer' => false],
                    ['id' => '14bd4df3-b875-5504-a5de-ed74a2840570', 'description' => 'Hiroshima, Meu Amor', 'correct_answer' => false],
                    ['id' => '107c4bfb-b26b-5ca1-a629-14bdd7c8d9c2', 'description' => 'O Eclipse', 'correct_answer' => false],
                    ['id' => '77f563f5-cb97-5aa7-88dd-9c729aa5ecaa', 'description' => '8½', 'correct_answer' => false],
                    ['id' => '20e230a7-1eb3-5962-b120-fa932c2a8138', 'description' => 'Blow-Up: Depois Daquele Beijo', 'correct_answer' => true]
                ]],
        ['id' => '7f6717b8-8590-5fa9-bee4-0950ceb142c0', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Antonioni acompanha um casal em crise ao longo de uma noite em Milão?', 'difficulty' => 4, 'weight' => 604, 'alternatives' => [
                    ['id' => '87420660-2733-5068-88ba-12af32e1373b', 'description' => 'O Desprezo', 'correct_answer' => false],
                    ['id' => 'f97c212f-3159-5f59-bb52-c743f3525d21', 'description' => 'O Eclipse', 'correct_answer' => false],
                    ['id' => 'f7cbdd9c-9a6a-5909-bab5-49a7661e361d', 'description' => 'A Aventura', 'correct_answer' => false],
                    ['id' => 'db214320-bf05-5898-9412-0eec1f705a2c', 'description' => 'Hiroshima, Meu Amor', 'correct_answer' => false],
                    ['id' => 'af6ce53b-86ee-567e-8507-611aa10f080b', 'description' => 'A Noite', 'correct_answer' => true]
                ]],
        ['id' => 'dc648f80-69d0-5eb4-be0f-238af86220a1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Jean-Luc Godard acompanha um roteirista contratado para reescrever um roteiro de adaptação da Odisseia?', 'difficulty' => 4, 'weight' => 726, 'alternatives' => [
                    ['id' => '2030bb69-01d5-564a-ad76-97c5a9b79b5f', 'description' => '8½', 'correct_answer' => false],
                    ['id' => '8e924896-cbfd-5e83-b411-4f38245d07b8', 'description' => 'Acossado', 'correct_answer' => false],
                    ['id' => 'f23a8e0c-b447-5147-bf8f-26f1c0d08893', 'description' => 'Hiroshima, Meu Amor', 'correct_answer' => false],
                    ['id' => '84a38594-d285-511c-8a9d-5aa7a54a5258', 'description' => 'O Desprezo', 'correct_answer' => true],
                    ['id' => 'd91031a4-06ab-5971-bcd7-a5bd354ce337', 'description' => 'A Aventura', 'correct_answer' => false]
                ]],
        ['id' => '295ae278-e2db-527b-bb57-7611f8df97f1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Gillo Pontecorvo reconstitui a luta urbana pela independência da Argélia contra o domínio francês?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => '413d7459-6bb9-5d45-a360-8587fd7870dd', 'description' => 'A Batalha de Argel', 'correct_answer' => true],
                    ['id' => '7ade71f5-569c-5f3a-90b1-3068b867716e', 'description' => '1900', 'correct_answer' => false],
                    ['id' => 'bf29850d-6dfc-5749-a47c-819670623f59', 'description' => 'Jules e Jim', 'correct_answer' => false],
                    ['id' => '00da6928-f088-55d0-96f1-09514da33aa6', 'description' => 'A Noite Americana', 'correct_answer' => false],
                    ['id' => 'd3431b2e-78ff-5fe4-8808-e402ef9c6d8c', 'description' => 'O Leopardo', 'correct_answer' => false]
                ]],
        ['id' => '3b535907-afac-55bf-8d0f-4b56b7cf85a8', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Visconti acompanha uma família do sul da Itália que migra para Milão?', 'difficulty' => 4, 'weight' => 695, 'alternatives' => [
                    ['id' => 'e7a64488-368f-5736-9569-38f4d32c2ef7', 'description' => 'A Terra Treme', 'correct_answer' => false],
                    ['id' => '8a643911-fa28-5755-9fb7-7d0f1c6180e3', 'description' => 'A Noite Americana', 'correct_answer' => false],
                    ['id' => '9d6071d8-277e-5c10-bab6-daafa1235a93', 'description' => 'O Conformista', 'correct_answer' => false],
                    ['id' => '810d7c64-e5b8-5839-9f9d-ad3a2d0de9b6', 'description' => 'A Batalha de Argel', 'correct_answer' => false],
                    ['id' => 'e37ddd45-f073-5071-9b16-52d13b8e4df9', 'description' => 'Rocco e Seus Irmãos', 'correct_answer' => true]
                ]],
        ['id' => '56b251e2-9019-5667-9e0e-da90becf9874', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Truffaut acompanha a infância difícil de Antoine Doinel em Paris?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => 'e59dc470-8e79-5671-b3d4-3b6c84ac705d', 'description' => 'Jules e Jim', 'correct_answer' => false],
                    ['id' => '4cbe7255-8eba-5266-b06f-0a9c50a88ab1', 'description' => '1900', 'correct_answer' => false],
                    ['id' => 'ca6ccd2e-dd9c-5633-8cd9-665384fb4246', 'description' => 'Os Incompreendidos', 'correct_answer' => true],
                    ['id' => 'fcb9c6a8-50cb-5bd4-907c-55c6af19faba', 'description' => 'A Batalha de Argel', 'correct_answer' => false],
                    ['id' => '3dbc1b23-cc39-5357-82b8-caacc6981a7b', 'description' => 'O Conformista', 'correct_answer' => false]
                ]],
        ['id' => '06a47d3a-63e7-50fe-a1f7-57b051cd1e8e', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Luchino Visconti acompanha um príncipe siciliano durante a unificação italiana?', 'difficulty' => 4, 'weight' => 660, 'alternatives' => [
                    ['id' => '351e5fd5-219a-5c80-8808-1e097bd067c3', 'description' => 'Rocco e Seus Irmãos', 'correct_answer' => false],
                    ['id' => '4f81b2f7-2924-5574-9a1a-5663f12a97e6', 'description' => 'O Leopardo', 'correct_answer' => true],
                    ['id' => 'd717b0a0-db9a-5a37-92d3-3a13884d848f', 'description' => 'A Noite Americana', 'correct_answer' => false],
                    ['id' => 'e5ad3264-729e-53be-ae04-c7360a72e079', 'description' => 'Os Incompreendidos', 'correct_answer' => false],
                    ['id' => '594b1c28-e48a-54c8-8f38-3826f3337dbc', 'description' => 'Morte em Veneza', 'correct_answer' => false]
                ]],
        ['id' => '1426dfbd-6d84-503e-9eaf-72482240bf16', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Bernardo Bertolucci acompanha um italiano que se aproxima do fascismo e recebe uma missão em Paris?', 'difficulty' => 4, 'weight' => 606, 'alternatives' => [
                    ['id' => '8ddf6fdd-b081-541b-b5b9-451682e0354f', 'description' => 'O Conformista', 'correct_answer' => true],
                    ['id' => 'c2b64d99-ac5a-5633-81c5-843e315f40f1', 'description' => 'Morte em Veneza', 'correct_answer' => false],
                    ['id' => '32a11aed-4669-5124-b8d9-8654f71f4af3', 'description' => 'Jules e Jim', 'correct_answer' => false],
                    ['id' => '00a379de-7675-53d7-856c-6927e7690e4c', 'description' => 'O Leopardo', 'correct_answer' => false],
                    ['id' => 'f9298f82-2e3f-51c6-8cd7-e86b8466ca57', 'description' => 'A Noite Americana', 'correct_answer' => false]
                ]],
        ['id' => '30069e5f-3c6b-529f-8b3e-26a7fce3d157', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Truffaut acompanha a amizade de dois homens e a relação de ambos com Catherine?', 'difficulty' => 4, 'weight' => 644, 'alternatives' => [
                    ['id' => '06f926f9-17fe-5327-a01b-a96359bd470c', 'description' => 'Jules e Jim', 'correct_answer' => true],
                    ['id' => '5d880c3e-75aa-5ecc-8f9b-68aa429c1599', 'description' => 'Rocco e Seus Irmãos', 'correct_answer' => false],
                    ['id' => 'f75966b4-b47b-549a-9e2c-df5ff2000bbb', 'description' => 'O Conformista', 'correct_answer' => false],
                    ['id' => 'd76331a5-e93c-5a1c-a53f-b3c18c712303', 'description' => 'O Leopardo', 'correct_answer' => false],
                    ['id' => '96a32cfb-7b6e-5df5-a2f1-22d0a6276d51', 'description' => 'Os Incompreendidos', 'correct_answer' => false]
                ]],
        ['id' => 'bc5997bc-3aae-5be8-9a14-c7d6bcd90efc', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Visconti acompanha um compositor envelhecido fascinado por um adolescente em Veneza?', 'difficulty' => 4, 'weight' => 715, 'alternatives' => [
                    ['id' => '72b28806-5709-5b79-9b95-c7e91dcde761', 'description' => 'O Conformista', 'correct_answer' => false],
                    ['id' => '5c9dbfa9-04fb-5ab3-a7dc-4a8544250bd0', 'description' => 'Morte em Veneza', 'correct_answer' => true],
                    ['id' => 'aeb59160-bc17-536b-83d3-c5a5a309f183', 'description' => '1900', 'correct_answer' => false],
                    ['id' => '61e719d0-60fc-5cc9-b88d-55fc316b7056', 'description' => 'A Terra Treme', 'correct_answer' => false],
                    ['id' => '4da13ab3-1ae2-59e6-85ca-fc9de862b52b', 'description' => 'Rocco e Seus Irmãos', 'correct_answer' => false]
                ]],
        ['id' => 'd8c84ccf-effa-5714-9163-db2c710f42ea', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Visconti retrata pescadores sicilianos que tentam romper a exploração dos intermediários?', 'difficulty' => 4, 'weight' => 628, 'alternatives' => [
                    ['id' => '6851dc19-bb14-59a8-8a5e-56e378cf68d4', 'description' => 'O Leopardo', 'correct_answer' => false],
                    ['id' => 'daae78a1-cfb8-5a37-8bd7-fcdd2cee907b', 'description' => '1900', 'correct_answer' => false],
                    ['id' => '34f03ba9-b4b6-51f2-8661-35c0a54531cf', 'description' => 'A Noite Americana', 'correct_answer' => false],
                    ['id' => '831ecd5e-9b53-5def-9e33-22f876b5f011', 'description' => 'A Terra Treme', 'correct_answer' => true],
                    ['id' => 'aab302cc-22d4-59a8-a739-b47b9cffd6a5', 'description' => 'Morte em Veneza', 'correct_answer' => false]
                ]],
        ['id' => '63ba36b9-4ce3-5612-8ca2-c63ebafc7a80', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Buñuel acompanha Séverine, uma dona de casa que passa a trabalhar secretamente em um bordel?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => 'fea1999a-a95d-5c66-b54a-eac8a2dc4e3b', 'description' => 'A Grande Testemunha', 'correct_answer' => false],
                    ['id' => 'a69c8ef7-0b28-55d3-a16b-b11432d01ccf', 'description' => 'Viridiana', 'correct_answer' => false],
                    ['id' => '5cc97be7-1acc-5ddd-ab47-a500af3086da', 'description' => 'O Dinheiro', 'correct_answer' => false],
                    ['id' => '16f05606-23e1-5a10-b313-a34987d5527d', 'description' => 'Um Condenado à Morte Escapou', 'correct_answer' => false],
                    ['id' => '042c2a78-5be7-5acd-9b38-a7d5a292d413', 'description' => 'A Bela da Tarde', 'correct_answer' => true]
                ]],
        ['id' => 'fa3aadfb-136a-5bda-a72a-94e92b2261ca', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Bresson acompanha Michel, um batedor de carteiras que reflete sobre moralidade e crime?', 'difficulty' => 4, 'weight' => 719, 'alternatives' => [
                    ['id' => 'f03a8f12-cc6d-545c-88e7-444379162ad6', 'description' => 'O Dinheiro', 'correct_answer' => false],
                    ['id' => '520136e0-7696-5000-94aa-e3e422dbb7c5', 'description' => 'O Discreto Charme da Burguesia', 'correct_answer' => false],
                    ['id' => '19fd14fe-93f3-58fb-90c1-e552d656e882', 'description' => 'A Idade do Ouro', 'correct_answer' => false],
                    ['id' => '2e2dfdd7-be9d-52b7-a19d-606eeed7e07e', 'description' => 'O Anjo Exterminador', 'correct_answer' => false],
                    ['id' => 'b3719ea9-8b23-5624-a8b7-6e8df214cb67', 'description' => 'Pickpocket', 'correct_answer' => true]
                ]],
        ['id' => 'a3f35d4e-c612-5972-b9c7-320fd36abe44', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme surrealista de Buñuel provocou escândalo por sua crítica à moral burguesa e religiosa?', 'difficulty' => 4, 'weight' => 782, 'alternatives' => [
                    ['id' => '24286a6f-a54f-5bd3-be90-2b4aa8e92e40', 'description' => 'A Idade do Ouro', 'correct_answer' => true],
                    ['id' => '2b072699-3673-573b-865e-1535c5b66d35', 'description' => 'Um Condenado à Morte Escapou', 'correct_answer' => false],
                    ['id' => 'cdfb3935-a902-5362-a4a4-69edea14356c', 'description' => 'O Discreto Charme da Burguesia', 'correct_answer' => false],
                    ['id' => 'b50a9abc-0537-59db-aeed-5f984aba4abd', 'description' => 'A Bela da Tarde', 'correct_answer' => false],
                    ['id' => 'fabd49d8-a29a-5d48-9654-3a383f91323c', 'description' => 'Pickpocket', 'correct_answer' => false]
                ]],
        ['id' => 'f6308c21-d69a-58da-b88d-b566e848f4b4', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual curta surrealista de Buñuel e Salvador Dalí começa com uma sequência de imagens de choque envolvendo um olho?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => 'd934cefc-afae-5817-b1f8-29a224919fc3', 'description' => 'O Dinheiro', 'correct_answer' => false],
                    ['id' => '3cd4201a-30e1-5abb-8fd0-6096928a85a2', 'description' => 'Um Condenado à Morte Escapou', 'correct_answer' => false],
                    ['id' => '14d20650-a9f6-54c2-8cb1-c1e529cf8420', 'description' => 'Pickpocket', 'correct_answer' => false],
                    ['id' => 'cb28fc1f-d4a2-5a05-b356-9ad150411fcf', 'description' => 'O Cão Andaluz', 'correct_answer' => true],
                    ['id' => '5edabf24-734e-50f3-a25c-50a121430bb7', 'description' => 'O Anjo Exterminador', 'correct_answer' => false]
                ]],
        ['id' => '547925d1-b7f4-5e8a-8b71-0c26a6154ec2', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual último longa de Bresson começa com a circulação de uma nota falsa que desencadeia uma tragédia?', 'difficulty' => 4, 'weight' => 774, 'alternatives' => [
                    ['id' => 'c8039eab-0e4f-56c1-b3a5-ed0ade6818c3', 'description' => 'O Anjo Exterminador', 'correct_answer' => false],
                    ['id' => '8ddcdb7a-1e16-5c9c-9234-717ca64fc871', 'description' => 'Um Condenado à Morte Escapou', 'correct_answer' => false],
                    ['id' => '3eeae904-8265-5fd3-9ffd-a8e861c3417c', 'description' => 'A Grande Testemunha', 'correct_answer' => false],
                    ['id' => 'a167e5fb-d909-50c8-b2c5-ef4e76c0d8e5', 'description' => 'Viridiana', 'correct_answer' => false],
                    ['id' => 'c273729a-22d3-5bd3-885c-3d3649bc0bd0', 'description' => 'O Dinheiro', 'correct_answer' => true]
                ]],
        ['id' => '12df1b09-4f2f-5863-8756-4e0749b42534', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Buñuel acompanha uma noviça que visita seu tio e enfrenta as consequências de sua caridade?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => '691061ab-2dbf-540d-9ddd-97d3a5019715', 'description' => 'Viridiana', 'correct_answer' => true],
                    ['id' => 'ad2ba54c-ed37-581a-b565-2134379ff4b1', 'description' => 'O Anjo Exterminador', 'correct_answer' => false],
                    ['id' => 'c900122d-a271-5a48-8de5-af5eb4f56114', 'description' => 'A Idade do Ouro', 'correct_answer' => false],
                    ['id' => '800d4c5e-efe0-5282-9361-493d35660cb0', 'description' => 'O Discreto Charme da Burguesia', 'correct_answer' => false],
                    ['id' => '81fd320d-811b-5797-8251-88dbcea9e050', 'description' => 'A Bela da Tarde', 'correct_answer' => false]
                ]],
        ['id' => '88bd4e91-794a-5520-9831-24b36403bf02', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Buñuel acompanha um grupo de burgueses cujas tentativas de jantar são continuamente interrompidas?', 'difficulty' => 4, 'weight' => 656, 'alternatives' => [
                    ['id' => '6ff9c502-dada-5239-b976-367679ea020b', 'description' => 'A Grande Testemunha', 'correct_answer' => false],
                    ['id' => 'd113a7a7-ab29-507f-9f54-76e609d03ae1', 'description' => 'A Idade do Ouro', 'correct_answer' => false],
                    ['id' => 'fc6164a3-d1c8-5366-a825-ec1709fc1adb', 'description' => 'O Discreto Charme da Burguesia', 'correct_answer' => true],
                    ['id' => 'bd04ceb5-d07d-54d6-ba24-b1259560a748', 'description' => 'Um Condenado à Morte Escapou', 'correct_answer' => false],
                    ['id' => 'b263f82e-3ad8-51dc-86a5-f3f14c84cf52', 'description' => 'A Bela da Tarde', 'correct_answer' => false]
                ]],
        ['id' => '05a4588b-3b27-5baf-9cdb-0c4eba1dd55f', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Bresson acompanha um prisioneiro da Resistência que planeja fugir de uma prisão nazista?', 'difficulty' => 4, 'weight' => 774, 'alternatives' => [
                    ['id' => '67cc58be-1f62-548c-91f8-bdf58ceb3fb3', 'description' => 'Pickpocket', 'correct_answer' => false],
                    ['id' => '9bc4622d-95b8-5698-b888-7ed20ace7a77', 'description' => 'Um Condenado à Morte Escapou', 'correct_answer' => true],
                    ['id' => 'c21ec5df-8a63-5c9f-92f9-2ccd7d2841c6', 'description' => 'O Dinheiro', 'correct_answer' => false],
                    ['id' => '366d9d25-ca79-5ad6-a455-5d832ae210b4', 'description' => 'A Idade do Ouro', 'correct_answer' => false],
                    ['id' => 'e6d12cfa-df96-5826-8187-1de4316d620f', 'description' => 'A Bela da Tarde', 'correct_answer' => false]
                ]],
        ['id' => 'cd07ebe8-32cc-5959-947b-9b2576e89d60', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Hiroshi Teshigahara acompanha um entomologista preso em uma casa numa enorme duna de areia?', 'difficulty' => 4, 'weight' => 655, 'alternatives' => [
                    ['id' => '064e9860-36fc-50aa-a7bf-02e320763caa', 'description' => 'A Enguia', 'correct_answer' => false],
                    ['id' => '5142de7b-5a56-50da-ae8f-97c44d9c8b61', 'description' => 'Tampopo', 'correct_answer' => false],
                    ['id' => '1c81c8ee-ccd4-53c2-9ca3-33ed84caea79', 'description' => 'A Face de Outro', 'correct_answer' => false],
                    ['id' => '383a5072-d2cd-57a8-b709-d4a06316e337', 'description' => 'A Mulher de Areia', 'correct_answer' => true],
                    ['id' => '6cb488a2-dcf6-5571-9c04-ef4c0505750b', 'description' => 'A Balada de Narayama', 'correct_answer' => false]
                ]],
        ['id' => '89b8894e-69c6-5943-a5c9-44bbdcb2d141', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Imamura acompanha um homem que sai da prisão e abre uma barbearia, mantendo uma enguia como companhia?', 'difficulty' => 4, 'weight' => 753, 'alternatives' => [
                    ['id' => 'e26e059f-8f97-5256-8315-5935c2cc5127', 'description' => 'Harakiri', 'correct_answer' => false],
                    ['id' => '24afe7e4-1112-58dc-ac04-a3cb2d0de840', 'description' => 'A Balada de Narayama', 'correct_answer' => false],
                    ['id' => '148b5c21-a968-5a59-be52-8e423e33ba53', 'description' => 'A Família', 'correct_answer' => false],
                    ['id' => 'ed031696-783e-56c0-90da-78998e49410b', 'description' => 'Pai e Filha', 'correct_answer' => false],
                    ['id' => '544dc17b-62a3-563d-af81-ef774d0ac2df', 'description' => 'A Enguia', 'correct_answer' => true]
                ]],
        ['id' => 'a44bca82-362e-5d97-a53e-68ca4465bff3', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Ozu acompanha um casal idoso que visita os filhos adultos em Tóquio?', 'difficulty' => 4, 'weight' => 711, 'alternatives' => [
                    ['id' => '212ddb80-47b8-55a8-a13b-5eb01db73e8a', 'description' => 'Era Uma Vez em Tóquio', 'correct_answer' => true],
                    ['id' => '96965ee9-7cc8-5eb5-92a3-16b3deb9238a', 'description' => 'A Enguia', 'correct_answer' => false],
                    ['id' => '3329688a-3f7d-5cc0-97c6-6d6c2d576f32', 'description' => 'Pai e Filha', 'correct_answer' => false],
                    ['id' => '5afb9d67-0597-5477-bd39-533f65455378', 'description' => 'A Face de Outro', 'correct_answer' => false],
                    ['id' => 'aa8d6f13-5cb4-51b7-8a60-f9d3b714beab', 'description' => 'A Balada de Narayama', 'correct_answer' => false]
                ]],
        ['id' => 'cf3c3349-cb72-535e-9a27-056fb8a16f78', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Shohei Imamura retrata o costume de levar idosos a uma montanha para morrer?', 'difficulty' => 4, 'weight' => 627, 'alternatives' => [
                    ['id' => '39a76641-aa78-567a-bcb7-90b5dc5e187a', 'description' => 'Harakiri', 'correct_answer' => false],
                    ['id' => '4e9ada95-d461-5a08-b796-664495468468', 'description' => 'A Face de Outro', 'correct_answer' => false],
                    ['id' => '8d997aa3-90a5-5014-a327-14f89f9a7c09', 'description' => 'A Balada de Narayama', 'correct_answer' => true],
                    ['id' => '60897385-d518-5443-9386-091549d76d29', 'description' => 'A Família', 'correct_answer' => false],
                    ['id' => 'a8de463b-610a-5ff8-8335-e57a086b5c69', 'description' => 'Pai e Filha', 'correct_answer' => false]
                ]],
        ['id' => 'ba0c042e-b13c-5203-932a-2d4a3d04ba0a', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Ozu acompanha Noriko, que vive com o pai viúvo e resiste à ideia de se casar?', 'difficulty' => 4, 'weight' => 681, 'alternatives' => [
                    ['id' => '4fff9547-b763-5a0f-831d-232001bacda7', 'description' => 'Harakiri', 'correct_answer' => false],
                    ['id' => 'd128161d-fdee-56df-94ab-6e31bba4db75', 'description' => 'Pai e Filha', 'correct_answer' => true],
                    ['id' => 'bd06a64d-8216-5ed5-91ca-8e93be6f5820', 'description' => 'A Face de Outro', 'correct_answer' => false],
                    ['id' => '31b676e9-92ac-5075-b7c5-6e1a157af958', 'description' => 'Tampopo', 'correct_answer' => false],
                    ['id' => '3b097e58-8df9-5e6c-93ef-fefe7848084b', 'description' => 'A Família', 'correct_answer' => false]
                ]],
        ['id' => '3a14f73b-1999-566e-9c1e-5f7987677187', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual drama de Masaki Kobayashi questiona a hipocrisia do código samurai por meio de um pedido de suicídio ritual?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => '6c0f5085-0dd4-505a-9562-c4a0f0490643', 'description' => 'Harakiri', 'correct_answer' => true],
                    ['id' => 'f5b83e5b-f678-508d-8a83-fae4ded1cb80', 'description' => 'A Família', 'correct_answer' => false],
                    ['id' => '3c8a57df-64d8-5aa5-96f0-117b81c26e01', 'description' => 'Pai e Filha', 'correct_answer' => false],
                    ['id' => 'b508cd5d-70d6-59c1-abcb-9a8407555f1e', 'description' => 'A Face de Outro', 'correct_answer' => false],
                    ['id' => '8a211be3-842a-5147-adfe-5a254cc2156f', 'description' => 'A Enguia', 'correct_answer' => false]
                ]],
        ['id' => 'ae3174a8-67c8-5ede-b6a9-a1fbaf96c5ab', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Teshigahara acompanha um homem desfigurado que recebe uma máscara facial experimental?', 'difficulty' => 4, 'weight' => 633, 'alternatives' => [
                    ['id' => 'b88a0582-0914-5e4f-9095-83153552cc0c', 'description' => 'Pai e Filha', 'correct_answer' => false],
                    ['id' => '11baf737-5653-51e0-940f-653b1796ef66', 'description' => 'Era Uma Vez em Tóquio', 'correct_answer' => false],
                    ['id' => '915c50a1-d5a3-5bc1-b6d4-7a40ca086567', 'description' => 'A Balada de Narayama', 'correct_answer' => false],
                    ['id' => 'd94ce021-eada-5857-b683-01cced3bc039', 'description' => 'A Face de Outro', 'correct_answer' => true],
                    ['id' => '4c6db09a-0c83-5b86-89ef-971ca05f3476', 'description' => 'Kwaidan', 'correct_answer' => false]
                ]],
        ['id' => 'f12601d1-bf04-53e4-a31b-2e439b43ed68', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual antologia de Masaki Kobayashi adapta quatro histórias sobrenaturais do folclore japonês?', 'difficulty' => 4, 'weight' => 742, 'alternatives' => [
                    ['id' => '050fa9b2-b884-5477-9c76-b57441016d6b', 'description' => 'Kwaidan', 'correct_answer' => true],
                    ['id' => '6246e44c-2e31-5405-b7c1-5b28715b4581', 'description' => 'A Balada de Narayama', 'correct_answer' => false],
                    ['id' => 'a5c4be18-1491-5d08-9bef-5e84849db5c0', 'description' => 'Pai e Filha', 'correct_answer' => false],
                    ['id' => 'db3d2180-07c6-5bb7-8dbd-eba028ae758d', 'description' => 'Harakiri', 'correct_answer' => false],
                    ['id' => '153e3321-fb99-5c93-993e-bf42d6650cf2', 'description' => 'A Enguia', 'correct_answer' => false]
                ]],
        ['id' => '704de3f9-cb3e-5e18-a18d-b67337ef77df', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Sergei Parajanov apresenta a vida do poeta armênio Sayat-Nova por meio de tableaux visuais?', 'difficulty' => 5, 'weight' => 999, 'alternatives' => [
                    ['id' => 'cdb60ceb-57e1-5df5-bfca-9a75629dbd7c', 'description' => 'Arsenal', 'correct_answer' => false],
                    ['id' => '9a65bfa1-b4d7-52ed-9369-65ae63d5af2c', 'description' => 'A Nova Babilônia', 'correct_answer' => false],
                    ['id' => '591aff21-d7cf-5ef0-8783-58a4eeb81f3c', 'description' => 'Terra', 'correct_answer' => false],
                    ['id' => '6941fb9a-6c93-5c85-b827-40b5c54a19a0', 'description' => 'A Cor da Romã', 'correct_answer' => true],
                    ['id' => '1bc9ba1b-6ee3-51fc-96e0-794d6420f779', 'description' => 'A Mãe', 'correct_answer' => false]
                ]],
        ['id' => '8ab6eeaf-4f25-5ba0-be93-156c2aafda5d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Dziga Vertov organiza imagens da vida urbana soviética por meio de experimentação com montagem e movimento?', 'difficulty' => 5, 'weight' => 932, 'alternatives' => [
                    ['id' => 'a5c95533-7a19-5bfa-b3ba-c1ad285f1fb5', 'description' => 'A Cor da Romã', 'correct_answer' => false],
                    ['id' => 'b0720cc3-dd69-5a8c-a70e-47eef1aebf4d', 'description' => 'O Homem com uma Câmera', 'correct_answer' => true],
                    ['id' => 'ec04befc-f3c7-5336-81a7-9a9569db0102', 'description' => 'Ivan, o Terrível — Parte I', 'correct_answer' => false],
                    ['id' => 'd3e96447-3baf-5c21-8902-3bd99c6e6a2d', 'description' => 'A Greve', 'correct_answer' => false],
                    ['id' => '149f59ad-42d6-5808-b206-ee2050beb233', 'description' => 'Outubro', 'correct_answer' => false]
                ]],
        ['id' => 'e0303688-de53-549b-9a32-680a8048b890', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Aleksandr Dovjenko retrata a coletivização agrícola na Ucrânia soviética?', 'difficulty' => 5, 'weight' => 865, 'alternatives' => [
                    ['id' => '1f93cec6-46df-5095-bbc0-a5d55023f6bd', 'description' => 'Ivan, o Terrível — Parte I', 'correct_answer' => false],
                    ['id' => 'c8c01e19-2602-5676-9707-921b7b387b9d', 'description' => 'Terra', 'correct_answer' => true],
                    ['id' => '50a81d42-b6b7-5b65-ad0e-0b0fa99881e4', 'description' => 'A Cor da Romã', 'correct_answer' => false],
                    ['id' => '943a0d5e-396f-57c7-a89d-a91e01777f3b', 'description' => 'A Greve', 'correct_answer' => false],
                    ['id' => '88d76590-7dec-53d2-a7ce-02c252d12d30', 'description' => 'O Homem com uma Câmera', 'correct_answer' => false]
                ]],
        ['id' => '875b7f17-81c4-5193-9970-5c8ef5757fa8', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Vsevolod Pudovkin adapta o romance de Máximo Górki sobre uma mulher envolvida no movimento revolucionário?', 'difficulty' => 5, 'weight' => 924, 'alternatives' => [
                    ['id' => '80bf4ed3-723b-534d-9edc-319c5b944316', 'description' => 'A Mãe', 'correct_answer' => true],
                    ['id' => '30d436cc-e878-510c-b491-3b10f2c27d4a', 'description' => 'A Nova Babilônia', 'correct_answer' => false],
                    ['id' => 'aeda1007-fbfb-5511-9159-eba9dc893a39', 'description' => 'Ivan, o Terrível — Parte I', 'correct_answer' => false],
                    ['id' => '70471afa-0fec-533a-b35b-ffc5aeb09cc7', 'description' => 'Arsenal', 'correct_answer' => false],
                    ['id' => '61bf293f-b6a8-57f5-97a1-cf4cd61e5dbe', 'description' => 'O Homem com uma Câmera', 'correct_answer' => false]
                ]],
        ['id' => 'ca33f2eb-59af-5977-bb97-15592fb93c50', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Grigori Kozintsev e Leonid Trauberg se passa durante a Comuna de Paris?', 'difficulty' => 5, 'weight' => 898, 'alternatives' => [
                    ['id' => 'c7696849-ca64-543a-b7ea-46cd9f87613c', 'description' => 'Terra', 'correct_answer' => false],
                    ['id' => 'b9b145dc-8839-5dc0-a029-e981b9b3038c', 'description' => 'A Mãe', 'correct_answer' => false],
                    ['id' => 'c92a6e8b-cb56-544f-8016-f7ca9cdeecbe', 'description' => 'A Nova Babilônia', 'correct_answer' => true],
                    ['id' => '324847b9-afce-5cc9-860a-ca67815d5f9f', 'description' => 'A Greve', 'correct_answer' => false],
                    ['id' => '862b68c3-d195-591e-bfeb-4e1ceaff2a5e', 'description' => 'A Cor da Romã', 'correct_answer' => false]
                ]],
        ['id' => 'af5aa545-e5c6-57ee-b2ad-bc4bbd1689a0', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Eisenstein retrata a ascensão de Ivan IV e sua consolidação do poder na Rússia?', 'difficulty' => 5, 'weight' => 980, 'alternatives' => [
                    ['id' => '9c999ef6-04b3-5107-8647-6a69e32eb0b3', 'description' => 'Encouraçado Potemkin', 'correct_answer' => false],
                    ['id' => '15e870b3-c7a7-5f60-a65c-a0c39e685338', 'description' => 'Arsenal', 'correct_answer' => false],
                    ['id' => 'c26086ca-a5a3-5e8a-b6ae-867ef1129c13', 'description' => 'A Nova Babilônia', 'correct_answer' => false],
                    ['id' => '4b9c0a36-afa3-538f-a81c-28b3d417ecc8', 'description' => 'Ivan, o Terrível — Parte I', 'correct_answer' => true],
                    ['id' => '2285a133-e68a-5f3a-82e0-407963bb2374', 'description' => 'Terra', 'correct_answer' => false]
                ]],
        ['id' => '29c749a3-7dc2-52aa-a2fb-ffebf831d5da', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual longa de Sergei Eisenstein retrata uma paralisação operária reprimida pelas autoridades czaristas?', 'difficulty' => 5, 'weight' => 853, 'alternatives' => [
                    ['id' => 'b1189f5c-f985-5285-a04e-a1bcc9fc77eb', 'description' => 'O Homem com uma Câmera', 'correct_answer' => false],
                    ['id' => 'd33e51e0-ee5c-565e-9376-e1e36caf36a3', 'description' => 'A Mãe', 'correct_answer' => false],
                    ['id' => '66993757-ca4a-5edf-96b4-baf73ec558b2', 'description' => 'Encouraçado Potemkin', 'correct_answer' => false],
                    ['id' => '342c8bad-b0c8-532c-8c44-267b645c707a', 'description' => 'Outubro', 'correct_answer' => false],
                    ['id' => '02049fc9-8e79-58d1-8a08-6eaf6fdf937f', 'description' => 'A Greve', 'correct_answer' => true]
                ]],
        ['id' => 'd49d3e81-3043-5f78-be40-3682a6cf49d1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Eisenstein reconstitui acontecimentos da Revolução Russa de 1917?', 'difficulty' => 5, 'weight' => 883, 'alternatives' => [
                    ['id' => '0f5b6c6a-ce24-57d8-9e15-694c9642e7d8', 'description' => 'O Homem com uma Câmera', 'correct_answer' => false],
                    ['id' => 'a44cfbde-218d-5fd5-ba59-34f4de588107', 'description' => 'Outubro', 'correct_answer' => true],
                    ['id' => '3c4e72ed-49f1-5eff-b68d-a5414151aa2f', 'description' => 'A Mãe', 'correct_answer' => false],
                    ['id' => 'c7febe4c-115f-54ac-890b-8a382cde2ee9', 'description' => 'A Nova Babilônia', 'correct_answer' => false],
                    ['id' => '63c8c4a8-7d69-5ce7-be87-403781c81b8a', 'description' => 'A Greve', 'correct_answer' => false]
                ]],
        ['id' => 'c5ca80d3-bc07-55b6-af94-07eb4357cdd8', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Berlanga satiriza uma campanha natalina de caridade organizada por uma cidade?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => 'c8500589-4e96-569b-9f90-5456bdf83f7a', 'description' => 'A Via Láctea', 'correct_answer' => false],
                    ['id' => '81430fcb-7c53-5f2c-9ee7-f8d6ddf28938', 'description' => 'O Sul', 'correct_answer' => false],
                    ['id' => '89555c41-4990-5b3f-a5b8-c97b0cfc26bb', 'description' => 'O Verdugo', 'correct_answer' => false],
                    ['id' => '5969fcd5-00fe-5a00-b566-65bef64f121e', 'description' => 'O Espírito da Colmeia', 'correct_answer' => false],
                    ['id' => '948aec15-d751-59b9-b28c-e9b673fa9cd3', 'description' => 'Plácido', 'correct_answer' => true]
                ]],
        ['id' => '4082340c-2458-5920-9c32-27d3cedb7d98', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Saura acompanha um empresário paralítico que tenta recuperar a memória e a fortuna?', 'difficulty' => 5, 'weight' => 975, 'alternatives' => [
                    ['id' => 'ef883b40-edd9-5538-91ea-9bf2c48f70df', 'description' => 'O Espírito da Abelha', 'correct_answer' => false],
                    ['id' => 'b0d200ec-287f-5f24-8f30-e9333d69a8f5', 'description' => 'O Verdugo', 'correct_answer' => false],
                    ['id' => '4e4bdc2a-bc89-5433-88d8-99f6c6f132c1', 'description' => 'O Jardim das Delícias', 'correct_answer' => true],
                    ['id' => '36d538e8-64d5-5a46-bfd2-f614a686cc49', 'description' => 'Cría Cuervos', 'correct_answer' => false],
                    ['id' => '6f6c0dbd-bacb-56d1-87a7-22face1e4f46', 'description' => 'A Via Láctea', 'correct_answer' => false]
                ]],
        ['id' => '079b9b34-7b14-5c69-a2f9-779c51ed1611', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Saura acompanha antigos combatentes da Guerra Civil espanhola durante uma caçada?', 'difficulty' => 5, 'weight' => 870, 'alternatives' => [
                    ['id' => 'd6390f2c-62a3-515e-ab6a-f32d7d686fa0', 'description' => 'O Sul', 'correct_answer' => false],
                    ['id' => 'e27b1366-ec62-5f49-abf8-930480417c45', 'description' => 'Plácido', 'correct_answer' => false],
                    ['id' => '335de8ac-d7fb-5ae8-8841-a88cde5badbd', 'description' => 'A Caça', 'correct_answer' => true],
                    ['id' => 'b68ec406-8973-59cf-a295-747bf5dccc31', 'description' => 'A Via Láctea', 'correct_answer' => false],
                    ['id' => '4defb0d4-ba12-587e-b26d-58b429190505', 'description' => 'O Jardim das Delícias', 'correct_answer' => false]
                ]],
        ['id' => 'ef1b0883-eeac-56b8-bd33-908689bc19c5', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Víctor Erice acompanha duas irmãs em uma aldeia espanhola após uma sessão de Frankenstein?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => 'bf412c45-e397-5618-9971-7d832947c922', 'description' => 'O Espírito da Colmeia', 'correct_answer' => true],
                    ['id' => '75d66626-1db5-5dc0-9146-7bee94c6eeb9', 'description' => 'Cría Cuervos', 'correct_answer' => false],
                    ['id' => '2057424b-f765-5bc7-a6a1-0ada27134ac0', 'description' => 'O Espírito da Abelha', 'correct_answer' => false],
                    ['id' => 'ddc117f3-773c-50a0-b219-84e7613ec6d1', 'description' => 'A Caça', 'correct_answer' => false],
                    ['id' => 'ed1a17b9-d0ab-594b-9018-c2d93062d842', 'description' => 'Bem-vindo, Mr. Marshall!', 'correct_answer' => false]
                ]],
        ['id' => '525b0957-e3cd-501a-9927-18341fcdf725', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Carlos Saura acompanha Ana, uma menina que lida com luto e lembranças em Madri?', 'difficulty' => 5, 'weight' => 992, 'alternatives' => [
                    ['id' => '41561d92-4e88-59d9-8424-fad7f1812d58', 'description' => 'O Jardim das Delícias', 'correct_answer' => false],
                    ['id' => '9b8e9ece-a859-524a-a5dd-3775b0cf99c5', 'description' => 'Bem-vindo, Mr. Marshall!', 'correct_answer' => false],
                    ['id' => 'afa64290-7d91-55c1-a4f3-1944fc428ee0', 'description' => 'Plácido', 'correct_answer' => false],
                    ['id' => 'acbd1e73-41c9-5a81-a760-3c9f50902391', 'description' => 'A Via Láctea', 'correct_answer' => false],
                    ['id' => 'd9724d6e-c3f8-5699-b394-fc5f7cf3d30d', 'description' => 'Cría Cuervos', 'correct_answer' => true]
                ]],
        ['id' => '484d6381-fbb8-5fdb-85de-c183b3221446', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Luis Buñuel acompanha dois peregrinos em uma jornada repleta de episódios sobre heresias e dogmas?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => '84ee0bd5-25d9-546a-aaab-0810ea6d0936', 'description' => 'Bem-vindo, Mr. Marshall!', 'correct_answer' => false],
                    ['id' => '73abf701-a1d0-54ff-a12c-98f7b9dbe123', 'description' => 'A Via Láctea', 'correct_answer' => true],
                    ['id' => 'c055091d-f356-5cb5-8f95-210302cd2fb5', 'description' => 'O Sul', 'correct_answer' => false],
                    ['id' => '84763180-6483-5e38-bee0-9bee934bcb6e', 'description' => 'O Espírito da Abelha', 'correct_answer' => false],
                    ['id' => 'e40fb43e-d66f-5b22-8f27-559f07db28ce', 'description' => 'A Caça', 'correct_answer' => false]
                ]],
        ['id' => '311dd221-577f-58be-b775-6edd5e013b6b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Erice acompanha uma menina que tenta compreender o passado misterioso de seu pai?', 'difficulty' => 5, 'weight' => 989, 'alternatives' => [
                    ['id' => 'e54c03db-25e4-5c5f-af0f-b1ac61acdc56', 'description' => 'O Sul', 'correct_answer' => true],
                    ['id' => '3cb1cec3-897f-5033-b542-f9a2f8bdf06c', 'description' => 'O Espírito da Abelha', 'correct_answer' => false],
                    ['id' => 'b1b30ff9-e58c-527c-a1df-934533948bfa', 'description' => 'O Jardim das Delícias', 'correct_answer' => false],
                    ['id' => 'f87495b4-1c02-5546-bd29-bcbb038ecd50', 'description' => 'O Verdugo', 'correct_answer' => false],
                    ['id' => 'd500a57d-55b2-58ce-b1ff-b7c28942784e', 'description' => 'O Espírito da Colmeia', 'correct_answer' => false]
                ]],
        ['id' => 'eeb9eda3-3415-502a-9982-472323032960', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual comédia sombria de Luis García Berlanga acompanha um homem pressionado a assumir o ofício de carrasco?', 'difficulty' => 5, 'weight' => 901, 'alternatives' => [
                    ['id' => 'f21adbac-bdc9-56d3-aabc-500100e86e93', 'description' => 'O Sul', 'correct_answer' => false],
                    ['id' => '61e6fb8f-f5a6-53e3-8a92-0a00fc21648b', 'description' => 'O Espírito da Abelha', 'correct_answer' => false],
                    ['id' => 'f9b4fdbf-2f54-5ea2-bbd2-e5ffc952bbf6', 'description' => 'O Espírito da Colmeia', 'correct_answer' => false],
                    ['id' => '7523915b-b37b-505e-a7dc-70d8899dee7b', 'description' => 'Cría Cuervos', 'correct_answer' => false],
                    ['id' => '9f45ba0d-7a5e-59e5-ab93-0d1887ca9ddd', 'description' => 'O Verdugo', 'correct_answer' => true]
                ]],
        ['id' => '0a38f91d-dffa-5e4f-bac1-585f26f59338', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Parajanov retrata a vida de Sayat-Nova em composições visuais simbólicas, sem biografia convencional?', 'difficulty' => 5, 'weight' => 994, 'alternatives' => [
                    ['id' => '001443fd-5db3-50ba-87a0-a39542b72339', 'description' => 'O Homem de Londres', 'correct_answer' => false],
                    ['id' => '64f4d064-6d15-5ae9-9adb-7cdff4d1d3c4', 'description' => 'Sátántangó', 'correct_answer' => false],
                    ['id' => '3aedd8a5-12c1-5395-a31c-b2a9278b3088', 'description' => 'O Espelho', 'correct_answer' => false],
                    ['id' => '953ff13b-8c66-59f5-825f-92d404e190eb', 'description' => 'Nostalgia', 'correct_answer' => false],
                    ['id' => 'e5658814-c73c-5fad-8ed2-a5f56b15103a', 'description' => 'A Cor da Romã', 'correct_answer' => true]
                ]],
        ['id' => '2449c695-8cb1-5569-9795-ffad6ab74581', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Parajanov acompanha o amor trágico de Ivan e Marichka nos Cárpatos?', 'difficulty' => 5, 'weight' => 957, 'alternatives' => [
                    ['id' => '6c86b51e-3fad-570c-a11f-8c9d602d560b', 'description' => 'Sombras dos Nossos Antepassados', 'correct_answer' => true],
                    ['id' => 'af480343-fd73-5952-bf10-cc4de09d964b', 'description' => 'O Sacrifício', 'correct_answer' => false],
                    ['id' => '6c07493a-54d0-52b9-a37e-7ef483bb2445', 'description' => 'Nostalgia', 'correct_answer' => false],
                    ['id' => 'e129d3f9-ade7-5d57-b2c8-221e34264086', 'description' => 'O Homem de Londres', 'correct_answer' => false],
                    ['id' => '588f1104-9bab-5073-990c-055bdc83454c', 'description' => 'As Harmonias de Werckmeister', 'correct_answer' => false]
                ]],
        ['id' => '21b14bb9-7064-57c8-962f-7614b16fd88f', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Béla Tarr acompanha Karrer, um homem solitário envolvido em uma relação amorosa e negócios ilícitos?', 'difficulty' => 5, 'weight' => 906, 'alternatives' => [
                    ['id' => 'b03ec0b6-0369-5848-bf29-08f3db31b3c0', 'description' => 'O Sacrifício', 'correct_answer' => false],
                    ['id' => 'afc5d51f-791d-507c-813a-be8f659e96c4', 'description' => 'Sátántangó', 'correct_answer' => false],
                    ['id' => 'f551f101-ef24-59ba-90fa-23020adceb3c', 'description' => 'Damnation', 'correct_answer' => true],
                    ['id' => '34e5efbf-f710-5f2f-88b5-9a541f4087f8', 'description' => 'O Cavalo de Turim', 'correct_answer' => false],
                    ['id' => 'cefc74d6-8b9e-5d42-85e7-290b187b5a5c', 'description' => 'A Cor da Romã', 'correct_answer' => false]
                ]],
        ['id' => '2d41873b-c163-5c5b-b6fc-781b33a76a60', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Tarkóvski combina lembranças pessoais, poemas e imagens documentais sem uma narrativa linear convencional?', 'difficulty' => 5, 'weight' => 871, 'alternatives' => [
                    ['id' => '37b8ba20-dd1a-5fe6-a521-b4e32849d492', 'description' => 'O Homem de Londres', 'correct_answer' => false],
                    ['id' => '8244be53-b80f-5f8e-b812-9baef031a22c', 'description' => 'Sombras dos Nossos Antepassados', 'correct_answer' => false],
                    ['id' => '96295075-524e-5471-8fea-b7ebdcf151bb', 'description' => 'As Harmonias de Werckmeister', 'correct_answer' => false],
                    ['id' => '6958cb89-fa6a-5f37-b970-0cc210064f53', 'description' => 'Damnation', 'correct_answer' => false],
                    ['id' => 'd29e3af8-b6b5-5ac5-938a-5252aedc7c60', 'description' => 'O Espelho', 'correct_answer' => true]
                ]],
        ['id' => 'e2e5d423-1425-5bf9-a984-db82ef7eb997', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Tarkóvski foi rodado na Suécia e acompanha Alexander diante da ameaça de uma guerra nuclear?', 'difficulty' => 5, 'weight' => 911, 'alternatives' => [
                    ['id' => 'fbbd865f-5cdf-59d4-bb1d-66ca2e771da6', 'description' => 'Sátántangó', 'correct_answer' => false],
                    ['id' => '7f0c9b69-8f8b-580e-b191-c9f7239abdd5', 'description' => 'Sombras dos Nossos Antepassados', 'correct_answer' => false],
                    ['id' => 'c258032b-bb06-5f51-bc6d-d99daf0658f1', 'description' => 'O Cavalo de Turim', 'correct_answer' => false],
                    ['id' => '45aa40ec-249a-58c9-bd2a-589e19f679b3', 'description' => 'O Sacrifício', 'correct_answer' => true],
                    ['id' => '02d59da9-2e15-5adf-a3e6-ce524488fba4', 'description' => 'Nostalgia', 'correct_answer' => false]
                ]],
        ['id' => '290af0ab-abe2-50db-a21c-91e829074e7b', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Béla Tarr, com mais de sete horas, retrata a desintegração de uma comunidade rural húngara?', 'difficulty' => 5, 'weight' => 958, 'alternatives' => [
                    ['id' => '525916ee-eac9-5733-b64e-354932a99d90', 'description' => 'Damnation', 'correct_answer' => false],
                    ['id' => '501c581e-9862-5994-9b77-7af05cdc74c3', 'description' => 'O Espelho', 'correct_answer' => false],
                    ['id' => 'b4fe4a91-46c1-568b-911b-e5807c3628bd', 'description' => 'O Cavalo de Turim', 'correct_answer' => false],
                    ['id' => '3e8d3ff5-2afc-569d-a8e7-78057a0a83b1', 'description' => 'Sátántangó', 'correct_answer' => true],
                    ['id' => 'f0ed107f-2986-5ddb-9183-29c741f12953', 'description' => 'Sombras dos Nossos Antepassados', 'correct_answer' => false]
                ]],
        ['id' => '5bbe2a5c-ed1e-555a-a5d1-4bd3bd878da6', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Béla Tarr acompanha uma cidade abalada pela chegada de um circo com uma baleia e uma figura misteriosa?', 'difficulty' => 5, 'weight' => 873, 'alternatives' => [
                    ['id' => 'b8f6e5d4-8c05-577d-bc8a-bdccadff9c9d', 'description' => 'Damnation', 'correct_answer' => false],
                    ['id' => '3aef6c5a-5968-5f51-8341-3e52fb03c29c', 'description' => 'As Harmonias de Werckmeister', 'correct_answer' => true],
                    ['id' => '37db082e-4b42-5fce-b170-b0e6430ae08f', 'description' => 'O Homem de Londres', 'correct_answer' => false],
                    ['id' => 'b362cfdc-9e37-51ed-8a55-8c7b47452d2d', 'description' => 'A Cor da Romã', 'correct_answer' => false],
                    ['id' => '64d922d3-a915-579d-9e0b-22fc4c132f4f', 'description' => 'Sombras dos Nossos Antepassados', 'correct_answer' => false]
                ]],
        ['id' => 'a3344514-6984-51a4-8c23-0a6181404c2d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Tarkóvski acompanha um poeta russo na Itália que se envolve com um homem obcecado por uma profecia?', 'difficulty' => 5, 'weight' => 847, 'alternatives' => [
                    ['id' => 'a452ea28-8bc4-5d3c-baa0-58ace10f4fb2', 'description' => 'Damnation', 'correct_answer' => false],
                    ['id' => '72593315-73ff-5b01-820b-9a6ab54c9804', 'description' => 'Sátántangó', 'correct_answer' => false],
                    ['id' => '0de47ff3-da04-56bc-9dcd-7ab6d106ac19', 'description' => 'Nostalgia', 'correct_answer' => true],
                    ['id' => '5400b539-218a-5858-8c57-a9056231c786', 'description' => 'O Espelho', 'correct_answer' => false],
                    ['id' => '88a7927d-80c2-56c5-9e92-06d34d75feac', 'description' => 'Sombras dos Nossos Antepassados', 'correct_answer' => false]
                ]],
        ['id' => 'fd4d5e0d-aef2-5330-9329-4bb79ffc4211', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Glauber Rocha se passa no país fictício de Eldorado e acompanha disputas políticas e populistas?', 'difficulty' => 5, 'weight' => 902, 'alternatives' => [
                    ['id' => 'ab36d934-191a-5e57-9807-f331a1b67992', 'description' => 'O Bandido da Luz Vermelha', 'correct_answer' => false],
                    ['id' => '930997a6-3bce-503c-a604-4b4dd28e881f', 'description' => 'São Paulo, Sociedade Anônima', 'correct_answer' => false],
                    ['id' => '6984189c-d77b-5984-afaa-b428037db209', 'description' => 'Terra em Transe', 'correct_answer' => true],
                    ['id' => '86fa901b-9bd7-5197-be6b-409ad4d404c9', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => false],
                    ['id' => 'fffc3b90-501e-589b-9669-30930c91b3f1', 'description' => 'O Dragão da Maldade contra o Santo Guerreiro', 'correct_answer' => false]
                ]],
        ['id' => '93956f50-5baf-5442-8df5-c4b777f7f03d', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Glauber Rocha apresenta Antônio das Mortes enfrentando um grupo de cangaceiros e beatos?', 'difficulty' => 5, 'weight' => 913, 'alternatives' => [
                    ['id' => '07aabbc9-f56b-5875-954f-d76ce2fec4e8', 'description' => 'São Paulo, Sociedade Anônima', 'correct_answer' => false],
                    ['id' => 'e4874a64-240c-59de-89a3-7d36ed7c9be9', 'description' => 'O Dragão da Maldade contra o Santo Guerreiro', 'correct_answer' => true],
                    ['id' => 'b632c628-0da1-5f7b-a677-8e65948c8625', 'description' => 'O Anjo Nasceu', 'correct_answer' => false],
                    ['id' => '68f8e21d-5f13-55af-9be2-dcb97a9f7be8', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => false],
                    ['id' => '7c8260dc-1292-5e44-a5ec-deda8ca6308b', 'description' => 'Limite', 'correct_answer' => false]
                ]],
        ['id' => 'fc931134-9f53-5a1f-b63c-be3d9ff6ccc4', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Mário Peixoto, de 1931, é conhecido por sua montagem experimental e imagens de três pessoas em um barco?', 'difficulty' => 5, 'weight' => 843, 'alternatives' => [
                    ['id' => 'a7597b8c-e54f-5a9a-a2f1-56109f219d0e', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => false],
                    ['id' => '084235ac-4db9-5414-933d-f4eb6a1b82fb', 'description' => 'O Dragão da Maldade contra o Santo Guerreiro', 'correct_answer' => false],
                    ['id' => 'ae3213fe-ed2a-5658-acf4-edfc6e87b2cb', 'description' => 'São Paulo, Sociedade Anônima', 'correct_answer' => false],
                    ['id' => 'dca6155f-b645-5d60-bc72-ab2ed96408cb', 'description' => 'Bang Bang', 'correct_answer' => false],
                    ['id' => 'd8ec8f94-d586-5c74-b83e-2454cb2b94a9', 'description' => 'Limite', 'correct_answer' => true]
                ]],
        ['id' => '423e4b45-5bfd-5368-90a6-b718aac1e4d1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Júlio Bressane de 1969 se tornou marco do cinema marginal brasileiro?', 'difficulty' => 5, 'weight' => 854, 'alternatives' => [
                    ['id' => 'a92cd510-ad0c-520a-9409-13bec37fa365', 'description' => 'O Dragão da Maldade contra o Santo Guerreiro', 'correct_answer' => false],
                    ['id' => '886218fc-7988-5434-baf2-2c7a59e06acc', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => true],
                    ['id' => 'f5b9a5a1-100b-593b-96c2-397cf11878f0', 'description' => 'Terra em Transe', 'correct_answer' => false],
                    ['id' => '4392a9de-7531-5927-9fad-1530a242ad24', 'description' => 'O Bandido da Luz Vermelha', 'correct_answer' => false],
                    ['id' => '3b91c4f5-6bf0-5f8a-b04a-216105e348fe', 'description' => 'Limite', 'correct_answer' => false]
                ]],
        ['id' => 'f1ef194f-6691-5d50-8afe-9cc33ce43cbe', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Luís Sérgio Person acompanha um homem dividido entre a ascensão profissional e a insatisfação na metrópole?', 'difficulty' => 5, 'weight' => 965, 'alternatives' => [
                    ['id' => 'a4ca658e-d885-54c8-a19b-0b5f695b40d6', 'description' => 'Terra em Transe', 'correct_answer' => false],
                    ['id' => 'da12fece-b9a4-5419-89b7-b4d448d81195', 'description' => 'O Dragão da Maldade contra o Santo Guerreiro', 'correct_answer' => false],
                    ['id' => 'c8bd93fa-df8f-5111-9197-a84b2123fa2d', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => false],
                    ['id' => 'f29d442f-fc1e-596b-9cb3-56b5197afb30', 'description' => 'Limite', 'correct_answer' => false],
                    ['id' => '9d251564-cced-5a14-b9a6-eb23332bb242', 'description' => 'São Paulo, Sociedade Anônima', 'correct_answer' => true]
                ]],
        ['id' => 'ee56cf2b-93fc-517a-b78a-cbfd5db516cc', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Júlio Bressane acompanha dois criminosos em fuga e é associado ao cinema marginal?', 'difficulty' => 5, 'weight' => 811, 'alternatives' => [
                    ['id' => '5e3b3647-749d-5ac0-83af-5849f4bd7c34', 'description' => 'São Paulo, Sociedade Anônima', 'correct_answer' => false],
                    ['id' => '8fcc3edc-76f5-517b-b1f6-b672445b5d4a', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => false],
                    ['id' => '09b589f6-1d50-5ec9-af15-44ace118153c', 'description' => 'Terra em Transe', 'correct_answer' => false],
                    ['id' => '7fddae07-e05a-5077-8ee0-a9142e048968', 'description' => 'Bang Bang', 'correct_answer' => false],
                    ['id' => 'e6d6070f-12bf-589e-9824-e7e09a41602d', 'description' => 'O Anjo Nasceu', 'correct_answer' => true]
                ]],
        ['id' => 'be6b7fc7-d310-5394-b11d-89be09833b77', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Cacá Diegues acompanha uma jovem que sai do sertão e chega ao Rio de Janeiro em busca do noivo?', 'difficulty' => 5, 'weight' => 943, 'alternatives' => [
                    ['id' => '3ac712e1-58f9-54d6-9ce7-3c62a537d4c0', 'description' => 'A Margem', 'correct_answer' => false],
                    ['id' => '342e6d20-0e08-576c-ba09-bc19b142a13c', 'description' => 'Bang Bang', 'correct_answer' => false],
                    ['id' => '2be6a7d5-97ef-56d0-8c2d-44613edd4f7a', 'description' => 'A Grande Cidade', 'correct_answer' => true],
                    ['id' => '3b602eb0-b392-591e-a7db-5b1ec42ad60f', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => false],
                    ['id' => '374a654a-3a6d-57d8-8b5b-694a54ecedda', 'description' => 'O Dragão da Maldade contra o Santo Guerreiro', 'correct_answer' => false]
                ]],
        ['id' => '8da3aced-ef5e-58b7-bd56-52a705b3f203', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Ozualdo Candeias acompanha personagens marginalizados que vivem às margens do rio Tietê?', 'difficulty' => 5, 'weight' => 961, 'alternatives' => [
                    ['id' => 'fb15e1a4-4754-5c85-869a-fff472af0482', 'description' => 'Bang Bang', 'correct_answer' => false],
                    ['id' => '02fac33e-4ac8-57cd-ad48-eaac09719c07', 'description' => 'A Margem', 'correct_answer' => true],
                    ['id' => '2c2b8143-bcc1-5eb9-b831-6944dea0bb3c', 'description' => 'Matou a Família e Foi ao Cinema', 'correct_answer' => false],
                    ['id' => 'ee97b2c9-e5ba-5611-8ab3-c0554e2bedda', 'description' => 'Terra em Transe', 'correct_answer' => false],
                    ['id' => '917c5f52-68f4-5c67-a178-c5506731e868', 'description' => 'São Paulo, Sociedade Anônima', 'correct_answer' => false]
                ]],
        ['id' => 'a8b3c5ed-5916-5042-9892-144f6155f685', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual longa de Jean Vigo acompanha Jean, capitão de uma barcaça, sua esposa Juliette e o marinheiro Père Jules?', 'difficulty' => 5, 'weight' => 995, 'alternatives' => [
                    ['id' => '53d3cc90-99bb-5a55-9410-009aaed54650', 'description' => 'Um Homem que Dorme', 'correct_answer' => false],
                    ['id' => 'a4fa2c64-f0f8-57ee-a30e-14ecf4d3c0c0', 'description' => 'A Vida de Jesus', 'correct_answer' => false],
                    ['id' => 'a989c24c-f411-5604-b7b5-36d3d88b848b', 'description' => 'O Silêncio de Lorna', 'correct_answer' => false],
                    ['id' => 'ae4069f5-ae26-587f-b041-d5ce9d213e30', 'description' => 'Rosetta', 'correct_answer' => false],
                    ['id' => 'ca7704a4-4eef-5e9a-b8d7-362b3683887b', 'description' => 'O Atalante', 'correct_answer' => true]
                ]],
        ['id' => '0d15ab20-5b8f-5835-a01e-dad6765ee4b1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de estreia de Bruno Dumont acompanha jovens desempregados em uma cidade industrial do norte francês?', 'difficulty' => 5, 'weight' => 996, 'alternatives' => [
                    ['id' => 'f1440807-ec78-5b3e-9691-51a4a13eedd5', 'description' => 'A Vida de Jesus', 'correct_answer' => true],
                    ['id' => 'ffc9dad9-f976-55ed-9585-566031dfdbb6', 'description' => 'Jeanne Dielman, 23 quai du Commerce, 1080 Bruxelles', 'correct_answer' => false],
                    ['id' => '35319d4f-6255-55be-8e07-20eed9e7d34e', 'description' => 'A Criança', 'correct_answer' => false],
                    ['id' => '6a5f7c43-f970-5ac0-9314-f63db57ec1e1', 'description' => 'A Humanidade', 'correct_answer' => false],
                    ['id' => 'a24cae81-e6aa-59c0-8dbf-f61320e5ffc8', 'description' => 'O Silêncio de Lorna', 'correct_answer' => false]
                ]],
        ['id' => 'f12a2341-cc05-5f3f-93e3-805ad0493ffa', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme dos Dardenne acompanha uma imigrante albanesa envolvida em um esquema de casamento por conveniência?', 'difficulty' => 5, 'weight' => 866, 'alternatives' => [
                    ['id' => '8d26698c-2492-58a3-9d1e-3762a7b1a474', 'description' => 'A Humanidade', 'correct_answer' => false],
                    ['id' => 'ae0a6f90-dcbe-52f0-8a2e-d80143b9e537', 'description' => 'O Atalante', 'correct_answer' => false],
                    ['id' => '9e8940f8-3a51-5d3e-aa3f-27422b6a949c', 'description' => 'Um Homem que Dorme', 'correct_answer' => false],
                    ['id' => 'c0a0932d-75ca-5118-b544-0b70f5cdfa2d', 'description' => 'News from Home', 'correct_answer' => false],
                    ['id' => 'bf11acc4-5035-5daa-a0e9-9ad42dbb9d2c', 'description' => 'O Silêncio de Lorna', 'correct_answer' => true]
                ]],
        ['id' => '0c323399-e627-5879-915d-de27adbd89c1', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Bruno Dumont acompanha um investigador taciturno em uma cidade do norte da França após um crime brutal?', 'difficulty' => 5, 'weight' => 859, 'alternatives' => [
                    ['id' => 'f29b2bab-3c17-562c-aa05-8f2b89d810d0', 'description' => 'Rosetta', 'correct_answer' => false],
                    ['id' => '7310b0df-1123-5127-9edb-58bf487ed86f', 'description' => 'Um Homem que Dorme', 'correct_answer' => false],
                    ['id' => '89ab3dc4-67c5-5887-ba02-a0d6f02a9622', 'description' => 'A Humanidade', 'correct_answer' => true],
                    ['id' => '7a1e276e-e878-5662-9f98-1ed413653c1e', 'description' => 'O Silêncio de Lorna', 'correct_answer' => false],
                    ['id' => 'bc9c8370-d33e-5e5a-88ca-f8edeb695387', 'description' => 'Jeanne Dielman, 23 quai du Commerce, 1080 Bruxelles', 'correct_answer' => false]
                ]],
        ['id' => '60f51fe0-eaf4-538e-b98e-2d05323b9cec', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme dos Dardenne acompanha um instrutor de marcenaria que recebe como aluno o jovem responsável pela morte de seu filho?', 'difficulty' => 5, 'weight' => 895, 'alternatives' => [
                    ['id' => '3ddab5db-36d9-5bee-ada2-a569adbd1ca2', 'description' => 'Rosetta', 'correct_answer' => false],
                    ['id' => '05fbafa7-7b4f-5be2-8a05-6fa08ad83ea1', 'description' => 'O Atalante', 'correct_answer' => false],
                    ['id' => '1a2cf66d-5550-5ae2-ac02-a8a42be240f4', 'description' => 'News from Home', 'correct_answer' => false],
                    ['id' => '4c42c831-8088-525e-b70b-ea2f801a1cfb', 'description' => 'O Filho', 'correct_answer' => true],
                    ['id' => '49713e30-898a-5504-810a-0300cd36ceff', 'description' => 'A Vida de Jesus', 'correct_answer' => false]
                ]],
        ['id' => '7d96c58c-180e-59ab-9cdc-097e441e1398', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme dos Dardenne acompanha um casal jovem após o homem vender o bebê recém-nascido?', 'difficulty' => 5, 'weight' => 902, 'alternatives' => [
                    ['id' => '8341975e-7870-5346-a375-d66cfae84889', 'description' => 'A Criança', 'correct_answer' => true],
                    ['id' => '36daef66-1583-5a61-a8e3-c2ed6df47cb8', 'description' => 'News from Home', 'correct_answer' => false],
                    ['id' => '63e6528f-e37f-5206-b7bf-bce7701fb495', 'description' => 'O Silêncio de Lorna', 'correct_answer' => false],
                    ['id' => '1ddc8c7c-47ac-59e3-bcf3-96063ac5c019', 'description' => 'Um Homem que Dorme', 'correct_answer' => false],
                    ['id' => '29256453-2873-5bd0-945c-01f671b8e3aa', 'description' => 'A Humanidade', 'correct_answer' => false]
                ]],
        ['id' => '208c3ea6-bba8-5883-8164-76323d49cebf', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Chantal Akerman acompanha rotinas domésticas repetitivas de uma viúva belga ao longo de três dias?', 'difficulty' => 5, 'weight' => 985, 'alternatives' => [
                    ['id' => '129170da-7d81-5f6c-baa8-91fa22392947', 'description' => 'O Filho', 'correct_answer' => false],
                    ['id' => '41858105-2187-5572-b75a-48c4bd526cab', 'description' => 'News from Home', 'correct_answer' => false],
                    ['id' => '0cc0d854-287d-5b38-905f-583078b0780c', 'description' => 'Jeanne Dielman, 23 quai du Commerce, 1080 Bruxelles', 'correct_answer' => true],
                    ['id' => '2fa914b9-cf0b-53a8-a6c4-ca423311c84c', 'description' => 'Rosetta', 'correct_answer' => false],
                    ['id' => '8649b9cb-7b66-5c2a-8228-87eccd6d6dfe', 'description' => 'A Vida de Jesus', 'correct_answer' => false]
                ]],
        ['id' => '2d42fae1-247e-5bf8-9b71-c1d203c2f680', 'locale' => 'pt-BR', 'category' => '547c2496-0ee7-518a-a124-6f61c67336e8', 'question' => 'Qual filme de Akerman combina imagens de Nova York com a leitura de cartas enviadas por sua mãe?', 'difficulty' => 5, 'weight' => 949, 'alternatives' => [
                    ['id' => '05d28a3d-9f4c-5859-9620-fd81b0a1403a', 'description' => 'Um Homem que Dorme', 'correct_answer' => false],
                    ['id' => '42a2791e-31ae-55c4-87c3-f26ef0995e14', 'description' => 'O Filho', 'correct_answer' => false],
                    ['id' => 'd9b597ef-a1b8-58d5-a0e9-bf9bc14f7dc5', 'description' => 'News from Home', 'correct_answer' => true],
                    ['id' => '84df4aab-47c3-55e0-a009-2647a11446ff', 'description' => 'A Humanidade', 'correct_answer' => false],
                    ['id' => '57898101-9dd4-53d0-acf8-5e4cf3c8881f', 'description' => 'O Silêncio de Lorna', 'correct_answer' => false]
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
