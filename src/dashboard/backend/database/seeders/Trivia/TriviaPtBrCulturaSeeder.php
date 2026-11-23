<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrCulturaSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'created_by' => 'SYSTEM', 'short_description' => 'cultura', 'description' => 'Cultura'];

    private const QUESTIONS = [
        ['id' => '227fae26-a53e-5d97-abcc-4122f5599faa', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual pintura de Leonardo da Vinci retrata uma mulher com um sorriso enigmático?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => 'ce20432f-5938-519c-8c4b-abb6d9d967e8', 'description' => 'A Noite Estrelade', 'correct_answer' => false],
                    ['id' => 'c4913aeb-7aaf-5469-8461-09829c12158b', 'description' => 'Mona Lisa', 'correct_answer' => true],
                    ['id' => 'f1d3b5a7-27fe-5dff-875d-fe91519acfc9', 'description' => 'Guernica', 'correct_answer' => false],
                    ['id' => '7264aa2b-7d07-5a83-ae1a-046eab7c4cc4', 'description' => 'O Grito', 'correct_answer' => false],
                    ['id' => '16177ac2-90b2-5fa2-845b-5e25fd504aa3', 'description' => 'A Última Ceia', 'correct_answer' => false]
                ]],
        ['id' => 'd44c7034-3024-563b-a21e-dc94618d3666', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual obra de Leonardo da Vinci representa Jesus reunido com seus apóstolos durante uma refeição?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => 'b10c323a-8288-5e56-a7e3-f171288216bf', 'description' => 'A Última Ceia', 'correct_answer' => true],
                    ['id' => 'c7a3e6a4-ae5d-5a5e-a386-a7736bbddba9', 'description' => 'O Grito', 'correct_answer' => false],
                    ['id' => '86e7ccf8-dc00-5c9c-b52b-417b3c206007', 'description' => 'Mona Lisa', 'correct_answer' => false],
                    ['id' => '72a44a5d-98a7-5c6a-80d1-e72073ec450e', 'description' => 'A Noite Estrelada', 'correct_answer' => false],
                    ['id' => '2773141e-fe16-5fdf-b40b-efe743c0c32f', 'description' => 'Guernice', 'correct_answer' => false]
                ]],
        ['id' => 'cc3faef8-292a-5971-b2c8-d7038ac90588', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual pintura de Vincent van Gogh mostra um céu noturno com formas espiraladas sobre uma vila?', 'difficulty' => 1, 'weight' => 196, 'alternatives' => [
                    ['id' => '94a33d2b-c9e7-5bec-a2df-b54722b24021', 'description' => 'Mona Lise', 'correct_answer' => false],
                    ['id' => 'bf5d4979-f272-5aff-806a-e3d0159e9a35', 'description' => 'Guernica', 'correct_answer' => false],
                    ['id' => '33526c9e-a144-5cc2-85cb-c573d9887e4e', 'description' => 'A Última Ceia', 'correct_answer' => false],
                    ['id' => '24b62ac9-b127-5983-b15b-1f73f5e00497', 'description' => 'O Grito', 'correct_answer' => false],
                    ['id' => '42986755-64d5-5fd1-8796-64ca8ecbccae', 'description' => 'A Noite Estrelada', 'correct_answer' => true]
                ]],
        ['id' => '1e5e3a51-04ee-5d48-928e-d147051d3289', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual obra de Edvard Munch retrata uma figura angustiada em uma ponte?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => 'ecfa779a-f69c-5868-b609-9e9cd0b5e7ef', 'description' => 'Mona Lisa', 'correct_answer' => false],
                    ['id' => 'e91e831d-5200-5744-9e8a-69972b637471', 'description' => 'Guernica', 'correct_answer' => false],
                    ['id' => 'ac93100c-b12c-51f0-8b7c-30c02f97204d', 'description' => 'A Noite Estrelada', 'correct_answer' => false],
                    ['id' => '7a7e470e-add3-56fa-b3c5-1d7a09da67d7', 'description' => 'A Última Ceie', 'correct_answer' => false],
                    ['id' => '41a9466e-6b4c-55fc-b3f3-66d1b50231f2', 'description' => 'O Grito', 'correct_answer' => true]
                ]],
        ['id' => '1512388f-fe08-55a7-83bb-2dd18f13f67d', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual pintura de Pablo Picasso representa os horrores do bombardeio de uma cidade durante a Guerra Civil Espanhola?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => 'fe99f6f6-8382-5130-af4b-fccd21d396ab', 'description' => 'O Gritu', 'correct_answer' => false],
                    ['id' => '8edcf6a5-48a2-562d-8a53-8cb913cb9112', 'description' => 'A Última Ceia', 'correct_answer' => false],
                    ['id' => 'f834eaf8-0271-58f7-8fdf-964cbb5e1523', 'description' => 'Guernica', 'correct_answer' => true],
                    ['id' => '9431c30d-bc95-50db-b326-75aba5a6490a', 'description' => 'Mona Lisa', 'correct_answer' => false],
                    ['id' => '45ab3c6e-2e77-5710-93fc-27312ff8b9d9', 'description' => 'A Noite Estrelada', 'correct_answer' => false]
                ]],
        ['id' => 'b1ac4bf8-f83b-52c3-a634-519de0e29837', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual obra de Miguel de Cervantes acompanha um fidalgo que passa a agir como cavaleiro andante?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => '597fd435-b114-5d92-9bca-93d1addad624', 'description' => 'Dom Quixote', 'correct_answer' => true],
                    ['id' => 'cc3f288c-a82c-5c81-9b66-5c4686005704', 'description' => 'A Divina Comédie', 'correct_answer' => false],
                    ['id' => '5a174514-6dab-51ff-bb34-616f258389d2', 'description' => 'A Odisseia', 'correct_answer' => false],
                    ['id' => 'd52baada-2a5a-5e96-9245-e64b924d6802', 'description' => 'Os Lusíadas', 'correct_answer' => false],
                    ['id' => '7c39eef5-4d91-5027-ba27-fc86f124a19c', 'description' => 'Hamlet', 'correct_answer' => false]
                ]],
        ['id' => '3403a409-cf6c-51d3-a0c5-63a70d790aab', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual poema épico de Luís de Camões narra feitos ligados às navegações portuguesas?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => '7af54ff9-b03b-5546-9cfe-1e571e4e8cb5', 'description' => 'Dom Quixota', 'correct_answer' => false],
                    ['id' => 'c471ae6b-1e96-5de8-8786-e54f8c421d86', 'description' => 'A Odisseia', 'correct_answer' => false],
                    ['id' => 'ffdb916e-019d-5b04-b863-280f03d9ea8a', 'description' => 'Os Lusíadas', 'correct_answer' => true],
                    ['id' => '9d5b5079-e83a-5d8f-b383-d62cdd709539', 'description' => 'Hamlet', 'correct_answer' => false],
                    ['id' => 'd62b691f-1b57-526e-8c36-d9a8a9b869c3', 'description' => 'A Divina Comédia', 'correct_answer' => false]
                ]],
        ['id' => 'e4602d0c-563f-53b0-b8b4-b9a3faac16fa', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual poema épico atribuído a Homero narra o retorno de Ulisses a Ítaca?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => '28672e45-9bc4-500f-acdc-56a9d9586237', 'description' => 'A Odisseia', 'correct_answer' => true],
                    ['id' => '17891e9b-969f-5d11-88cb-075ef1fe9d1e', 'description' => 'A Divina Comédia', 'correct_answer' => false],
                    ['id' => 'fe43dd8b-9e10-54e2-955f-28ff3b4e5b22', 'description' => 'Os Lusíadaz', 'correct_answer' => false],
                    ['id' => 'a9b8e332-6ab2-5598-be3c-f2c8c8c541ed', 'description' => 'Hamlet', 'correct_answer' => false],
                    ['id' => 'a7660a42-e2a1-5473-8261-db55f2a2e8a9', 'description' => 'Dom Quixote', 'correct_answer' => false]
                ]],
        ['id' => '955f3dd1-32ca-5304-964b-526637a7badf', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual poema de Dante Alighieri descreve uma jornada pelo Inferno, Purgatório e Paraíso?', 'difficulty' => 1, 'weight' => 115, 'alternatives' => [
                    ['id' => '4a973768-f9dd-596e-ab5b-a36e85c84755', 'description' => 'Hamled', 'correct_answer' => false],
                    ['id' => 'f55920cb-8b68-5652-853c-f8f64945fbb2', 'description' => 'A Odisseia', 'correct_answer' => false],
                    ['id' => 'a51050a7-4f39-5ab9-b87a-f20cdbdfd8c9', 'description' => 'Dom Quixote', 'correct_answer' => false],
                    ['id' => '332c2afd-bbd7-59a0-92cf-51de53298685', 'description' => 'Os Lusíadas', 'correct_answer' => false],
                    ['id' => 'dfe837ea-a687-5b67-89f4-05bbc9a7e1c4', 'description' => 'A Divina Comédia', 'correct_answer' => true]
                ]],
        ['id' => '4f4ae391-7926-5d6d-93b9-6a7f6c206b91', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tragédia de William Shakespeare apresenta um príncipe dinamarquês que busca vingar a morte do pai?', 'difficulty' => 1, 'weight' => 156, 'alternatives' => [
                    ['id' => '035e9dae-c28a-5846-96f4-088472841c74', 'description' => 'Dom Quixote', 'correct_answer' => false],
                    ['id' => '568b3d11-2ad6-5d7c-81e8-fd576211945a', 'description' => 'Os Lusíadas', 'correct_answer' => false],
                    ['id' => 'd992010f-8797-5e91-8113-327e473d51e5', 'description' => 'A Odisseie', 'correct_answer' => false],
                    ['id' => '23e08ae6-02ab-5bba-be37-5ce22abab686', 'description' => 'A Divina Comédia', 'correct_answer' => false],
                    ['id' => '9c65486d-06ee-54c2-ae0d-94fe86342946', 'description' => 'Hamlet', 'correct_answer' => true]
                ]],
        ['id' => 'ee3fb7a7-f2cc-5a30-9ebe-95d67bce4bd2', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero musical e dança é fortemente associado ao carnaval brasileiro e às comunidades afro-brasileiras?', 'difficulty' => 1, 'weight' => 138, 'alternatives' => [
                    ['id' => '4f45b869-3400-5a0f-a0b7-5ca0eff801cb', 'description' => 'Fado', 'correct_answer' => false],
                    ['id' => 'db4701fb-a460-5a49-b2e7-75b837cc9199', 'description' => 'Samba', 'correct_answer' => true],
                    ['id' => 'd9323adc-c9ba-54e3-9d78-87e6efeb5b34', 'description' => 'Flamenco', 'correct_answer' => false],
                    ['id' => 'a7944bca-cf91-5049-9af3-62d91aa77c37', 'description' => 'Tangu', 'correct_answer' => false],
                    ['id' => '08b1cf4d-1042-53b2-b871-5211215b1ab5', 'description' => 'Reggae', 'correct_answer' => false]
                ]],
        ['id' => '78455b8f-ece7-5ebd-8caa-8aa5f397f99d', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero musical e dança surgiu na região do Rio da Prata, especialmente em Buenos Aires e Montevidéu?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => 'ab141fd3-40b1-53c3-8372-2a2892f0948c', 'description' => 'Flamenco', 'correct_answer' => false],
                    ['id' => '4360a192-150c-51b2-80df-b69e22e04b52', 'description' => 'Samba', 'correct_answer' => false],
                    ['id' => 'a21be9de-26a4-5892-9dcd-5e2a367b5e7c', 'description' => 'Fado', 'correct_answer' => false],
                    ['id' => '54991626-adee-5f67-bb29-78e5146dd832', 'description' => 'Reggaa', 'correct_answer' => false],
                    ['id' => '0ac2d468-40d2-57b7-a28c-547e77f3246e', 'description' => 'Tango', 'correct_answer' => true]
                ]],
        ['id' => 'fab8634b-9a63-595f-9d8e-b8a0192a46d0', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manifestação artística espanhola combina canto, dança e acompanhamento instrumental, associada à Andaluzia?', 'difficulty' => 1, 'weight' => 172, 'alternatives' => [
                    ['id' => '24e22816-f8d3-5853-9161-55e673dc05d6', 'description' => 'Sambe', 'correct_answer' => false],
                    ['id' => 'a0d9679f-552f-5a24-bb9c-a35362f33c04', 'description' => 'Tango', 'correct_answer' => false],
                    ['id' => '9363f1fe-02fd-543c-93f2-8cf260827622', 'description' => 'Fado', 'correct_answer' => false],
                    ['id' => '8204acea-17c2-5535-a2a3-60c6a0c8b02f', 'description' => 'Flamenco', 'correct_answer' => true],
                    ['id' => 'e20dcbc6-c2d7-5a5d-9d30-14e3d2225007', 'description' => 'Reggae', 'correct_answer' => false]
                ]],
        ['id' => 'b6bf3bf4-b93e-5c31-9b5b-cc13204f273d', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero musical português é tradicionalmente marcado pelo canto acompanhado de guitarra portuguesa?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => '2e9fb97a-62f4-5b83-a605-d25c859b5a83', 'description' => 'Fado', 'correct_answer' => true],
                    ['id' => '1e6bc0de-76f8-54ba-8aef-5a72e6af5c96', 'description' => 'Samba', 'correct_answer' => false],
                    ['id' => '63483e05-8a27-5673-a921-b1f62c422d4a', 'description' => 'Reggae', 'correct_answer' => false],
                    ['id' => '1ba96b46-116a-5f91-a975-618e8fe5e486', 'description' => 'Flamencu', 'correct_answer' => false],
                    ['id' => '448fe25c-d034-5636-9eab-498df2dcea7e', 'description' => 'Tango', 'correct_answer' => false]
                ]],
        ['id' => '97298ef7-7b7d-5f46-a2bd-4978f2f80b8f', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero musical jamaicano tornou-se mundialmente conhecido por artistas como Bob Marley?', 'difficulty' => 1, 'weight' => 114, 'alternatives' => [
                    ['id' => '56fd2f84-26f4-5a68-bcec-9dbdcdd4d925', 'description' => 'Samba', 'correct_answer' => false],
                    ['id' => '7963016a-c7df-52e1-8183-e3f0a7b46288', 'description' => 'Tango', 'correct_answer' => false],
                    ['id' => 'a2bd5b26-435f-5d2d-90ef-9ec318bd3b61', 'description' => 'Flamenco', 'correct_answer' => false],
                    ['id' => 'bba1f970-353e-5cdd-b476-42c1b8e47e8c', 'description' => 'Reggae', 'correct_answer' => true],
                    ['id' => '23f0cc67-a9e3-5407-a5b2-0bf6c91ae9db', 'description' => 'Fadu', 'correct_answer' => false]
                ]],
        ['id' => '01c20256-8f23-5065-81cb-12764bc4b8cd', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual conjunto de monumentos funerários do Egito antigo inclui a pirâmide de Quéops?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => 'ce96bbf9-979b-5af1-a27c-85696544561a', 'description' => 'Coliseu', 'correct_answer' => false],
                    ['id' => 'e0971364-bc50-5771-b611-7e12f3f3de5c', 'description' => 'Machu Picchu', 'correct_answer' => false],
                    ['id' => '8bda1c43-5fb8-51f4-9171-99485a809a75', 'description' => 'Grande Muralha da Chine', 'correct_answer' => false],
                    ['id' => '9932ab38-f03d-5e56-98c3-3e0f8729ac71', 'description' => 'Taj Mahal', 'correct_answer' => false],
                    ['id' => 'e5e82bc6-7f14-55c0-a2eb-2fa54478dd09', 'description' => 'Pirâmides de Gizé', 'correct_answer' => true]
                ]],
        ['id' => 'bd881b13-b023-5307-8bda-ce1b7737c110', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual mausoléu indiano foi construído por ordem do imperador Shah Jahan em memória de Mumtaz Mahal?', 'difficulty' => 1, 'weight' => 145, 'alternatives' => [
                    ['id' => '5a9d6ca5-9d58-5425-977d-fbaa6aef4d06', 'description' => 'Machu Picchu', 'correct_answer' => false],
                    ['id' => 'c6a7e501-1335-5b2d-a2c2-8ff6b4df98e0', 'description' => 'Taj Mahal', 'correct_answer' => true],
                    ['id' => 'd0bdcbc0-145c-5173-8c2b-d30324c84895', 'description' => 'Pirâmides de Gisé', 'correct_answer' => false],
                    ['id' => 'b50d7edd-635b-5da3-a995-47087ad46f03', 'description' => 'Grande Muralha da China', 'correct_answer' => false],
                    ['id' => '39fb35c1-11e1-5249-a586-04faa09e4b2b', 'description' => 'Coliseu', 'correct_answer' => false]
                ]],
        ['id' => '7bda1feb-3098-555d-a067-c829a7aeac60', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual anfiteatro de Roma era utilizado para espetáculos públicos e combates de gladiadores?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '61f209e3-ce37-5a32-8d9e-52003a8df752', 'description' => 'Coliseu', 'correct_answer' => true],
                    ['id' => 'ba316938-6fdf-5197-8701-4470704f5b72', 'description' => 'Taj Mahar', 'correct_answer' => false],
                    ['id' => '517e75be-0259-5a7f-bae4-4565aa9178b8', 'description' => 'Machu Picchu', 'correct_answer' => false],
                    ['id' => '9383676b-a20b-5363-89d0-47c1961da419', 'description' => 'Pirâmides de Gizé', 'correct_answer' => false],
                    ['id' => '21d62549-c14b-5ce6-b58f-e21ffacc2a64', 'description' => 'Grande Muralha da China', 'correct_answer' => false]
                ]],
        ['id' => 'deeb5af3-fc88-512f-b752-3fbd3c22cc51', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual antiga cidade inca está localizada nos Andes peruanos?', 'difficulty' => 1, 'weight' => 198, 'alternatives' => [
                    ['id' => '802bf6e3-b7c6-514e-8259-af4463b09113', 'description' => 'Grande Muralha da China', 'correct_answer' => false],
                    ['id' => '06450f71-8dbf-5502-bd5c-d25c46dedc0e', 'description' => 'Pirâmides de Gizé', 'correct_answer' => false],
                    ['id' => '490d212f-8b3e-5245-8c83-e4e9d8094fff', 'description' => 'Coliseo', 'correct_answer' => false],
                    ['id' => '4dd2e51b-75e8-562c-8fc4-34ceb6a4aa5e', 'description' => 'Machu Picchu', 'correct_answer' => true],
                    ['id' => 'af4eae4e-9a41-502c-827c-dbfb0b19bd69', 'description' => 'Taj Mahal', 'correct_answer' => false]
                ]],
        ['id' => 'a10b98e3-e817-5942-a265-f7829420d4d6', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual conjunto de fortificações foi construído ao longo de séculos para proteger regiões da China?', 'difficulty' => 1, 'weight' => 113, 'alternatives' => [
                    ['id' => '6186d8ce-fa1f-5ada-a4a7-1ca31da1bfbb', 'description' => 'Grande Muralha da China', 'correct_answer' => true],
                    ['id' => '8ed9a39b-3950-5892-9017-ac8dcf5275b2', 'description' => 'Machu Piccho', 'correct_answer' => false],
                    ['id' => 'e96f5695-5394-553f-928e-0d55417a9895', 'description' => 'Pirâmides de Gizé', 'correct_answer' => false],
                    ['id' => 'fbe21905-1aa3-563a-b790-e5fed09b0d82', 'description' => 'Coliseu', 'correct_answer' => false],
                    ['id' => '495d049a-0082-5246-a386-4acb6127cc31', 'description' => 'Taj Mahal', 'correct_answer' => false]
                ]],
        ['id' => '4781db7d-79e8-5b94-ab03-81804fd08b1e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual celebração popular brasileira é marcada por desfiles, blocos de rua e festas antes da Quaresma?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => 'dc3e95ef-ec8f-53f9-84ee-087d96b9ab1c', 'description' => 'Bumba meu boi', 'correct_answer' => false],
                    ['id' => 'e9b07a7d-0600-5a3b-b0a9-d7ebed80da43', 'description' => 'Carnaval', 'correct_answer' => true],
                    ['id' => '74e61db2-4367-5a4f-8741-b497f003a782', 'description' => 'Círio de Nazaré', 'correct_answer' => false],
                    ['id' => '9d5aa46f-e619-51da-a565-b631ed083652', 'description' => 'Festa Junina', 'correct_answer' => false],
                    ['id' => 'b960c6ca-af06-5382-ad62-f098fc2abb32', 'description' => 'Lavagem do Bonfin', 'correct_answer' => false]
                ]],
        ['id' => 'b25b6db0-72f3-5913-8b24-985fb5a03f10', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual conjunto de festas populares brasileiras celebra santos como Santo Antônio, São João e São Pedro?', 'difficulty' => 1, 'weight' => 177, 'alternatives' => [
                    ['id' => '4e9682da-f181-5898-adf2-a033e7ed0aec', 'description' => 'Carnaval', 'correct_answer' => false],
                    ['id' => '841581db-fa2d-5974-8f8f-ab7719ea565b', 'description' => 'Festa Junina', 'correct_answer' => true],
                    ['id' => '677751a8-fa85-51d3-82d7-e44a201e8892', 'description' => 'Lavagem do Bonfim', 'correct_answer' => false],
                    ['id' => '214e7c6a-cfcf-51f2-91ba-dcca2c81db67', 'description' => 'Círio de Nazaré', 'correct_answer' => false],
                    ['id' => 'f53244ad-1b51-56b3-9ffb-22654156f2b5', 'description' => 'Bumba meu boe', 'correct_answer' => false]
                ]],
        ['id' => '6990e7f3-9dfb-54f6-a111-09d880de5293', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manifestação popular brasileira combina música, dança, teatro e a narrativa da morte e ressurreição de um boi?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => '0bc5b6bd-1732-52f9-a730-07d6eb3862d3', 'description' => 'Lavagem do Bonfim', 'correct_answer' => false],
                    ['id' => '3ffbc2bb-aa95-550b-a50e-8b1ade116068', 'description' => 'Festa Junina', 'correct_answer' => false],
                    ['id' => '1c8e722a-3761-5951-afec-710557a7ff58', 'description' => 'Bumba meu boi', 'correct_answer' => true],
                    ['id' => '4f3aaa21-aeec-5de1-8472-8cde00abf935', 'description' => 'Carnaval', 'correct_answer' => false],
                    ['id' => 'aa19bc6a-1728-52ce-b1e9-9a827fc14607', 'description' => 'Círio de Nazalé', 'correct_answer' => false]
                ]],
        ['id' => '46026285-ce5e-55a7-a8b0-8c93ff233e44', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual grande manifestação religiosa realizada em Belém homenageia Nossa Senhora de Nazaré?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => 'd81aaa21-ab17-5081-bb16-612feeaad83d', 'description' => 'Círio de Nazaré', 'correct_answer' => true],
                    ['id' => 'bd605206-c5cd-5042-9a0f-75b870370322', 'description' => 'Festa Junina', 'correct_answer' => false],
                    ['id' => 'ca546c51-7248-5c6e-bc31-ee5d306a6d86', 'description' => 'Carnavar', 'correct_answer' => false],
                    ['id' => '245c8c96-9008-59d5-b0a6-237cf2e489de', 'description' => 'Bumba meu boi', 'correct_answer' => false],
                    ['id' => '95861496-3dd4-5cec-bf7b-bad70b600995', 'description' => 'Lavagem do Bonfim', 'correct_answer' => false]
                ]],
        ['id' => '3ec6dcdc-30da-5c2c-8bbe-3296fa7ee670', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição religiosa e cultural de Salvador envolve uma caminhada até a Igreja do Senhor do Bonfim?', 'difficulty' => 1, 'weight' => 173, 'alternatives' => [
                    ['id' => '1f06b698-e2da-5456-83ad-7634a6863d50', 'description' => 'Bumba meu boi', 'correct_answer' => false],
                    ['id' => '60e62258-bb60-551a-a791-0fc2feb695e4', 'description' => 'Festa Junine', 'correct_answer' => false],
                    ['id' => '6a58b2ef-2e9c-5cdd-8a5c-f2f23ed0bea8', 'description' => 'Lavagem do Bonfim', 'correct_answer' => true],
                    ['id' => 'b93de7a4-69a7-5526-a9dc-8b313a51c7c6', 'description' => 'Círio de Nazaré', 'correct_answer' => false],
                    ['id' => '9f89bd1e-ce30-5bee-908d-01ba47112b55', 'description' => 'Carnaval', 'correct_answer' => false]
                ]],
        ['id' => 'e9cdfaa5-773e-5ca9-962c-6614116bbf3d', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual arte japonesa consiste em criar figuras por meio de dobraduras de papel?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => '3b01457c-434b-5788-80ce-1292d9901b30', 'description' => 'Origami', 'correct_answer' => true],
                    ['id' => 'b93244e8-9c20-5242-909f-2c9654718b7e', 'description' => 'Ikebana', 'correct_answer' => false],
                    ['id' => 'cdacec2b-09b5-570a-8775-c527a72460cc', 'description' => 'Bonsae', 'correct_answer' => false],
                    ['id' => '659d2ca6-347d-55bf-a056-4843610f3c5b', 'description' => 'Caligrafia japonesa', 'correct_answer' => false],
                    ['id' => 'b9965cff-b20d-58c1-959a-3aa48cd31085', 'description' => 'Cerimônia do chá', 'correct_answer' => false]
                ]],
        ['id' => '219df45d-54e7-5dbc-8c51-eade8aa74fb4', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual prática artística japonesa organiza flores e elementos vegetais em composições?', 'difficulty' => 1, 'weight' => 126, 'alternatives' => [
                    ['id' => 'ccb041d1-40c4-5605-ae59-0d202654d12b', 'description' => 'Ikebana', 'correct_answer' => true],
                    ['id' => '52f76ea1-c63f-5407-8fd6-75fc67392b58', 'description' => 'Origame', 'correct_answer' => false],
                    ['id' => '3f4bc91c-ac93-5819-b552-179dcd5a9b5e', 'description' => 'Cerimônia do chá', 'correct_answer' => false],
                    ['id' => 'c27b2c66-5441-5843-922d-0316ae403fd4', 'description' => 'Bonsai', 'correct_answer' => false],
                    ['id' => '7f1507a4-825d-5792-9e18-63731739cbee', 'description' => 'Caligrafia japonesa', 'correct_answer' => false]
                ]],
        ['id' => '53610b39-fcf8-5206-b65e-3abcfd263a48', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual arte tradicional japonesa utiliza pincel e tinta para escrever caracteres de forma estética?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '1bc979ae-c856-5b47-b8e3-79808cfb133b', 'description' => 'Ikebane', 'correct_answer' => false],
                    ['id' => '7be5deb7-6d06-5de0-90f5-f7a0ee57813d', 'description' => 'Cerimônia do chá', 'correct_answer' => false],
                    ['id' => 'b58a9172-5e5c-57c9-b475-d622dca39fb9', 'description' => 'Caligrafia japonesa', 'correct_answer' => true],
                    ['id' => '91f7f396-e186-51c8-9ac4-d3b4daa5ff34', 'description' => 'Origami', 'correct_answer' => false],
                    ['id' => '8c002eb6-db47-54ba-a79c-bc8fc44fcb4e', 'description' => 'Bonsai', 'correct_answer' => false]
                ]],
        ['id' => '5648d0aa-7d54-5fee-84b8-053a6601b8b4', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição japonesa envolve a preparação e a apresentação ritualizadas do chá verde em pó?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => '22ee0843-0177-52df-b993-675dfc03abd3', 'description' => 'Bonsai', 'correct_answer' => false],
                    ['id' => '077baf5f-5650-5e17-9775-369e1db895b2', 'description' => 'Cerimônia do chá', 'correct_answer' => true],
                    ['id' => 'df7c52cc-cee5-5769-8aa4-fab87ba94bb7', 'description' => 'Caligrafia japonese', 'correct_answer' => false],
                    ['id' => 'd8fed097-8195-561e-8efb-33b9ad6625f8', 'description' => 'Ikebana', 'correct_answer' => false],
                    ['id' => 'fed24ac7-a500-5909-840d-a4e2dfff876e', 'description' => 'Origami', 'correct_answer' => false]
                ]],
        ['id' => 'c36cd4d2-5ba7-5f87-834c-20f94e99bf79', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual prática tradicional cultiva árvores em miniatura por meio de poda e modelagem?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => '7b698bb6-e994-5dba-9574-755296f8243f', 'description' => 'Ikebana', 'correct_answer' => false],
                    ['id' => '35d5b6ee-919b-59d0-9372-6a92335cfe8a', 'description' => 'Bonsai', 'correct_answer' => true],
                    ['id' => 'ba04f23f-423a-5e68-994a-15eac4f3ed22', 'description' => 'Origami', 'correct_answer' => false],
                    ['id' => 'ad6fa4b7-cf72-51fe-8816-e203405080c0', 'description' => 'Cerimônia do khá', 'correct_answer' => false],
                    ['id' => '986c30a0-2d25-5922-95f4-6090cd710594', 'description' => 'Caligrafia japonesa', 'correct_answer' => false]
                ]],
        ['id' => '0e676e98-5d3e-58cd-bbb4-ae521d14708c', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual objeto artístico é usado para cobrir o rosto e pode representar personagens em rituais e espetáculos?', 'difficulty' => 1, 'weight' => 200, 'alternatives' => [
                    ['id' => '1e59c1c5-5e4d-58de-8a3c-aaa9a962d9ca', 'description' => 'Afresco', 'correct_answer' => false],
                    ['id' => 'dff6c2e0-dea1-59cb-bc6c-684fef413cb2', 'description' => 'Mosaico', 'correct_answer' => false],
                    ['id' => 'e3502780-9673-56b8-8775-55965930a89f', 'description' => 'Vitral', 'correct_answer' => false],
                    ['id' => 'fbcb9b5a-f69b-5e0b-b636-cfbdfd044615', 'description' => 'Máscara', 'correct_answer' => true],
                    ['id' => '208540cb-98e8-559e-9afc-bc45f28c01c0', 'description' => 'Gravure', 'correct_answer' => false]
                ]],
        ['id' => '649c6b52-8c2c-55d6-ab3a-aa23bd8a4986', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica de pintura aplica pigmentos sobre uma camada de reboco ainda úmida?', 'difficulty' => 1, 'weight' => 172, 'alternatives' => [
                    ['id' => '38d2f391-6bd5-50b8-86c6-9e3d535d5795', 'description' => 'Afresco', 'correct_answer' => true],
                    ['id' => '355d4ae0-47fe-52bf-9252-075df8658018', 'description' => 'Vitral', 'correct_answer' => false],
                    ['id' => '361081d9-744d-5a06-be7f-3465a2ffe011', 'description' => 'Máscare', 'correct_answer' => false],
                    ['id' => 'ccee12c3-e2a0-5f9f-a6f9-50aacc8237d2', 'description' => 'Gravura', 'correct_answer' => false],
                    ['id' => '24134091-ccc4-5e9b-93ff-f7c48c9df47f', 'description' => 'Mosaico', 'correct_answer' => false]
                ]],
        ['id' => '53797fb6-b68a-58d1-b736-903312493213', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica artística cria imagens ou padrões com pequenas peças de pedra, vidro ou cerâmica?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => '75466db5-1dd9-5d70-9dbc-2a8ff141b317', 'description' => 'Mosaico', 'correct_answer' => true],
                    ['id' => '3b52b6a9-8a4d-5c89-b827-ce5fc2de975f', 'description' => 'Gravura', 'correct_answer' => false],
                    ['id' => 'e1319afa-e1b6-527c-8243-5798407122a7', 'description' => 'Máscara', 'correct_answer' => false],
                    ['id' => '26e29c26-943a-5d72-a2c7-edc4512c0c4e', 'description' => 'Vitral', 'correct_answer' => false],
                    ['id' => '6a76d76e-1778-5e38-bf83-4c1cce641087', 'description' => 'Afrescu', 'correct_answer' => false]
                ]],
        ['id' => '0a3cc320-9a4d-5574-a50f-dc5d0b1eeb7b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual composição artística utiliza peças de vidro colorido, frequentemente montadas em janelas?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => 'f6e34b0f-bc86-5897-be82-eeadf5ab84b4', 'description' => 'Mosaicu', 'correct_answer' => false],
                    ['id' => '63bd6c97-2264-57eb-a61a-f609194b2bc8', 'description' => 'Vitral', 'correct_answer' => true],
                    ['id' => '3205c05c-ed64-5a91-819e-4f98e1526172', 'description' => 'Gravura', 'correct_answer' => false],
                    ['id' => '972405cf-1280-59e3-a478-0e77bf205b06', 'description' => 'Máscara', 'correct_answer' => false],
                    ['id' => 'b2eccd43-fd80-597d-aa8c-1746f17fb5f6', 'description' => 'Afresco', 'correct_answer' => false]
                ]],
        ['id' => '94524910-76a5-5dd5-8b20-23782948d207', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica artística produz imagens a partir de uma matriz que pode ser impressa repetidamente?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => 'f549038f-a41b-594f-ade2-50619d641d1b', 'description' => 'Mosaico', 'correct_answer' => false],
                    ['id' => '91f197a8-0a7c-5e89-be73-4bfd57240009', 'description' => 'Máscara', 'correct_answer' => false],
                    ['id' => 'a6c3094a-8f80-5333-8994-bb5f3a7d49cf', 'description' => 'Vitrar', 'correct_answer' => false],
                    ['id' => '7a5cb1b0-cec3-5055-951b-f119ab9d7c0b', 'description' => 'Gravura', 'correct_answer' => true],
                    ['id' => '8faba940-8764-5ef0-aa1f-cadee163b231', 'description' => 'Afresco', 'correct_answer' => false]
                ]],
        ['id' => 'af52e8ce-3927-5fec-8b20-4ca4c0666ed2', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Em qual tradição mitológica Zeus é apresentado como governante dos deuses do Olimpo?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '5e404533-1de4-5b94-9c0f-e6fe0c5848fa', 'description' => 'Mitologia grega', 'correct_answer' => true],
                    ['id' => '6f3b77da-086d-5f1a-9164-b4fbc3ef682c', 'description' => 'Mitologia romana', 'correct_answer' => false],
                    ['id' => '98626d10-a5bd-5f98-bba1-093736708b5e', 'description' => 'Mitologia japonesa', 'correct_answer' => false],
                    ['id' => '0e01bd79-e3ae-5dd5-a9ab-3f164d865e3a', 'description' => 'Mitologia nórdice', 'correct_answer' => false],
                    ['id' => '2c133fe2-8322-5a06-a911-13c417d14453', 'description' => 'Mitologia egípcia', 'correct_answer' => false]
                ]],
        ['id' => '3a087fac-783a-5552-971a-0479ff4ede29', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Em qual tradição aparecem deuses como Odin, Thor e Loki?', 'difficulty' => 1, 'weight' => 162, 'alternatives' => [
                    ['id' => '11386b40-0895-5ebb-8abf-d60d98235667', 'description' => 'Mitologia grege', 'correct_answer' => false],
                    ['id' => '4bfdf7ae-f855-5682-bdc9-4ab72ca0a271', 'description' => 'Mitologia nórdica', 'correct_answer' => true],
                    ['id' => '064f7c5e-f5d5-5175-b6e1-f363ce3af79f', 'description' => 'Mitologia romana', 'correct_answer' => false],
                    ['id' => '1bd7920b-f515-5621-aca6-908a0a9a4e05', 'description' => 'Mitologia japonesa', 'correct_answer' => false],
                    ['id' => '04ee8ae9-39ed-54d8-8381-3235a168b3d3', 'description' => 'Mitologia egípcia', 'correct_answer' => false]
                ]],
        ['id' => 'de4bf8a5-cad4-5ab5-975d-c04f67995873', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Em qual tradição religiosa antiga aparecem divindades como Ísis, Osíris e Anúbis?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => 'b1194a57-f8c6-5614-8b18-fcb7062a0037', 'description' => 'Mitologia grega', 'correct_answer' => false],
                    ['id' => '944bd6b1-e687-5c6b-b9f0-521ffb4fa0b3', 'description' => 'Mitologia romana', 'correct_answer' => false],
                    ['id' => 'f530213e-c2cf-56be-b140-8cc80e2b1f9c', 'description' => 'Mitologia nórdica', 'correct_answer' => false],
                    ['id' => '4edc2d93-65a9-5e9b-be06-176744217ac9', 'description' => 'Mitologia japonese', 'correct_answer' => false],
                    ['id' => 'fa2380aa-fa92-56a5-b371-ee3c33107064', 'description' => 'Mitologia egípcia', 'correct_answer' => true]
                ]],
        ['id' => 'f0fd2855-29bd-5a95-956b-3134a332cc08', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Em qual tradição Júpiter, Marte e Vênus correspondem a importantes divindades?', 'difficulty' => 1, 'weight' => 141, 'alternatives' => [
                    ['id' => 'dd281433-e89a-5db8-87c1-3dbc9fd63fea', 'description' => 'Mitologia egípcie', 'correct_answer' => false],
                    ['id' => '38aedc38-0dd7-5228-a52b-268200c3fa06', 'description' => 'Mitologia japonesa', 'correct_answer' => false],
                    ['id' => '7920b6d7-7f08-5ab8-9382-b855d0e42ce7', 'description' => 'Mitologia romana', 'correct_answer' => true],
                    ['id' => '028668ce-c27a-53f2-ba07-ba92d59f3eec', 'description' => 'Mitologia nórdica', 'correct_answer' => false],
                    ['id' => '6bc5243e-d1b8-5be2-ad6d-3312e0b63ad1', 'description' => 'Mitologia grega', 'correct_answer' => false]
                ]],
        ['id' => '09293ede-9ed0-51c5-ba66-a56c02bf5547', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Em qual tradição religiosa e mitológica aparecem Amaterasu e Susanoo?', 'difficulty' => 1, 'weight' => 178, 'alternatives' => [
                    ['id' => '8760c07c-19f1-523c-a8aa-de7e8f92e40c', 'description' => 'Mitologia romane', 'correct_answer' => false],
                    ['id' => 'a20004db-bad6-5eea-9126-cf583e817315', 'description' => 'Mitologia grega', 'correct_answer' => false],
                    ['id' => '25ba7c13-0f7b-5934-8f17-c8dd2031edf9', 'description' => 'Mitologia egípcia', 'correct_answer' => false],
                    ['id' => 'a792045b-deae-5c61-8278-db91346872f0', 'description' => 'Mitologia japonesa', 'correct_answer' => true],
                    ['id' => 'cde50288-d153-543a-abb3-af709794ad90', 'description' => 'Mitologia nórdica', 'correct_answer' => false]
                ]],
        ['id' => 'be04684b-2a47-588c-95bb-71dd5ee481ac', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo artístico dos séculos XVII e XVIII é conhecido por dramaticidade, movimento e contrastes intensos?', 'difficulty' => 2, 'weight' => 222, 'alternatives' => [
                    ['id' => '175fbd24-d33e-52bb-ab18-dad171731921', 'description' => 'Neoclassicismo', 'correct_answer' => false],
                    ['id' => '9c7604d5-ae5f-54b1-8752-24a348304c89', 'description' => 'Barroco', 'correct_answer' => true],
                    ['id' => '73d55b64-6577-525a-a6d1-7ea2c5d018ea', 'description' => 'Rococó', 'correct_answer' => false],
                    ['id' => 'cf6e9b22-577a-58f3-beeb-f19d23558abf', 'description' => 'Realismo', 'correct_answer' => false],
                    ['id' => '2600f108-ac42-513a-92b6-234df9e6ecb3', 'description' => 'Romantisno', 'correct_answer' => false]
                ]],
        ['id' => '72652df5-fc6b-54c5-b121-2eced40f81a9', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo artístico do século XVIII é associado a ornamentação delicada, temas galantes e cores claras?', 'difficulty' => 2, 'weight' => 359, 'alternatives' => [
                    ['id' => 'a4c95fd5-0a86-5c04-8a77-075d5badb700', 'description' => 'Realismo', 'correct_answer' => false],
                    ['id' => '0ec6cf5a-73c5-535b-8726-8b83743c8478', 'description' => 'Neoclassicismo', 'correct_answer' => false],
                    ['id' => 'd8294a95-3a5d-5215-83c0-34bd5c067cee', 'description' => 'Barroko', 'correct_answer' => false],
                    ['id' => '1c7dc201-cf03-55a6-87b2-a1d130960c13', 'description' => 'Romantismo', 'correct_answer' => false],
                    ['id' => 'f435ae44-0d8b-5ae4-91b7-9967ef7c96db', 'description' => 'Rococó', 'correct_answer' => true]
                ]],
        ['id' => 'dcbcfe81-7fe9-5a89-933f-1cd280cf9050', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico retomou modelos da Antiguidade greco-romana e valorizou equilíbrio e racionalidade?', 'difficulty' => 2, 'weight' => 288, 'alternatives' => [
                    ['id' => '1951e6bf-c1ad-52c8-bdc5-a3e9ae7e7004', 'description' => 'Barroco', 'correct_answer' => false],
                    ['id' => 'b9355538-af64-5ab3-af41-33f07aee1411', 'description' => 'Rococó', 'correct_answer' => false],
                    ['id' => '8e7563bf-8748-53ac-941d-02aa24b3e21a', 'description' => 'Romantismo', 'correct_answer' => false],
                    ['id' => 'cb886adf-6273-5758-a2d6-2b50db8f9622', 'description' => 'Realismu', 'correct_answer' => false],
                    ['id' => 'be93befe-c15f-55c0-ba65-4d87a7d84269', 'description' => 'Neoclassicismo', 'correct_answer' => true]
                ]],
        ['id' => '3427d265-e9a1-5784-9ea4-ae362e78dedc', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento cultural valorizou emoção, imaginação, individualidade e paisagens sublimes?', 'difficulty' => 2, 'weight' => 377, 'alternatives' => [
                    ['id' => 'c3ea9dc2-74ef-5dd9-b602-06dd8603edfc', 'description' => 'Barroco', 'correct_answer' => false],
                    ['id' => '235a42d5-0187-5c24-b7de-b1e3b12cd251', 'description' => 'Neoclassicisno', 'correct_answer' => false],
                    ['id' => 'aa26ba3a-4a95-5d94-afea-9eae6b2212a9', 'description' => 'Romantismo', 'correct_answer' => true],
                    ['id' => '18529f07-99b5-51c2-883e-6fe91ddaa733', 'description' => 'Realismo', 'correct_answer' => false],
                    ['id' => '9f9553be-0889-5322-ac01-0b3f1119b393', 'description' => 'Rococó', 'correct_answer' => false]
                ]],
        ['id' => '1fc404ae-152c-5d65-bef7-703d1e78abe5', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico e literário buscou representar a sociedade e o cotidiano sem idealização romântica?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '5f1beeb0-8dbb-569e-b814-9c1982e50d4e', 'description' => 'Neoclassicismo', 'correct_answer' => false],
                    ['id' => '380ac5e2-521a-533d-a9f9-742ea7ab0fff', 'description' => 'Barroco', 'correct_answer' => false],
                    ['id' => '45d5c32d-03ea-5573-8777-9b72ed724590', 'description' => 'Rocokó', 'correct_answer' => false],
                    ['id' => '1f83b1fe-7668-5d23-8f96-99a814b9b595', 'description' => 'Romantismo', 'correct_answer' => false],
                    ['id' => 'f9a6dcc9-7745-5e8b-a8ef-32f91b990503', 'description' => 'Realismo', 'correct_answer' => true]
                ]],
        ['id' => '06b6f56b-31f3-56c3-8561-a4d4ad7cdbfc', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico valorizou a captação de efeitos momentâneos de luz e atmosfera?', 'difficulty' => 2, 'weight' => 369, 'alternatives' => [
                    ['id' => 'd703f285-920d-5a65-bbed-dbd392bb3fb4', 'description' => 'Cubisno', 'correct_answer' => false],
                    ['id' => '7dc09536-a074-5e1f-8b29-63ebcde9bb53', 'description' => 'Impressionismo', 'correct_answer' => true],
                    ['id' => '09cf7c47-e616-5b6d-a134-7543697d7c8f', 'description' => 'Surrealismo', 'correct_answer' => false],
                    ['id' => '2a58f63a-0754-5c98-9323-c5044f0ae10e', 'description' => 'Fauvismo', 'correct_answer' => false],
                    ['id' => 'd710c315-800f-5e0b-9fed-214d9e8ff757', 'description' => 'Expressionismo', 'correct_answer' => false]
                ]],
        ['id' => '1e074d90-0006-5152-84a0-88f43bcf7b31', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico distorce formas e cores para expressar estados emocionais e subjetivos?', 'difficulty' => 2, 'weight' => 254, 'alternatives' => [
                    ['id' => '54812a4a-9ff8-5e50-a166-4ffeb6549e49', 'description' => 'Fauvismo', 'correct_answer' => false],
                    ['id' => '0b3c4540-94b2-5e6e-aaf3-6194c0cb3fa0', 'description' => 'Impressionismo', 'correct_answer' => false],
                    ['id' => '6683e5f4-271d-5c04-ad61-05092847f8aa', 'description' => 'Surrealisno', 'correct_answer' => false],
                    ['id' => '69adf8c0-fc50-5617-986f-6b22a9754c92', 'description' => 'Expressionismo', 'correct_answer' => true],
                    ['id' => 'b3435570-b748-52d3-8576-8f8eeb7f3fc9', 'description' => 'Cubismo', 'correct_answer' => false]
                ]],
        ['id' => '902d6a12-4fc5-5b52-b501-1c21cabf5afe', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento associado a Picasso e Braque representou objetos por formas geométricas e múltiplos pontos de vista?', 'difficulty' => 2, 'weight' => 257, 'alternatives' => [
                    ['id' => 'eb5559f7-aef3-570d-8962-c99bcd963b4e', 'description' => 'Impressionisno', 'correct_answer' => false],
                    ['id' => '44814693-a7ac-5998-ac5a-b3fc180a5e78', 'description' => 'Surrealismo', 'correct_answer' => false],
                    ['id' => '7b216129-5837-5914-adf2-00f55d29fb28', 'description' => 'Fauvismo', 'correct_answer' => false],
                    ['id' => '9877f01a-08a0-57ed-ba52-a89626e941b0', 'description' => 'Expressionismo', 'correct_answer' => false],
                    ['id' => '496f049e-a9d8-58b6-8729-7c380ed485f9', 'description' => 'Cubismo', 'correct_answer' => true]
                ]],
        ['id' => '02a97be3-f6d4-54a6-9d11-4606c9737d6a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico explorou sonhos, inconsciente e associações inesperadas de imagens?', 'difficulty' => 2, 'weight' => 224, 'alternatives' => [
                    ['id' => '82189862-2a69-588e-a953-c0d45c648831', 'description' => 'Expressionismo', 'correct_answer' => false],
                    ['id' => '35be9056-9dd8-5b19-8e44-cee078c37154', 'description' => 'Fauvisno', 'correct_answer' => false],
                    ['id' => '941a7535-df8a-5002-92dc-2ab4263fb4dc', 'description' => 'Surrealismo', 'correct_answer' => true],
                    ['id' => '5189540e-4ef1-5289-872d-5818bca83fc7', 'description' => 'Impressionismo', 'correct_answer' => false],
                    ['id' => 'c78e9ee3-8436-5ac1-9232-d4e1410cab41', 'description' => 'Cubismo', 'correct_answer' => false]
                ]],
        ['id' => '1d4e6d94-c478-520f-bc9e-dfdbfaa61d04', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento francês do início do século XX ficou conhecido pelo uso intenso e não naturalista das cores?', 'difficulty' => 2, 'weight' => 330, 'alternatives' => [
                    ['id' => 'b1a022d7-edf2-5bbf-a1ac-590e9529e04d', 'description' => 'Fauvismo', 'correct_answer' => true],
                    ['id' => 'ec090a05-4f90-545d-bd68-13babc0852c9', 'description' => 'Impressionismo', 'correct_answer' => false],
                    ['id' => 'edb50967-5d7b-5f77-a30b-a605214bc734', 'description' => 'Surrealismo', 'correct_answer' => false],
                    ['id' => '6639544d-5ccc-5abc-bb34-2ec37a65af87', 'description' => 'Cubismo', 'correct_answer' => false],
                    ['id' => '1f77651f-a7a2-5a87-ade9-bf7e0284422c', 'description' => 'Expressionisno', 'correct_answer' => false]
                ]],
        ['id' => '8276202f-d434-5a44-80b4-63846248da59', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero dramático apresenta conflitos graves e frequentemente conduz a um desfecho doloroso para os protagonistas?', 'difficulty' => 2, 'weight' => 320, 'alternatives' => [
                    ['id' => 'd8cd899c-771e-524f-8b8c-18b21d52142f', 'description' => 'Farsa', 'correct_answer' => false],
                    ['id' => '1b9cbe5c-1d46-51e9-ac3f-ae659cf5d29a', 'description' => 'Comédia', 'correct_answer' => false],
                    ['id' => 'be01f5bb-faa2-576d-9cad-9643455629f3', 'description' => 'Tragédia', 'correct_answer' => true],
                    ['id' => '38b67a07-f569-5ffa-942e-8496fec1f981', 'description' => 'Melodrama', 'correct_answer' => false],
                    ['id' => 'ef12a4dc-057e-518d-a9e9-0c15c78305cb', 'description' => 'Sátire', 'correct_answer' => false]
                ]],
        ['id' => 'f251912c-57f7-5e79-b317-d471669baedf', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero dramático utiliza situações cômicas e costuma buscar o riso do público?', 'difficulty' => 2, 'weight' => 347, 'alternatives' => [
                    ['id' => '4ef2ffc8-bd13-5b37-86cc-c0cf90a358ef', 'description' => 'Melodrama', 'correct_answer' => false],
                    ['id' => 'd03c8711-c1a4-54b5-82d3-98984d77c473', 'description' => 'Sátira', 'correct_answer' => false],
                    ['id' => '372e1a05-776e-5cb3-aed2-1c99f56f193a', 'description' => 'Farsa', 'correct_answer' => false],
                    ['id' => 'f300b058-3c89-5c2b-b34e-866911e2f5c7', 'description' => 'Tragédie', 'correct_answer' => false],
                    ['id' => 'ec204bc6-b7e4-59bf-a7a7-77d8fcb17e22', 'description' => 'Comédia', 'correct_answer' => true]
                ]],
        ['id' => '905ae76b-1ae0-52df-b9da-8ac3b0456bbb', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma de expressão critica costumes, instituições ou comportamentos por meio de humor e ironia?', 'difficulty' => 2, 'weight' => 364, 'alternatives' => [
                    ['id' => 'd8cb30f0-343f-5063-844a-3dbef5be83c3', 'description' => 'Sátira', 'correct_answer' => true],
                    ['id' => '814fe131-8e98-538e-b2d2-1f954f3911ee', 'description' => 'Comédia', 'correct_answer' => false],
                    ['id' => 'a6355ec0-f769-5883-8d01-297f305d6c4d', 'description' => 'Melodrama', 'correct_answer' => false],
                    ['id' => '2e757853-4d32-5c86-8fb3-6ed193daa2f1', 'description' => 'Tragédia', 'correct_answer' => false],
                    ['id' => '72e3c136-518f-5ff9-8b6b-5c27270f4c98', 'description' => 'Farse', 'correct_answer' => false]
                ]],
        ['id' => 'bc2efd12-d61a-5a95-96b7-015d0602c7a5', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero teatral utiliza exageros, equívocos e situações absurdas para provocar riso?', 'difficulty' => 2, 'weight' => 213, 'alternatives' => [
                    ['id' => '6ecd1a14-7399-5612-8634-21b8062c77f5', 'description' => 'Comédia', 'correct_answer' => false],
                    ['id' => '7e98c109-60c6-5b36-8438-2288b628b22e', 'description' => 'Melodrame', 'correct_answer' => false],
                    ['id' => 'a4c78da5-23f0-502e-ad67-58dcc2be8149', 'description' => 'Tragédia', 'correct_answer' => false],
                    ['id' => 'f28d5a99-698e-540d-ae3e-e8b214332e66', 'description' => 'Sátira', 'correct_answer' => false],
                    ['id' => '3e3e78c6-8b44-5565-8070-ac6bc8c466ef', 'description' => 'Farsa', 'correct_answer' => true]
                ]],
        ['id' => 'edc61c6e-5bf9-568d-bc5d-35e496da8e10', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero dramático enfatiza emoções intensas, conflitos morais claros e reviravoltas sentimentais?', 'difficulty' => 2, 'weight' => 294, 'alternatives' => [
                    ['id' => '534ed7ad-8886-5a30-9ca2-3a964c808870', 'description' => 'Tragédia', 'correct_answer' => false],
                    ['id' => '4ad34609-7135-5bb4-9664-15e106d19157', 'description' => 'Sátira', 'correct_answer' => false],
                    ['id' => '6fc56cfd-d674-5a6d-9a6b-e03087da7d97', 'description' => 'Farsa', 'correct_answer' => false],
                    ['id' => 'da62f002-080f-5872-8e01-80217c2fa455', 'description' => 'Melodrama', 'correct_answer' => true],
                    ['id' => '037de7bf-6844-5111-bf96-0afcf747e56e', 'description' => 'Comédie', 'correct_answer' => false]
                ]],
        ['id' => '863012fc-50f7-5fa3-a286-53ef9caf747a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma poética japonesa tradicional costuma apresentar três versos e uma referência à natureza ou às estações?', 'difficulty' => 2, 'weight' => 255, 'alternatives' => [
                    ['id' => '1b299f14-c35b-54cb-a7de-456e9606d999', 'description' => 'Ode', 'correct_answer' => false],
                    ['id' => 'ecce3a14-00ff-5c96-a4fb-1b5a06e8abfd', 'description' => 'Haicai', 'correct_answer' => true],
                    ['id' => 'b960ea3a-eec9-580e-b610-b702c546a88c', 'description' => 'Sonetu', 'correct_answer' => false],
                    ['id' => '21c9a90f-7841-5dbd-9bb8-98f038f03207', 'description' => 'Elegia', 'correct_answer' => false],
                    ['id' => '9a71955a-c4d1-5546-9b4a-2c50744ffaec', 'description' => 'Balada', 'correct_answer' => false]
                ]],
        ['id' => 'a98aab73-df91-544d-b71e-bfe81a035ee4', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma poética tradicional é composta por quatorze versos, frequentemente organizados em dois quartetos e dois tercetos?', 'difficulty' => 2, 'weight' => 351, 'alternatives' => [
                    ['id' => '8c641142-28b1-5d3e-8d99-03c9884c4e9a', 'description' => 'Ode', 'correct_answer' => false],
                    ['id' => '217ea22b-7171-546d-b73d-f28a61fae8a6', 'description' => 'Haicae', 'correct_answer' => false],
                    ['id' => '8715dddb-e756-5a91-8e41-6036dce1202b', 'description' => 'Elegia', 'correct_answer' => false],
                    ['id' => 'f85df007-ad50-5aee-8363-111545a0873f', 'description' => 'Soneto', 'correct_answer' => true],
                    ['id' => 'c4ec440b-f078-553a-9af4-e2404db95079', 'description' => 'Balada', 'correct_answer' => false]
                ]],
        ['id' => '124e0467-7bb6-5b41-8cd6-466cee6e36d0', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma poética costuma expressar louvor ou reflexão elevada sobre uma pessoa, ideia ou acontecimento?', 'difficulty' => 2, 'weight' => 346, 'alternatives' => [
                    ['id' => 'a4406263-8325-53e3-84f5-1489b594fa17', 'description' => 'Soneto', 'correct_answer' => false],
                    ['id' => '3002f75b-c2d0-5f64-8e3d-1f421ccde7c7', 'description' => 'Balade', 'correct_answer' => false],
                    ['id' => '60e973b5-087a-5bb0-a4e6-44b1329c0114', 'description' => 'Ode', 'correct_answer' => true],
                    ['id' => '8e91d236-95a2-5810-a231-a54f2ff72d30', 'description' => 'Elegia', 'correct_answer' => false],
                    ['id' => '920c373a-ce9f-5512-9512-3d8ae9628bb5', 'description' => 'Haicai', 'correct_answer' => false]
                ]],
        ['id' => '706f5699-f352-502f-9c10-a2c7efa8fef9', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero poético é tradicionalmente associado à lamentação, à perda ou ao luto?', 'difficulty' => 2, 'weight' => 335, 'alternatives' => [
                    ['id' => '02c818c9-3b7c-5873-9bf0-a806334c87c9', 'description' => 'Oda', 'correct_answer' => false],
                    ['id' => '3b5e5f89-6acd-53e2-9a58-b094b4c61c1e', 'description' => 'Elegia', 'correct_answer' => true],
                    ['id' => 'e4621422-5860-56cd-b4b2-97a4263464c5', 'description' => 'Balada', 'correct_answer' => false],
                    ['id' => '65340814-af3c-585b-91e0-984b6c92da0f', 'description' => 'Soneto', 'correct_answer' => false],
                    ['id' => 'aac74770-7d45-54b8-a094-2a0ff3ae8332', 'description' => 'Haicai', 'correct_answer' => false]
                ]],
        ['id' => '5af43c60-1c19-506f-8fc8-c232b989a25b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma poética ou musical narrativa costuma contar uma história em versos?', 'difficulty' => 2, 'weight' => 256, 'alternatives' => [
                    ['id' => 'e92858eb-720f-513f-b4cd-18d4e9954ebb', 'description' => 'Ode', 'correct_answer' => false],
                    ['id' => 'd1d5d5e2-8669-5d3f-a5f8-2fa663d74fc4', 'description' => 'Haicai', 'correct_answer' => false],
                    ['id' => 'b6dbcfb6-1424-58a0-9009-edf95b7952ca', 'description' => 'Soneto', 'correct_answer' => false],
                    ['id' => 'c72daa5e-2cf5-5183-ae29-4cc09cc125d7', 'description' => 'Balada', 'correct_answer' => true],
                    ['id' => 'fc253bac-98c2-5bff-9d9d-73ce284bcb87', 'description' => 'Elegie', 'correct_answer' => false]
                ]],
        ['id' => 'c6afcd75-b741-5538-bc38-77cddbba9bb7', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma tradicional japonesa de teatro combina canto, dança lenta e máscaras estilizadas?', 'difficulty' => 2, 'weight' => 300, 'alternatives' => [
                    ['id' => 'c0109049-5f23-5f48-8807-ebf74fdf8a78', 'description' => 'Teatro Kabuke', 'correct_answer' => false],
                    ['id' => '4e715d77-35a6-5d34-a01d-69cef2b1546c', 'description' => 'Teatro Nô', 'correct_answer' => true],
                    ['id' => '1c8d4d39-1e29-59ea-9ace-ddd453a09e1d', 'description' => 'Ópera de Pequim', 'correct_answer' => false],
                    ['id' => '2992bdd1-4f61-567e-89dc-c1be93bedf17', 'description' => 'Teatro de sombras', 'correct_answer' => false],
                    ['id' => 'b2bec3b7-5d65-50c9-a083-d0977eaf601e', 'description' => 'Teatro Bunraku', 'correct_answer' => false]
                ]],
        ['id' => '825033a3-cb64-5fd8-bf4e-fcff72aa89e0', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma tradicional japonesa de teatro é conhecida por maquiagem marcante, figurinos elaborados e atuação estilizada?', 'difficulty' => 2, 'weight' => 359, 'alternatives' => [
                    ['id' => '600e0cf4-df40-5ae5-b5c4-a29377fbd147', 'description' => 'Teatro de sombras', 'correct_answer' => false],
                    ['id' => '4623655e-9052-5372-8732-3adb6db2958b', 'description' => 'Ópera de Pequim', 'correct_answer' => false],
                    ['id' => '0a0f37e9-45dd-544b-9900-8e21f8fc657f', 'description' => 'Teatro Kabuki', 'correct_answer' => true],
                    ['id' => '9b942833-3b1e-5d65-b59c-88eeb8ace5a3', 'description' => 'Teatro Nô', 'correct_answer' => false],
                    ['id' => '42fbf3d9-1f85-5857-b34e-d66d6f261232', 'description' => 'Teatro Bunrako', 'correct_answer' => false]
                ]],
        ['id' => 'f60be3a0-89a3-5d1a-b1f6-2d939df6dfc2', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma tradicional japonesa de teatro utiliza grandes bonecos manipulados por artistas visíveis?', 'difficulty' => 2, 'weight' => 215, 'alternatives' => [
                    ['id' => 'd4682138-2b2c-529c-9227-f8dc949c8604', 'description' => 'Teatro Kabuki', 'correct_answer' => false],
                    ['id' => '11523a39-db77-58a5-9d76-beaf44bcf0ac', 'description' => 'Teatro de sombras', 'correct_answer' => false],
                    ['id' => '4f88e556-e61f-5491-bd47-c7461d32dc1a', 'description' => 'Ópera de Pequin', 'correct_answer' => false],
                    ['id' => '38d2e9d3-fab6-5b07-be06-febaa46c172d', 'description' => 'Teatro Nô', 'correct_answer' => false],
                    ['id' => '1e8b69d8-a2d9-587d-aa7a-a7948ef99c4d', 'description' => 'Teatro Bunraku', 'correct_answer' => true]
                ]],
        ['id' => '5ac9eace-c7de-520d-9abf-f44ff0691d9b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma de teatro musical chinês combina canto, acrobacia, gestos codificados e figurinos simbólicos?', 'difficulty' => 2, 'weight' => 396, 'alternatives' => [
                    ['id' => 'bb2ac15f-42a0-585d-ae30-805f69ff795f', 'description' => 'Teatro Kabuki', 'correct_answer' => false],
                    ['id' => '3970bd53-229d-5407-899e-b24d2bac5b3d', 'description' => 'Ópera de Pequim', 'correct_answer' => true],
                    ['id' => '3acb6de3-a36b-5088-b54e-15a6de930874', 'description' => 'Teatro Nô', 'correct_answer' => false],
                    ['id' => 'a59a6add-3ca6-5f90-bc98-e2f9b133c6c4', 'description' => 'Teatro de sombraz', 'correct_answer' => false],
                    ['id' => '0bf7976b-242a-5f73-a54b-2602fa84b1ef', 'description' => 'Teatro Bunraku', 'correct_answer' => false]
                ]],
        ['id' => '5b06ce09-598d-5f09-8742-71234626d28c', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma de espetáculo utiliza figuras recortadas projetadas sobre uma superfície iluminada?', 'difficulty' => 2, 'weight' => 234, 'alternatives' => [
                    ['id' => 'cd720344-4c45-530e-9c20-b3962fa24467', 'description' => 'Teatro de sombras', 'correct_answer' => true],
                    ['id' => '00ffe28e-8fa4-5f77-96e6-02b0a1f1338d', 'description' => 'Ópera de Pequim', 'correct_answer' => false],
                    ['id' => '3d2e83f5-ce77-5b22-a25e-965bb260471e', 'description' => 'Teatro Bunraku', 'correct_answer' => false],
                    ['id' => 'a06b1081-dae3-55ad-9ae0-28cc2c333c91', 'description' => 'Teatro Mô', 'correct_answer' => false],
                    ['id' => '1f823fc6-f274-5775-a9a1-4432dd9cd360', 'description' => 'Teatro Kabuki', 'correct_answer' => false]
                ]],
        ['id' => 'f17bb5ce-b9a6-5d62-bd44-500a39264d13', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo arquitetônico medieval é associado a arcos ogivais, abóbadas nervuradas e grandes vitrais?', 'difficulty' => 2, 'weight' => 243, 'alternatives' => [
                    ['id' => '9b6b5048-58d2-5276-862d-19ee61b6dcff', 'description' => 'Mudéjar', 'correct_answer' => false],
                    ['id' => 'a4388d2d-77d8-53d7-8229-456af1552f0e', 'description' => 'Românico', 'correct_answer' => false],
                    ['id' => '4d0627f2-92c4-5de3-a788-74e8c55495e8', 'description' => 'Bizantinu', 'correct_answer' => false],
                    ['id' => 'ceb99a4b-c794-5d9d-aa77-0824f52e9099', 'description' => 'Gótico', 'correct_answer' => true],
                    ['id' => '4756cfe0-ff80-5c1f-8c3f-d5edecb01ea7', 'description' => 'Renascimento', 'correct_answer' => false]
                ]],
        ['id' => '8e2cf8f1-e7bb-5e62-9978-d2853465cf94', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo arquitetônico medieval é marcado por paredes espessas, arcos semicirculares e pequenas aberturas?', 'difficulty' => 2, 'weight' => 273, 'alternatives' => [
                    ['id' => '6f093851-7ae9-54d4-878c-94a8d2311797', 'description' => 'Mudéjal', 'correct_answer' => false],
                    ['id' => '5ac8d822-9e29-58be-a46c-c0618f5f20d7', 'description' => 'Renascimento', 'correct_answer' => false],
                    ['id' => '98d5badc-6fad-527f-9366-baccf5beb11e', 'description' => 'Românico', 'correct_answer' => true],
                    ['id' => 'ee196bf4-de9a-564b-b6bc-c5e68ba1ce7c', 'description' => 'Gótico', 'correct_answer' => false],
                    ['id' => '2fa3c6bd-8849-5ea1-80bb-e9d6655a220f', 'description' => 'Bizantino', 'correct_answer' => false]
                ]],
        ['id' => '7146aadd-91b5-5e7f-aa14-7a03345a6600', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição arquitetônica é conhecida por cúpulas, mosaicos dourados e plantas centralizadas?', 'difficulty' => 2, 'weight' => 230, 'alternatives' => [
                    ['id' => '4b4c227b-6960-5911-b95d-3f390449fd45', 'description' => 'Renascimendo', 'correct_answer' => false],
                    ['id' => '206da679-fab9-5111-9d6c-b74a46a2e158', 'description' => 'Gótico', 'correct_answer' => false],
                    ['id' => '6d1f2deb-86d3-5796-ae9b-b3cdcbf146c1', 'description' => 'Românico', 'correct_answer' => false],
                    ['id' => 'c6462063-6c1d-51e9-a73a-9d30fb72a0fb', 'description' => 'Bizantino', 'correct_answer' => true],
                    ['id' => '7de3cf5f-4e35-5a43-b37d-d203471fbda3', 'description' => 'Mudéjar', 'correct_answer' => false]
                ]],
        ['id' => '58c361ba-03d7-5625-abd8-1ead38c920f6', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo artístico ibérico combina tradições construtivas cristãs com técnicas e ornamentos de influência islâmica?', 'difficulty' => 2, 'weight' => 399, 'alternatives' => [
                    ['id' => '19cfa5b1-23b8-5557-bb29-8414d21ef565', 'description' => 'Românico', 'correct_answer' => false],
                    ['id' => '3318a605-9a1e-5b31-8fae-3fcf81668b92', 'description' => 'Bizantino', 'correct_answer' => false],
                    ['id' => 'c379c7a4-b758-56bd-9010-9ba605af20df', 'description' => 'Renascimento', 'correct_answer' => false],
                    ['id' => 'e562f528-84fa-588e-bcc1-3f26861e8ea1', 'description' => 'Mudéjar', 'correct_answer' => true],
                    ['id' => '5d8175ec-9464-56a3-80c2-db695f988152', 'description' => 'Góticu', 'correct_answer' => false]
                ]],
        ['id' => 'ba2b57f5-597c-5637-a02a-07fb2ace8c05', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo arquitetônico retomou proporções clássicas, simetria e elementos da arquitetura greco-romana?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => 'bd3a330d-73ff-56ef-b2b7-458288eaaaad', 'description' => 'Gótico', 'correct_answer' => false],
                    ['id' => 'b54706ef-cee4-5ef6-a88a-7c89718aaa58', 'description' => 'Bizantino', 'correct_answer' => false],
                    ['id' => 'dcf7bb35-4791-5ba0-bc9b-4a9b0af985c7', 'description' => 'Mudéjar', 'correct_answer' => false],
                    ['id' => '47b6c07d-8793-5e69-a91a-efbe017b6e2f', 'description' => 'Renascimento', 'correct_answer' => true],
                    ['id' => '0e0b5843-4523-5d1c-a2ac-56188219a3c0', 'description' => 'Românicu', 'correct_answer' => false]
                ]],
        ['id' => '3ddbf1e2-3f04-5cdd-93d7-c3f1b74fd374', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Como são classificados edifícios, monumentos, objetos e sítios físicos de valor cultural?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => 'ef3804f8-2d80-52e6-adec-be19ba30a0bd', 'description' => 'Patrimônio material', 'correct_answer' => true],
                    ['id' => '941c8155-410b-5cb6-b9f7-d13bba245489', 'description' => 'Paisagem cultural', 'correct_answer' => false],
                    ['id' => 'd8c61786-7ccb-5c04-a4e7-d66d95eb9390', 'description' => 'Patrimônio natural', 'correct_answer' => false],
                    ['id' => '55b4579d-e0d3-5e36-ab18-1d7225b99ac8', 'description' => 'Patrimônio documental', 'correct_answer' => false],
                    ['id' => 'e46f7998-2ae6-52b6-880a-9b7c8278a07d', 'description' => 'Patrimônio imateriar', 'correct_answer' => false]
                ]],
        ['id' => 'a318227f-4451-5e7f-8fa8-3464ace96c0e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Como são classificadas práticas, expressões, conhecimentos e técnicas transmitidos entre gerações?', 'difficulty' => 2, 'weight' => 362, 'alternatives' => [
                    ['id' => '94c037a2-ea96-5f7f-a2a8-fa17d0adf6b9', 'description' => 'Patrimônio material', 'correct_answer' => false],
                    ['id' => 'a7d27a60-ed87-5190-bdf6-bf36eddeaa8e', 'description' => 'Patrimônio imaterial', 'correct_answer' => true],
                    ['id' => '9fe7ca0f-b690-5a74-a8aa-283b8ad6c338', 'description' => 'Patrimônio natural', 'correct_answer' => false],
                    ['id' => '0d855916-eae3-5017-833d-2572cdf6d2a4', 'description' => 'Patrimônio documentar', 'correct_answer' => false],
                    ['id' => '120f9c59-deb5-5610-afff-9a5958c05012', 'description' => 'Paisagem cultural', 'correct_answer' => false]
                ]],
        ['id' => '4f694712-203d-5297-8106-dc7521135d4c', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Como são classificados ambientes, formações geológicas e áreas naturais de valor excepcional?', 'difficulty' => 2, 'weight' => 289, 'alternatives' => [
                    ['id' => '01cc2fc5-016c-5876-a9d0-9b795f90fd34', 'description' => 'Patrimônio natural', 'correct_answer' => true],
                    ['id' => 'c1af48f3-3027-526a-b1b4-f4b27cab83b7', 'description' => 'Patrimônio documental', 'correct_answer' => false],
                    ['id' => 'ea12b6b3-93d7-52a9-9fb9-c75a4ff629d5', 'description' => 'Paisagem culturar', 'correct_answer' => false],
                    ['id' => '29439f02-9782-51df-b3fa-9c9e30347209', 'description' => 'Patrimônio material', 'correct_answer' => false],
                    ['id' => '1e7ca7d7-3d4d-5907-9125-d2980f49ce2a', 'description' => 'Patrimônio imaterial', 'correct_answer' => false]
                ]],
        ['id' => '80eb7124-abfe-526f-abd0-b99a9be2a82d', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Como é chamada uma área que expressa a interação entre comunidades humanas e o ambiente ao longo do tempo?', 'difficulty' => 2, 'weight' => 244, 'alternatives' => [
                    ['id' => 'b6c6db95-f5fb-5bc0-8540-7e4408862e01', 'description' => 'Patrimônio documental', 'correct_answer' => false],
                    ['id' => 'cf29c4e4-b317-5604-90ee-80530a996005', 'description' => 'Patrimônio naturar', 'correct_answer' => false],
                    ['id' => 'f5634537-69d6-5b79-bad5-648802ec15fe', 'description' => 'Patrimônio imaterial', 'correct_answer' => false],
                    ['id' => '834ec190-afdf-5827-835d-be6963dee12f', 'description' => 'Patrimônio material', 'correct_answer' => false],
                    ['id' => '3ea20770-215b-593c-b89f-34f6f7bed4f6', 'description' => 'Paisagem cultural', 'correct_answer' => true]
                ]],
        ['id' => '11362f5b-999d-5560-8e08-0103cd50d57d', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Como são classificados registros escritos, audiovisuais e outros documentos de valor histórico e cultural?', 'difficulty' => 2, 'weight' => 272, 'alternatives' => [
                    ['id' => 'b138ef40-b07f-589a-b87a-adbf84ce7356', 'description' => 'Patrimônio natural', 'correct_answer' => false],
                    ['id' => '25cd1c28-ef1c-5d2b-9a3d-bf8dba7c7e82', 'description' => 'Paisagem cultural', 'correct_answer' => false],
                    ['id' => 'b5cfcf6e-9b86-5df7-947a-a40d439b42a6', 'description' => 'Patrimônio imaterial', 'correct_answer' => false],
                    ['id' => '00dbecb9-728b-5c15-92ba-d23ca8dfbf93', 'description' => 'Patrimônio materiar', 'correct_answer' => false],
                    ['id' => '2b1cd8b8-e31a-573b-bde6-0c47e25956ff', 'description' => 'Patrimônio documental', 'correct_answer' => true]
                ]],
        ['id' => '3caa414c-b70e-5dae-b9e0-6706e3adec24', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero narrativo extenso relata feitos heroicos de importância coletiva ou nacional?', 'difficulty' => 2, 'weight' => 359, 'alternatives' => [
                    ['id' => '83571d1c-bf7b-54a0-b660-a7d548e4f772', 'description' => 'Romance histórico', 'correct_answer' => false],
                    ['id' => '94d0cacc-7297-59c0-9202-15212866abac', 'description' => 'Epopeia', 'correct_answer' => true],
                    ['id' => 'adaa0335-1044-51ae-9c29-5faf4fb92222', 'description' => 'Novela picaresca', 'correct_answer' => false],
                    ['id' => 'f0380fef-27c3-550f-b76f-d06c5aa7c3d1', 'description' => 'Romance de formação', 'correct_answer' => false],
                    ['id' => 'c88eae8f-9c7f-59ad-850d-c08c9ed9e473', 'description' => 'Romance epistolal', 'correct_answer' => false]
                ]],
        ['id' => '0981ba06-b601-5a85-9d21-ad1dea0699b7', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma narrativa é construída principalmente por cartas ou documentos escritos pelos personagens?', 'difficulty' => 2, 'weight' => 311, 'alternatives' => [
                    ['id' => 'fc88f4d0-7285-56c8-9a1e-680d418514ff', 'description' => 'Romance epistolar', 'correct_answer' => true],
                    ['id' => '6d67b205-53d0-5daa-bb1b-f729f38e31ad', 'description' => 'Novela picaresca', 'correct_answer' => false],
                    ['id' => '1fe5f878-0ce8-5090-8114-62d12e1ee7f1', 'description' => 'Epopeie', 'correct_answer' => false],
                    ['id' => '3b271d9d-5fff-5699-bf83-af4adf775e28', 'description' => 'Romance histórico', 'correct_answer' => false],
                    ['id' => '5d427bc4-911c-5eb5-a912-c402e06ce4ea', 'description' => 'Romance de formação', 'correct_answer' => false]
                ]],
        ['id' => 'f1779006-a019-571f-a760-11775f6b174f', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero acompanha o desenvolvimento moral, psicológico e social de um personagem ao longo da vida?', 'difficulty' => 2, 'weight' => 293, 'alternatives' => [
                    ['id' => '083c0937-febb-501a-9a42-3edcd255f575', 'description' => 'Romance epistolar', 'correct_answer' => false],
                    ['id' => '3439a620-c16c-5acf-95b7-73d444488808', 'description' => 'Romance histórico', 'correct_answer' => false],
                    ['id' => '3ecef6bc-71c7-5602-9d75-4713389be4a6', 'description' => 'Romance de formação', 'correct_answer' => true],
                    ['id' => 'ef8248d4-6dd4-5f1c-b4a3-3e421319aa8c', 'description' => 'Novela picaresce', 'correct_answer' => false],
                    ['id' => 'af975994-51cb-5dd1-994a-e262c881b67c', 'description' => 'Epopeia', 'correct_answer' => false]
                ]],
        ['id' => 'f4b2ee8b-874a-5efb-8e79-ef2fd1125211', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero narrativo apresenta as aventuras de um protagonista de origem humilde que sobrevive por astúcia?', 'difficulty' => 2, 'weight' => 254, 'alternatives' => [
                    ['id' => '1b3dc802-9e13-560b-b0cf-3514a67bc4f9', 'description' => 'Romance históricu', 'correct_answer' => false],
                    ['id' => 'aa65c775-2873-5bb2-81a7-d5c38a16f3f0', 'description' => 'Novela picaresca', 'correct_answer' => true],
                    ['id' => '77d620ae-8a23-5bdf-a79f-fb90f543a31b', 'description' => 'Romance de formação', 'correct_answer' => false],
                    ['id' => '9661980f-584d-5f66-aa6f-da6f43f83214', 'description' => 'Romance epistolar', 'correct_answer' => false],
                    ['id' => '15cc63a2-804c-5952-9aec-96af18c93398', 'description' => 'Epopeia', 'correct_answer' => false]
                ]],
        ['id' => '170017a5-d6aa-5e1e-ba16-e95796ee6c65', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero ficcional situa sua narrativa em um período histórico passado e incorpora acontecimentos ou personagens da época?', 'difficulty' => 2, 'weight' => 243, 'alternatives' => [
                    ['id' => 'a0b58ba1-c247-578d-a234-3d9f403f70cd', 'description' => 'Epopeia', 'correct_answer' => false],
                    ['id' => 'd17aaf61-0aa0-5105-aa2e-a014b6a9578c', 'description' => 'Romance histórico', 'correct_answer' => true],
                    ['id' => '1b66b10c-af3f-5db2-a8d0-180f8520f1e0', 'description' => 'Novela picaresca', 'correct_answer' => false],
                    ['id' => '764a0007-8c3f-57ad-8bae-8a5a0bc556e8', 'description' => 'Romance epistolar', 'correct_answer' => false],
                    ['id' => 'd3fe15ba-6267-5836-ab9e-da1bffe626cd', 'description' => 'Romance de formaçãu', 'correct_answer' => false]
                ]],
        ['id' => '35eb834f-b79f-50ef-aacb-e3a468dd5f22', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento de vanguarda surgiu em Zurique durante a Primeira Guerra Mundial e contestou convenções artísticas?', 'difficulty' => 3, 'weight' => 588, 'alternatives' => [
                    ['id' => '91f57e68-a444-5407-b084-fb654fbfcac7', 'description' => 'Dadaísmo', 'correct_answer' => true],
                    ['id' => '97b12b28-c3d6-5219-b2c9-dec9d8d37cdb', 'description' => 'Futurismo', 'correct_answer' => false],
                    ['id' => '9c2ba321-f1bf-5ba5-8d2c-d1470a716d15', 'description' => 'Construtivismo', 'correct_answer' => false],
                    ['id' => 'c42d29d3-0e43-5243-a440-a2ca0898ee4d', 'description' => 'De Stijr', 'correct_answer' => false],
                    ['id' => '434c069b-52b3-5d26-a084-5ce82d064623', 'description' => 'Bauhaus', 'correct_answer' => false]
                ]],
        ['id' => '089c60ef-8a6b-5148-8d4c-6f930d12f4c7', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento iniciado na Itália exaltou velocidade, tecnologia, máquinas e dinamismo urbano?', 'difficulty' => 3, 'weight' => 416, 'alternatives' => [
                    ['id' => '54577d2a-280f-59e0-91ed-89f34dbbb099', 'description' => 'Construtivismo', 'correct_answer' => false],
                    ['id' => 'b30e61a1-f2ca-5a30-8696-d367948e453e', 'description' => 'Futurismo', 'correct_answer' => true],
                    ['id' => '0169b3a5-3338-52e9-a0ab-3a1c0a441812', 'description' => 'De Stijl', 'correct_answer' => false],
                    ['id' => 'c3d29f7d-c7cd-598d-993a-ae3a521895af', 'description' => 'Bauhauz', 'correct_answer' => false],
                    ['id' => '2e55b3af-791e-5f9e-9d89-ec2069bae6f6', 'description' => 'Dadaísmo', 'correct_answer' => false]
                ]],
        ['id' => '470f3a2c-9ed0-5c98-b563-2af4a58c230c', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico russo buscou aproximar arte, design e produção social por meio de formas geométricas?', 'difficulty' => 3, 'weight' => 476, 'alternatives' => [
                    ['id' => 'a3499fa9-996f-5452-a29e-ca65ec757851', 'description' => 'De Stijl', 'correct_answer' => false],
                    ['id' => '9e959069-cb58-50ad-b3ef-1e1960f8068b', 'description' => 'Bauhaus', 'correct_answer' => false],
                    ['id' => 'f3a7c9f0-413e-58c9-a05c-58e41140944b', 'description' => 'Construtivismo', 'correct_answer' => true],
                    ['id' => '60e4dde1-6c8e-5bcf-8e6b-18f838a17d9a', 'description' => 'Futurismo', 'correct_answer' => false],
                    ['id' => 'dc4f084a-5a43-519a-a37a-6ae2090d0213', 'description' => 'Dadaísno', 'correct_answer' => false]
                ]],
        ['id' => '1de0ae4e-338a-56b6-ab78-720770bde722', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento neerlandês associado a Mondrian defendeu abstração geométrica com linhas retas e cores primárias?', 'difficulty' => 3, 'weight' => 551, 'alternatives' => [
                    ['id' => '57c68599-dc7c-512c-bc18-9c99e0d40647', 'description' => 'De Stijl', 'correct_answer' => true],
                    ['id' => 'a2a4faf9-d369-5b7e-96cb-b58ee36accec', 'description' => 'Construtivisno', 'correct_answer' => false],
                    ['id' => 'e2a97273-7bd2-5a42-892e-311c0411176a', 'description' => 'Futurismo', 'correct_answer' => false],
                    ['id' => '549f5afb-7f9f-50d5-a693-f8a916391ebf', 'description' => 'Bauhaus', 'correct_answer' => false],
                    ['id' => '5f6a38a3-5c99-5f1e-b131-01837311cd88', 'description' => 'Dadaísmo', 'correct_answer' => false]
                ]],
        ['id' => '378bfc48-931f-5adf-8cff-213f5c02d98f', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual escola alemã fundada por Walter Gropius procurou integrar artes, artesanato, arquitetura e design?', 'difficulty' => 3, 'weight' => 479, 'alternatives' => [
                    ['id' => 'a0fa835b-5854-5941-bf67-71f118e2534c', 'description' => 'Construtivismo', 'correct_answer' => false],
                    ['id' => 'fea13a44-5cb1-59d5-9712-775020c5660a', 'description' => 'Dadaísmo', 'correct_answer' => false],
                    ['id' => 'dd316743-bb93-5e03-b274-541558b8a8f0', 'description' => 'De Stijl', 'correct_answer' => false],
                    ['id' => 'aaa7a138-7819-5227-bdca-02feead48a8f', 'description' => 'Bauhaus', 'correct_answer' => true],
                    ['id' => 'f8863af0-aedb-52ab-a417-c507453d9614', 'description' => 'Futurisno', 'correct_answer' => false]
                ]],
        ['id' => '71ee0104-bc8b-5b27-9717-1795a1768bb1', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição teatral japonesa desenvolveu uma linguagem cênica altamente estilizada, com máscaras e movimentos codificados?', 'difficulty' => 3, 'weight' => 583, 'alternatives' => [
                    ['id' => 'de7abfde-4a71-5035-972a-236af4fb394e', 'description' => 'Gagaku', 'correct_answer' => false],
                    ['id' => '8e6db58f-42a9-5c75-8cd8-3adbecf130ce', 'description' => 'Kabuke', 'correct_answer' => false],
                    ['id' => 'ee101566-c3d5-527d-b261-ca6eb6ec1b4a', 'description' => 'Bunraku', 'correct_answer' => false],
                    ['id' => 'd1063e92-0f98-5fba-9718-c6e6b4647038', 'description' => 'Kyogen', 'correct_answer' => false],
                    ['id' => '61d90f17-590f-5e73-8886-a7777275c168', 'description' => 'Noh', 'correct_answer' => true]
                ]],
        ['id' => '7639b0ac-e015-510f-a6b3-4db70788cc23', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma teatral japonesa tradicional costuma apresentar peças cômicas curtas entre apresentações de Noh?', 'difficulty' => 3, 'weight' => 408, 'alternatives' => [
                    ['id' => '352578c0-5622-5c42-90a5-a907302d76ed', 'description' => 'Kyogen', 'correct_answer' => true],
                    ['id' => '890b3ace-9b37-59c5-99b7-3384abf9c855', 'description' => 'Kabuki', 'correct_answer' => false],
                    ['id' => '2bc95e77-4c44-586f-a1f8-29b58ce6ba09', 'description' => 'Noh', 'correct_answer' => false],
                    ['id' => 'ebd68610-fbd6-57bf-9ea7-2fe10562d762', 'description' => 'Bunraku', 'correct_answer' => false],
                    ['id' => '358c17f5-babd-5c24-ae00-ff41b815ec51', 'description' => 'Gagako', 'correct_answer' => false]
                ]],
        ['id' => '81ad7b1a-71e6-5164-874d-b00f11129f3c', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição japonesa de teatro de bonecos utiliza narrador, música de shamisen e manipuladores especializados?', 'difficulty' => 3, 'weight' => 490, 'alternatives' => [
                    ['id' => 'bf7acf29-3f90-5cd0-85eb-c3e8c39f071e', 'description' => 'Nuh', 'correct_answer' => false],
                    ['id' => 'c92937b1-94eb-54a4-8a8c-fd78c67e1958', 'description' => 'Bunraku', 'correct_answer' => true],
                    ['id' => 'fec0c78f-89e9-5efe-9a5c-bfde01c00e34', 'description' => 'Kabuki', 'correct_answer' => false],
                    ['id' => 'c20c8fde-8c52-5b47-9def-ffaaa047a550', 'description' => 'Kyogen', 'correct_answer' => false],
                    ['id' => 'd96c9bd2-2b55-5385-9299-ef9420552a2b', 'description' => 'Gagaku', 'correct_answer' => false]
                ]],
        ['id' => 'e2d1b393-64ad-57db-954c-bced03fc3f50', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição teatral japonesa surgiu no período Edo e se tornou conhecida por cenários móveis e atuação exuberante?', 'difficulty' => 3, 'weight' => 434, 'alternatives' => [
                    ['id' => '4d82d008-ead6-5075-91fe-4216a5859f51', 'description' => 'Kabuki', 'correct_answer' => true],
                    ['id' => '4e0d89d8-f8f2-5524-822b-6e5547d3d2f8', 'description' => 'Noh', 'correct_answer' => false],
                    ['id' => 'a091bb01-3777-5829-851f-5168cb7edcc2', 'description' => 'Bunraku', 'correct_answer' => false],
                    ['id' => '107a4974-58a4-5cae-940d-c7398b56d7e8', 'description' => 'Kyogem', 'correct_answer' => false],
                    ['id' => 'bcc6b31b-cede-5117-a525-def0e145fe9e', 'description' => 'Gagaku', 'correct_answer' => false]
                ]],
        ['id' => '2c54bdb0-b6c1-5f4a-8430-0c750ba3750e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de música de corte japonesa preserva repertórios cerimoniais antigos e instrumentos de sopro e percussão?', 'difficulty' => 3, 'weight' => 416, 'alternatives' => [
                    ['id' => '1b4a6005-5239-5441-a887-4cf2a091e0fc', 'description' => 'Bunrako', 'correct_answer' => false],
                    ['id' => '4454dd5f-bd46-59c1-afc6-c21a97135319', 'description' => 'Kabuki', 'correct_answer' => false],
                    ['id' => '2b63180f-b8f0-5efe-a5e4-d528695dad40', 'description' => 'Kyogen', 'correct_answer' => false],
                    ['id' => 'eeb36661-68c0-56a9-afaf-1b23668aa5f0', 'description' => 'Noh', 'correct_answer' => false],
                    ['id' => '53c83a03-56c0-5e21-b6cc-1f877de95c81', 'description' => 'Gagaku', 'correct_answer' => true]
                ]],
        ['id' => '546c6094-99b2-5fae-a806-d4bd0b413336', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma ou gênero de música instrumental costuma organizar movimentos contrastantes e uma estrutura formal desenvolvida?', 'difficulty' => 3, 'weight' => 478, 'alternatives' => [
                    ['id' => '9b94d2aa-4a7a-59c1-a9a2-63187ec1fbfa', 'description' => 'Sonata', 'correct_answer' => true],
                    ['id' => '8321b9d3-3951-5b8c-a378-d103c82b29ce', 'description' => 'Suíta', 'correct_answer' => false],
                    ['id' => '336ae2ed-0cec-57fe-97d6-eadb12a7aa30', 'description' => 'Concerto', 'correct_answer' => false],
                    ['id' => 'fd6cd262-4241-58a9-b42d-5d7c15bdf357', 'description' => 'Oratório', 'correct_answer' => false],
                    ['id' => '18fd3dae-34cd-5bdb-8a52-15cb967cd917', 'description' => 'Cantata', 'correct_answer' => false]
                ]],
        ['id' => '1f7d7dc9-50f1-570d-a25d-5d672bbb20f8', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual conjunto musical reúne movimentos ou danças contrastantes, frequentemente organizados em uma mesma tonalidade?', 'difficulty' => 3, 'weight' => 565, 'alternatives' => [
                    ['id' => 'b6174e49-119e-5d40-be58-7e7d35de73a1', 'description' => 'Concerto', 'correct_answer' => false],
                    ['id' => '4fef3713-64d3-5f39-9f2a-9fc328f22366', 'description' => 'Cantata', 'correct_answer' => false],
                    ['id' => 'f64d9a07-819f-54f8-a357-3c9c49672a12', 'description' => 'Suíte', 'correct_answer' => true],
                    ['id' => '9cc58d3a-41ae-54dd-b6ad-43b3af269ac6', 'description' => 'Sonate', 'correct_answer' => false],
                    ['id' => '306e7fed-5dde-5767-9a40-2e0502f5bcf5', 'description' => 'Oratório', 'correct_answer' => false]
                ]],
        ['id' => '34e7860c-9efa-5490-ba20-068382f32fb8', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual composição vocal, geralmente com acompanhamento instrumental, reúne árias, recitativos e coros?', 'difficulty' => 3, 'weight' => 508, 'alternatives' => [
                    ['id' => 'daf0502e-6dc4-584e-9e4c-24a688dd3f36', 'description' => 'Cantata', 'correct_answer' => true],
                    ['id' => '0b34db1e-5689-5f68-86ee-6a4c692f7efc', 'description' => 'Sonata', 'correct_answer' => false],
                    ['id' => '98cf2c63-185e-5a9d-b3e5-c45798c2e40f', 'description' => 'Oratório', 'correct_answer' => false],
                    ['id' => 'cdcfd0a7-b43c-5ec4-af23-d110a70640d3', 'description' => 'Suíte', 'correct_answer' => false],
                    ['id' => 'de46d5bf-e708-581b-a88d-8ddd963b5323', 'description' => 'Concertu', 'correct_answer' => false]
                ]],
        ['id' => '43188d42-ddeb-5eed-943d-d2546e9469be', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual obra musical extensa para solistas, coro e orquestra apresenta narrativa geralmente religiosa sem encenação teatral?', 'difficulty' => 3, 'weight' => 417, 'alternatives' => [
                    ['id' => '1d57583c-8c59-5351-857d-e5e1cbf22ce1', 'description' => 'Suíte', 'correct_answer' => false],
                    ['id' => 'c98ffebe-f736-5fb2-9766-1615aac65bc7', 'description' => 'Concerto', 'correct_answer' => false],
                    ['id' => '54cd8e8d-dfff-5cca-ae65-0b8a21ee3cf3', 'description' => 'Cantate', 'correct_answer' => false],
                    ['id' => 'df30ac26-be19-5870-96dd-aeb0bdcbd830', 'description' => 'Sonata', 'correct_answer' => false],
                    ['id' => 'af0c8aa9-b3ef-555a-bc2f-0a2a5ce95f7a', 'description' => 'Oratório', 'correct_answer' => true]
                ]],
        ['id' => '894eec98-7e93-59bc-8a0c-fd6a5bc1bf8b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero musical costuma colocar um instrumento solista em diálogo com uma orquestra?', 'difficulty' => 3, 'weight' => 592, 'alternatives' => [
                    ['id' => 'e004d965-1ec6-5adc-b024-1690e67ca895', 'description' => 'Cantata', 'correct_answer' => false],
                    ['id' => 'a500dc8a-6c47-5979-8e73-477ddae6e528', 'description' => 'Suíte', 'correct_answer' => false],
                    ['id' => '961434de-5fc6-551a-abbf-abea995a4541', 'description' => 'Oratóriu', 'correct_answer' => false],
                    ['id' => '299b65bf-80c2-5516-aad2-9e70b86a3ea5', 'description' => 'Concerto', 'correct_answer' => true],
                    ['id' => '548cb709-10f7-532c-b84a-6d973fdceca8', 'description' => 'Sonata', 'correct_answer' => false]
                ]],
        ['id' => '582c00b6-75b4-53e0-b86d-972179f7a515', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição artística medieval é conhecida por ícones religiosos, mosaicos e representações frontais e hieráticas?', 'difficulty' => 3, 'weight' => 465, 'alternatives' => [
                    ['id' => 'e55288fe-8627-5b55-a392-1baff29b942a', 'description' => 'Arte românica', 'correct_answer' => false],
                    ['id' => '8f997d6c-7186-582d-ac78-218ef52443e7', 'description' => 'Arte gótica', 'correct_answer' => false],
                    ['id' => 'fd049174-3713-55dd-984f-9af06c93872b', 'description' => 'Arte carolíngia', 'correct_answer' => false],
                    ['id' => '5e96fa9c-42f5-5d56-9c63-0719ed894c6c', 'description' => 'Arte islâmice', 'correct_answer' => false],
                    ['id' => '5d3ff3ea-6a70-5b17-8a61-b59a68eb13c0', 'description' => 'Arte bizantina', 'correct_answer' => true]
                ]],
        ['id' => '95ab6d21-4d1a-5ab9-8c11-df7c05402db8', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição artística europeia medieval é frequentemente associada a esculturas em portais de igrejas e narrativas bíblicas?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => '7ac3d588-1e8f-5e08-9c0c-1fbefe8f05f1', 'description' => 'Arte gótice', 'correct_answer' => false],
                    ['id' => 'e221dac4-575e-5158-b284-c19288af43ef', 'description' => 'Arte carolíngia', 'correct_answer' => false],
                    ['id' => '5326ad4d-8fc2-5a51-a62c-8d70c10ea57c', 'description' => 'Arte românica', 'correct_answer' => true],
                    ['id' => '066bb638-85f9-5138-b47c-d40d150a4fa2', 'description' => 'Arte bizantina', 'correct_answer' => false],
                    ['id' => '8bd12698-ec2c-5cdf-ba9d-ed008c891480', 'description' => 'Arte islâmica', 'correct_answer' => false]
                ]],
        ['id' => '4fe9789b-e41b-56ea-87cf-10ae2fc4ca1e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição artística medieval desenvolveu vitrais monumentais e esculturas mais naturalistas em catedrais?', 'difficulty' => 3, 'weight' => 408, 'alternatives' => [
                    ['id' => '055d762a-5487-5e95-a1a8-2104d345d66a', 'description' => 'Arte carolíngia', 'correct_answer' => false],
                    ['id' => 'a4f09a4f-e2bd-517c-ac28-636516ab73c2', 'description' => 'Arte gótica', 'correct_answer' => true],
                    ['id' => '613d93d2-79a8-576e-8847-215602731d80', 'description' => 'Arte islâmica', 'correct_answer' => false],
                    ['id' => '1dca932d-32fe-5a08-b045-86efb9d918d2', 'description' => 'Arte românica', 'correct_answer' => false],
                    ['id' => 'ef93a46b-06bb-5510-af5f-4c3f1e7be659', 'description' => 'Arte bizantine', 'correct_answer' => false]
                ]],
        ['id' => '04f61755-1ed3-520e-ae7a-f4a60a05441e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição artística é conhecida em muitos contextos religiosos pelo uso de padrões geométricos, arabescos e caligrafia?', 'difficulty' => 3, 'weight' => 566, 'alternatives' => [
                    ['id' => '900c57ae-7ef9-5458-86e4-c7f7f71125e7', 'description' => 'Arte carolíngie', 'correct_answer' => false],
                    ['id' => 'edb8380e-5505-59db-ac92-a2a32c38b5b5', 'description' => 'Arte bizantina', 'correct_answer' => false],
                    ['id' => '0e5201a9-2818-5e04-b59f-a96145d9f3fc', 'description' => 'Arte gótica', 'correct_answer' => false],
                    ['id' => '7ad3a870-7a77-5419-9356-2e9d1d97291d', 'description' => 'Arte românica', 'correct_answer' => false],
                    ['id' => 'abb5ce4e-8150-5999-a1e5-5d5162a602c1', 'description' => 'Arte islâmica', 'correct_answer' => true]
                ]],
        ['id' => '2c6a25a1-69ef-55a5-8824-461fa6fc0aa4', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual renascimento artístico medieval ocorreu sob o patrocínio de Carlos Magno e seus sucessores?', 'difficulty' => 3, 'weight' => 580, 'alternatives' => [
                    ['id' => '56bf7f91-6feb-59af-b85c-9f3953a64a4f', 'description' => 'Arte islâmica', 'correct_answer' => false],
                    ['id' => '1a11e2cc-fe68-5352-a571-cfb9679f3fb5', 'description' => 'Arte gótica', 'correct_answer' => false],
                    ['id' => 'dc6961a1-091d-59af-b5b8-45cae37e5bee', 'description' => 'Arte românice', 'correct_answer' => false],
                    ['id' => '0abd3e1d-e675-5670-a623-8ead28d2af24', 'description' => 'Arte carolíngia', 'correct_answer' => true],
                    ['id' => '40566f48-d4a6-5de5-87aa-f0f3bf8e03d1', 'description' => 'Arte bizantina', 'correct_answer' => false]
                ]],
        ['id' => 'b4631be5-b7b7-5f11-92c3-560f33f6fb53', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual coleção medieval islandesa preserva poemas mitológicos e heroicos em nórdico antigo?', 'difficulty' => 3, 'weight' => 444, 'alternatives' => [
                    ['id' => 'f2446c8b-8bd6-5bd3-b93d-d190de4360c2', 'description' => 'Edda em Prose', 'correct_answer' => false],
                    ['id' => 'c3271331-d501-51ff-8e9c-57948d142f0b', 'description' => 'Saga dos Volsungos', 'correct_answer' => false],
                    ['id' => '55ef4d2b-3d88-5129-9a09-122504eb33c0', 'description' => 'Edda Poética', 'correct_answer' => true],
                    ['id' => 'e42dca81-9abe-57da-862d-85bd5cd32c57', 'description' => 'Canção dos Nibelungos', 'correct_answer' => false],
                    ['id' => '54ce3673-9ba0-558e-8103-3dacd0ddbda9', 'description' => 'Beowulf', 'correct_answer' => false]
                ]],
        ['id' => '67b50171-2dca-5035-9d4a-bf730c7e59d6', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual obra de Snorri Sturluson apresenta relatos da mitologia nórdica e orientações sobre poesia escáldica?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '111afc34-e18e-5d09-aa8b-965e55bf79b9', 'description' => 'Canção dos Nibelungos', 'correct_answer' => false],
                    ['id' => '694269d9-0370-5129-8a11-fdcce29415ec', 'description' => 'Edda Poética', 'correct_answer' => false],
                    ['id' => '185d7ca7-79f8-5a8a-88ae-8e01c89b77a0', 'description' => 'Edda em Prosa', 'correct_answer' => true],
                    ['id' => 'cab7b3ba-cb4e-577f-9842-76eedc580cac', 'description' => 'Saga dos Volsungoz', 'correct_answer' => false],
                    ['id' => '26cc6d65-fafe-51d0-8da4-ef49fd48504b', 'description' => 'Beowulf', 'correct_answer' => false]
                ]],
        ['id' => '2a2d5cb9-a586-52c9-9574-ca822358bbb3', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual poema épico em inglês antigo narra os feitos de um herói que enfrenta Grendel e um dragão?', 'difficulty' => 3, 'weight' => 413, 'alternatives' => [
                    ['id' => 'e1ebfd91-6eb0-5198-a026-844e8c3afdd1', 'description' => 'Canção dos Nibelungos', 'correct_answer' => false],
                    ['id' => 'e178d6bd-16ba-5a9a-8428-1f9568f4c6dc', 'description' => 'Edda Poétice', 'correct_answer' => false],
                    ['id' => '7fbe6e67-68af-549e-b578-a7386750228c', 'description' => 'Edda em Prosa', 'correct_answer' => false],
                    ['id' => '0d2feed6-2959-5f0e-9a32-168a88601df2', 'description' => 'Beowulf', 'correct_answer' => true],
                    ['id' => 'f58ce7f7-11d7-5149-a989-8f97ebc16dd3', 'description' => 'Saga dos Volsungos', 'correct_answer' => false]
                ]],
        ['id' => '42f832fa-088a-5198-a22e-9110676735bd', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual saga em nórdico antigo narra a linhagem de Sigurd e o ciclo lendário dos Volsungos?', 'difficulty' => 3, 'weight' => 468, 'alternatives' => [
                    ['id' => 'aa837b57-e755-5a4e-a02b-284ba4041168', 'description' => 'Edda em Prosa', 'correct_answer' => false],
                    ['id' => '77d59d9d-d0f8-50b9-8342-a03b79ce8fed', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => 'ffc15d7e-d373-5e41-a398-4dc33224792d', 'description' => 'Saga dos Volsungos', 'correct_answer' => true],
                    ['id' => '5c30c13a-464e-5bda-b7db-3886e17cbd4e', 'description' => 'Edda Poética', 'correct_answer' => false],
                    ['id' => 'e672948c-a4d5-5ab9-a345-d9dacc9019a3', 'description' => 'Canção dos Nibelungoz', 'correct_answer' => false]
                ]],
        ['id' => 'dc7114fd-defc-5180-ab65-cc7a59fc1c71', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual poema épico medieval em alto-alemão médio narra a história de Siegfried e a vingança de Kriemhild?', 'difficulty' => 3, 'weight' => 470, 'alternatives' => [
                    ['id' => '5f856c18-df75-5c9e-b3a2-fdd35a406e66', 'description' => 'Edda Poética', 'correct_answer' => false],
                    ['id' => 'baf9cced-50e9-5c26-a397-52162bf7d8e6', 'description' => 'Saga dos Volsungos', 'correct_answer' => false],
                    ['id' => '99ca189b-fd83-53e8-8d02-2083a3c42b38', 'description' => 'Edda em Prosa', 'correct_answer' => false],
                    ['id' => '01d8af04-d935-521c-a71e-69527bf563d1', 'description' => 'Beowulv', 'correct_answer' => false],
                    ['id' => '68c25354-4723-5d8b-bfff-076196631869', 'description' => 'Canção dos Nibelungos', 'correct_answer' => true]
                ]],
        ['id' => 'e5b450df-f811-55ba-8bc0-0905fef72258', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo artístico do século XVI é associado a figuras alongadas, poses artificiais e composições complexas?', 'difficulty' => 3, 'weight' => 415, 'alternatives' => [
                    ['id' => 'fb1a80ac-37bc-5789-a16a-771a91673440', 'description' => 'Academicismo', 'correct_answer' => false],
                    ['id' => '06a9069f-9fd9-52b2-b463-bcec4a4e37b9', 'description' => 'Classicismo', 'correct_answer' => false],
                    ['id' => 'f36f0ad5-c7c0-5422-af7e-01f6c898e056', 'description' => 'Maneirismo', 'correct_answer' => true],
                    ['id' => 'a5dcaa59-438e-52ce-b42f-10e999473c89', 'description' => 'Barroco', 'correct_answer' => false],
                    ['id' => '870db211-a711-5ad3-bf01-7a1ba47e3376', 'description' => 'Rocucó', 'correct_answer' => false]
                ]],
        ['id' => '45dd82ff-8d85-5804-93ff-8187aad62c2b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo artístico posterior ao Renascimento explorou teatralidade, movimento e contrastes dramáticos?', 'difficulty' => 3, 'weight' => 446, 'alternatives' => [
                    ['id' => '7834762c-b279-52cd-8897-76ae391a84b4', 'description' => 'Barroco', 'correct_answer' => true],
                    ['id' => 'bba02204-588d-56d8-ba8f-e23daefd117d', 'description' => 'Rococó', 'correct_answer' => false],
                    ['id' => '174be1a6-1916-5ff3-8bc8-435f096839f0', 'description' => 'Academicismo', 'correct_answer' => false],
                    ['id' => '066a4449-3ce6-5e15-95c1-669c589b4130', 'description' => 'Maneirismo', 'correct_answer' => false],
                    ['id' => 'ffdd0f61-39f5-5768-85b5-7557aef025c4', 'description' => 'Classicismu', 'correct_answer' => false]
                ]],
        ['id' => 'b43f0ffb-4982-5517-bc2a-63a5e5feb9dc', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo do século XVIII é associado a interiores ornamentados, temas leves e decoração assimétrica?', 'difficulty' => 3, 'weight' => 488, 'alternatives' => [
                    ['id' => '3b9f9a47-e0b9-53cf-ba8a-c0a59845a605', 'description' => 'Rococó', 'correct_answer' => true],
                    ['id' => '90cfbace-4f4b-5ac6-88a5-f1a9c174f506', 'description' => 'Academicismo', 'correct_answer' => false],
                    ['id' => '82a4d2c8-1e9b-5b2e-b8ed-f45e23bb9cda', 'description' => 'Classicismo', 'correct_answer' => false],
                    ['id' => 'b09e4ebd-7045-5b2d-8610-54dddd70ac10', 'description' => 'Barroco', 'correct_answer' => false],
                    ['id' => 'ac81fa32-3772-54a1-a428-a233f7e09c4c', 'description' => 'Maneirismu', 'correct_answer' => false]
                ]],
        ['id' => 'b4ead21e-6458-53f7-a2da-10bc318077f3', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual orientação estética valoriza modelos greco-romanos, equilíbrio formal e clareza de composição?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => '42360c87-c2bc-52db-9696-8d4fc75a8283', 'description' => 'Classicismo', 'correct_answer' => true],
                    ['id' => '3768c459-6c09-5a6e-95f0-9d492d730d2b', 'description' => 'Maneirismo', 'correct_answer' => false],
                    ['id' => '43bc0af3-2967-5d7d-a2d6-b35e476995df', 'description' => 'Rococó', 'correct_answer' => false],
                    ['id' => 'd1409d21-2bf8-5045-b2fc-7402cc84bfb3', 'description' => 'Academicismu', 'correct_answer' => false],
                    ['id' => 'f55c16dc-7b4e-5c6b-8df3-c0654b9e28ca', 'description' => 'Barroco', 'correct_answer' => false]
                ]],
        ['id' => '5f15e45a-494f-52a8-9321-c6bdb1e71249', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição artística esteve ligada às academias oficiais e à valorização de hierarquias e regras técnicas?', 'difficulty' => 3, 'weight' => 539, 'alternatives' => [
                    ['id' => '1415b6aa-0101-51f0-a741-efe645c2acb7', 'description' => 'Academicismo', 'correct_answer' => true],
                    ['id' => 'f8787b98-2e7b-5d33-8df7-dd2ae53a8271', 'description' => 'Maneirismo', 'correct_answer' => false],
                    ['id' => 'bba9d7e8-5c5a-5040-86e7-421d39bce138', 'description' => 'Barruco', 'correct_answer' => false],
                    ['id' => 'c84d0c7d-5918-530a-86e9-5b3adad145d9', 'description' => 'Classicismo', 'correct_answer' => false],
                    ['id' => 'a6c2a672-58dc-556b-9e60-826cd62639fa', 'description' => 'Rococó', 'correct_answer' => false]
                ]],
        ['id' => '2ccf20ff-8736-55db-a15e-f479203cbb54', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de mosaicos antigos é conhecida por pavimentos figurativos em residências, termas e edifícios públicos?', 'difficulty' => 3, 'weight' => 402, 'alternatives' => [
                    ['id' => 'f26e337d-581d-5e9e-bc6f-60d569dce4e6', 'description' => 'Mosaico islâmico', 'correct_answer' => false],
                    ['id' => '9df833c2-7642-59b1-9504-a12ea5f8e5ae', 'description' => 'Mosaico bizantino', 'correct_answer' => false],
                    ['id' => '77094f86-0474-5a5c-bf4b-3820054dc908', 'description' => 'Mosaico hidráulico', 'correct_answer' => false],
                    ['id' => '5febb74c-a4af-54e0-828f-7c6cd312df87', 'description' => 'Mosaico venezianu', 'correct_answer' => false],
                    ['id' => '93329777-6dbc-5566-b83e-cd99036402c8', 'description' => 'Mosaico romano', 'correct_answer' => true]
                ]],
        ['id' => '79e5cc08-0c59-5b96-b252-947c1c79673f', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de mosaicos religiosos utilizou tesselas de vidro e fundos dourados em igrejas do Império Bizantino?', 'difficulty' => 3, 'weight' => 436, 'alternatives' => [
                    ['id' => '3505382c-dcff-57b6-9148-6a808f49a0b8', 'description' => 'Mosaico hidráulico', 'correct_answer' => false],
                    ['id' => '47db784d-f7eb-5ed1-9866-9950b321b6dc', 'description' => 'Mosaico bizantino', 'correct_answer' => true],
                    ['id' => 'f304de83-744f-55a3-bfde-63de7831678e', 'description' => 'Mosaico romano', 'correct_answer' => false],
                    ['id' => 'f0b06f34-bef1-5901-8393-44be02a43386', 'description' => 'Mosaico islâmicu', 'correct_answer' => false],
                    ['id' => '00216545-d988-5e7a-bb5b-0244e976a90c', 'description' => 'Mosaico veneziano', 'correct_answer' => false]
                ]],
        ['id' => '5ba7e0a1-1826-5358-a016-f794b9787d50', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição decorativa utiliza padrões geométricos repetitivos e composições não figurativas em edifícios islâmicos?', 'difficulty' => 3, 'weight' => 505, 'alternatives' => [
                    ['id' => 'c684bc02-2959-57b8-8009-fae0993b3b8a', 'description' => 'Mosaico bizantino', 'correct_answer' => false],
                    ['id' => '47435aed-fff4-58b5-849a-dfbf650bad63', 'description' => 'Mosaico veneziano', 'correct_answer' => false],
                    ['id' => '59846d4f-cabd-5aeb-a868-920af2b318ea', 'description' => 'Mosaico romanu', 'correct_answer' => false],
                    ['id' => '833fd49d-398c-59c0-a993-2af4e72978e2', 'description' => 'Mosaico hidráulico', 'correct_answer' => false],
                    ['id' => '3b108146-8c17-58de-a25c-a9c7b16d3648', 'description' => 'Mosaico islâmico', 'correct_answer' => true]
                ]],
        ['id' => '3275303e-f30b-53eb-b1b0-213818ac110a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica de mosaico utiliza pequenas peças de vidro colorido, frequentemente cortadas de forma irregular, para compor imagens?', 'difficulty' => 3, 'weight' => 522, 'alternatives' => [
                    ['id' => '7f507f8d-597e-5b43-8a35-f86448e1f5b8', 'description' => 'Mosaico hidráulicu', 'correct_answer' => false],
                    ['id' => '8a8fe1cd-bc26-5b7f-a691-b5f69ce15f3e', 'description' => 'Mosaico bizantino', 'correct_answer' => false],
                    ['id' => '2b4c9075-8d18-5ba5-9aa3-5e11ee420572', 'description' => 'Mosaico islâmico', 'correct_answer' => false],
                    ['id' => '592809cd-93d3-5339-a968-8fde94fc996f', 'description' => 'Mosaico romano', 'correct_answer' => false],
                    ['id' => 'da89fcbe-b643-5086-abdd-92d8c25ac6cf', 'description' => 'Mosaico veneziano', 'correct_answer' => true]
                ]],
        ['id' => 'a0901f19-a75b-52bc-a2ba-6ae68c00115f', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tipo de revestimento artesanal é produzido com cimento pigmentado e prensado, sem necessidade de queima em forno?', 'difficulty' => 3, 'weight' => 450, 'alternatives' => [
                    ['id' => '8f649244-e019-521c-adbe-f9c99960f4ff', 'description' => 'Mosaico veneziano', 'correct_answer' => false],
                    ['id' => '29acdab0-4d94-5cf3-9d01-f4f30950a9f1', 'description' => 'Mosaico islâmico', 'correct_answer' => false],
                    ['id' => 'db8f33b5-9e69-5b1f-b574-ede5a6418f96', 'description' => 'Mosaico bizantinu', 'correct_answer' => false],
                    ['id' => '919da2f3-ef0a-5349-9db4-3424853c614a', 'description' => 'Mosaico hidráulico', 'correct_answer' => true],
                    ['id' => 'c17f379b-d41d-56bf-b9d0-79249b14d4a7', 'description' => 'Mosaico romano', 'correct_answer' => false]
                ]],
        ['id' => '8e32700c-6e48-51d2-b196-355e1a57520a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero teatral da Grécia clássica explorou conflitos entre destino, dever, lei divina e decisões humanas?', 'difficulty' => 3, 'weight' => 475, 'alternatives' => [
                    ['id' => 'c2ca4a17-4c5b-5794-b5fa-b930d41feeb6', 'description' => 'Mimo romano', 'correct_answer' => false],
                    ['id' => '08980899-1730-5599-863c-9c8e21a211f8', 'description' => 'Tragédia ática', 'correct_answer' => true],
                    ['id' => 'b85a2eda-e1e3-5bba-be57-ee8d95984e81', 'description' => 'Comédia antige', 'correct_answer' => false],
                    ['id' => '1a5e26ac-72ac-5b04-926c-b889df448264', 'description' => 'Drama satírico', 'correct_answer' => false],
                    ['id' => '32236edf-a57d-55d2-b679-3cebd0402b4c', 'description' => 'Comédia nova', 'correct_answer' => false]
                ]],
        ['id' => '80c0c95c-33d7-51c7-a445-23e3b9f9747b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual fase da comédia ateniense é associada à sátira política direta e às obras de Aristófanes?', 'difficulty' => 3, 'weight' => 506, 'alternatives' => [
                    ['id' => 'd7a2908d-2df6-59dd-88cb-29f3644e0776', 'description' => 'Drama satíricu', 'correct_answer' => false],
                    ['id' => 'd093252c-d77f-55a4-af2e-fee70f0bb122', 'description' => 'Mimo romano', 'correct_answer' => false],
                    ['id' => '06abcff2-31e7-5e23-ab14-133c4452522c', 'description' => 'Comédia nova', 'correct_answer' => false],
                    ['id' => '9e67ec28-91d7-5f62-8dc9-dd893197aaad', 'description' => 'Tragédia ática', 'correct_answer' => false],
                    ['id' => '3e28ecb1-94f9-595e-a5db-f65492dc878b', 'description' => 'Comédia antiga', 'correct_answer' => true]
                ]],
        ['id' => '18b79018-0ee3-5bb2-86b3-99530b9ba1d6', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual fase da comédia grega desenvolveu enredos domésticos e personagens-tipo, influenciando a comédia romana?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => 'a938a0d7-e519-5d7d-8369-3ac844eabd06', 'description' => 'Comédia antiga', 'correct_answer' => false],
                    ['id' => '4af8073d-affc-5dbc-9525-b5ca1d4c88ea', 'description' => 'Drama satírico', 'correct_answer' => false],
                    ['id' => '585b51e9-c3f5-5abd-889f-fef6aeaa2301', 'description' => 'Comédia nova', 'correct_answer' => true],
                    ['id' => '33316013-52dd-55b5-bf53-ed3c5e1c51c9', 'description' => 'Tragédia ática', 'correct_answer' => false],
                    ['id' => '7a95cc51-258e-585f-9386-eee65bb1d5f1', 'description' => 'Mimo romanu', 'correct_answer' => false]
                ]],
        ['id' => '03b1f3da-e5e6-567e-8f1b-1a1882839a85', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero teatral grego combinava elementos míticos com um coro de sátiros e tom burlesco?', 'difficulty' => 3, 'weight' => 438, 'alternatives' => [
                    ['id' => 'ae984d5d-9294-524b-912e-a596e2605be1', 'description' => 'Comédia nove', 'correct_answer' => false],
                    ['id' => '93d09f84-38fb-57d4-b811-f329558cc5f0', 'description' => 'Tragédia ática', 'correct_answer' => false],
                    ['id' => '9b210d64-39ab-5402-b3ea-ad98d77c1a19', 'description' => 'Drama satírico', 'correct_answer' => true],
                    ['id' => '1eea25e9-d12b-582b-8f7a-d0f381c68ee0', 'description' => 'Mimo romano', 'correct_answer' => false],
                    ['id' => '44ab5b63-dce8-540a-8e84-80ee837393c0', 'description' => 'Comédia antiga', 'correct_answer' => false]
                ]],
        ['id' => '3ac7c1eb-e5fc-5568-812f-94c403c7a3a3', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma de entretenimento cênico romano utilizava cenas cotidianas, improvisação e atuação sem as convenções da tragédia?', 'difficulty' => 3, 'weight' => 416, 'alternatives' => [
                    ['id' => 'ea0a29c4-7eb6-5f05-a61a-8473d7155dfc', 'description' => 'Drama satírico', 'correct_answer' => false],
                    ['id' => '0cbea73f-6d34-51f4-8bf0-edfdd25ab35e', 'description' => 'Mimo romano', 'correct_answer' => true],
                    ['id' => 'f64a1f45-96fc-5d37-bbf5-37794b3e29aa', 'description' => 'Comédia antiga', 'correct_answer' => false],
                    ['id' => '02329196-4904-5ae7-9fcc-7426a6cb2d86', 'description' => 'Tragédia átice', 'correct_answer' => false],
                    ['id' => '59054b89-3145-5b46-b620-570728be5028', 'description' => 'Comédia nova', 'correct_answer' => false]
                ]],
        ['id' => '9e2cc508-be14-55ba-a9e0-0f6b4674595a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual corrente italiana associada a Giorgio de Chirico apresenta praças vazias, perspectivas inquietantes e objetos enigmáticos?', 'difficulty' => 4, 'weight' => 671, 'alternatives' => [
                    ['id' => '570036dc-4fa4-5c4a-8142-d9951c0b745f', 'description' => 'Pittura futurista', 'correct_answer' => false],
                    ['id' => '01339e7b-57e1-5ed4-b967-322fac20b1a9', 'description' => 'Pintura metafísica', 'correct_answer' => true],
                    ['id' => 'e9dabbcc-dd75-5846-9037-cfc38670fca0', 'description' => 'Realismo mágico', 'correct_answer' => false],
                    ['id' => 'fec44976-64ab-5f32-8aad-db5e92945130', 'description' => 'Novecento Italianu', 'correct_answer' => false],
                    ['id' => '3d903411-a805-5d19-998c-3d50525f327d', 'description' => 'Precisionismo', 'correct_answer' => false]
                ]],
        ['id' => '97910bc1-0df7-5320-bf9b-074db263d086', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual vertente do futurismo italiano buscou representar movimento e simultaneidade por meio de fragmentação e dinamismo visual?', 'difficulty' => 4, 'weight' => 775, 'alternatives' => [
                    ['id' => '7adc7cf7-857a-541a-a3a4-21ae50b66635', 'description' => 'Pittura futurista', 'correct_answer' => true],
                    ['id' => '58d6d25f-55d6-5d9c-a589-edee70f31db0', 'description' => 'Realismo mágicu', 'correct_answer' => false],
                    ['id' => '59a4e139-e4ec-5cd2-a6a2-b137d6cf476d', 'description' => 'Precisionismo', 'correct_answer' => false],
                    ['id' => 'bd67ce7d-64b4-569e-b0ed-05c11eb74c38', 'description' => 'Novecento Italiano', 'correct_answer' => false],
                    ['id' => '08cca9b0-f95a-566f-a993-6c7556357012', 'description' => 'Pintura metafísica', 'correct_answer' => false]
                ]],
        ['id' => '2f488859-792f-56e0-b5c2-23f47cd85fdb', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico italiano do século XX defendeu um retorno à ordem, à figuração e a referências clássicas?', 'difficulty' => 4, 'weight' => 725, 'alternatives' => [
                    ['id' => 'a8cd165a-8485-5d07-a047-b286fb3c93fa', 'description' => 'Precisionismo', 'correct_answer' => false],
                    ['id' => 'e9a74efb-6e3b-51d0-9a3d-5b283365792b', 'description' => 'Pintura metafísica', 'correct_answer' => false],
                    ['id' => '7935aba0-aed3-5982-821d-7fc5176be612', 'description' => 'Novecento Italiano', 'correct_answer' => true],
                    ['id' => 'ae7a7c22-cdb1-58db-b6fe-bd11414a1a11', 'description' => 'Realismo mágico', 'correct_answer' => false],
                    ['id' => 'd0179c92-4118-5929-b635-14e789795647', 'description' => 'Pittura futuriste', 'correct_answer' => false]
                ]],
        ['id' => '70570ff6-5ac1-5957-8b84-7b4c50d4fa69', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tendência literária e artística apresenta acontecimentos extraordinários como parte natural de um cotidiano reconhecível?', 'difficulty' => 4, 'weight' => 797, 'alternatives' => [
                    ['id' => '9ac26d58-f50e-5c50-ba4d-2900404d49f8', 'description' => 'Precisionismu', 'correct_answer' => false],
                    ['id' => '81b967e4-3a60-569f-b70c-c4c007df1a31', 'description' => 'Realismo mágico', 'correct_answer' => true],
                    ['id' => '1a46b59c-c9ff-5c03-b50b-2f6f6d35dc25', 'description' => 'Pittura futurista', 'correct_answer' => false],
                    ['id' => 'bf06665a-58bd-5571-8c73-f10281e7e481', 'description' => 'Pintura metafísica', 'correct_answer' => false],
                    ['id' => 'b18e1586-3195-51c7-9742-9f33cd3804af', 'description' => 'Novecento Italiano', 'correct_answer' => false]
                ]],
        ['id' => '32c5083b-ae6d-5b1a-9909-ce23f8eef211', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento artístico norte-americano representou paisagens industriais e arquiteturas com formas geométricas nítidas?', 'difficulty' => 4, 'weight' => 735, 'alternatives' => [
                    ['id' => 'fc86b92d-c1b3-50d8-88e0-911ac9660e27', 'description' => 'Pintura metafísice', 'correct_answer' => false],
                    ['id' => '75d9ad26-9551-52e7-88b8-152858c73562', 'description' => 'Realismo mágico', 'correct_answer' => false],
                    ['id' => '52f1f9fa-0661-51f5-b864-6ae69eba711e', 'description' => 'Pittura futurista', 'correct_answer' => false],
                    ['id' => '5b8c7cda-a062-5de3-8fec-abd3825cd4a6', 'description' => 'Novecento Italiano', 'correct_answer' => false],
                    ['id' => 'd68e3ce6-45ca-5c1b-a636-a4c630e29ed1', 'description' => 'Precisionismo', 'correct_answer' => true]
                ]],
        ['id' => '93fbf57c-63dd-5bf4-a2f9-2c6aa8380324', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma vocal secular renascentista geralmente utiliza polifonia e explora o significado expressivo do texto?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => '3804f894-227c-5961-a604-02baea04778b', 'description' => 'Villancico', 'correct_answer' => false],
                    ['id' => '70b73458-0db2-54a5-bf9e-aa40752239ab', 'description' => 'Chanson', 'correct_answer' => false],
                    ['id' => 'c7cb469e-749d-5e47-8fb2-6df4c73a16a2', 'description' => 'Motetu', 'correct_answer' => false],
                    ['id' => 'ca5b7751-5a76-5493-9fae-f34519c91e57', 'description' => 'Madrigal', 'correct_answer' => true],
                    ['id' => '9bfbca16-4daa-514e-8c57-84b4ea5536e6', 'description' => 'Lied', 'correct_answer' => false]
                ]],
        ['id' => '0c4e872d-65a8-5a4b-9659-ab6b0bc9f66b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual composição vocal polifônica europeia teve origem medieval e foi frequentemente associada a textos religiosos?', 'difficulty' => 4, 'weight' => 785, 'alternatives' => [
                    ['id' => 'f933f9f7-1ef7-56ee-89ac-c61560bd6c6e', 'description' => 'Lied', 'correct_answer' => false],
                    ['id' => '800706a6-6d6f-5b0b-97e4-cabedf4deae7', 'description' => 'Chanson', 'correct_answer' => false],
                    ['id' => '5aa3cb56-def2-5d5b-8fe5-480851f22299', 'description' => 'Moteto', 'correct_answer' => true],
                    ['id' => 'b0f10173-fffa-569f-b0d7-7b01897c3505', 'description' => 'Villancico', 'correct_answer' => false],
                    ['id' => 'efe6e0de-dd29-5839-8b39-b6ae1b3028c7', 'description' => 'Madrigar', 'correct_answer' => false]
                ]],
        ['id' => 'a7c7441f-6e7c-5834-8b74-7dfe4f47b01a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual denominação histórica se refere a diferentes formas de canção em língua francesa, incluindo repertórios polifônicos renascentistas?', 'difficulty' => 4, 'weight' => 621, 'alternatives' => [
                    ['id' => 'd5c69999-f1e6-5881-9779-80be9210e719', 'description' => 'Liet', 'correct_answer' => false],
                    ['id' => '61f19103-a178-5d48-a9f3-66bd99dfa57c', 'description' => 'Madrigal', 'correct_answer' => false],
                    ['id' => '22c038c2-fe14-5d9c-99f8-9988dca81ea4', 'description' => 'Villancico', 'correct_answer' => false],
                    ['id' => '414e3e14-2a92-50bf-9c6d-84c935203c97', 'description' => 'Moteto', 'correct_answer' => false],
                    ['id' => '4ff6ae4d-420d-54af-b4dc-3849401ca2ca', 'description' => 'Chanson', 'correct_answer' => true]
                ]],
        ['id' => '00a7f41d-533e-56ce-adf1-f25e01b2ca7a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero de canção artística alemã para voz e piano teve grande desenvolvimento no período romântico?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => '616a7fb4-3861-5a66-85af-26ab8adabbd9', 'description' => 'Lied', 'correct_answer' => true],
                    ['id' => '8e87ac2d-efba-5daa-ba0e-5daa1d65b8fc', 'description' => 'Villancicu', 'correct_answer' => false],
                    ['id' => '83fc7cb8-bd69-58a4-8f6a-8186e5cda5a2', 'description' => 'Moteto', 'correct_answer' => false],
                    ['id' => '7cf188bc-0aeb-5c53-adf7-f3f9d288015f', 'description' => 'Chanson', 'correct_answer' => false],
                    ['id' => '2f3519cf-788f-5104-ab1b-8a04201d1877', 'description' => 'Madrigal', 'correct_answer' => false]
                ]],
        ['id' => 'dfa4f7a2-2c02-5c32-bae6-428baa332733', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma de canção ibérica desenvolveu-se entre os séculos XV e XVII e foi associada a temas seculares e religiosos?', 'difficulty' => 4, 'weight' => 717, 'alternatives' => [
                    ['id' => '430c711f-670f-5037-9ad7-0d1ecb1b1a1a', 'description' => 'Madrigal', 'correct_answer' => false],
                    ['id' => '70750451-d308-510e-863f-e0dadeeef137', 'description' => 'Villancico', 'correct_answer' => true],
                    ['id' => '60161a4c-01d7-5aeb-b93c-fe1c5c4c1259', 'description' => 'Chansom', 'correct_answer' => false],
                    ['id' => '8b932c87-e55b-5ac1-a9a5-3c10c4274752', 'description' => 'Lied', 'correct_answer' => false],
                    ['id' => '0f45e698-4fbd-5dd9-b160-90c263a47d6f', 'description' => 'Moteto', 'correct_answer' => false]
                ]],
        ['id' => '0cd28ed9-a199-52ba-bbff-0c078332d545', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual complexo palaciano minoico em Creta está associado à lenda do labirinto do Minotauro?', 'difficulty' => 4, 'weight' => 665, 'alternatives' => [
                    ['id' => '1b67d32f-53b9-55c5-bc3a-222aeac6299e', 'description' => 'Micenas', 'correct_answer' => false],
                    ['id' => '01480a39-92a1-551a-9b55-b1ac15ca523b', 'description' => 'Akrotiri', 'correct_answer' => false],
                    ['id' => 'e80dfa0f-2d01-5e5b-b28d-0e12b974437d', 'description' => 'Tirinto', 'correct_answer' => false],
                    ['id' => 'b8686d55-7424-512f-a71d-ddb24ecca4c0', 'description' => 'Festoz', 'correct_answer' => false],
                    ['id' => '4486bbf3-0637-5383-b043-3ba45c84cd87', 'description' => 'Palácio de Knossos', 'correct_answer' => true]
                ]],
        ['id' => '0e4fd275-b55a-5e16-b51a-285ad14386c9', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual centro da Grécia da Idade do Bronze é associado à Porta dos Leões e à tradição do rei Agamêmnon?', 'difficulty' => 4, 'weight' => 703, 'alternatives' => [
                    ['id' => '6584ab59-8d52-5852-888f-5d056be5e738', 'description' => 'Micenas', 'correct_answer' => true],
                    ['id' => 'a7c8b806-60de-50ec-bf08-db478142633a', 'description' => 'Festos', 'correct_answer' => false],
                    ['id' => '79fd9cd4-6277-572d-8ef3-08dfb356aa3f', 'description' => 'Tirinto', 'correct_answer' => false],
                    ['id' => '018eca8c-ebfd-5a6f-bde9-0a22b0f97c27', 'description' => 'Akrotire', 'correct_answer' => false],
                    ['id' => 'd2c65e28-7d25-5370-b1b7-89977008a86f', 'description' => 'Palácio de Knossos', 'correct_answer' => false]
                ]],
        ['id' => '08def46b-b00b-574d-91ca-c60725fc3364', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual sítio arqueológico micênico é conhecido por suas muralhas ciclópicas de grande espessura?', 'difficulty' => 4, 'weight' => 735, 'alternatives' => [
                    ['id' => 'd86e4e0d-855d-51d7-bbe6-121e1b64de40', 'description' => 'Festos', 'correct_answer' => false],
                    ['id' => 'e101784c-d34e-5dfe-9cc8-9ab9b682969f', 'description' => 'Tirinto', 'correct_answer' => true],
                    ['id' => 'ecaea6e4-55b7-5492-94ff-b6d0864c9ea1', 'description' => 'Micenas', 'correct_answer' => false],
                    ['id' => 'e028e8fb-96f0-50ce-a30b-85f4cdd9551c', 'description' => 'Palácio de Knossoz', 'correct_answer' => false],
                    ['id' => 'd1927cbd-85e3-5d11-8518-305eb90a2080', 'description' => 'Akrotiri', 'correct_answer' => false]
                ]],
        ['id' => 'e5f04ddb-8a8f-56b8-a103-6e1bd4b0cfaa', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual sítio arqueológico de Creta abriga um importante palácio minoico e o célebre disco com símbolos impressos?', 'difficulty' => 4, 'weight' => 647, 'alternatives' => [
                    ['id' => '4948b5de-1eef-5649-8bc8-f8c97b23e581', 'description' => 'Festos', 'correct_answer' => true],
                    ['id' => 'c1234660-a606-5168-9749-84a072d1abbc', 'description' => 'Micenaz', 'correct_answer' => false],
                    ['id' => '1443e7fc-d061-5aca-86a5-bb4d9a3f1159', 'description' => 'Palácio de Knossos', 'correct_answer' => false],
                    ['id' => '67b94c48-d359-5978-a69a-8b6eeda521ac', 'description' => 'Akrotiri', 'correct_answer' => false],
                    ['id' => '4a9ee511-6d5c-5fe3-a3df-1fae25519dee', 'description' => 'Tirinto', 'correct_answer' => false]
                ]],
        ['id' => '6353c3a0-0304-5de9-8e49-e8d486afb1ed', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual assentamento da ilha de Santorini foi preservado por uma erupção vulcânica da Idade do Bronze?', 'difficulty' => 4, 'weight' => 785, 'alternatives' => [
                    ['id' => 'd5f8c0dd-97fe-557c-bd98-a4277485932b', 'description' => 'Palácio de Knossos', 'correct_answer' => false],
                    ['id' => '9ccc47f4-70fc-5dbe-82ba-6239103caf0b', 'description' => 'Festos', 'correct_answer' => false],
                    ['id' => '9823daa1-c479-59e8-b72d-11197ec9c7a1', 'description' => 'Tirintu', 'correct_answer' => false],
                    ['id' => '6241c713-a814-55dc-b005-981efc39399d', 'description' => 'Akrotiri', 'correct_answer' => true],
                    ['id' => '4309b4e8-6004-56af-845e-1fc6003d7eed', 'description' => 'Micenas', 'correct_answer' => false]
                ]],
        ['id' => '3a5e9f87-2be0-5b4e-9eb9-9426b917814b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual variante do barroco espanhol é conhecida por ornamentação extremamente elaborada e colunas salomônicas?', 'difficulty' => 4, 'weight' => 614, 'alternatives' => [
                    ['id' => 'c7e40203-dbd6-5a33-a40a-479ec68a9596', 'description' => 'Estilo Manuelino', 'correct_answer' => false],
                    ['id' => '92176b31-3d4d-51b4-b97c-044f082b939f', 'description' => 'Estilo Platerescu', 'correct_answer' => false],
                    ['id' => '7caec3b7-01b1-56aa-a44c-c5c25f0c51cd', 'description' => 'Estilo Churrigueresco', 'correct_answer' => true],
                    ['id' => '144b1fc0-1882-5cf5-bf88-7e954f0ccbf7', 'description' => 'Estilo Mudéjar', 'correct_answer' => false],
                    ['id' => '7eed03db-7261-5365-9707-5ee0191acdb8', 'description' => 'Estilo Herreriano', 'correct_answer' => false]
                ]],
        ['id' => '8c40b0b6-992b-58a8-a3dc-3641b84020e7', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo arquitetônico espanhol do início do Renascimento combina elementos góticos, mudéjares e renascentistas em decoração minuciosa?', 'difficulty' => 4, 'weight' => 634, 'alternatives' => [
                    ['id' => '433cdb83-2d94-5a7b-8b02-ad27b6b03bd4', 'description' => 'Estilo Mudéjar', 'correct_answer' => false],
                    ['id' => '2019a921-c349-5d74-9a74-f24fd9a120a6', 'description' => 'Estilo Herrerianu', 'correct_answer' => false],
                    ['id' => '61084a6a-28bb-58a0-8c05-b2603f733b97', 'description' => 'Estilo Manuelino', 'correct_answer' => false],
                    ['id' => 'cccffdb1-e384-5155-b47f-a46aa7770c53', 'description' => 'Estilo Plateresco', 'correct_answer' => true],
                    ['id' => 'e0f083ee-8bf8-54be-b879-64d3a4596a33', 'description' => 'Estilo Churrigueresco', 'correct_answer' => false]
                ]],
        ['id' => '077e5865-3860-5c37-b2d6-1895d98d0598', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo arquitetônico espanhol associado a Juan de Herrera privilegia geometria austera e pouca ornamentação?', 'difficulty' => 4, 'weight' => 687, 'alternatives' => [
                    ['id' => 'b792e754-a1b5-51e6-a40d-ea4b2680a7ec', 'description' => 'Estilo Manuelino', 'correct_answer' => false],
                    ['id' => 'bc1f8f99-6661-59eb-9424-a3387486cac5', 'description' => 'Estilo Churrigueresco', 'correct_answer' => false],
                    ['id' => '06fe5b91-db15-552f-9f09-e0b7692cb777', 'description' => 'Estilo Herreriano', 'correct_answer' => true],
                    ['id' => '86365de5-99c5-51e9-ae5b-6035c5c4d59f', 'description' => 'Estilo Plateresco', 'correct_answer' => false],
                    ['id' => '44368fe8-7d9b-517d-ac70-3a7f5028828a', 'description' => 'Estilo Mudéjal', 'correct_answer' => false]
                ]],
        ['id' => 'e4dd2763-5cad-537e-b578-cd38469f5207', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo ibérico combina estruturas cristãs com técnicas e motivos decorativos de tradição islâmica?', 'difficulty' => 4, 'weight' => 612, 'alternatives' => [
                    ['id' => '8f90ca60-607c-50bb-88ef-d4c186f54282', 'description' => 'Estilo Herreriano', 'correct_answer' => false],
                    ['id' => '3be781cb-ee1e-5f8f-8c50-3099a61dc551', 'description' => 'Estilo Churrigueresco', 'correct_answer' => false],
                    ['id' => 'd019b5f2-c7b9-547a-884f-edbcb7dc67af', 'description' => 'Estilo Manuelinu', 'correct_answer' => false],
                    ['id' => '12315b86-7db8-59f6-a335-880978c8468b', 'description' => 'Estilo Plateresco', 'correct_answer' => false],
                    ['id' => 'a04344ed-a913-5f81-bdd3-b3b4a2cc7a24', 'description' => 'Estilo Mudéjar', 'correct_answer' => true]
                ]],
        ['id' => '45ec6d14-da2c-5bad-90d3-42a7c2a96fc2', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo português do período de D. Manuel I incorpora motivos marítimos, cordas e elementos naturalistas?', 'difficulty' => 4, 'weight' => 740, 'alternatives' => [
                    ['id' => '0da8c63b-cd1f-5769-b44b-5fe8feadc93b', 'description' => 'Estilo Manuelino', 'correct_answer' => true],
                    ['id' => 'f5e19327-6ecc-50ba-9a50-323df1e0b88a', 'description' => 'Estilo Churriguerescu', 'correct_answer' => false],
                    ['id' => '8fc4002a-4127-5abc-be27-dd73529ef5d8', 'description' => 'Estilo Mudéjar', 'correct_answer' => false],
                    ['id' => 'bb7e2ade-4144-51c3-971c-1b39534b6ec2', 'description' => 'Estilo Herreriano', 'correct_answer' => false],
                    ['id' => 'b02aecf3-f0aa-5abd-9398-a26f24d33f1c', 'description' => 'Estilo Plateresco', 'correct_answer' => false]
                ]],
        ['id' => '0e965925-aead-5bdc-9954-0ba6a3bf9eec', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito maia pré-colombiano preserva tabelas astronômicas e calendáricas?', 'difficulty' => 4, 'weight' => 706, 'alternatives' => [
                    ['id' => '5abd5699-6d0a-5baf-8b06-d3cd9b77962b', 'description' => 'Códice de Borgia', 'correct_answer' => false],
                    ['id' => 'b42ffe76-ee6c-5c96-a474-2168efffc054', 'description' => 'Códice de Fejérváry-Mayel', 'correct_answer' => false],
                    ['id' => '0caef2f3-94ff-5162-a84c-21566b2b2a17', 'description' => 'Códice de Madri', 'correct_answer' => false],
                    ['id' => 'dec18e3f-46dc-5143-b4f8-beefcb32c8ee', 'description' => 'Códice de Dresde', 'correct_answer' => true],
                    ['id' => 'e9c9ffbe-9a6c-571d-8581-0db533936488', 'description' => 'Códice de Paris', 'correct_answer' => false]
                ]],
        ['id' => '78351e58-256a-554f-b6a3-50c14745d28c', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito maia, também conhecido como Códice Tro-Cortesiano, contém almanaques e registros rituais?', 'difficulty' => 4, 'weight' => 675, 'alternatives' => [
                    ['id' => 'f17a5cf8-4f5f-53fc-b8c3-6c725873218a', 'description' => 'Códice de Dresde', 'correct_answer' => false],
                    ['id' => '6f624207-675a-5104-b345-693755ed61aa', 'description' => 'Códice de Madri', 'correct_answer' => true],
                    ['id' => '068d3d8f-bb6c-5058-9bb7-d6459ea46286', 'description' => 'Códice de Fejérváry-Mayer', 'correct_answer' => false],
                    ['id' => '3f0e4120-3dec-5e48-80ac-8ecf6ba6a58e', 'description' => 'Códice de Borgia', 'correct_answer' => false],
                    ['id' => 'fe080cd6-93ab-54bf-8bfb-949f7c32667f', 'description' => 'Códice de Pariz', 'correct_answer' => false]
                ]],
        ['id' => '4968c598-c348-577d-a849-a30ee3ca4d39', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito maia preservado em Paris inclui calendários e previsões ritualísticas?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => '6c995845-680f-565d-803f-37f7bbc911c1', 'description' => 'Códice de Fejérváry-Mayer', 'correct_answer' => false],
                    ['id' => '41601d1a-82ca-54b9-97ce-e265e2f64e40', 'description' => 'Códice de Paris', 'correct_answer' => true],
                    ['id' => 'b52f7748-027e-55bf-94cb-92e924833e54', 'description' => 'Códice de Borgia', 'correct_answer' => false],
                    ['id' => '193d162e-710a-5b9a-80ab-708f0bbfe79b', 'description' => 'Códice de Madre', 'correct_answer' => false],
                    ['id' => '7babcda2-471e-59b6-b94e-a4e1d04f4067', 'description' => 'Códice de Dresde', 'correct_answer' => false]
                ]],
        ['id' => 'fbe16f1a-b1ce-5539-8dcc-40e1d007dd23', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito pictórico mesoamericano pré-hispânico é conhecido por seu conteúdo ritual e calendárico?', 'difficulty' => 4, 'weight' => 725, 'alternatives' => [
                    ['id' => 'd14ce980-12b4-58d6-8a22-61c101ee5a27', 'description' => 'Códice de Dresda', 'correct_answer' => false],
                    ['id' => '0a193c41-70b2-5615-92bf-223a9ac15748', 'description' => 'Códice de Paris', 'correct_answer' => false],
                    ['id' => '2dad7f37-1019-5c00-8cfd-aac3e5b07d78', 'description' => 'Códice de Madri', 'correct_answer' => false],
                    ['id' => 'a5579b4e-1e41-59f7-8c4e-b08109dd8463', 'description' => 'Códice de Borgia', 'correct_answer' => true],
                    ['id' => 'c800929e-b183-570e-892e-5839c17862f1', 'description' => 'Códice de Fejérváry-Mayer', 'correct_answer' => false]
                ]],
        ['id' => '99aea04c-c05f-5659-bef6-bdc60909d015', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito pictórico mesoamericano apresenta uma organização cosmológica em torno das direções cardeais?', 'difficulty' => 4, 'weight' => 678, 'alternatives' => [
                    ['id' => '0bb2f5af-f5e5-541f-ae5a-22b729d01e2f', 'description' => 'Códice de Dresde', 'correct_answer' => false],
                    ['id' => 'f49ab204-aa4c-5743-9ce5-83a3b37a9906', 'description' => 'Códice de Madri', 'correct_answer' => false],
                    ['id' => 'f8cd6839-b682-5e4f-88e5-4ab42beb75a5', 'description' => 'Códice de Borgie', 'correct_answer' => false],
                    ['id' => '7e132201-c104-53bd-869b-e4835f4bc71e', 'description' => 'Códice de Fejérváry-Mayer', 'correct_answer' => true],
                    ['id' => '7f19e849-d0e2-5e90-acc2-4e3dad9c54a8', 'description' => 'Códice de Paris', 'correct_answer' => false]
                ]],
        ['id' => 'c22918f0-f0bb-5efd-be50-4cbcaec08925', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual corrente artística francesa do século XVI desenvolveu um estilo cortesão com influências italianas e ornamentação refinada?', 'difficulty' => 4, 'weight' => 619, 'alternatives' => [
                    ['id' => 'cc49f34e-e6dc-59c5-be9c-70dc07d85759', 'description' => 'Escola de Fontainebleau', 'correct_answer' => true],
                    ['id' => '6723ea2a-838c-5744-bd5e-e5f32a230c34', 'description' => 'Grupo dos Sete', 'correct_answer' => false],
                    ['id' => '7ca42e9a-5e50-583b-9411-5fd2d9ecb957', 'description' => 'Escola de Barbizon', 'correct_answer' => false],
                    ['id' => '48fdfbfb-68b4-5a39-97ca-16f3f85927e2', 'description' => 'Escola de Ashcam', 'correct_answer' => false],
                    ['id' => '82e57084-c216-5d61-92e3-6da3d5880f70', 'description' => 'Escola de Pont-Aven', 'correct_answer' => false]
                ]],
        ['id' => '05d7aecc-3942-5551-bdd1-3c99957af67e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual grupo de pintores franceses do século XIX trabalhou ao ar livre e representou paisagens rurais próximas à floresta de Fontainebleau?', 'difficulty' => 4, 'weight' => 700, 'alternatives' => [
                    ['id' => 'e4413e7f-4c6b-5416-853d-c0b1dcb379f0', 'description' => 'Escola de Ashcan', 'correct_answer' => false],
                    ['id' => 'aa67ac6e-432a-58b5-a89a-6902c39fcc57', 'description' => 'Escola de Pont-Avem', 'correct_answer' => false],
                    ['id' => 'af3171d7-e2e0-55dc-a8c3-91dcef8d14be', 'description' => 'Escola de Fontainebleau', 'correct_answer' => false],
                    ['id' => '0345ad6f-5167-521e-ab94-b55e6f1b9831', 'description' => 'Grupo dos Sete', 'correct_answer' => false],
                    ['id' => '723ec473-7cfb-5877-985e-b0f97c32fc21', 'description' => 'Escola de Barbizon', 'correct_answer' => true]
                ]],
        ['id' => '31a0c4bd-9097-5cf5-a920-6fa9c8228f40', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual grupo de artistas na Bretanha, associado a Gauguin, desenvolveu cores planas e contornos marcados?', 'difficulty' => 4, 'weight' => 791, 'alternatives' => [
                    ['id' => '33217010-81dc-5fee-9caf-0ce18d22ee94', 'description' => 'Escola de Barbizon', 'correct_answer' => false],
                    ['id' => '0da436f7-82dc-5711-be78-9b0e64c5f544', 'description' => 'Escola de Pont-Aven', 'correct_answer' => true],
                    ['id' => 'ff863e4e-4fe1-511b-827d-43ba4b0e3339', 'description' => 'Escola de Fontainebleao', 'correct_answer' => false],
                    ['id' => '919211cd-6ffa-5a93-8172-e4dd4c9cfe1c', 'description' => 'Grupo dos Sete', 'correct_answer' => false],
                    ['id' => 'cf99c964-a09e-5681-b70b-09a6f62a44f4', 'description' => 'Escola de Ashcan', 'correct_answer' => false]
                ]],
        ['id' => '574758fe-4734-5db2-96f1-e8a4772caa25', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual grupo de artistas norte-americanos do início do século XX retratou cenas urbanas e a vida cotidiana das classes populares?', 'difficulty' => 4, 'weight' => 655, 'alternatives' => [
                    ['id' => '3fe041f7-96a0-5ec4-af29-3e442471e055', 'description' => 'Escola de Barbizon', 'correct_answer' => false],
                    ['id' => '053a0f30-f057-5f5b-8bb9-6d37ef972db0', 'description' => 'Escola de Pont-Aven', 'correct_answer' => false],
                    ['id' => '15c31fbd-4d87-5385-9e27-68e3d9278d25', 'description' => 'Escola de Ashcan', 'correct_answer' => true],
                    ['id' => 'babca5d9-b6dc-576d-b36c-665cfec258be', 'description' => 'Escola de Fontainebleau', 'correct_answer' => false],
                    ['id' => 'c27e9446-c654-56e6-b2c5-52c333f3a9ac', 'description' => 'Grupo dos Seta', 'correct_answer' => false]
                ]],
        ['id' => '8dc66706-8033-51ed-b8d7-479cfa907ef1', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual grupo de paisagistas canadenses ficou conhecido por representar a natureza do país com cores fortes e formas estilizadas?', 'difficulty' => 4, 'weight' => 702, 'alternatives' => [
                    ['id' => '9316f897-ac94-5717-8dea-8057029ef88f', 'description' => 'Escola de Barbizom', 'correct_answer' => false],
                    ['id' => '809b6c46-4c88-5864-8d8c-d800d74ad88f', 'description' => 'Grupo dos Sete', 'correct_answer' => true],
                    ['id' => '7c2cd00d-0444-5574-ade5-62a1510b9ca5', 'description' => 'Escola de Fontainebleau', 'correct_answer' => false],
                    ['id' => '7eaa133f-0fc6-56ba-8967-29aee91e3cf9', 'description' => 'Escola de Pont-Aven', 'correct_answer' => false],
                    ['id' => 'fc934035-0eeb-548a-bfc0-7b810d85a6b1', 'description' => 'Escola de Ashcan', 'correct_answer' => false]
                ]],
        ['id' => 'b4a09736-fdce-5898-a2eb-31e48e2732e1', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual abordagem musical criada por Pierre Schaeffer utiliza sons gravados do ambiente como matéria-prima de composição?', 'difficulty' => 4, 'weight' => 789, 'alternatives' => [
                    ['id' => '247264bb-6b62-5815-a6c8-7d161b8a42ef', 'description' => 'Minimalismo musical', 'correct_answer' => false],
                    ['id' => '0857e298-f231-5cd1-8b54-0aade1494e82', 'description' => 'Música acusmática', 'correct_answer' => false],
                    ['id' => '4d91e0a3-5e3c-5e5f-b763-524eb12e2ac3', 'description' => 'Música eletrônica ao vivu', 'correct_answer' => false],
                    ['id' => '53e0e821-3609-5379-8c32-af5d471b48f3', 'description' => 'Música aleatória', 'correct_answer' => false],
                    ['id' => '1712f606-afef-59e2-bdd9-727721874e44', 'description' => 'Música concreta', 'correct_answer' => true]
                ]],
        ['id' => 'dd11f1bd-6578-5543-b6d3-69b10b623ab7', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual prática musical envolve a geração e transformação eletrônica de sons em tempo real durante a apresentação?', 'difficulty' => 4, 'weight' => 628, 'alternatives' => [
                    ['id' => 'bc54c0a6-c4c4-56f9-988d-4ac2251fdf57', 'description' => 'Música eletrônica ao vivo', 'correct_answer' => true],
                    ['id' => '9a61863b-916d-55c2-b378-11927164cf61', 'description' => 'Música concreta', 'correct_answer' => false],
                    ['id' => '5c781e7e-43fe-5142-9ab2-5d04084f31cf', 'description' => 'Minimalismo musical', 'correct_answer' => false],
                    ['id' => '11050465-40df-5607-85cc-58a87401ee6d', 'description' => 'Música aleatórie', 'correct_answer' => false],
                    ['id' => '7d776a73-fe08-5b5f-b5d3-d280b719d032', 'description' => 'Música acusmática', 'correct_answer' => false]
                ]],
        ['id' => '055c44d3-61e8-5d05-bf8f-56bd4bf071de', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual prática musical apresenta sons por alto-falantes sem que a fonte sonora seja necessariamente visível ao ouvinte?', 'difficulty' => 4, 'weight' => 619, 'alternatives' => [
                    ['id' => 'c5ed7a74-daf6-5973-b428-a0fac6089d2e', 'description' => 'Música eletrônica ao vivo', 'correct_answer' => false],
                    ['id' => '4f369e3e-f729-59e2-bfa0-1dc62f728ca5', 'description' => 'Música acusmática', 'correct_answer' => true],
                    ['id' => '79f82428-965c-58be-8998-5224b1bb40ff', 'description' => 'Música concrete', 'correct_answer' => false],
                    ['id' => 'de47ce50-0275-5e30-b949-10b2eb23a334', 'description' => 'Música aleatória', 'correct_answer' => false],
                    ['id' => '83d888f5-f840-5f49-9604-eb00223b812d', 'description' => 'Minimalismo musical', 'correct_answer' => false]
                ]],
        ['id' => '554c2230-4991-5bc7-931a-e2e6b6bd831e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual abordagem composicional incorpora elementos de acaso ou indeterminação na criação ou execução musical?', 'difficulty' => 4, 'weight' => 633, 'alternatives' => [
                    ['id' => 'fe2f9b2e-9c7f-54ef-a049-d4e748a98faf', 'description' => 'Minimalismo musicar', 'correct_answer' => false],
                    ['id' => '0443d0ba-aceb-5c14-9103-0c7302076ec0', 'description' => 'Música acusmática', 'correct_answer' => false],
                    ['id' => '4d72afeb-df53-5d6d-8355-ab35c70105e2', 'description' => 'Música concreta', 'correct_answer' => false],
                    ['id' => 'dcaab4e7-bf2f-58da-842d-6c544a9b4fca', 'description' => 'Música aleatória', 'correct_answer' => true],
                    ['id' => '01dd7b09-fa7c-5cf9-b8a1-2ca74b80ba75', 'description' => 'Música eletrônica ao vivo', 'correct_answer' => false]
                ]],
        ['id' => '587013ec-507a-55d3-822a-7f7195ab109d', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual corrente musical utiliza repetição, processos graduais e materiais sonoros reduzidos?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => '34fd4b46-5e44-50d9-ac9a-89db6bbcb139', 'description' => 'Música concreta', 'correct_answer' => false],
                    ['id' => '0b7b9a60-899b-5338-9aea-5af0fdbf541a', 'description' => 'Minimalismo musical', 'correct_answer' => true],
                    ['id' => 'f4370553-66d5-5a0a-a393-3eac5e0a3b7c', 'description' => 'Música aleatória', 'correct_answer' => false],
                    ['id' => '39decc4d-0ca6-5b5e-ab41-3a05ed665353', 'description' => 'Música acusmátice', 'correct_answer' => false],
                    ['id' => '7f985ded-4251-5fe2-99b7-e178d41eae7f', 'description' => 'Música eletrônica ao vivo', 'correct_answer' => false]
                ]],
        ['id' => '17b54c66-703f-5e3f-afee-d0d7943b9d94', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual período do teatro inglês está associado ao reinado de Elizabeth I e à produção de Shakespeare?', 'difficulty' => 4, 'weight' => 710, 'alternatives' => [
                    ['id' => 'b856e5e5-bd61-5a19-9f91-4e6caaed256a', 'description' => 'Teatro medieval de mistérios', 'correct_answer' => false],
                    ['id' => '32f9c30e-e1e8-5bad-85f8-beea31b92663', 'description' => 'Commedia dell\'arta', 'correct_answer' => false],
                    ['id' => '817d6b95-ac6f-5448-b0f3-f95dd345e3d4', 'description' => 'Teatro jacobino', 'correct_answer' => false],
                    ['id' => '4a41e799-b9e6-58ce-94d6-36d100332d17', 'description' => 'Teatro elisabetano', 'correct_answer' => true],
                    ['id' => '831843d9-65cf-5b89-93ac-0c14c06986b0', 'description' => 'Teatro da Restauração', 'correct_answer' => false]
                ]],
        ['id' => 'ec548125-574f-5402-affc-15e6767c2ac0', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual fase do teatro inglês começou com a reabertura dos teatros em 1660 e ficou conhecida por comédias de costumes?', 'difficulty' => 4, 'weight' => 758, 'alternatives' => [
                    ['id' => 'b045239f-95df-5c1b-a2a9-fa13332356f1', 'description' => 'Commedia dell\'arte', 'correct_answer' => false],
                    ['id' => 'e1cc6aac-6a56-5160-a4a4-e8a8d002b3bc', 'description' => 'Teatro elisabetano', 'correct_answer' => false],
                    ['id' => '0437c410-639d-5da0-8295-92a67a730b4d', 'description' => 'Teatro da Restauração', 'correct_answer' => true],
                    ['id' => '70943229-861b-512b-a151-414837aa0aad', 'description' => 'Teatro medieval de mistérioz', 'correct_answer' => false],
                    ['id' => 'c03eb093-1827-57f8-bc4d-aca26c2bddb7', 'description' => 'Teatro jacobino', 'correct_answer' => false]
                ]],
        ['id' => '273a4972-df2d-5f7c-9b50-b013ee1374bc', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual período do teatro inglês corresponde ao reinado de Jaime I e inclui obras de dramaturgos como John Webster?', 'difficulty' => 4, 'weight' => 634, 'alternatives' => [
                    ['id' => 'f7f7cad9-bd23-536f-92f1-c186e0db4c7b', 'description' => 'Teatro elisabetano', 'correct_answer' => false],
                    ['id' => '781becde-894f-51e7-8f07-0350b40465a3', 'description' => 'Commedia dell\'arte', 'correct_answer' => false],
                    ['id' => '4d6641c8-50ca-5582-be26-0dad1643fe90', 'description' => 'Teatro jacobino', 'correct_answer' => true],
                    ['id' => '7ca10a0c-9d6b-53a4-a2d8-a8aab8b510c0', 'description' => 'Teatro da Restauraçãu', 'correct_answer' => false],
                    ['id' => 'c256bfff-b239-51ca-a7b7-60cf64e85454', 'description' => 'Teatro medieval de mistérios', 'correct_answer' => false]
                ]],
        ['id' => 'da3251f0-79f7-50f9-b01a-9c40bb842e4a', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma teatral medieval encenava episódios bíblicos, frequentemente organizados em ciclos religiosos?', 'difficulty' => 4, 'weight' => 699, 'alternatives' => [
                    ['id' => '99471470-61ae-5cc2-9104-8fd95b58b7b6', 'description' => 'Commedia dell\'arte', 'correct_answer' => false],
                    ['id' => 'd50dff4a-6590-5c0f-81d2-2f6fae3e4d3b', 'description' => 'Teatro medieval de mistérios', 'correct_answer' => true],
                    ['id' => '8b26b9b4-6070-5f79-baa6-163c1ab52173', 'description' => 'Teatro da Restauração', 'correct_answer' => false],
                    ['id' => 'c15be67c-ab4a-5db6-9bf2-c9e0db38eba6', 'description' => 'Teatro elisabetano', 'correct_answer' => false],
                    ['id' => 'ba0fbe63-84aa-527a-9967-f6614e8dc438', 'description' => 'Teatro jacobinu', 'correct_answer' => false]
                ]],
        ['id' => 'dcede33a-669f-5a60-9c19-90662c64efeb', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição teatral italiana utiliza personagens-tipo, máscaras e improvisação a partir de roteiros básicos?', 'difficulty' => 4, 'weight' => 696, 'alternatives' => [
                    ['id' => 'dab0c19a-2319-565b-986c-2128691fd913', 'description' => 'Teatro elisabetanu', 'correct_answer' => false],
                    ['id' => '3148d97a-1bc7-5932-a9cb-01aeef20c4ba', 'description' => 'Teatro medieval de mistérios', 'correct_answer' => false],
                    ['id' => 'c60f023d-cda3-5b7b-a2da-1f0a2af6d5ec', 'description' => 'Commedia dell\'arte', 'correct_answer' => true],
                    ['id' => '553b64d0-3650-5472-bfad-16774aa6533d', 'description' => 'Teatro da Restauração', 'correct_answer' => false],
                    ['id' => 'a255d9c3-f8b1-5ad3-81d4-0076cf230f4f', 'description' => 'Teatro jacobino', 'correct_answer' => false]
                ]],
        ['id' => 'bbda02cd-ccd9-5035-86fe-4af9f9a9aacb', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo musical do final do século XIV é conhecido por complexidade rítmica extrema e notação visualmente elaborada?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => 'e96c060b-b72c-5344-b5f0-0c686b2133ef', 'description' => 'Música galanta', 'correct_answer' => false],
                    ['id' => 'f8bb110c-14a6-5d4b-8610-be32d0d491fd', 'description' => 'Escola de Notre-Dame', 'correct_answer' => false],
                    ['id' => '9bcb004b-3053-540d-8f7d-86d412931dc8', 'description' => 'Ars nova', 'correct_answer' => false],
                    ['id' => 'e73f4636-2a16-5c18-ba61-b38539e64975', 'description' => 'Ars subtilior', 'correct_answer' => true],
                    ['id' => '0ebbf2ea-906d-5672-a062-99dc3e075b15', 'description' => 'Ars antiqua', 'correct_answer' => false]
                ]],
        ['id' => '66ab46eb-a679-5292-8767-08ed13d14095', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento da música medieval do século XIV ampliou as possibilidades de notação rítmica e polifonia?', 'difficulty' => 5, 'weight' => 961, 'alternatives' => [
                    ['id' => 'f0101f7b-1e8a-5250-a2c6-30c47d6ea732', 'description' => 'Escola de Notre-Dama', 'correct_answer' => false],
                    ['id' => '625e45cf-3003-509b-850f-0350212a493b', 'description' => 'Ars nova', 'correct_answer' => true],
                    ['id' => '1f76f69d-6cd9-5b52-a360-0e631de9983c', 'description' => 'Ars subtilior', 'correct_answer' => false],
                    ['id' => '664dc68b-5734-504e-ae4b-323668f94443', 'description' => 'Ars antiqua', 'correct_answer' => false],
                    ['id' => 'b6a417a4-a029-5ccd-af60-0a83c99279ea', 'description' => 'Música galante', 'correct_answer' => false]
                ]],
        ['id' => '017a9e53-c277-570f-9a66-bf0ad66b8646', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual denominação se refere à tradição polifônica medieval anterior ao desenvolvimento da Ars nova?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => '3df80bd3-ae52-504c-8098-22a975ca6ce6', 'description' => 'Ars antiqua', 'correct_answer' => true],
                    ['id' => 'b681a9c2-6ead-5fad-bb2b-33009c8ed48e', 'description' => 'Ars nove', 'correct_answer' => false],
                    ['id' => '2f630f5d-9ae3-5ba5-9cc2-171f6cd9f6e6', 'description' => 'Escola de Notre-Dame', 'correct_answer' => false],
                    ['id' => '77dd40dd-042e-505b-bae6-896adb8b617a', 'description' => 'Ars subtilior', 'correct_answer' => false],
                    ['id' => '4370c184-c1b7-54e2-8e5c-4df75f992880', 'description' => 'Música galante', 'correct_answer' => false]
                ]],
        ['id' => 'b246e73c-523f-5d83-be70-3dcfb856edbb', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição musical dos séculos XII e XIII está associada ao desenvolvimento do organum polifônico em Paris?', 'difficulty' => 5, 'weight' => 855, 'alternatives' => [
                    ['id' => '699fb2e5-6c0f-5027-8a82-4d6a285a329e', 'description' => 'Ars antiqua', 'correct_answer' => false],
                    ['id' => '44df92d3-6df9-5e26-aca4-0f4fabd23395', 'description' => 'Ars subtiliol', 'correct_answer' => false],
                    ['id' => '9451f325-6375-5c27-b87c-95eb8c188f00', 'description' => 'Música galante', 'correct_answer' => false],
                    ['id' => 'ba7b51cf-e7a6-581d-9dd3-436af6e72873', 'description' => 'Ars nova', 'correct_answer' => false],
                    ['id' => '7a7a2f26-74df-5561-8e75-850dbcb84616', 'description' => 'Escola de Notre-Dame', 'correct_answer' => true]
                ]],
        ['id' => 'a8b5d9a5-cb44-5ddb-b961-b09765ce908e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual estilo musical do século XVIII valorizou melodias claras, texturas leves e frases elegantes, entre o barroco e o classicismo?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => 'cee02399-a558-597f-8923-61d766273672', 'description' => 'Música galante', 'correct_answer' => true],
                    ['id' => '087dcfc0-1576-5eed-9df6-83f3f16d9083', 'description' => 'Escola de Notre-Dame', 'correct_answer' => false],
                    ['id' => '9b8947cb-57ca-55c3-a927-8caddb9e196e', 'description' => 'Ars subtilior', 'correct_answer' => false],
                    ['id' => '992b62e2-1416-5610-b2bd-2dd0a0bd9fc6', 'description' => 'Ars antique', 'correct_answer' => false],
                    ['id' => '9853a095-ca21-508f-ae01-7ba020caa83e', 'description' => 'Ars nova', 'correct_answer' => false]
                ]],
        ['id' => 'ee49fab0-6ba8-584e-a1bc-acc5897d8d07', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica pictórica suaviza transições entre cores e tons sem contornos perceptíveis, associada a Leonardo da Vinci?', 'difficulty' => 5, 'weight' => 997, 'alternatives' => [
                    ['id' => '7752db4b-cfa8-579b-812b-3ddd5438f168', 'description' => 'Técnica de impastu', 'correct_answer' => false],
                    ['id' => '0f283c45-4d48-5767-b029-7cbeb91cce66', 'description' => 'Técnica de chiaroscuro', 'correct_answer' => false],
                    ['id' => 'd8cee869-02eb-5d81-bd3a-8530e4393f8b', 'description' => 'Técnica de grisaille', 'correct_answer' => false],
                    ['id' => '6940b802-50ff-596d-b799-f87e2b0fae49', 'description' => 'Técnica de tenebrismo', 'correct_answer' => false],
                    ['id' => '1e56efb9-fad4-504a-bde3-af2c6dc5c7ea', 'description' => 'Técnica de sfumato', 'correct_answer' => true]
                ]],
        ['id' => 'bf83844c-4f66-5b8b-8335-84734f781359', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica visual modela volumes por meio do contraste entre áreas iluminadas e sombreadas?', 'difficulty' => 5, 'weight' => 804, 'alternatives' => [
                    ['id' => 'ca9e5b4b-f785-590d-98dd-952655ff6181', 'description' => 'Técnica de grisaille', 'correct_answer' => false],
                    ['id' => 'ba4a1084-739a-58b3-94b4-ff3f3e9c7be1', 'description' => 'Técnica de tenebrismu', 'correct_answer' => false],
                    ['id' => '74a63493-a603-5919-9b9f-bbb2d13eb216', 'description' => 'Técnica de chiaroscuro', 'correct_answer' => true],
                    ['id' => 'ac38c05d-b94a-5085-b312-0d46d4e1c13c', 'description' => 'Técnica de impasto', 'correct_answer' => false],
                    ['id' => '50fb34d1-b93e-529c-baac-f947ec4680f7', 'description' => 'Técnica de sfumato', 'correct_answer' => false]
                ]],
        ['id' => '3bbc8f05-fd1e-502e-a6d7-d540f41e5126', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual abordagem pictórica intensifica contrastes dramáticos com fundos muito escuros e focos de luz concentrados?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => 'fe75506d-5707-5556-9b89-7ce582b99f41', 'description' => 'Técnica de grisaille', 'correct_answer' => false],
                    ['id' => 'b0498190-1364-53d6-922e-6ad273b762ed', 'description' => 'Técnica de chiaroscuro', 'correct_answer' => false],
                    ['id' => '0588d264-a3b8-5d90-bb47-f059c8e04b4f', 'description' => 'Técnica de tenebrismo', 'correct_answer' => true],
                    ['id' => 'f0dd432c-2371-5bbe-b421-d709883781d8', 'description' => 'Técnica de impasto', 'correct_answer' => false],
                    ['id' => '71aae3fd-32b7-560e-9529-5789801a4297', 'description' => 'Técnica de sfumatu', 'correct_answer' => false]
                ]],
        ['id' => '866a1564-d968-52e2-a124-3457c90708fc', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica pictórica aplica tinta em camadas espessas, deixando a textura das pinceladas visível?', 'difficulty' => 5, 'weight' => 811, 'alternatives' => [
                    ['id' => '31a8c43a-8a2b-5120-88ae-a58284f1b9ed', 'description' => 'Técnica de sfumato', 'correct_answer' => false],
                    ['id' => '65e819fc-5d7d-58ea-8065-ea4d80ac2dfa', 'description' => 'Técnica de impasto', 'correct_answer' => true],
                    ['id' => '6d3524cf-320b-5659-b6f1-781d5a28183b', 'description' => 'Técnica de tenebrismo', 'correct_answer' => false],
                    ['id' => 'eb91cd5e-2b65-56c8-bc48-dbe224e75d7f', 'description' => 'Técnica de chiaroscuro', 'correct_answer' => false],
                    ['id' => '28c4f258-9fa1-5084-8eaf-d8f3a734ad84', 'description' => 'Técnica de grisailla', 'correct_answer' => false]
                ]],
        ['id' => '7c104c5a-6d9d-58ea-ad40-8a5ec9ab14dc', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual técnica de pintura utiliza predominantemente tons de cinza para simular escultura ou criar uma imagem monocromática?', 'difficulty' => 5, 'weight' => 905, 'alternatives' => [
                    ['id' => 'fb881db3-08c6-56e1-8fbb-64ddb8cf9e02', 'description' => 'Técnica de impasto', 'correct_answer' => false],
                    ['id' => '53612bd5-0982-5b3d-9544-4219428a268a', 'description' => 'Técnica de tenebrismo', 'correct_answer' => false],
                    ['id' => '4acdcee9-b1a9-5f85-a197-b341a344afb0', 'description' => 'Técnica de sfumato', 'correct_answer' => false],
                    ['id' => '33cae719-3459-5080-92ff-691fc4f20096', 'description' => 'Técnica de grisaille', 'correct_answer' => true],
                    ['id' => '3457de74-feb1-50ee-97f8-be5a5e90824a', 'description' => 'Técnica de chiaroscuru', 'correct_answer' => false]
                ]],
        ['id' => '0899519e-c762-5bab-b1e6-3caa03bab260', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito medieval do texto massorético hebraico é tradicionalmente associado à tradição textual de Ben Asher?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => 'f63f73a9-4913-53c3-a918-1c1cdfe15fc2', 'description' => 'Códice de Leningrado', 'correct_answer' => false],
                    ['id' => 'aeacb534-617b-5f42-b9b9-2eab847e2aed', 'description' => 'Códice de Westminstel', 'correct_answer' => false],
                    ['id' => 'af2ef2a7-0a03-5c3a-ae8a-d7155594ab4a', 'description' => 'Códice de Sassoon', 'correct_answer' => false],
                    ['id' => 'a07984a3-182a-564f-b667-5abd2f7891b0', 'description' => 'Códice de Cairensis', 'correct_answer' => false],
                    ['id' => '11a2fe18-7709-5ac0-b67e-9b168ec95f02', 'description' => 'Códice de Aleppo', 'correct_answer' => true]
                ]],
        ['id' => '27afa497-c30b-5365-b209-6cfe601663f0', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito completo mais antigo do texto massorético hebraico é datado de 1008/1009 e serve de base a edições críticas?', 'difficulty' => 5, 'weight' => 910, 'alternatives' => [
                    ['id' => 'd3160e65-1bc7-5ec1-9503-05038534b97d', 'description' => 'Códice de Leningrado', 'correct_answer' => true],
                    ['id' => '206e6044-82fc-5373-a49a-88cdf8e1a917', 'description' => 'Códice de Sassoom', 'correct_answer' => false],
                    ['id' => '914edf15-8499-5d3c-af6b-5fcb5781261f', 'description' => 'Códice de Aleppo', 'correct_answer' => false],
                    ['id' => 'bf088125-9c1f-562a-956e-68308375cd37', 'description' => 'Códice de Westminster', 'correct_answer' => false],
                    ['id' => '1bf22408-9c85-54de-af10-caac077783aa', 'description' => 'Códice de Cairensis', 'correct_answer' => false]
                ]],
        ['id' => 'c6ae64aa-da70-5054-b7b4-d207a2c31241', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito hebraico bíblico antigo, datado por inscrição e análise, foi vendido em leilão em 2023?', 'difficulty' => 5, 'weight' => 917, 'alternatives' => [
                    ['id' => '0fb444c1-88ab-5f4f-b12d-c271225fe811', 'description' => 'Códice de Sassoon', 'correct_answer' => true],
                    ['id' => '121799fa-3f60-5407-b56f-146b0da9ac2c', 'description' => 'Códice de Westminster', 'correct_answer' => false],
                    ['id' => 'a08ce21e-fc64-572e-b448-a7efbfe8350c', 'description' => 'Códice de Leningrado', 'correct_answer' => false],
                    ['id' => '73ce6ee0-246b-5153-89a4-20606fd1ee9e', 'description' => 'Códice de Aleppu', 'correct_answer' => false],
                    ['id' => '8579e4c8-1d19-582d-9115-9fbffec83842', 'description' => 'Códice de Cairensis', 'correct_answer' => false]
                ]],
        ['id' => '66bbf2ce-9adf-5b05-af58-f09ad0eaaecd', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito hebraico contém os livros dos Profetas e foi copiado, segundo seu colofão, por Moisés ben Asher?', 'difficulty' => 5, 'weight' => 940, 'alternatives' => [
                    ['id' => 'b22f8055-964e-5561-8db0-c8a814988532', 'description' => 'Códice de Cairensis', 'correct_answer' => true],
                    ['id' => '8a00e1f7-30f9-5861-8e8e-489ec333879b', 'description' => 'Códice de Aleppo', 'correct_answer' => false],
                    ['id' => '00ce7ff0-826d-543a-a950-0ef451ad940c', 'description' => 'Códice de Leningradu', 'correct_answer' => false],
                    ['id' => 'd3db11a0-b93e-58da-86cf-2d9bef59f9fd', 'description' => 'Códice de Westminster', 'correct_answer' => false],
                    ['id' => 'e2a9d85d-877a-5649-bccf-8555af298644', 'description' => 'Códice de Sassoon', 'correct_answer' => false]
                ]],
        ['id' => 'f7154e33-f1f9-541c-ab83-870084aa140e', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual designação é usada para uma edição digital de referência do texto hebraico da Bíblia, e não para um códice massorético medieval específico?', 'difficulty' => 5, 'weight' => 983, 'alternatives' => [
                    ['id' => 'cbb8c042-6e88-523e-80ec-6300ce36861b', 'description' => 'Códice de Cairensiz', 'correct_answer' => false],
                    ['id' => '762978a4-28ad-5feb-b508-4ad3d7d63c3c', 'description' => 'Códice de Leningrado', 'correct_answer' => false],
                    ['id' => 'a93e4d94-0e65-530c-9eb8-f29b65a81c17', 'description' => 'Códice de Aleppo', 'correct_answer' => false],
                    ['id' => '595093e1-d293-5043-8846-d5ec7b8db18a', 'description' => 'Códice de Sassoon', 'correct_answer' => false],
                    ['id' => 'd4b64eb0-5523-52bf-a371-9a47eabf8174', 'description' => 'Códice de Westminster', 'correct_answer' => true]
                ]],
        ['id' => '9f8fdf33-b33d-5b42-8443-d95b44042044', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma poética árabe-andalusina estrófica costuma terminar com uma seção final chamada kharja?', 'difficulty' => 5, 'weight' => 915, 'alternatives' => [
                    ['id' => '306d5142-9c60-5fb5-85d3-94bd349a368e', 'description' => 'Qasida', 'correct_answer' => false],
                    ['id' => 'c9668a10-8019-5c71-8f10-13de240826aa', 'description' => 'Maqama', 'correct_answer' => false],
                    ['id' => '71ddbb2f-f6a4-58af-a8e9-8ba87765790e', 'description' => 'Estilo Kharja', 'correct_answer' => false],
                    ['id' => '12dcbd7c-a3b6-59e1-a8de-11d5d0b532ab', 'description' => 'Muwashshah', 'correct_answer' => true],
                    ['id' => 'da218081-4342-5e5a-b856-25f79b96f8dd', 'description' => 'Zajar', 'correct_answer' => false]
                ]],
        ['id' => 'bf70cb6b-ae98-51b0-822d-0684e7123860', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Como é chamada a estrofe final de certos poemas muwashshah, por vezes escrita em língua românica ou árabe coloquial?', 'difficulty' => 5, 'weight' => 828, 'alternatives' => [
                    ['id' => '4cee6a2a-a1b9-5a38-8924-1f0a7832270b', 'description' => 'Qasida', 'correct_answer' => false],
                    ['id' => '25cff2c2-11f8-5979-8192-e2185a499a9e', 'description' => 'Maqama', 'correct_answer' => false],
                    ['id' => '2910e8e8-22e3-5628-a328-1e032aab2845', 'description' => 'Muwashshah', 'correct_answer' => false],
                    ['id' => 'bc81ce62-9108-5c17-b7d5-67af7bf04662', 'description' => 'Kharja', 'correct_answer' => true],
                    ['id' => '6170f77c-7275-57b1-ad25-a4dd17444b1c', 'description' => 'Zajal', 'correct_answer' => false]
                ]],
        ['id' => '5ac6fa96-53fb-5e04-b7b2-8e9b1bf64c59', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma poética árabe clássica é geralmente longa e monorrímica, com estrutura tradicional própria?', 'difficulty' => 5, 'weight' => 890, 'alternatives' => [
                    ['id' => 'e92dfde8-e55b-5369-a927-f363b9e53c70', 'description' => 'Estilo Kharja', 'correct_answer' => false],
                    ['id' => '088fce1a-80f6-5b42-a080-690b3cc10800', 'description' => 'Qasida', 'correct_answer' => true],
                    ['id' => 'aaafbe8d-979f-5771-997a-f596ce375707', 'description' => 'Muwashsheh', 'correct_answer' => false],
                    ['id' => '38199f63-3ee7-541b-9f81-3401a8ed7bfa', 'description' => 'Maqama', 'correct_answer' => false],
                    ['id' => '007f6aee-c681-5c9c-8104-0113c3994b0e', 'description' => 'Zajal', 'correct_answer' => false]
                ]],
        ['id' => 'eadc565b-9723-5807-a20b-9799d2a37805', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual forma de poesia estrófica popular em língua árabe coloquial é associada à tradição andalusina?', 'difficulty' => 5, 'weight' => 830, 'alternatives' => [
                    ['id' => '8196b234-bdcb-54a0-83a5-8850e8179f22', 'description' => 'Qasida', 'correct_answer' => false],
                    ['id' => '4d985820-ecda-5d62-99d8-78abc71aad30', 'description' => 'Muwashshah', 'correct_answer' => false],
                    ['id' => '5415603e-428f-5b80-884d-ad7dd7f4ad19', 'description' => 'Zajal', 'correct_answer' => true],
                    ['id' => 'f84a1ccd-e75f-5bf6-8354-6a43ce11dd08', 'description' => 'Maqama', 'correct_answer' => false],
                    ['id' => 'c7478142-4f98-5f17-ac3f-e438ef8dc578', 'description' => 'Estilo Kharje', 'correct_answer' => false]
                ]],
        ['id' => 'c71a469d-0560-529f-a3cc-b972457a4640', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual gênero de prosa rimada árabe apresenta episódios protagonizados por um narrador e um personagem astuto?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => '53a7b925-3b19-513d-bb58-4afecb0b1147', 'description' => 'Muwashshah', 'correct_answer' => false],
                    ['id' => 'f678921e-5c0c-59be-967e-0fbdba2baa97', 'description' => 'Zajal', 'correct_answer' => false],
                    ['id' => 'a81f027c-2181-5ce7-920e-f654092a7e92', 'description' => 'Maqama', 'correct_answer' => true],
                    ['id' => '48dc44b0-dbc6-5572-9630-05af9cefe2f4', 'description' => 'Qaside', 'correct_answer' => false],
                    ['id' => 'ec79b9f5-4673-5c93-97d4-d5a030321402', 'description' => 'Estilo Kharja', 'correct_answer' => false]
                ]],
        ['id' => 'a2d93bf3-26e2-5a69-b390-9c1df2af2bf9', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição pictórica japonesa da corte preservou temas da literatura clássica e técnicas de pintura yamato-e?', 'difficulty' => 5, 'weight' => 941, 'alternatives' => [
                    ['id' => '7966f6f8-3f5d-5404-9de3-3021ce3c86ff', 'description' => 'Escola Nanga', 'correct_answer' => false],
                    ['id' => 'aba927d2-18d6-51a4-9290-a2d7ab8f2221', 'description' => 'Escola Rinpa', 'correct_answer' => false],
                    ['id' => '09bca00c-f5b1-5c8b-8065-fac7d51c6184', 'description' => 'Escola Kamō', 'correct_answer' => false],
                    ['id' => '221fa3f0-9ffb-56ef-905a-47007828f6bb', 'description' => 'Escola Ukiyo-e', 'correct_answer' => false],
                    ['id' => 'c9c9d6cb-1fe4-516c-9dfe-d89106505375', 'description' => 'Escola de pintura de Tosa', 'correct_answer' => true]
                ]],
        ['id' => '768b037a-d521-5753-b15e-274642bc59db', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual escola de pintura japonesa serviu frequentemente aos xogunatos e senhores feudais, combinando tinta e pigmentos coloridos?', 'difficulty' => 5, 'weight' => 843, 'alternatives' => [
                    ['id' => '935aaeaa-7267-5ec1-a560-e27727f88894', 'description' => 'Escola Nanga', 'correct_answer' => false],
                    ['id' => '35e1fd68-a0bc-52d2-bbd8-54f919aabcab', 'description' => 'Escola Ukiyo-e', 'correct_answer' => false],
                    ['id' => 'c3a42281-35e3-5901-aa7c-5a375dd70437', 'description' => 'Escola Rinpe', 'correct_answer' => false],
                    ['id' => 'd6bfe472-7eae-56a3-bf7b-11404a3a35d7', 'description' => 'Escola Kanō', 'correct_answer' => true],
                    ['id' => 'fa549791-a7f4-5bd4-87b7-8a5f0ba7b5ac', 'description' => 'Escola de pintura de Tosa', 'correct_answer' => false]
                ]],
        ['id' => 'f9066575-4bba-5d8f-9e16-23a5c4d2d0e9', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição artística japonesa é conhecida por composições decorativas, fundos dourados e motivos naturais estilizados?', 'difficulty' => 5, 'weight' => 860, 'alternatives' => [
                    ['id' => 'a00d431e-578f-5233-a543-c9368417827a', 'description' => 'Escola Rinpa', 'correct_answer' => true],
                    ['id' => '86450c85-26e1-5872-b6be-0e8bfa9c72ee', 'description' => 'Escola Kanō', 'correct_answer' => false],
                    ['id' => '4f232294-9ec3-5811-8d38-c5ae9e8667e2', 'description' => 'Escola de pintura de Tosa', 'correct_answer' => false],
                    ['id' => 'a09211df-fa2d-5cad-a99a-e1ebf73e647a', 'description' => 'Escola Nange', 'correct_answer' => false],
                    ['id' => 'b1961520-5027-5471-85a4-12a035050e57', 'description' => 'Escola Ukiyo-e', 'correct_answer' => false]
                ]],
        ['id' => 'ed59a863-9d7e-5f74-afb2-5ebe578314b9', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de pintura japonesa foi influenciada pela pintura literati chinesa e valorizou pinceladas expressivas?', 'difficulty' => 5, 'weight' => 897, 'alternatives' => [
                    ['id' => 'fff36ac5-382c-5f3c-88ca-83a56e8f2776', 'description' => 'Escola Nanga', 'correct_answer' => true],
                    ['id' => '0e3d92d8-e843-5bd0-8473-b329c6ce487b', 'description' => 'Escola Rinpa', 'correct_answer' => false],
                    ['id' => '3c945b18-8987-5ddf-8609-d19a274a7411', 'description' => 'Escola de pintura de Tosa', 'correct_answer' => false],
                    ['id' => 'b2b2758d-8f65-59f3-903b-c6936c4e40cb', 'description' => 'Escola Ukiyo-a', 'correct_answer' => false],
                    ['id' => '9262fd31-8d85-57b9-88dc-170b0f8f34b8', 'description' => 'Escola Kanō', 'correct_answer' => false]
                ]],
        ['id' => '7179ca22-32c8-5e03-b41f-2b379a197349', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de gravura japonesa retratou cenas urbanas, atores, cortesãs e paisagens para um público amplo?', 'difficulty' => 5, 'weight' => 809, 'alternatives' => [
                    ['id' => 'bfcf1624-b7ff-516f-afa7-24d4f8944dd5', 'description' => 'Escola Rinpa', 'correct_answer' => false],
                    ['id' => '22442e2d-8e99-5a07-b3ff-a60434309a62', 'description' => 'Escola Kanō', 'correct_answer' => false],
                    ['id' => 'e3878dae-49ca-5661-9b39-8a618f2a7917', 'description' => 'Escola Nanga', 'correct_answer' => false],
                    ['id' => 'a7d8da14-fe3e-5c12-b4ae-3a934267ff91', 'description' => 'Escola de pintura de Tose', 'correct_answer' => false],
                    ['id' => 'e5a0853e-afeb-578c-adad-454c55ef4537', 'description' => 'Escola Ukiyo-e', 'correct_answer' => true]
                ]],
        ['id' => 'b84a4d14-ebb7-53e6-9e58-d4dd9e732d8c', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de canto litúrgico ocidental está associada à arquidiocese de Milão e a Santo Ambrósio?', 'difficulty' => 5, 'weight' => 969, 'alternatives' => [
                    ['id' => 'be8f581f-a23a-56a8-9052-c5fcc292b2b7', 'description' => 'Canto gregoriano', 'correct_answer' => false],
                    ['id' => '90594f9c-554a-5efe-a82a-081bd1774a21', 'description' => 'Canto moçárabe', 'correct_answer' => false],
                    ['id' => 'ea7be5a4-3f89-5e46-98c1-b861e5083f20', 'description' => 'Canto ambrosiano', 'correct_answer' => true],
                    ['id' => 'db049d80-0f6e-50e5-bd32-0eca0cd00d7e', 'description' => 'Canto galicano', 'correct_answer' => false],
                    ['id' => 'c634563f-0d64-5462-88bb-b7f3b303c814', 'description' => 'Canto beneventanu', 'correct_answer' => false]
                ]],
        ['id' => '8999ed25-f90a-57ec-a49c-ff02e0119f77', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual repertório de canto litúrgico monódico em latim tornou-se associado à liturgia romana medieval?', 'difficulty' => 5, 'weight' => 888, 'alternatives' => [
                    ['id' => '7e31ba19-2973-5dcd-bd6a-bc7326371de6', 'description' => 'Canto moçárabe', 'correct_answer' => false],
                    ['id' => 'ffdd6292-cc43-5a4e-84e9-b7767e30df14', 'description' => 'Canto ambrosiano', 'correct_answer' => false],
                    ['id' => 'b10994ac-9952-563a-9380-ce4cd854f501', 'description' => 'Canto gregoriano', 'correct_answer' => true],
                    ['id' => '97d22448-1826-57ff-9e29-a41d990cc168', 'description' => 'Canto beneventano', 'correct_answer' => false],
                    ['id' => 'dfa9b625-4872-501b-a2e6-7cafeb704395', 'description' => 'Canto galicanu', 'correct_answer' => false]
                ]],
        ['id' => '019c5aa9-a2a9-5a1d-bbe1-b94610cc5e5b', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição litúrgica e musical se desenvolveu entre comunidades cristãs da Península Ibérica sob domínio islâmico?', 'difficulty' => 5, 'weight' => 912, 'alternatives' => [
                    ['id' => '5c827edf-494a-52c0-90c9-35a0290e3dda', 'description' => 'Canto moçárabe', 'correct_answer' => true],
                    ['id' => 'c262178e-f4cd-5a94-bd3d-5b2b74b9e06e', 'description' => 'Canto beneventano', 'correct_answer' => false],
                    ['id' => '461e6ed9-21a8-56f4-b1a3-f1b762b360c4', 'description' => 'Canto ambrosianu', 'correct_answer' => false],
                    ['id' => '517d6e29-d2bb-510a-a570-1699a7f02d74', 'description' => 'Canto galicano', 'correct_answer' => false],
                    ['id' => 'c1e91003-5fe5-5bcc-9ee2-d78fe3824114', 'description' => 'Canto gregoriano', 'correct_answer' => false]
                ]],
        ['id' => 'a1ac51dc-b6ee-5037-8833-eec29a771822', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de canto litúrgico da Gália foi em grande parte substituída pelo repertório romano-carolíngio?', 'difficulty' => 5, 'weight' => 896, 'alternatives' => [
                    ['id' => '089a1c00-0d28-50bb-bef1-a1d3c2658720', 'description' => 'Canto beneventano', 'correct_answer' => false],
                    ['id' => 'ace7b153-7283-5c3c-abec-1048b25a7c75', 'description' => 'Canto gregoriano', 'correct_answer' => false],
                    ['id' => 'fa4b7a31-5a74-5079-91ab-9796c726f81a', 'description' => 'Canto galicano', 'correct_answer' => true],
                    ['id' => '20d9888f-36cd-5b2e-b6bf-249b48a8a795', 'description' => 'Canto moçáraba', 'correct_answer' => false],
                    ['id' => '079b7249-8ef1-54a6-b0c0-fbe7c04de246', 'description' => 'Canto ambrosiano', 'correct_answer' => false]
                ]],
        ['id' => 'ecbae6d7-ccd9-5994-bb84-bce46af3edd1', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tradição de canto litúrgico medieval esteve associada ao sul da Itália e à região de Benevento?', 'difficulty' => 5, 'weight' => 880, 'alternatives' => [
                    ['id' => '53278c4b-088c-5d1c-85b3-bc9f66df7663', 'description' => 'Canto moçárabe', 'correct_answer' => false],
                    ['id' => '12573534-1ab0-58cd-8826-edae61fe1539', 'description' => 'Canto galicano', 'correct_answer' => false],
                    ['id' => 'ed55db55-f824-582f-afd4-f1ade2780c1c', 'description' => 'Canto gregorianu', 'correct_answer' => false],
                    ['id' => '235724e3-3b1b-5ce3-9023-af8d4d64c661', 'description' => 'Canto beneventano', 'correct_answer' => true],
                    ['id' => 'd0deca40-297e-5fdd-ba32-6635b9a40e01', 'description' => 'Canto ambrosiano', 'correct_answer' => false]
                ]],
        ['id' => '812c9314-40f2-511c-9c66-e6a843584538', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tendência decorativa europeia dos séculos XVII e XVIII imitou e reinterpretou motivos artísticos chineses?', 'difficulty' => 5, 'weight' => 823, 'alternatives' => [
                    ['id' => '12c637d5-1d4f-5559-9a7c-679cc1fcd1fc', 'description' => 'Estilo Japonisme', 'correct_answer' => false],
                    ['id' => '98886762-ebd4-5892-bb30-fe77314e21a3', 'description' => 'Estilo Aesthetic', 'correct_answer' => false],
                    ['id' => '3b3200ec-8b54-5a24-a996-9e88cfce5421', 'description' => 'Estilo Chinoiserie', 'correct_answer' => true],
                    ['id' => '86724899-bcd0-5a55-92cb-23d4923e09c1', 'description' => 'Estilo Orientaliste', 'correct_answer' => false],
                    ['id' => '03ab0b7e-da32-5ec6-bfc3-b732b8f3d669', 'description' => 'Estilo Turquerie', 'correct_answer' => false]
                ]],
        ['id' => '449066c5-0c70-5dea-81b3-d32d34637b58', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual influência estética europeia do século XIX surgiu do contato intenso com gravuras e objetos artísticos japoneses?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => '81e85ebe-507e-527f-99a7-0cb0c496473d', 'description' => 'Estilo Chinoiserie', 'correct_answer' => false],
                    ['id' => 'b97853cb-310b-5d22-9b0d-3832594b412c', 'description' => 'Estilo Turqueria', 'correct_answer' => false],
                    ['id' => '37d5c3c7-4992-5693-ad42-2178c687e597', 'description' => 'Estilo Orientalista', 'correct_answer' => false],
                    ['id' => '28aa4a3c-1c6d-5382-8201-51644c4774fc', 'description' => 'Estilo Aesthetic', 'correct_answer' => false],
                    ['id' => 'f9bf66ac-6cbd-52b7-917c-c8ede005dabb', 'description' => 'Estilo Japonisme', 'correct_answer' => true]
                ]],
        ['id' => '2934227c-415d-5006-b737-49b0478a92e9', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual tendência artística europeia representou sociedades e paisagens do Oriente a partir de perspectivas frequentemente exotizantes?', 'difficulty' => 5, 'weight' => 872, 'alternatives' => [
                    ['id' => 'b7e4ec6e-4952-5357-9ba3-f26e5bbf025b', 'description' => 'Estilo Japonisme', 'correct_answer' => false],
                    ['id' => 'f0f75116-2f26-59fd-81c7-58b2ab841c5c', 'description' => 'Estilo Chinoiseria', 'correct_answer' => false],
                    ['id' => '97fec003-1cc2-5cc2-87cf-933d09a61910', 'description' => 'Estilo Turquerie', 'correct_answer' => false],
                    ['id' => '023b0494-b34f-5c68-9d7d-8980711724ab', 'description' => 'Estilo Orientalista', 'correct_answer' => true],
                    ['id' => '14782c0b-795a-500c-851a-e32d54d97155', 'description' => 'Estilo Aesthetic', 'correct_answer' => false]
                ]],
        ['id' => 'b14c1e6a-f5dc-5283-904d-be0df3c2f5c8', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual moda cultural europeia dos séculos XVII e XVIII incorporou elementos associados à cultura otomana?', 'difficulty' => 5, 'weight' => 857, 'alternatives' => [
                    ['id' => '77dbfcce-d69b-58f1-8be4-83fe118b0b5d', 'description' => 'Estilo Aesthetik', 'correct_answer' => false],
                    ['id' => 'f2f037a1-5e91-5dbe-aba6-49fc9e651b29', 'description' => 'Estilo Japonisme', 'correct_answer' => false],
                    ['id' => '5166b4dd-2857-53d5-b9c0-2189a75ca71b', 'description' => 'Estilo Chinoiserie', 'correct_answer' => false],
                    ['id' => '3dafd5e6-1c96-5027-bd3e-0bac91d02f6c', 'description' => 'Estilo Orientalista', 'correct_answer' => false],
                    ['id' => '61be47e1-d9a7-57a9-b686-0955b8f05fc2', 'description' => 'Estilo Turquerie', 'correct_answer' => true]
                ]],
        ['id' => 'eb0db7bc-4cb4-5f55-8f4f-d653c57de308', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual movimento britânico do século XIX enfatizou a beleza e a arte pela arte, influenciando interiores e artes decorativas?', 'difficulty' => 5, 'weight' => 885, 'alternatives' => [
                    ['id' => 'a5cfcd51-bd2a-5444-babd-70c5e68fd35e', 'description' => 'Estilo Orientalista', 'correct_answer' => false],
                    ['id' => '4a220b2b-65d4-5a58-a456-3fe88e989b4e', 'description' => 'Estilo Japonisma', 'correct_answer' => false],
                    ['id' => '0f20459f-68d8-588e-8d7a-56f8bc3fe6d7', 'description' => 'Estilo Aesthetic', 'correct_answer' => true],
                    ['id' => '17d5777b-ed2f-5409-ad08-b09b7faa3ab6', 'description' => 'Estilo Chinoiserie', 'correct_answer' => false],
                    ['id' => '43427f28-4b88-5ad3-aa4e-e0242fcab18a', 'description' => 'Estilo Turquerie', 'correct_answer' => false]
                ]],
        ['id' => '2af2c6f7-db7e-5717-add2-96c4fe7d19ff', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual conjunto de manuscritos alquímicos ingleses medievais é associado a George Ripley e a imagens simbólicas como o pergaminho de Ripley?', 'difficulty' => 5, 'weight' => 898, 'alternatives' => [
                    ['id' => 'ab3a0f9a-ad4d-5798-ba89-bb242e7cb5db', 'description' => 'Evangelhos de Lindisfarne', 'correct_answer' => false],
                    ['id' => 'a5e8871c-2673-5fc4-ae0b-118454960667', 'description' => 'Codex Amiatinuz', 'correct_answer' => false],
                    ['id' => 'f34beabc-2d2a-597c-ae0d-e6270a2f4699', 'description' => 'Manuscrito de Ripley', 'correct_answer' => true],
                    ['id' => '04e60fef-7ff8-594a-8709-38d1d825a7de', 'description' => 'Livro de Kells', 'correct_answer' => false],
                    ['id' => '333a10f3-6c7c-5cc5-8343-514a3088fdbf', 'description' => 'Livro de Durrow', 'correct_answer' => false]
                ]],
        ['id' => '0afecf9e-214d-52a7-8de6-facf0b0c18a6', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito iluminado medieval irlandês é conhecido por sua decoração insular dos quatro Evangelhos?', 'difficulty' => 5, 'weight' => 818, 'alternatives' => [
                    ['id' => '1137a278-02ec-520c-9c37-16379f76ca62', 'description' => 'Livro de Durrow', 'correct_answer' => false],
                    ['id' => '05f605fd-0ec7-57a5-ab9f-76bab1174c4a', 'description' => 'Codex Amiatinus', 'correct_answer' => false],
                    ['id' => 'fce5e30a-ce70-5c77-a171-f683afb21fa4', 'description' => 'Manuscrito de Ripley', 'correct_answer' => false],
                    ['id' => '1586410d-2770-5c9a-a21a-fc5b760728c0', 'description' => 'Livro de Kells', 'correct_answer' => true],
                    ['id' => '9b6103fe-2cc1-57f7-92a3-856efc7c23dd', 'description' => 'Evangelhos de Lindisfarna', 'correct_answer' => false]
                ]],
        ['id' => 'be1b5d07-6d89-5a2d-8890-b064a0824226', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito iluminado anglo-saxão foi produzido por Eadfrith e preserva os quatro Evangelhos?', 'difficulty' => 5, 'weight' => 967, 'alternatives' => [
                    ['id' => 'e876b726-e44b-5afe-a447-6f023cb75755', 'description' => 'Manuscrito de Ripley', 'correct_answer' => false],
                    ['id' => '7fafe639-6067-5976-b1cc-68cf906a323a', 'description' => 'Livro de Kellz', 'correct_answer' => false],
                    ['id' => 'c4d96852-3833-56e0-847f-d57f3aefd6c3', 'description' => 'Evangelhos de Lindisfarne', 'correct_answer' => true],
                    ['id' => 'ed025e78-4f34-50e2-b7d4-23de5359f0d5', 'description' => 'Codex Amiatinus', 'correct_answer' => false],
                    ['id' => 'd34069b3-68d3-500c-8f7c-5aecbdfe88b5', 'description' => 'Livro de Durrow', 'correct_answer' => false]
                ]],
        ['id' => 'c8594711-ac4c-5c7e-81d6-cc5d3a87d4b6', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito latino da Bíblia, produzido na Nortúmbria, é um dos mais antigos exemplares completos da Vulgata?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => '9a3c74bf-11ca-5b43-8cfd-50edc5ffb142', 'description' => 'Livro de Kells', 'correct_answer' => false],
                    ['id' => 'd21a2a28-d8a7-5c3e-89cb-86e57bd2ce8c', 'description' => 'Livro de Durruw', 'correct_answer' => false],
                    ['id' => '47a99721-9f17-5273-9a68-f5d8c510c783', 'description' => 'Evangelhos de Lindisfarne', 'correct_answer' => false],
                    ['id' => 'c373fb58-47ba-55e8-b7a4-fb9e3f44f178', 'description' => 'Manuscrito de Ripley', 'correct_answer' => false],
                    ['id' => '47877076-26ab-5a66-86df-402325968e19', 'description' => 'Codex Amiatinus', 'correct_answer' => true]
                ]],
        ['id' => '8f7ba2fb-501f-542c-8ea5-5d9eda128561', 'locale' => 'pt-BR', 'category' => 'a46d28d8-0fe2-5678-ba72-eee0f818f657', 'question' => 'Qual manuscrito insular dos Evangelhos é considerado um dos mais antigos livros iluminados sobreviventes da tradição irlandesa?', 'difficulty' => 5, 'weight' => 959, 'alternatives' => [
                    ['id' => '3ed20eb3-df9b-525b-a805-2b02676170b1', 'description' => 'Evangelhos de Lindisfarne', 'correct_answer' => false],
                    ['id' => '5bad10f6-80e4-53ee-a583-e83bfbbe194f', 'description' => 'Livro de Durrow', 'correct_answer' => true],
                    ['id' => '2c334282-1792-586e-ba0b-b1bda483f9b0', 'description' => 'Livro de Kells', 'correct_answer' => false],
                    ['id' => 'caaa91d9-c4e0-5d9d-a8ac-ec76ede23eaa', 'description' => 'Codex Amiatinus', 'correct_answer' => false],
                    ['id' => '4b9ba10c-c4fe-5a5f-a954-0502888125e7', 'description' => 'Manuscrito de Riplei', 'correct_answer' => false]
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
