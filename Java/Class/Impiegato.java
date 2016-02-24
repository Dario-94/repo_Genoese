public class Impiegato{
    String nome;
    int stipendio;
    
    public Impiegato(
	String firstName, 
	int salario){
            this.nome = firstName;
            this.stipendio = salario;
    }
    
    public String getName(){
		return nome;
    }
    
    public int getSalario(){
		return stipendio;
    }

    public void aumentaSalario (int nSalario){
		stipendio += nSalario;
	}	
}