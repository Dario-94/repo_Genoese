import java.util.Scanner;
public class Bicicletta2{

String modello;
Person nomeProprietario;
int marcia;
int velocita;
int numTelaio;


public Bicicletta2(
	String modelA, 
	String nomeProp,
	int cambiaMarcia,
	int cambiaVelocità){
		modello = modelA;
		nomeProprietario = nomeProp;
		marcia = cambiaMarcia;
		velocita = cambiaVelocità;
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

public void aumentaVelocita (int nVelocita){
	velocita += nVelocita;
}

public void stampaStato(){
	System.out.println("Modello:"+modello+"\nnome proprietario:"+nomeProprietario+"\nvelocità:"+velocita+"\nmarcia:"+marcia);
}
}

