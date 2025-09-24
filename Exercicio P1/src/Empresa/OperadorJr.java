package empresa;

public class OperadorJr extends Funcionario {
    public OperadorJr(String nome) {
        super(nome, 3270.00);
    }
    
    @Override
    public double calcularSalarioFinal(int horasExtras) {
        //Esse vai ganhar mais um bonus de 10%
        double salarioComExtras = super.calcularSalarioFinal(horasExtras);
        return salarioComExtras * 1.10;
        
    }
}
