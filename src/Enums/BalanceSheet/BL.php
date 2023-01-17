<?php

namespace Anaf\Enums\BalanceSheet;

enum BL: string
{
    case AVERAGE_NUMBER_OF_EMPLOYEES = 'NUMAR MEDIU DE SALARIATI';
    case NET_LOSS = 'PIERDERE NETA';
    case NET_PROFIT = 'PROFIT NET';
    case GROSS_LOSS = 'PIERDERE BRUTA';
    case GROSS_PROFIT = 'PROFIT BRUT';
    case TOTAL_EXPENSES = 'CHELTUIELI TOTALE';
    case TOTAL_INCOME = 'VENITURI TOTALE';
    case NET_TURNOVER = 'CIFRA DE AFACERI NETA';
    case HERITAGE_OF_THE_KINGDOM = 'PATRIMONIUL REGIEI';
    case PAID_SUBSCRIBED_CAPITAL = 'CAPITAL SUBSCRIS VARSAT';
    case CAPITAL_TOTAL = 'CAPITALURI - TOTAL, DIN CARE';
    case PROVISIONS = 'PROVIZIOANE';
    case ADVANCE_INCOME = 'VENITURI IN AVANS';
    case LIABILITIES = 'DATORII';
    case PREPAYMENTS = 'CHELTUIELI IN AVANS';
    case HOME_AND_BANK_ACCOUNTS = 'CASA SI CONTURI LA BANCI';
    case DEBT = 'CREANTE';
    case INVENTORIES = 'STOCURI';
    case CURRENT_ASSETS = 'ACTIVE CIRCULANTE - TOTAL, DIN CARE';
    case FIXED_ASSETS = 'ACTIVE IMOBILIZATE - TOTAL';
}