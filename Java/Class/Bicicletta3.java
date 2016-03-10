import java.util.Scanner;
public class Bicicletta3{

	String modello;
	Person nomeProprietario;
	int marcia;
	int velocita;
	private int numTelaio;
	private static int contatore = 0;
	public static final int VEL_MAX = 20;


	public Bicicletta2(
		String modelA, 
		String nomeProp,
		int cambiaMarcia,
		int cambiaVelocità){
			modello = modelA;
			nomeProprietario = nomeProp;
			marcia = cambiaMarcia;
			velocita = cambiaVelocità;
			numTelaio = ++contatore;
	}

	public Bicicletta2(
		int velocitaIniz, 
		int marciaIniz){
			marcia = marciaIniz;
			velocita = velocitaIniz;
	}

	public String getModello(){
		return modello;
	}

	public String getNomeProprietario(){
		return nomeProprietario; 

	}

	public int getMarcia(){
		return marcia;
	}

	public void cambiaMarcia (int nMarcia){
		marcia = nMarcia;
	}

	public int getVelocita(){
		return velocita;
	}

	public void aumentaVelocita (int incremento){
		velocita=velocita+incremento;
		if(velocita>VELOCITA_MAX)
			velocita=VELOCITA_MAX;
	}

	public void stampaStato(){
		System.out.println("Modello:"+modello+"\nnome proprietario:"+nomeProprietario+"\nvelocità:"+velocita+"\nmarcia:"+marcia);
	}

	static int getContatore(){
		return contatore;
	}
} 

