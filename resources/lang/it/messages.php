<?php

return [
    // Move operations
    'move_success' => 'Elemento spostato con successo.',
    'move_adjusted' => 'Elemento spostato (posizione adattata automaticamente per profondità massima).',
    'move_failed' => 'Impossibile spostare l\'elemento.',
    'undo_success' => 'Spostamento annullato con successo.',
    'item_moved' => 'Elemento spostato',

    // Authorization & Validation
    'unauthorized' => 'Non sei autorizzato a spostare questo elemento.',
    'cross_scope' => 'Impossibile spostare elementi tra ambiti diversi.',
    'node_not_found' => 'Elemento non trovato.',
    'parent_not_found' => 'Elemento genitore non trovato.',
    'circular_reference' => 'Impossibile spostare un elemento sotto un proprio discendente.',
    'max_depth_exceeded' => 'Impossibile spostare qui: verrebbe superata la profondità massima di :max livelli.',
    'cannot_have_children' => 'Questo elemento non può avere figli.',
    'reorder_failed' => 'Impossibile riordinare l\'elemento.',

    // Tree integrity
    'tree_fixed' => 'La struttura ad albero è stata riparata.',
    'tree_corrupted' => 'La struttura ad albero potrebbe essere corrotta. Clicca "Ripara albero" per correggere.',

    // UI Actions
    'expand_all' => 'Espandi tutto',
    'collapse_all' => 'Comprimi tutto',
    'tree_view' => 'Vista ad albero',
    'flat_view' => 'Vista piatta',
    'fix_tree' => 'Ripara albero',
    'fix_tree_tooltip' => 'Ripara la struttura ad albero se gli elementi sono fuori ordine',
    'undo' => 'Annulla',
    'back_to_list' => 'Torna a :resource',

    // OrderPage specific
    'order' => 'Ordina',
    'no_items' => 'Nessun elemento da visualizzare.',
    'drag_to_reorder' => 'Trascina per riordinare',
    'expand' => 'Espandi',
    'collapse' => 'Comprimi',
    'order_items' => 'Ordina elementi',
    'tree_structure' => 'Ordina albero',
    'tree_description' => 'Trascina e rilascia gli elementi per riordinarli. Rilascia su un elemento per renderlo figlio.',
    'tree_description_flat' => 'Trascina e rilascia gli elementi per riordinarli.',

    // Alphabetical ordering
    'save_alphabetically' => 'Ordina alfabeticamente',
    'alphabetical_confirm' => 'Questo riordinerà tutti gli elementi alfabeticamente all\'interno di ogni livello. Sei sicuro?',
    'alphabetical_success' => 'Elementi riordinati alfabeticamente.',
    'alphabetical_failed' => 'Impossibile riordinare gli elementi alfabeticamente.',

    // Loading states
    'processing' => 'Elaborazione...',
    'moving' => 'Spostamento in corso...',
];
