package packageOrientacao;

public class TestaTudo {

    public static void main(String[] args) {
        Agencia a1 =new Agencia();
        Cliente c1 = new Cliente();
        Conta co1 = new Conta();
        CartaoDeCredito cdc1 = new CartaoDeCredito ();
        
        c1.codigo = 1;
        c1.nome = "Joao Pedro";
        a1.numero = 1234;
        
        co1.numero = 1234;
        co1.saldo = 1000;
        co1.limite = 500;
        
        cdc1.numero = 1111;
        cdc1.dataDeValidade = "01/01/2027";
        
        System.out.println("Agencia: " + a1.numero);
        System.out.println("Codigo do Cliente: " + c1.codigo);
        System.out.println("Nome do Cliente: " + c1.nome);
        System.out.println("Numero da Conta: " + co1.numero);
        System.out.println("Saldo da conta: " + co1.saldo);
        System.out.println("Limite da conta: " + co1.limite);
        System.out.println("Numero Cartao: " + cdc1.numero);
        System.out.println("Validade Cartao: " + cdc1.dataDeValidade);
    }
    
}
