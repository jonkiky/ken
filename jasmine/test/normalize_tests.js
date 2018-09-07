import Vue from 'vue'
import Account from '../account.php'

describe('Account', () => {
    
    it('has a created hook', () => {
        expect(typeof Account.created).toBe('function')
    })

    it('sets the correct default data', () => {
        expect(typeof Account.data).toBe('function')
        const defaultData = Account.data()
        expect(defaultData.message).toBe('hello!')
    })

})