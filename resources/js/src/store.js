import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

axios.defaults.baseURL = window.location.origin + '/api'

export default new Vuex.Store({
    state: {
        user: null
    },

    mutations: {
        setUserData(state, userData) {
            state.user = userData
            localStorage.setItem('user', JSON.stringify(userData))
            axios.defaults.headers.common.Authorization = `Bearer ${userData.token}`
        },

        clearUserData() {
            localStorage.removeItem('user')
            location.reload()
        }
    },

    actions: {
        signIn({ commit }, credentials) {
            return axios
                .post('/signin', credentials)
                .then(({ data }) => {
                    commit('setUserData', data)
                    let url = window.location.origin
                    let href = window.location.href
                    let user = data.user 
                    console.log('user', user);
                    if(user && user.role == "Admin"){
                        window.location.href = window.location.origin+'/admin-dashboard'
                    }
                    else if(user && user.role == "SM" || user.role == "GM"){
                        window.location.href = window.location.origin+'/gm-dashboard'
                    } 
                    else if(user && user.role == "RSM" || user.role == "Asst.SM" || user.role == "Sr.RSM"){
                        window.location.href = window.location.origin+'/rsm-dashboard'
                    }
                    else if(user && user.role == "DSM" || user.role == "Asst.RSM" || user.role == "Sr.DSM"){
                        window.location.href = window.location.origin+'/dsm-dashboard'
                    }
                    else if(user && user.role == "PSO" || user.role == "PSM"){
                        window.location.href = window.location.origin+'/pso-dashboard'
                    } else {

                    }

                    
                })
        },

        signOut({ commit }) {
            commit('clearUserData')
        }
    },

    getters: {
        isLogged: state => !!state.user,
        user: state => state.user,
        
    }
})
