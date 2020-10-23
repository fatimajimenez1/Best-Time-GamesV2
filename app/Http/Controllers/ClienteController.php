<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
  
                     public function index(){
                        return view("Cliente.index");
                    }
                     public function insertar(){
                        return view("Cliente.insertar");
                    }
                    public function edit(){
                        return view("Cliente.edit");
                    }
                
                    public function reportes(){
                        return view("Cliente.reportes");
                    }

                    public function indexCliente(){
                        return view("VistaCliente.indexCliente");
                    }

                    public function carrito(){
                        return view('VistaCliente.carrito');
                           }
                           public function streaming(){
                            return view('VistaCliente.streaming');
                               }
            
                     public function consolas(){
                      return view('VistaCliente.consolas');
                         }
      
                         public function Funko(){
                          return view('VistaCliente.Funko');
                             }
      
                             public function Videojuegos(){
                              return view('VistaCliente.Videojuegos');
                                 }
      
                                 public function Playeras(){
                                  return view('VistaCliente.Playeras');
                                     }
      
       public function DetalleNintendo(){
         return view('DetalleProductoConsolas.DetalleNintendo');
                      }
       public function DetallePS4(){
                  return view('DetalleProductoConsolas.DetallePS4');
               }
            public function DetalleXboxS(){
         return view('DetalleProductoConsolas.DetalleXboxS');
                   }
             public function DetalleSeriesX(){
           return view('DetalleProductoConsolas.DetalleSeriesX');
                         }
             public function DetalleXbox360(){
                 return view('DetalleProductoConsolas.DetalleXbox360');
                             }
                             public function DetallePS5(){
                              return view('DetalleProductoConsolas.DetallePS5');
                                          }
      
                                          public function DetalleHulkbuster(){
                                             return view('DetalleProductoFunko.DetalleHulkbuster');
                                                         }          
              public function Detallecrash(){
                             return view('DetalleProductoFunko.Detallecrash');
                                         }   
                                    public function DetalleCreeper(){
                           return view('DetalleProductoFunko.DetalleCreeper');
                             }   
                          public function DetalleGears(){
                        return view('DetalleProductoFunko.DetalleGears');
                                     }   
                             public function DetalleHalo(){
                         return view('DetalleProductoFunko.DetalleHalo');
                                       }      
           public function DetalleHarley(){
                   return view('DetalleProductoFunko.DetalleHarley');
          }  
                    public function DetalleKombat(){
                  return view('DetalleProductoFunko.DetalleKombat');
                          }       
                          public function DetalleKratos(){
                           return view('DetalleProductoFunko.DetalleKratos');
                                         }  
                                         public function DetalleMarioBross(){
                                          return view('DetalleProductoFunko.DetalleMarioBross');
                                                        }                        
      public function Detalleplayerahombreplayer1(){
       return view('DetalleProductoPlayera.Detalleplayerahombreplayer1');
          }                        
                               
         public function Detalleplayeramujerplayer1(){
          return view('DetalleProductoPlayera.Detalleplayeramujerplayer1');
             }                        
                                  
            public function Detalleplayeramujer2(){
             return view('DetalleProductoPlayera.Detalleplayeramujer2');
                }                        
                                    
               public function Detalleplayeramujer3(){
                return view('DetalleProductoPlayera.Detalleplayeramujer3');
                   }                        
                                     
                  public function Detalleplayeramujer4(){
                   return view('DetalleProductoPlayera.Detalleplayeramujer4');
                      }                        
                                         
                     public function Detalleplayeraniñoplayer1(){
                      return view('DetalleProductoPlayera.Detalleplayeraniñoplayer1');
                         }                        
                                          
                        public function Detalleplayeraniño2(){
                         return view('DetalleProductoPlayera.Detalleplayeraniño2');
                            }                        
                                            
                           public function Detalleplayeraniño3(){
                            return view('DetalleProductoPlayera.Detalleplayeraniño3');
                               }                        
                                               
                              public function Detalleplayeraniño4(){
                               return view('DetalleProductoPlayera.Detalleplayeraniño4');
                                  }                        
                                                   
                                 public function Detalleplayerahombre2(){
                                  return view('DetalleProductoPlayera.Detalleplayerahombre2');
                                     }                        
                                                        
                                    public function Detalleplayerahombre3(){
                                     return view('DetalleProductoPlayera.Detalleplayerahombre3');
                                        }                        
                                                             
                                       public function Detalleplayerahombre4(){
                                        return view('DetalleProductoPlayera.Detalleplayerahombre4');
                                           }                        
                                           public function DetalleDestinity(){
                                             return view('DetalleProductoVideojuegos.DetalleDestinity');
                                             }
                                             
                                             public function DetalleForza(){
                                             return view('DetalleProductoVideojuegos.DetalleForza');
                                             }
                                             
                                             public function DetalleHalo4(){
                                             return view('DetalleProductoVideojuegos.DetalleHalo4');
                                             }
                                             
                                             public function DetalleInjustice(){
                                             return view('DetalleProductoVideojuegos.DetalleInjustice');
                                             }
                                             
                                             public function DetalleGearsWar(){
                                             return view('DetalleProductoVideojuegos.DetalleGearsWar');
                                             }
                                             
                                             public function DetalleLeft(){
                                             return view('DetalleProductoVideojuegos.DetalleLeft');
                                             }
                                             
                                             public function DetalleLeft2(){
                                             return view('DetalleProductoVideojuegos.DetalleLeft2');
                                             }
                                             
                                             public function DetalleResident4(){
                                             return view('DetalleProductoVideojuegos.DetalleResident4');
                                             }
                                             
                                             public function DetalleMK(){
                                             return view('DetalleProductoVideojuegos.DetalleMK');
                                             }
                                             
                                             public function DetalleResindet3(){
                                             return view('DetalleProductoVideojuegos.DetalleResindet3');
                                             }
                                             
                                             public function DetalleOri(){
                                             return view('DetalleProductoVideojuegos.DetalleOri');
                                             }
                                             
                                             public function DetalleGTA(){
                                             return view('DetalleProductoVideojuegos.DetalleGTA');
                                             }
                                             
                                             public function Detallewar(){
                                             return view('DetalleProductoVideojuegos.Detallewar');
                                             }
                                             
                                             public function DetalleWest(){
                                             return view('DetalleProductoVideojuegos.DetalleWest');
                                             }
                                             
                                             public function DetalleDesperados(){
                                             return view('DetalleProductoVideojuegos.DetalleDesperados');
                                             }
                                             
                                             public function DetalleCrossCode(){
                                             return view('DetalleProductoVideojuegos.DetalleCrossCode');
                                             }
                                             
                                             public function DetalleSword(){
                                             return view('DetalleProductoVideojuegos.DetalleSword');
                                             }
                                             
                                             public function DetalleRocket(){
                                             return view('DetalleProductoVideojuegos.DetalleRocket');
                                             }
                                             
                                             public function DetalleCreaks(){
                                             return view('DetalleProductoVideojuegos.DetalleCreaks');
                                             }
                                             
                                             public function DetalleBrain(){
                                             return view('DetalleProductoVideojuegos.DetalleBrain');
                                             }
                                             
                                             public function DetalleMoon(){
                                             return view('DetalleProductoVideojuegos.DetalleMoon');
                                             }
                                             
                                             public function DetalleStories(){
                                             return view('DetalleProductoVideojuegos.DetalleStories');
                                             }
                                             
                                             public function DetalleKentucky(){
                                             return view('DetalleProductoVideojuegos.DetalleKentucky');
                                             }
                                             
                                             public function DetalleSaints(){
                                             return view('DetalleProductoVideojuegos.DetalleSaints');
                                             }
                                             
                                             public function DetalleZombie(){
                                             return view('DetalleProductoVideojuegos.DetalleZombie');
                                             }
                                             
                                             public function DetalleSega(){
                                             return view('DetalleProductoVideojuegos.DetalleSega');
                                             }
                                             
                                             public function DetallePicross(){
                                             return view('DetalleProductoVideojuegos.DetallePicross');
                                             }
                                             
                                             public function DetalleTelling(){
                                             return view('DetalleProductoVideojuegos.DetalleTelling');
                                             }
                                             
                                             public function DetalleArrest(){
                                             return view('DetalleProductoVideojuegos.DetalleArrest');
                                             }
                                             
                                             public function DetalleAssassin(){
                                             return view('DetalleProductoVideojuegos.DetalleAssassin');
                                             }
                                             
                                             public function DetalleControl(){
                                             return view('DetalleProductoVideojuegos.DetalleControl');
                                             }
                                             
                                             public function DetalleOutriders(){
                                             return view('DetalleProductoVideojuegos.DetalleOutriders');
                                             }
                                             
                                             public function DetalleChivalry(){
                                             return view('DetalleProductoVideojuegos.DetalleChivalry');
                                             }
                                             
                                             public function DetalleHaven(){
                                             return view('DetalleProductoVideojuegos.DetalleHaven');
                                             }
                                             
                                             public function DetalleMaquette(){
                                             return view('DetalleProductoVideojuegos.DetalleMaquette');
                                             }
                                             
                                             public function DetalleWhatchDogs(){
                                             return view('DetalleProductoVideojuegos.DetalleWhatchDogs');
                                             }
                                             
                                             public function DetalleHitman(){
                                             return view('DetalleProductoVideojuegos.DetalleHitman');
                                             }
                                             
                                             public function DetalleFarCry(){
                                             return view('DetalleProductoVideojuegos.DetalleFarCry');
                                             }
                                             
                                             public function DetalleBalanWonderworld(){
                                             return view('DetalleProductoVideojuegos.DetalleBalanWonderworld');
                                             }
                                             
                                             public function DetalleGTAV(){
                                             return view('DetalleProductoVideojuegos.DetalleGTAV');
                                             }
                                             
                                             public function DetalleControl2(){
                                             return view('DetalleProductoVideojuegos.DetalleControl2');
                                             }
                                             
                                             public function DetalleTheMedium(){
                                             return view('DetalleProductoVideojuegos.DetalleTheMedium');
                                             }
                                             
                                             public function DetalleOutriders2(){
                                             return view('DetalleProductoVideojuegos.DetalleOutriders2');
                                             }
                                             
                                             public function DetallePlanetCoaster(){
                                             return view('DetalleProductoVideojuegos.DetallePlanetCoaster');
                                             }
                                             
                                             public function DetalleCalloftheSea(){
                                             return view('DetalleProductoVideojuegos.DetalleCalloftheSea');
                                             }
                                             
                                             public function DetalleChivalryII(){
                                             return view('DetalleProductoVideojuegos.DetalleChivalryII');
                                             }
                                             
                                             public function DetalleHaven2(){
                                             return view('DetalleProductoVideojuegos.DetalleHaven2');
                                             }
                                             
                                             public function DetalleYakuzaLikeaDragon(){
                                             return view('DetalleProductoVideojuegos.DetalleYakuzaLikeaDragon');
                                             }
                                             
                                             public function DetalleFarCry6(){
                                             return view('DetalleProductoVideojuegos.DetalleFarCry6');
                                             }
                                             
                                             public function DetalleMyHero(){
                                             return view('DetalleProductoVideojuegos.DetalleMyHero');
                                             }
                                             
                                             public function DetalleResidentEvil(){
                                             return view('DetalleProductoVideojuegos.DetalleResidentEvil');
                                             }
                                             
                                             public function DetalleSaints2(){
                                             return view('DetalleProductoVideojuegos.DetalleSaints2');
                                             }
                                             
                                             public function DetalleWarborn2(){
                                             return view('DetalleProductoVideojuegos.DetalleWarborn2');
                                             }
                                             
                                             public function DetalleLast(){
                                             return view('DetalleProductoVideojuegos.DetalleLast');
                                             }
                                             
                                             public function DetalleStar(){
                                             return view('DetalleProductoVideojuegos.DetalleStar');
                                             }
                                             
                                             public function DetalleHumans(){
                                             return view('DetalleProductoVideojuegos.DetalleHumans');
                                             }
                                             
                                             public function DetalleFast(){
                                             return view('DetalleProductoVideojuegos.DetalleFast');
                                             }
                                             
                                             public function DetalleUFC(){
                                             return view('DetalleProductoVideojuegos.DetalleUFC');
                                             }
                                             
                                             public function DetalleSpiritfarer(){
                                             return view('DetalleProductoVideojuegos.DetalleSpiritfarer');
                                             }
                                                                                                                                                                                                                                                                                                       
                          
           
      
      
}
