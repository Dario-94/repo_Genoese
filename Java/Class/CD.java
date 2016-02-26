import java.util.Scanner;

public class CD {
	String titolo;
	String autore;
	int anno;
	String [] music;

	public CD(
		String title, 
		String author,
		int year,
		String [] song){
            titolo = title;
            autore = author;
            anno = year;
            music = song;
    }

    public CD(
    	int numSong){
            music = new String [numSong];
            for (int i = 0; i < music.length ;i++) {
            	music[i]="Track"+(i+1);
            }
    }

    public String getTitle(){
    	return titolo;
    }

    public String getAuthor(){
    	return autore;
    }

    public int getYear(){
    	return anno;
    }

    public void stampaCD(){
		for (int i = 0; i < music.length; i++) {
			System.out.println(getTitle() + " - " + getAuthor() + " - " + getYear() + " - " + music[i]);
		}
	}

	public int ricerca(String nome){
		int pos = -1;
        for (int i = 0; i < music.length; i++){
            if (music[i].equals(nome)){
            return i+1;
        	}
        }
        return -pos;
    }

    public static void main (String[] args){
    	Scanner tastiera = new Scanner(System.in);

    	String [] song =  {"ciao", "ciao1", "ciao2"};
    	CD cd1 = new CD("Strike","Pippo",1960,song);

    	cd1.stampaCD();
    	System.out.println("position:" + cd1.ricerca("ciao1"));
    }
}