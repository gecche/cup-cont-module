<?php

namespace Modules\CupCont\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CupContCostanteFattEl;

class CupContCostantiFattElTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $regimi = [
            [
                'tipo' => 'Regime',
                'codice' => 'RF01',
                'descrizione' => 'RF01 - Ordinario',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF02',
                'descrizione' => 'RF02 - Contribuenti minimi (art.1, c.96-117, L. 244/07)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF04',
                'descrizione' => 'RF04 - Agricoltura e attività connesse e pesca (artt.34 e 34-bis, DPR 633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF05',
                'descrizione' => 'RF05 - Vendita sali e tabacchi (art.74, c.1, DPR. 633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF06',
                'descrizione' => 'RF06 - Commercio fiammiferi (art.74, c.1, DPR  633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF07',
                'descrizione' => 'RF07 - Editoria (art.74, c.1, DPR  633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF08',
                'descrizione' => 'RF08 - Gestione servizi telefonia pubblica (art.74, c.1, DPR 633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF09',
                'descrizione' => 'RF09 - Rivendita documenti di trasporto pubblico e di sosta (art.74, c.1, DPR  633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF10',
                'descrizione' => 'RF10 - Intrattenimenti, giochi e altre attività di cui alla tariffa allegata al DPR 640/72 (art.74, c.6, DPR 633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF11',
                'descrizione' => 'RF11 - Agenzie viaggi e turismo (art.74-ter, DPR 633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF12',
                'descrizione' => 'RF12 - Agriturismo (art.5, c.2, L. 413/91)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF13',
                'descrizione' => 'RF13 - Vendite a domicilio (art.25-bis, c.6, DPR  600/73)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF14',
                'descrizione' => 'RF14 - Rivendita beni usati, oggetti d’arte, d’antiquariato o da collezione (art.36, DL 41/95)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF15',
                'descrizione' => 'RF15 - Agenzie di vendite all’asta di oggetti d’arte, antiquariato o da collezione (art.40-bis, DL 41/95)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF16',
                'descrizione' => 'RF16 - IVA per cassa P.A. (art.6, c.5, DPR 633/72)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF17',
                'descrizione' => 'RF17 - IVA per cassa (art. 32-bis, DL 83/2012)',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF18',
                'descrizione' => 'RF18 - Altro',
            ],
            [
                'tipo' => 'Regime',
                'codice' => 'RF19',
                'descrizione' => 'RF19 - Regime forfettario (art.1, c.54-89, L. 190/2014)',
            ],
        ];

        foreach ($regimi as $regime) {
            CupContCostanteFattEl::create($regime);
        }


        $casse = [
            ['tipo' => 'Cassa', 'codice' => 'TC01', 'descrizione' => "TC01 - Cassa nazionale previdenza e assistenza avvocati e procuratori legali"],
            ['tipo' => 'Cassa', 'codice' => 'TC02', 'descrizione' => "TC02 - Cassa previdenza dottori commercialisti"],
            ['tipo' => 'Cassa', 'codice' => 'TC03', 'descrizione' => "TC03 - Cassa previdenza e assistenza geometri"],
            ['tipo' => 'Cassa', 'codice' => 'TC04', 'descrizione' => "TC04 - Cassa nazionale previdenza e assistenza ingegneri e architetti liberi professionisti"],
            ['tipo' => 'Cassa', 'codice' => 'TC05', 'descrizione' => "TC05 - Cassa nazionale del notariato"],
            ['tipo' => 'Cassa', 'codice' => 'TC06', 'descrizione' => "TC06 - Cassa nazionale previdenza e assistenza ragionieri e periti commerciali"],
            ['tipo' => 'Cassa', 'codice' => 'TC07', 'descrizione' => "TC07 - Ente nazionale assistenza agenti e rappresentanti di commercio (ENASARCO)"],
            ['tipo' => 'Cassa', 'codice' => 'TC08', 'descrizione' => "TC08 - Ente nazionale previdenza e assistenza consulenti del lavoro (ENPACL)"],
            ['tipo' => 'Cassa', 'codice' => 'TC09', 'descrizione' => "TC09 - Ente nazionale previdenza e assistenza medici (ENPAM)"],
            ['tipo' => 'Cassa', 'codice' => 'TC10', 'descrizione' => "TC10 - Ente nazionale previdenza e assistenza farmacisti (ENPAF)"],
            ['tipo' => 'Cassa', 'codice' => 'TC11', 'descrizione' => "TC11 - Ente nazionale previdenza e assistenza veterinari (ENPAV)"],
            ['tipo' => 'Cassa', 'codice' => 'TC12', 'descrizione' => "TC12 - Ente nazionale previdenza e assistenza impiegati dell'agricoltura (ENPAIA)"],
            ['tipo' => 'Cassa', 'codice' => 'TC13', 'descrizione' => "TC13 - Fondo previdenza impiegati imprese di spedizione e agenzie marittime"],
            ['tipo' => 'Cassa', 'codice' => 'TC14', 'descrizione' => "TC14 - Istituto nazionale previdenza giornalisti italiani (INPGI)"],
            ['tipo' => 'Cassa', 'codice' => 'TC15', 'descrizione' => "TC15 - Opera nazionale assistenza orfani sanitari italiani (ONAOSI)"],
            ['tipo' => 'Cassa', 'codice' => 'TC16', 'descrizione' => "TC16 - Cassa autonoma assistenza integrativa giornalisti italiani (CASAGIT)"],
            ['tipo' => 'Cassa', 'codice' => 'TC17', 'descrizione' => "TC17 - Ente previdenza periti industriali e periti industriali laureati (EPPI)"],
            ['tipo' => 'Cassa', 'codice' => 'TC18', 'descrizione' => "TC18 - Ente previdenza e assistenza pluricategoriale (EPAP)"],
            ['tipo' => 'Cassa', 'codice' => 'TC19', 'descrizione' => "TC19 - Ente nazionale previdenza e assistenza biologi (ENPAB)"],
            ['tipo' => 'Cassa', 'codice' => 'TC20', 'descrizione' => "TC20 - Ente nazionale previdenza e assistenza professione infermieristica (ENPAPI)"],
            ['tipo' => 'Cassa', 'codice' => 'TC21', 'descrizione' => "TC21 - Ente nazionale previdenza e assistenza psicologi (ENPAP)"],
            ['tipo' => 'Cassa', 'codice' => 'TC22', 'descrizione' => "TC22 - INPS"],
        ];

        foreach ($casse as $cassa) {
            CupContCostanteFattEl::create($cassa);
        }


        $modalitaPagamenti = [
            ['codice' => 'MP01', 'descrizione' => "MP01 - contanti"],
            ['codice' => 'MP02', 'descrizione' => "MP02 - assegno"],
            ['codice' => 'MP03', 'descrizione' => "MP03 - assegno circolare"],
            ['codice' => 'MP04', 'descrizione' => "MP04 - contanti presso Tesoreria"],
            ['codice' => 'MP05', 'descrizione' => "MP05 - bonifico"],
            ['codice' => 'MP06', 'descrizione' => "MP06 - vaglia cambiario"],
            ['codice' => 'MP07', 'descrizione' => "MP07 - bollettino bancario"],
            ['codice' => 'MP08', 'descrizione' => "MP08 - carta di pagamento"],
            ['codice' => 'MP09', 'descrizione' => "MP09 - RID"],
            ['codice' => 'MP10', 'descrizione' => "MP10 - RID utenze"],
            ['codice' => 'MP11', 'descrizione' => "MP11 - RID veloce"],
            ['codice' => 'MP12', 'descrizione' => "MP12 - RIBA"],
            ['codice' => 'MP13', 'descrizione' => "MP13 - MAV"],
            ['codice' => 'MP14', 'descrizione' => "MP14 - quietanza erario"],
            ['codice' => 'MP15', 'descrizione' => "MP15 - giroconto su conti di contabilità speciale"],
            ['codice' => 'MP16', 'descrizione' => "MP16 - domiciliazione bancaria"],
            ['codice' => 'MP17', 'descrizione' => "MP17 - domiciliazione postale"],
            ['codice' => 'MP18', 'descrizione' => "MP18 - bollettino di c/c postale"],
            ['codice' => 'MP19', 'descrizione' => "MP19 - SEPA Direct Debit"],
            ['codice' => 'MP20', 'descrizione' => "MP20 - SEPA Direct Debit CORE"],
            ['codice' => 'MP21', 'descrizione' => "MP21 - SEPA Direct Debit B2B"],
            ['codice' => 'MP22', 'descrizione' => "MP22 - Trattenuta su somme già riscosse"],
            ['codice' => 'MP23', 'descrizione' => "MP23 - PagoPA", 'versione' => '1.2.1'],
        ];

        foreach ($modalitaPagamenti as $modalitaPagamento) {
            $modalitaPagamento['tipo'] = 'Modalita Pagamento';
            CupContCostanteFattEl::create($modalitaPagamento);
        }


        $tipiDocumento = [
            ['codice' => 'TD01', 'descrizione' => "TD01 - fattura"],
            ['codice' => 'TD02', 'descrizione' => "TD02 - acconto/anticipo su fattura"],
            ['codice' => 'TD03', 'descrizione' => "TD03 - acconto/anticipo su parcella"],
            ['codice' => 'TD04', 'descrizione' => "TD04 - nota di credito"],
            ['codice' => 'TD05', 'descrizione' => "TD05 - nota di debito"],
            ['codice' => 'TD06', 'descrizione' => "TD06 - parcella"],

            ['codice' => 'TD16', 'descrizione' => "TD16 - Integrazione fattura reverse charge interno", 'versione' => '1.2.1'],
            ['codice' => 'TD17', 'descrizione' => "TD17 - Integrazione/autofattura per acquisto servizi dall'estero", 'versione' => '1.2.1'],
            ['codice' => 'TD18', 'descrizione' => "TD18 - Integrazione per acquisto di beni intracomunitari", 'versione' => '1.2.1'],
            ['codice' => 'TD19', 'descrizione' => "TD19 - Integrazione/autofattura per acquisto di beni ex art.17 c.2 DPR 633/72", 'versione' => '1.2.1'],
            ['codice' => 'TD20', 'descrizione' => "TD20 - Autofattura per regolarizzazione e integrazione delle fatture (ex art.6 c.8 e 9-bis d.lgs.471/97 o art.46 c.5 D.L. 331/93", 'versione' => '1.2.1'],
            ['codice' => 'TD21', 'descrizione' => "TD21 - Autofattura per splafonamento", 'versione' => '1.2.1'],
            ['codice' => 'TD22', 'descrizione' => "TD22 - Estrazione benida Deposito IVA", 'versione' => '1.2.1'],
            ['codice' => 'TD23', 'descrizione' => "TD23 - Estrazione beni da Deposito IVA con versamento dell'IVA", 'versione' => '1.2.1'],
            ['codice' => 'TD24', 'descrizione' => "TD24 - Fattura differita di cui all'art.21, comma 4, lett. a)", 'versione' => '1.2.1'],
            ['codice' => 'TD25', 'descrizione' => "TD25 - Fattura differita di cui all'art.21, comma 4, terzo periodo lett. b)", 'versione' => '1.2.1'],
            ['codice' => 'TD26', 'descrizione' => "TD26 - Cessione di beni ammortizzabili e per passaggi interni (ex art.36 DPR 633/72)", 'versione' => '1.2.1'],
            ['codice' => 'TD27', 'descrizione' => "TD27 - Fattura per autoconsumo o per cessioni gratuite senza rivalsa", 'versione' => '1.2.1'],

        ];

        foreach ($tipiDocumento as $tipoDocumento) {
            $tipoDocumento['tipo'] = 'Tipo Documento';
            CupContCostanteFattEl::create($tipoDocumento);
        }


        $natureEsenzione = [
            ['codice' => 'N1', 'descrizione' => "N1 - escluse ex art. 15"],
            ['codice' => 'N2', 'descrizione' => "N2 - non soggette", 'attivo' => 0],
            ['codice' => "N2.1", 'descrizione' => "N2.1 - Non soggette ad IVA ai sensi degli artt. da 7 a 7-septies del DPR 633/72", 'versione' => '1.2.1'],
            ['codice' => "N2.2", 'descrizione' => "N2.2 - Non soggette - altri casi", 'versione' => '1.2.1'],
            ['codice' => 'N3', 'descrizione' => "N3 - non imponibili", 'attivo' => 0],
            ['codice' => "N3.1", 'descrizione' => "N3.1 - Non Imponibili - esportazioni", 'versione' => '1.2.1'],
            ['codice' => "N3.2", 'descrizione' => "N3.2 - Non Imponibili - cessioni intracomunitarie", 'versione' => '1.2.1'],
            ['codice' => "N3.3", 'descrizione' => "N3.3 - Non Imponibili - cessioni verso San Marino", 'versione' => '1.2.1'],
            ['codice' => "N3.4", 'descrizione' => "N3.4 - Non Imponibili - operazioni assimilate alle cessioni all'esportazione", 'versione' => '1.2.1'],
            ['codice' => "N3.5", 'descrizione' => "N3.5 - Non Imponibili - altre operazioni che non concorrono alla formazione del plafond", 'versione' => '1.2.1'],
            ['codice' => 'N4', 'descrizione' => "N4 - esenti"],
            ['codice' => 'N5', 'descrizione' => "N5 - regime del margine / IVA non esposta in fattura"],
            ['codice' => 'N6', 'descrizione' => "N6 - inversione contabile (per le operazioni in reverse charge ovvero nei casi di autofatturazione per acquisti extra UE di servizi ovvero per importazioni di beni nei soli casi previsti)", 'attivo' => 0],
            ['codice' => "N6.1", 'descrizione' => "N6.1 - Inversione contabile - cessione di rottami e altri materiali di recupero", 'versione' => '1.2.1'],
            ['codice' => "N6.2", 'descrizione' => "N6.2 - Inversione contabile - cessione di oro e argento puro", 'versione' => '1.2.1'],
            ['codice' => "N6.3", 'descrizione' => "N6.3 - Inversione contabile - subappalto nel settore edile", 'versione' => '1.2.1'],
            ['codice' => "N6.4", 'descrizione' => "N6.4 - Inversione contabile - cessione di fabbricati", 'versione' => '1.2.1'],
            ['codice' => "N6.5", 'descrizione' => "N6.5 - Inversione contabile - cessione di telefoni cellulari", 'versione' => '1.2.1'],
            ['codice' => "N6.6", 'descrizione' => "N6.6 - Inversione contabile - cessione di prodotti elettronici", 'versione' => '1.2.1'],
            ['codice' => "N6.7", 'descrizione' => "N6.7 - Inversione contabile - prestazioni comparto edile e settori connessi", 'versione' => '1.2.1'],
            ['codice' => "N6.8", 'descrizione' => "N6.8 - Inversione contabile - operazioni settore energetico", 'versione' => '1.2.1'],
            ['codice' => "N6.9", 'descrizione' => "N6.9 - Inversione contabile - altri casi", 'versione' => '1.2.1'],
            ['codice' => 'N7', 'descrizione' => "N7 - IVA assolta in altro stato UE (vendite a distanza ex art. 40 c. 3 e 4 e art. 41 c. 1 lett. b,  DL 331/93; prestazione di servizi di telecomunicazioni, tele-radiodiffusione ed elettronici ex art. 7-sexies lett. f, g, art. 74-sexies DPR 633/72)"],


        ];

        foreach ($natureEsenzione as $naturaEsenzione) {
            $naturaEsenzione['tipo'] = 'Natura Esenzione';
            CupContCostanteFattEl::create($naturaEsenzione);
        }


        $tipiRitenuta = [

            ['codice' => "RT01", "descrizione" => "Ritenuta di acconto persone fisiche"],
            ['codice' => "RT02", "descrizione" => "Ritenuta di acconto persone giuridiche"],
            ['codice' => "RT03", "descrizione" => "Contributo INPS",'versione' => '1.2.1'],
            ['codice' => "RT04", "descrizione" => "Contributo ENASARCO",'versione' => '1.2.1'],
            ['codice' => "RT05", "descrizione" => "Contributo ENPAM",'versione' => '1.2.1'],
            ['codice' => "RT06", "descrizione" => "Altro contributo previdenziale",'versione' => '1.2.1'],

        ];

        foreach ($tipiRitenuta as $tipoRitenuta) {
            $tipoRitenuta['tipo'] = 'Tipo Ritenuta';
            CupContCostanteFattEl::create($tipoRitenuta);
        }

    }
}
