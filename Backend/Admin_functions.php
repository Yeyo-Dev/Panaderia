<?php 
function buscarcuentasporid($ID)
{
switch ($ID) {
    case 'AC1':
        $cuentax = "Caja";
        
        break;
    
    case 'AC2':
        $cuentax = "Bancos";
      
        break;

    case 'AC3':
        $cuentax = "Inversiones temporales";
        break;
    
    case 'AC4':
        $cuentax = "Inventario";
  
        break;

    case 'AC5':
        $cuentax = "Cliente";
     
        break;
    
    case 'AC6':
        $cuentax = "Documentos por cobrar";

        break;

    case 'AC7':
        $cuentax = "Deudores diversos";
        break;
        
    case 'AC8':
        $cuentax = "Anticipo a proveedores";
        break;

    case 'AF1':
        $cuentax = "Terrenos";        
        break;
        
    case 'AF2':
        $cuentax = "Edificios";     
        break;

    case 'AF3':
        $cuentax = "Mobiliario Y Equipo";
        break;
    
    case 'AF4':
        $cuentax = "Equipo de Computo Y Electronico";
    
        break;

    case 'AF5':
        $cuentax = "Equipo de Entrega o Reparto";
        
        break;
    
    case 'AF6':
        $cuentax = "Depositos en Garantia";

        break;

    case 'AF7':
        $cuentax = "Inversiones Permanentes";
        break;
          
    case 'AD1':
        $cuentax = "Gastos e Investigacion de Desarrollo";
    break;

    case 'AD2':
        $cuentax = "Gastos en etapas preoperativas de Organizacion Y administracion";
    break;

    case 'AD3':
        $cuentax = "Gastos de Mercadotecnia";
    break;

    case 'AD4':
        $cuentax = "Gastos de Organizacion";
    break;

    case 'AD5':
        $cuentax = "Gastos de Instalacion";
    break;

    case 'AD6':
        $cuentax = "Papeleria Y Utiles";
    break;
 
    case 'AD7': 
        $cuentax = "Propaganda Y Publicidad";    
    break;

    case 'AD8': 
        $cuentax = "Primas de Seguros";    
    break;

    case 'AD9': 
        $cuentax = "Rentas pagadas por anticipado";    
    break;

    case 'AD10': 
        $cuentax = "Intereses pagados por anticipado";    
    break;

    default:
    break;            
}

return $cuentax;   
}


?>