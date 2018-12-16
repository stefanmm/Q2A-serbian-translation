<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
	'a_commented_body' => "Tvoj odgovor na sajtu ^site_title ima novi komentar od strane korisnika ^c_handle:\n\n^open^c_content^close\n\nTvoj odgovor je bio:\n\n^open^c_context^close\n\nMožeš odgovoriti dodavanjem tvog komentara:\n\n^url\n\nHvala,\n^site_title",
	'a_commented_subject' => 'Tvoj odgovor na sajtu ^site_title ima novi komentar',

	'a_followed_body' => "Tvoj odgovor na sajtu ^site_title ima novo povezano pitanje od korisnika ^q_handle:\n\n^open^q_title^close\n\nTvoj odgovor je bio:\n\n^open^a_content^close\n\nKlikni na link ispod da odgovoriš na povezano pitanje\n\n^url\n\nHvala,\n^site_title",
	'a_followed_subject' => 'Tvoj odgovor na sajtu ^site_title ima novo povezano pitanje',

	'a_selected_body' => "Čestitke! Tvoj odgovor na sajtu ^site_title je izabran kao najbolji od strane korisnika ^s_handle:\n\n^open^a_content^close\n\nPitanje je bilo:\n\n^open^q_title^close\n\nKlikni na link  ispod da vidiš tvoj odgovor:\n\n^url\n\nHvala,\n^site_title",
	'a_selected_subject' => 'Your ^site_title answer has been selected!',

	'c_commented_body' => "Korisnik ^c_handle je dodao novi komentar nakon tvog na sajtu ^site_title:\n\n^open^c_content^close\n\nOvo je diskusija:\n\n^open^c_context^close\n\nMožeš odgovoriti dodavanjem novog komentara:\n\n^url\n\nHvala,\n^site_title",
	'c_commented_subject' => 'Neko je dodao komentar nakon tebe na sajtu ^site_title',

	'confirm_body' => "Molimo te klikni na link ispod da potvrdiš email adresu za sajt ^site_title.\n\n^url\n\nKod za potvrdu: ^code\n\n Hvala,\n^site_title",
	'confirm_subject' => '^site_title - Potvrda email adrese',

	'feedback_body' => "Komentar:\n^message\n\nIme:\n^name\n\nEmail:\n^email\n\nPrethodna stranica:\n^previous\n\nKorisnik:\n^url\n\nIP adresa:\n^ip\n\nBrowser:\n^browser",
	'feedback_subject' => '^ feedback',

	'flagged_body' => "Objava korisnika ^p_handle je primio ^flags:\n\n^open^p_context^close\n\nKlikni ispod da vidiš objavu:\n\n^url\n\n\nKlikni ispod da vidiš sve prijavljene objave:\n\n^a_url\n\n\nHvala,\n^site_title",
	'flagged_subject' => '^site_title ima prijavljenu objavu',

	'moderate_body' => "Objava korisnika ^p_handle zahteva tvoje odobrenje:\n\n^open^p_context^close\n\nKlikni ispod da odobriš ili odbiješ:\n\n^url\n\n\nKlikni ispod da vidiš sve objave na čekanju:\n\n^a_url\n\n\nHvala,\n^site_title",
	'moderate_subject' => '^site_title moderacija',

	'new_password_body' => "Tvoja nova lozinka na sajtu ^site_title se nalazi ispod.\n\nLozinka: ^password\n\nPreporučljivo je promeniti lozinku odmah nakon prve prijave.\n\nHvala,\n^site_title\n^url",
	'new_password_subject' => '^site_title - Tvoja nova lozinka',

	'private_message_body' => "Imaš novu privatnu poruku od korisnika ^f_handle na sajtu ^site_title:\n\n^open^message^close\n\n^moreHvala,\n^site_title\n\n\noseti stranicu profila ako želiš da blokiraš privatne poruke\n^a_url",
	'private_message_info' => "Više informacija o ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "Klikni ispod da odgovoriš korisniku ^f_handle preko privatne poruke:\n\n^url\n\n",
	'private_message_subject' => 'Nova poruka od korisnika ^f_handle na sajtu ^site_title',

	'q_answered_body' => "Tvoje pitanje na sajtu ^site_title ima novi odgovor od korisnika ^a_handle:\n\n^open^a_content^close\n\nTvoje pitanje je bilo:\n\n^open^q_title^close\n\nAko ti taj odgovor pomogao, možeš ga proglasiti najboljim:\n\n^url\n\nHvala,\n^site_title",
	'q_answered_subject' => 'Tvoje pitanje na sajtu ^site_title ima novi odgovor',

	'q_commented_body' => "Tvoje pitanje na sajtu ^site_title ima novi komentar od korisnika ^c_handle:\n\n^open^c_content^close\n\nTvoje pitanje je bilo:\n\n^open^c_context^close\n\nMožeš odgovoriti dodavanjem komentara:\n\n^url\n\nHvala,n^site_title",
	'q_commented_subject' => 'Tvoje pitanje na sajtu ^site_title ima novi komentar',

	'q_posted_body' => "Novo pitanje je postavio korisnik ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nKlikni ispod da vidiš pitanje:\n\n^url\n\nHvala,\n^site_title",
	'q_posted_subject' => 'Na sajtu ^site_title je postavljeno novo pitanje',

	'remoderate_body' => "Korisnik ^p_handle je izmenio objavu i čeka potvrdu:\n\n^open^p_context^close\n\nKlikni ispod da potvrdiš ili sakriješ izmenjenu objavu:\n\n^url\n\n\nKlikni ispod da vidiš sve objave na čekanju:\n\n^a_url\n\n\nHvala,\n^site_title",
	'remoderate_subject' => '^site_title moderacija',

	'reset_body' => "Klikni na link ispod da resetuješ svoju lozinku na sajtu ^site_title.\n\n^url\n\nA možeš i da uneseš kod koji vidiš ispod u predviđeno polje na sajtu.\n\nKod: ^code\n\nUkoliko nisi ti zatražio/la izmenu lozinke, samo ignoriši ovu poruku.\n\nHvala,\n^site_title",
	'reset_subject' => '^site_title - Resetuj zaboravljenu lozinku',

	'to_handle_prefix' => "^,\n\n",

	'u_registered_body' => "Novi korisnik je registrovan kao ^u_handle.\n\nKlikni ispod da vidiš profil korisnika:\n\n^url\n\nHvala,\n^site_title",
	'u_registered_subject' => '^site_title ima novo korisnika',
	'u_to_approve_body' => "Novi korisnik je registrovan kao ^u_handle.\n\nKlikni ispod da odobriš korisnika:\n\n^url\n\nKlikni ispod da vidiš sve korisnike koji čekaju odobrenje:\n\n^a_url\n\nHvala,\n^site_title",

	'u_approved_body' => "Možeš videti svoj novi profil ovde:\n\n^url\n\nHvala,\n^site_title",
	'u_approved_subject' => 'Korisnik na sajtu ^site_title je odobren',

	'wall_post_body' => "korisnik ^f_handle je pisao na tvom zidu na sajtu ^site_title:\n\n^open^post^close\n\nMožeš odgovoriti na to ako klikneš na link:\n\n^url\n\nHvala,\n^site_title",
	'wall_post_subject' => '^site_title - nova objava na zidu',

	'welcome_body' => "Hvala što si se registrovao/la na sajtu ^site_title.\n\n^custom^confirmTvoji podaci za prijavu su:\n\nKorisničko ime: ^handle\nEmail: ^email\n\nMolimo te čuvaj ove informacije na sigurnom.\n\nHvala,\n^site_title\n^url",
	'welcome_confirm' => "Klikni ispod da potvrdiš tvoju email adresu.\n\n^url\n\n",
	'welcome_subject' => 'Dobrodošao/la na sajt ^site_title!',
);
