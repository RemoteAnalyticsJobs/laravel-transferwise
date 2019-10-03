<?php

namespace TransferWise;


class CurrencyBankInfo {
    /** @var array  */
    private static $requiredInfo = [
        'AED' => [
            'type' => 'emirates',
            'details' => [
                'IBAN'
            ],
            'currency' => 'AED'
        ],
        'ARS' => [
            "currency" => "ARS",
            "type" => "argentina",
            "details" => [
                "legalType",
                "taxId",
                "accountNumber"
            ]
        ],
        'AUD' => [
            "type" => "australian",
            "details" => [
                "legalType",
                "bsbCode",
                "accountNumber"
            ]
        ],
        'BDT' => [
            "type" => "bangladesh",
            "details" => [
                "legalType",
                "bankCode",
                "branchCode",
                "accountNumber"
            ]
        ],
        'BGN' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN"
            ]
        ],
        'BRL' => [
            "type" => "brazil",
            "details" => [
                "legalType",
                "bankCode",
                "branchCode",
                "accountNumber",
                "accountType",
                "cpf",
                "phoneNumber"
            ]
        ],
        'CAD' => [
            "type" => "canadian",
            "details" => [
                "legalType",
                "institutionNumber",
                "transitNumber",
                "accountNumber",
                "accountType"
            ]
        ],
        'CHF' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN"
            ]
        ],
        'CLP' => [
            "type" => "chile",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber",
                "rut",
                "accountType",
                "phoneNumber"
            ]
        ],
        'CNY' => [
            "type" => "chinese_card",
            "PRIVATE_ONLY" => true,
            "details" => [
                "legalType",
                "cardNumber"
            ]
        ],
        'CZK' => [
            "type" => "czech",
            "details" => [
                "legalType",
                "prefix",
                "accountNumber",
                "bankCode"
            ]
        ],
        'DKK' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN"
            ]
        ],
        'EGP' => [
            "type" => "egypt_local",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber"
            ]
        ],
        'EUR' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN"
            ]
        ],
        'GBP' => [
            "type" => "sort_code",
            "details" => [
                "legalType",
                "sortCode",
                "accountNumber"
            ]
        ],
        'GEL' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN"
            ]
        ],
        'GHS' => [
            "type" => "ghana_local",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber"
            ]
        ],
        'HKD' => [
            "type" => "hongkong",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber",
            ]
        ],
        'HRK' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN",
            ]
        ],
        'HUF' => [
            "type" => "hungarian",
            "details" => [
                "legalType",
                "accountNumber"
            ]
        ],
        'IDR' => [
            "type" => "indonesian",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber"
            ]
        ],
        'ILS' => [
            "type" => "israeli_local",
            "details" => [
                "legalType",
                "IBAN"
            ]
        ],
        "INR" => [
            "type" => "indian",
            "details" => [
                "legalType",
                "ifscCode",
                "accountNumber"
            ]
        ],
        'JPY' => [
            "type" => "japanese",
            "details" => [
                "legalType",
                "bankCode",
                "branchCode",
                "accountType",
                "accountNumber",
            ]
        ],
        'KES' => [
            "type" => "kenya_local",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber"
            ]
        ],
        'LKR' => [
            "type" => "srilanka",
            "details" => [
                "legalType",
                "bankCode",
                "branchCode",
                "accountNumber"
            ]
        ],
        'MAD' => [
            "type" => "morocco",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber"
            ]
        ],
        'MXN' => [
            "type" => "mexican",
            "details" => [
                "legalType",
                "clabe"
            ]
        ],
        'MYR' => [
            "type" => "malaysian",
            "details" => [
                "legalType",
                "swiftCode",
                "accountNumber",
            ]
        ],
        'NGN' => [
            "type" => "nigeria",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber"
            ]
        ],
        'NOK' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN",
            ]
        ],
        'NPR' => [
            "legalType" => "PRIVATE",
            "details" => [
                "bankCode",
                "accountNumber"
            ]
        ],
        'NZD' => [
            "type" => "newzealand",
            "details" => [
                "legalType",
                "accountNumber"
            ]
        ],
        'PEN' => [
            "type" => "peru",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber",
                "accountType",
                "idDocumentType",
                "idDocumentNumber",
                "phoneNumber",
            ]
        ],
        'PHP' => [
            "type" => "philippines",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber",
                "address" => [
                    "country",
                    "city",
                    "postCode",
                    "firstLine",
                ]
            ]
        ],
        'PKR' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN",
            ]
        ],
        'PLN' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN",
            ]
        ],
        'RON' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN",
            ]
        ],
        'RUB' => [
            "type" => "russiarapida",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber",
                "russiaRegion",
                "address" => [
                    "country",
                    "city",
                    "postCode",
                    "firstLine",
                ]
            ]
        ],
        'SEK' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN",
            ]
        ],
        'SGD' => [
            "type" => "singapore",
            "details" => [
                "legalType" => "PRIVATE",
                "bankCode" => "7418",
                "accountNumber" => "1238827822"
            ]
        ],
        'THB' => [
            "type" => "thailand",
            "details" => [
                "legalType",
                "bankCode",
                "accountNumber",
                "address" => [
                    "country",
                    "city",
                    "postCode",
                    "firstLine"
                ]
            ]
        ],
        'TRY' => [
            "type" => "iban",
            "details" => [
                "legalType",
                "IBAN",
            ]
        ],
        'UAH' => [
            "type" => "privatbank",
            "details" => [
                "legalType",
                "phoneNumber",
                "accountNumber"
            ]
        ],
        'USD' => [
            "type" => "aba",
            "details" => [
                "legalType" => "PRIVATE",
                "abartn" => "111000025",
                "accountNumber" => "12345678",
                "accountType" => "CHECKING",
                "address" => [
                    "country" => "GB",
                    "city" => "London",
                    "postCode" => "10025",
                    "firstLine" => "50 Branson Ave"
                ]
            ]
        ]
    ];

    /**
     * It will return required information for the given currency
     * @param $currency
     * @return array
     * @throws \Exception
     */
    public static function get(string $currency) : array {
        if (!isset(self::$requiredInfo[$currency])) {
            throw new \Exception('Provided currency ('.$currency.') is not supported');
        }
        return self::$requiredInfo[$currency];
    }

    /**
     * It will check if given currency is supported by transferwise
     * @param string $currency
     * @return bool
     */
    public static function isSupported(string $currency) : bool  {
        return isset(self::$requiredInfo[$currency]);
    }
};
