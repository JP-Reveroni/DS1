package packageOrientacao;

public class TestaCartaoDeCredito {

    public static void main(String[] args) {
    
       CartaoDeCredito cdc1 = new CartaoDeCredito();
        
       cdc1.numero = 1111;
       cdc1.dataDeValidade = "01/01/2027";
       
        CartaoDeCredito cdc2 = new CartaoDeCredito();
        
       cdc2.numero = 2222;
       cdc2.dataDeValidade = "02/02/2027";
       
        System.out.println(cdc1.numero);
        System.out.println(cdc1.dataDeValidade);
        
        System.out.println(cdc2.numero);
        System.out.println(cdc2.dataDeValidade);
    }
    
}
